<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Semesters;
use App\Courses;
use App\Lectures;
use App\Schedule;
use Auth;

class GenerateController extends Controller
{
    public function addCourse()
    {
        $troller = new CoursesController;
        $semesters = Semesters::all();
        $sequence = $troller->generateSequence();
        return view('courses.generate')->with(['sequence'=>$sequence,'semesters'=>$semesters]);
    }

    public function addSequence(){
        $user = Auth::user();
        $semesters = Semesters::all();    

        if (isset($_GET['semester_id']) && is_int(intval($_GET['semester_id']))) {
            
            //woah dios mio, ghetto00000
            $semester_id = ($_GET['semester_id']);

            Schedule::where('user_id', $user->id)->where('semester_id', $semester_id)->delete();


            $troller = new CoursesController;
            $sequence = $troller->generateSequence();
            $sequence = array_reverse($sequence);
            foreach ($sequence[($semester_id+1)%2] as $course){
                $classInfo = Courses::join('lectures', 'lectures.course_id', '=', 'courses.course_id')->where('courses.course_id' , $course->id)
                        ->leftjoin('tutorials', 'lectures.lecture_id', '=', 'tutorials.lecture_id')
                        ->leftjoin('labs', 'lectures.lecture_id', '=', 'labs.lecture_id')->select('courses.course_id', 'lectures.lecture_id', 'lab_id', 'tutorial_id')->get();

                $class = array( 
                    'user_id' => $user->id, 
                    'lecture_id' => $classInfo[0]->lecture_id,  
                    'course_id' => $classInfo[0]->course_id,  
                    'semester_id' => $semester_id, 
                    'tutorial_id' => $classInfo[0]->tutorial_id, 
                    'lab_id' => $classInfo[0]->lab_id);
                Schedule::create($class); 
            }
            return view('courses.generate')->with(['sequence'=>$sequence,'semesters'=>$semesters]);
        }else{
            echo "HOW DID YOU GET HERE?";
        }
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
