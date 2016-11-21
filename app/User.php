<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
    
    // gets the list of completed courses of the logged in user
    public static function getCompletedCourses()
    {
        return Auth::user()->courses;
    }
}
