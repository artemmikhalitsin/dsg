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

    // gets the list of completed courses of the logged in user
    public static function getCompletedCourses()
    {
        return Auth::user()->courses;
    }

    public static function testing(&$result, $course_day, $course_code, $course_name, $start_time, $end_time, $course_type)
    {
        $object =
        [
           'course_code' => $course_code,
           'course_name' => $course_name,
           'start_time' => $start_time,
           'end_time' => $end_time,
           'type' => $course_type
        ];
        $days = str_split($course_day);
        foreach($days as $key => $day)
        {
            if(!($day == '-'))
            {
                array_push($result[$key], $object);
            }
        }
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
                    'lectures.day as Lec_day', 'lectures.start_time as Lec_STime', 'lectures.end_time as Lec_ETime',
                    'tutorials.day as Tut_day', 'tutorials.start_time as Tut_STime', 'tutorials.end_time as Tut_ETime',
                    'labs.day as Lab_day', 'labs.start_time as Lab_STime', 'labs.end_time as Lab_ETime'
                ]);

        $result = ['0' => [], '1' => [], '2' => [], '3' => [], '4' => [], '5' => [], '6' => [],];

        foreach ($schedule as $value) {
            if ($value->Lec_day != 'TBA') {
                self::testing($result, $value->Lec_day, $value->course_code, 
                        $value->course_name, $value->Lec_STime, 
                        $value->Lec_ETime, 'LEC');
            }
            if ($value->Tut_day != 'TBA' && !is_null($value->Tut_day)) {
                self::testing($result, $value->Tut_day, $value->course_code, 
                        $value->course_name, $value->Tut_STime, 
                        $value->Tut_ETime, 'TUT');
            }
            if ($value->Lab_day != 'TBA' && !is_null($value->Lab_day)) {
                self::testing($result, $value->Lab_day, $value->course_code, 
                        $value->course_name, $value->Lab_STime, 
                        $value->Lab_ETime, 'LAB');
            }
        }

        return $result;
    }
}
