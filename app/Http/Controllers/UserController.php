<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use DB;

use App\Courses;
use App\Lectures;
use App\Tutorials;
use App\Labs;

use App\User;

use App\Preferences;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // gets the profile info of the logged in user and their completed courses list and their preferences
    public function profile()
    {
        $user = Auth::user();
        $pref = Preferences::where('user_id', $user->id);
        $exists = $pref->exists();
        $preferences = array();
        if ($exists) {
          $pref_id = $pref->value('preference_id');
          $preferences = Preferences::find($pref_id);
          $days_off = explode("|", $preferences->days_off);
          $preferences->days_off = $days_off;
        }
        $completedCourses = User::getCompletedCourses();
        return view('users/profile', compact('user', 'completedCourses', 'preferences'));
    }

    public function addCompletedCourse(Request $request)
    {
        $course = $request->input('course_id');
        $added = Auth::user()->addCompletedCourse($course);
        return response()->json(['response' => $added]);
    }

    public function schedule()
    {
        $schedule = User::getUserSchedule();
        $courses = Courses::getOneProgramCoursesList();

        return view('courses.schedule', compact('schedule', 'courses' ));
    }

    public function removeCompletedCourse(Request $request)
    {
          $course = $request->input('course_id');
          $removed = Auth::user()->removeCompletedCourse($course);
          return response()->json(['response' => $removed]);
    }
}
