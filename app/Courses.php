<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Courses;

use DB;

class Courses extends Model
{

    public $primaryKey = 'course_id';

    protected $fillable = [
    	'course_name', 'course_code', 'description', 'credits', 'instructor_id'
    ];

    // gets the list of users who have completed a specific course
    public function users()
    {
        return $this->belongsToMany('App\User', 'completedCourses', 'course_id', 'user_id');
    }

    // gets the list of programs in which a specific course is offered
    public function program()
    {
        return $this->belongsToMany('App\Program', 'courseProgram', 'course_id', 'program_id')->withPivot('course_type');
    }

    // gets the list of all the lectures of a specific course (including all semesters)
    public function lectures()
    {
        return $this->hasMany('App\Lectures', 'course_id');
    }

    // gets the list of all the prerequisites of a course
    public function prerequisites()
    {
        return $this->belongsToMany('App\Courses', 'Prerequisites', 'course_id', 'prerequisite')->withPivot('iscorequisite');
    }

    public static function getCoursePrerequisitesAvailibilities(){
      return Courses::join('prerequisites', 'prerequisites.course_id', '=', 'courses.course_id')
      ->join('corequisites', 'courses.course_id', '=', 'corequisites.course_id')
      ->select('courses.course_id', 'corequisites.corequisite', 'prerequisites.prerequisite')->get();
    }

    // gets the list of program courses (core) of the logged in user's program
    public static function getProgramCoursesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*', 'courseProgram.course_type')->where([
                ['courseProgram.program_id', Auth::user()->program_id],
                ['courseProgram.course_type', "program_course"],
            ])->get();
    }

    // gets the list of program electives of the logged in user's program
    public static function getProgramElectivesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*', 'courseProgram.course_type')->where([
                ['courseProgram.program_id', '2'],
                ['courseProgram.course_type', "program_elective"],
            ])->get();
    }

    public static function getAllProgramCourses()
    {
         return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')
                ->join('programs', 'courseProgram.program_id', '=', 'programs.program_id')
                ->join('users', 'programs.program_id', '=', 'users.program_id')
                ->where([
                    ['programs.program_id', Auth::user()->program_id],
                    ['users.id', Auth::user()->id]
                ])->get();
    }

    // gets the list of courses to be completed for the logged in user
    public static function getOneProgramCoursesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')
            ->join('programs', 'courseProgram.program_id', '=', 'programs.program_id')
            ->join('users', 'programs.program_id', '=', 'users.program_id')
            ->leftJoin('completedCourses', function ($join) {
                $join->on('courses.course_id', '=', 'completedCourses.course_id')
                     ->on('users.id', '=', 'completedCourses.user_id');
            })->select('courses.*', 'courseProgram.course_type')
            ->whereNull('completedCourses.course_id')
            ->where([
                ['programs.program_id', Auth::user()->program_id],
                ['users.id', Auth::user()->id]
            ])->get();
    }

    public static function checkConflict($value)
    {
         $schedule = User::getSemesterSchedule($value->semester_id);
         $slots = ['0' => [], '1' => [], '2' => [], '3' => [], '4' => [], '5' => [], '6' => []];
         if ($value->day!= 'TBA' && $value->lecture_id != NULL) {
           $times = User::getTimeOfCourses($value->start_time, $value->end_time);
           User::separateCoursesByDay($slots, $value->lecture_id, $value->day, $value->getCourse()->course_code,
               $value->course_name, $times[0], $times[1], 'Lecture');
         }
         if ($value->day != 'TBA' && $value->tutorial_id != NULL) {
           $times = User::getTimeOfCourses($value->start_time, $value->end_time);
           User::separateCoursesByDay($slots, $value->tutorial_id, $value->day, $value->getCourse()->course_code,
                   $value->course_name, $times[0], $times[1], 'Tutorial');
         }
         if ($value->day != 'TBA' && $value->lab_id != NULL){
           $times = User::getTimeOfCourses($value->Lab_STime, $value->Lab_ETime);
           User::separateCoursesByDay($slots, $value->lab_id, $value->day, $value->getCourse()->course_code,
                   $value->course_name, $times[0], $times[1], 'Lab');
         }
         foreach($slots as $day=>$value)
         {
              foreach($value as $key=>$timeslot)
              {
                   foreach($schedule[$day] as $scheduleday=>$course)
                   {

                        if(strtotime($timeslot['end_time']) > strtotime($course['start_time'])
                         && strtotime($timeslot['end_time']) < strtotime($course['end_time']))
                         {
                              return false;
                         }
                         if(strtotime($timeslot['end_time']) > strtotime($course['start_time'])
                          && strtotime($timeslot['end_time']) < strtotime($course['end_time']))
                         {
                              return false;
                         }
                    }
              }
         }
         return true;
    }
}

?>
