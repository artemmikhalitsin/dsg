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
    	$program_id = Auth::user()->program_id;
    	$courses = Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*')->where('courseProgram.program_id', $program_id)->get();
    	return view('courses.index', compact('courses'));
    }
}
