<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Courses;

class CoursesController extends Controller
{
    public function index()
    {
    	$courses = Courses::all();
    	return view('courses.index', compact('courses'));
    }
}
