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

    public static function separateCoursesByDay(&$result, $id, $course_day, $course_code, $course_name, $start_time, $end_time, $course_type)
    {
       $object =
       [
          'id'=> $id,
          'course_code' => $course_code,
          'course_name' => $course_name,
          'start_time' => $start_time,
          'end_time' => $end_time,
          'type' => $course_type
       ];

       if ($course_day == "TBA") {
          array_push($result[6], $object);
       }else {
           $days = str_split($course_day);

           foreach($days as $key => $day) {
              if(!($day == '-')) {
                  array_push($result[$key], $object);
              }
           }
       }
    }

    public static function getTimeOfCourses($start, $end)
    {
        if($start != "TBA") {
            $start_time = date("G:i", strtotime($start));
            $end_time = date("G:i", strtotime($end));
        }else {
            $start_time = $start;
            $end_time = $end;
        }
        return array($start_time, $end_time);
    }
    public static function getUserSchedule()
    {
       $schedule = User::join('schedule', 'users.id', '=', 'schedule.user_id')
           ->leftJoin('tutorials', 'schedule.tutorial_id', '=', 'tutorials.tutorial_id')
           ->leftJoin('labs', 'schedule.lab_id', '=', 'labs.lab_id')
           ->leftJoin('lectures', 'schedule.lecture_id', '=', 'lectures.lecture_id')
           ->join('courses', 'lectures.course_id', '=', 'courses.course_id')
           ->where('users.id', Auth::user()->id)
           ->get(
               [
                   'courses.course_code', 'courses.course_name',
                   'lectures.day as Lec_day', 'lectures.start_time as Lec_STime', 'lectures.end_time as Lec_ETime', 'lectures.lecture_id as lecture_id',
                   'tutorials.day as Tut_day', 'tutorials.start_time as Tut_STime', 'tutorials.end_time as Tut_ETime', 'tutorials.tutorial_id as tutorial_id',
                   'labs.day as Lab_day', 'labs.start_time as Lab_STime', 'labs.end_time as Lab_ETime', 'labs.lab_id as lab_id'
               ]);

       $result = ['0' => [], '1' => [], '2' => [], '3' => [], '4' => [], '5' => [], '6' => []];

       foreach ($schedule as $value) {

          if ($value->Lec_day != 'TBA') {
            $times = self::getTimeOfCourses($value->Lec_STime, $value->Lec_ETime);
            self::separateCoursesByDay($result, $value->lecture_id, $value->Lec_day, $value->course_code,
                $value->course_name, $times[0], $times[1], 'Lecture');
          }
          if ($value->Tut_day != 'TBA' && !is_null($value->Tut_day)) {
            $times = self::getTimeOfCourses($value->Tut_STime, $value->Tut_ETime);
            self::separateCoursesByDay($result, $value->tutorial_id, $value->Tut_day, $value->course_code,
                    $value->course_name, $times[0], $times[1], 'Tutorial');
          }
          if ($value->Lab_day != 'TBA' && !is_null($value->Lab_day)) {
            $times = self::getTimeOfCourses($value->Lab_STime, $value->Lab_ETime);
            self::separateCoursesByDay($result, $value->lab_id, $value->Lab_day, $value->course_code,
                    $value->course_name, $times[0], $times[1], 'Lab');
          }
       }

       return $result;
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
