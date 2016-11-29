<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Courses;
use App\Lectures;
use App\Tutorials;
use App\Labs;
use App\SequenceTree;
use App\Semesters;

class CoursesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function generateSequence(){
		$sequenceInfo = SequenceTree::getOutput();
		return view('courses.sequence', compact('sequenceInfo'));
	}

    // this will be removed
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

    public function showInfo(Request $request, $sectiontype, $sectionid)
    {
	    $sectiontype = strtolower($sectiontype);
	    switch($sectiontype)
	    {
		    case('lecture'):
		    		$section = Lectures::find($sectionid);
				$section['instructor_name'] = $section->instructor->name;
		    		$course = $section->getCourse();
		    		break;
		    case('tutorial'):
			    $section = Tutorials::find($sectionid);
			    $course = $section->getCourse();
		    		break;
		    case('lab'):
			    $section = Labs::find($sectionid);
			    $course = $section->getCourse();
		    		break;
	    }

	    $sectiontype = ucwords($sectiontype);

	    return view('courses.courseInfo', compact('section', 'course', 'sectiontype'));
    }

	public function browseCourses()
	{
			$courses = Courses::getProgramCoursesList();
			$electives = Courses::getProgramElectivesList();

			return view('courses.browseCourses', compact('courses', 'electives'));
	}
}

?>
