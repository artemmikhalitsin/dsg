<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // gets the profile info of the logged in user and their completed courses list
    public function profile()
    {
        $user= Auth::user();
        $completedCourses = User::getCompletedCourses();
        return view('users/profile', compact('user', 'completedCourses'));
    }

    // used to load the preferences form view
    public function preferences()
    {
        return view('users/preferences');
    }

}
