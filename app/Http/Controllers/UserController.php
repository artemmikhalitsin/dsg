<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use DB;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


     public function profile()
     {
       $user= Auth::user();
          return view('users/profile', compact('user'));
     }

     public function preferences()
     {
       return view('users/preferences');
     }

     public function addCompletedCourse(Request $request)
     {
          $course = $request->input('course_id');
          $added = Auth::user()->addCompletedCourse($course);
          return response()->json(['response' => $added]);
     }
}
