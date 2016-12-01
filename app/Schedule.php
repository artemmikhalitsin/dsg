<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'user_id', 'lecture_id', 'tutorial_id', 'lab_id', 'course_id', 'semester_id'
    ];

    public $primaryKey = 'schedule_id';

    protected $table = 'schedule';

    public $timestamps = false;

    public static function removeCourse($user_id, $course_id)
    {
         $course = Schedule::where('user_id', $user_id)->where('course_id', $course_id);
         if($course->exists())
         {
         $course->delete();
         return true;
          }
          return false;
    }
}
