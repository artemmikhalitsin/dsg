<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddCourseRequest;
use App\Http\Controllers\Controller;
use App\Semesters;
use App\Courses;
use App\Lectures;
use App\Schedule;
use Auth;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * returns the add course view
     */
    public function addCourse()
    {
        $semesters = Semesters::all();
        return view('courses.addCourse', compact('semesters'));
    }

    /**
     * removes a course from the schedule
     * @param  Request $request [gets the course id through request]
     * @return success if the course is removed
     */
    public function removeCourse(Request $request)
    {
         $user_id = Auth::user()->id;
         $course_id = $request->input('course_id');
         $response = Schedule::removeCourse($user_id, $course_id);
         return response()->json(['success'=>$response]);
    }

    /**
     * gets the courses in a specific semester
     * @param  Request $request [gets the semester id through request]
     * @return the courses in a specific semester
     */
    public function getCoursesList(Request $request)
    {
        $semester_id = $request->input('semester_id');
        $coursesList = Schedule::getCourses($semester_id);
        return response()->json($coursesList);
    }

    /**
     * gets all the lectures for a course
     * @param  Request $request [gets the course id through request]
     * @return the lectures associated with the course
     */
    public function getLecturesList(Request $request)
    {
    	$course_id = $request->input('course_id');
    	$semester_id = $request->input('semester_id');
    	$course = Courses::find($course_id);
    	$lecturesList = $course->lectures()->where('semester_id', $semester_id)->get();
    	return response()->json($lecturesList);
    }

    /**
     * gets the list of tutorials and labs for a lecture
     * @param  Request $request [gets the lecture id through request]
     * @return the tutorials and labs associated with the lecture
     */
    public function getTutorialsAndLabsList(Request $request)
    {
        $lecture_id = $request->input('lecture_id');
        $lecture = Lectures::find($lecture_id);
        $tutorialsList = $lecture->tutorials;
        $labsList = $lecture->labs;
        return response()->json(['tutorials' => $tutorialsList, 'labs' => $labsList]);
    }

    /**
     * add course to the schedule after validation
     * @param  AddCourseRequest $request [validates the request]
     * @return redirects the user to schedule view
     */
    public function store(AddCourseRequest $request)
    {
        $tutorial_id = $request->input('tutorial_id');
        $lab_id = $request->input('lab_id');
        $tutorialExists = $request->input('tutorialExists');
        $labExists = $request->input('labExists');

        if (($tutorialExists == 1 && $tutorial_id == "") || ($labExists == 1 and $lab_id == "")) {
            return redirect('/schedule/addCourse');
        }else{
            if ($tutorial_id == "") {
                $tutorial_id = null;
            }
            if ($lab_id == "") {
                $lab_id = null;
            }
        }

        Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
        return redirect('/schedule');
   }
}
