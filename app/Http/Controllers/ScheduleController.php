<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CoursesController;
use App\Semesters;
use App\Courses;
use App\Lectures;
use App\Schedule;
use Auth;

class ScheduleController extends Controller
{
    public function addCourse()
    {
        $semesters = Semesters::all();
        return view('courses.addCourse', compact('semesters'));
    }

    public function removeCourse(Request $request)
    {
         $user_id = Auth::user()->id;
         $course_id = $request->input('course_id');
         $response = Schedule::removeCourse($user_id, $course_id);
         return response()->json(['success'=>$response]);
    }

    public function getCoursesList(Request $request)
    {
        $semester_id = $request->input('semester_id');
        $coursesList = Courses::join('lectures', 'courses.course_id', '=', 'lectures.course_id')
        	->join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')
            ->join('programs', 'courseProgram.program_id', '=', 'programs.program_id')
            ->join('users', 'programs.program_id', '=', 'users.program_id')
            ->leftJoin('completedCourses', function ($join) {
                $join->on('courses.course_id', '=', 'completedCourses.course_id')
                     ->on('users.id', '=', 'completedCourses.user_id');
            })->leftJoin('schedule', function ($join) {
                $join->on('courses.course_id', '=', 'schedule.course_id')
                     ->on('users.id', '=', 'schedule.user_id');
            })->select('courses.*', 'courseProgram.course_type')
            ->whereNull('completedCourses.course_id')
            ->whereNull('schedule.user_id')
            ->where([
                ['programs.program_id', Auth::user()->program_id],
                ['users.id', Auth::user()->id],
                ['lectures.semester_id', $semester_id]
            ])->distinct()->get();
        //$courses = Lectures::where('semester_id', $request->input('semester_id'))->get();
        return response()->json($coursesList);
    }

    public function getLecturesList(Request $request)
    {
    	$course_id = $request->input('course_id');
    	$semester_id = $request->input('semester_id');
    	$course = Courses::find($course_id);
    	$lecturesList = $course->lectures()->where('semester_id', $semester_id)->get();
    	return response()->json($lecturesList);
    }

    public function getTutorialsAndLabsList(Request $request)
    {
        $lecture_id = $request->input('lecture_id');
        $lecture = Lectures::find($lecture_id);
        $tutorialsList = $lecture->tutorials;
        $labsList = $lecture->labs;
        return response()->json(['tutorials' => $tutorialsList, 'labs' => $labsList]);
    }

    public function store(Request $request)
    {
        //ARTEM: should check whether class already exists in schedule?
        //ARTEM: should schedule controller do this? Seems like a job for the model.
        //return $request->all();
        $tutorial_id = $request->input('tutorial_id');
        $lab_id = $request->input('lab_id');
        if ($tutorial_id == "") {
            $tutorial_id = null;
        }
        if ($lab_id == "") {
            $lab_id = null;
        }

        Schedule::create(
            [
                'user_id' => Auth::user()->id,
                'lecture_id' => $request->input('lecture_id'),
                'tutorial_id' => $tutorial_id,
                'lab_id' => $lab_id,
                'course_id' => $request->input('course_id'),
                'semester_id' => $request->input('semester_id')
            ]);
        return redirect('/schedule');
   }
}
