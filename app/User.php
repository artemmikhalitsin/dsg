<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

use Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'program_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // gets the preferences of the logged in user
    public function preferences()
    {
        return $this->hasOne('App\Preferences');
    }

    // gets the program of the logged in user
    public function program()
    {
        return $this->belongsTo('App\Program');
    }

    // gets the list of completed courses for the logged in user
    public function courses()
    {
        return $this->belongsToMany('App\Courses', 'completedCourses', 'user_id', 'course_id');
   }

    public function addCompletedCourse($course_id)
    {
         $exists = DB::table('completedCourses')->where('user_id',$this->id)
                                                  ->where('course_id',$course_id)
                                                  ->exists();
          if(!$exists)
               {
                    DB::table('completedCourses')->insert(
                    [
                         [
                         'course_id' => $course_id,
                         'user_id'=>$this->id
                         ]
                    ]
                    );
                    return true;
               }
          return false;
    }

    public function removeCompletedCourse($course_id)
    {
         $table = DB::table('completedCourses')->where('user_id',$this->id)
                                                  ->where('course_id',$course_id);
          if($table->exists())
               {
                    $table->delete();
                    return true;
               }
          return false;
    }

    // gets the list of completed courses of the logged in user
    public static function getCompletedCourses()
    {
        return Auth::user()->courses;
    }
}
