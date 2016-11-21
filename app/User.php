<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

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


    public function preferences()
    {
        return $this->hasOne('App\Preferences');
    }

    public function program()
    {
        return $this->belongsTo('App\Program');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Courses', 'completedCourses', 'user_id', 'course_id');
    }
    
}
