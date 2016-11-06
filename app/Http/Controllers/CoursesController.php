<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Courses;

class CoursesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $electives = Courses::getProgramElectivesList();
        $courses = Courses::getProgramCoursesList();
    	
    	return view('courses.index', compact('courses', 'electives'));
    }

    public function addCompletedCourses()
    {
        $courses = Courses::getOneProgramCoursesList();

        return view('courses.completedCourses', compact('courses'));
    }
}
