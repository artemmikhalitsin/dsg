<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Courses;

use App\SequenceTree;

class CoursesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

<<<<<<< HEAD
		public function generateSequence(){
			$sequenceInfo = SequenceTree::getOutput();
			return view('courses.sequence', compact('sequenceInfo'));
		}
=======
	public function generateSequence(){
		$sequenceInfo = '5';
		return view('courses.sequence', compact('sequenceInfo'));
	}
>>>>>>> 28ee6ba5cca0b5403d4b58e4eb33fe0fe23232ef

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