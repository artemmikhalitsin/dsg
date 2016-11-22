<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Courses;

use App\SequenceTree;

use DB;

class CoursesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function generateSequence(){
        /*

        GENERATE COURSE POOL HERE (get ID's of desired courses)

        */
        $userProgram = array('527');//,'218','39','174'
		$sequenceInfo = SequenceTree::getOutput($userProgram);
		return view('courses.sequence')->with(['sequenceInfo'=>$sequenceInfo]);
	}

    public function index()
    {
        $electives = Courses::getProgramElectivesList();
        $courses = Courses::getProgramCoursesList();

    	return view('courses.index', compact('courses', 'electives'));
    }

    // sends a list of courses that are left to do for the logged in user to a view
    public function addCompletedCourses()
    {
        $courses = Courses::getOneProgramCoursesList();

        return view('courses.completedCourses', compact('courses'));
    }
}

?>