<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

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

}
