<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use DB;

class Courses extends Model
{

    public $primaryKey = 'course_id';

    protected $fillable = [
    	'course_name', 'course_code', 'description', 'credits', 'instructor_id'
    ];
/*
    public static function getProgramCoursesInfo(){
      return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')
      ->join('prerequisites','courses.course_id','=','prerequisites.course_id')
      ->select('courses.*', 'courseProgram.course_type', 'prerequisites.prerequisite')
      ->where([
                ['courseProgram.program_id', Auth::user()->program_id],
                ['courseProgram.course_type', "program_course"]
              ])
      ->get();
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

    public function prerequisites()
    {
        return $this->belongsToMany('App\Courses', 'Prerequisites', 'course_id', 'prerequisite');
    }

    public static function getCoursePrerequisitesAvailibilities(){
      return Courses::join('prerequisites', 'prerequisites.course_id', '=', 'courses.course_id')
      ->join('corequisites', 'courses.course_id', '=', 'corequisites.course_id')
      ->select('courses.course_id', 'corequisites.corequisite', 'prerequisites.prerequisite')->get();
    }
*/

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
                ['courseProgram.program_id', Auth::user()->program_id],
                ['courseProgram.course_type', "program_elective"],
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

    public static function getUserSchedule()
    {
         $result = [
              '0' => [],
              '1' => [],
              '2' => [],
              '3' => [],
              '4' => [],
              '5' => [],
              '6' => [],
         ];
         $user = Auth::user();
         $schedule = DB::table('schedule')->where('user_id', $user->id)->get();
         foreach($schedule as $timeslot)
         {
              if(isset($timeslot->lecture_id))
              {
                   $lecture = DB::table('lectures')
                              ->where('lecture_id', $timeslot->lecture_id);
                   $days = $lecture->value('day');
                   $course_id = $lecture->value('course_id');
                   $course = DB::table('courses')->where('course_id', $course_id);
                   $course_code = $course->value('course_code');
                   $course_name = $course->value('course_name');
                   if($lecture->value('start_time') != "TBA")
                   {
                        $start_time = date("G:i", strtotime($lecture->value('start_time')));
                        $end_time = date("G:i", strtotime($lecture->value('end_time')));
                    }
                    else
                    {
                         $start_time = $lecture->value('start_time');
                         $end_time = $lecture->value('end_time');
                    }
                    $type = 'Lecture';
                    $object =
                    [
                         'course_code' => $course_code,
                         'course_name' => $course_name,
                         'start_time' => $start_time,
                         'end_time' => $end_time,
                         'type' => $type
                    ];
                    if($days == "TBA")
                    {
                         $result[6]->array_push($object);
                    }
                    else
                    {
                         $days = str_split($days);
                         foreach($days as $key => $day)
                         {
                              if(!($day == '-'))
                              {
                                   array_push($result[$key], $object);
                              }
                         }
                    }
              }
              if(isset($timeslot->tutorial_id))
              {
                   $tutorial = DB::table('tutorials')
                              ->where('tutorial_id', $timeslot->tutorial_id);
                   $days = $tutorial->value('day');
                   $lecture = DB::table('lectures')
                              ->where('lecture_id', $tutorial->value('lecture_id'));
                   $course_id = $lecture->value('course_id');
                   $course = DB::table('courses')->where('course_id', $course_id);
                   $course_code = $course->value('course_code');
                   $course_name = $course->value('course_name');
                   if($lecture->value('start_time') != "TBA")
                   {
                        $start_time = date("G:i", strtotime($tutorial->value('start_time')));
                        $end_time = date("G:i", strtotime($tutorial->value('end_time')));
                    }
                    else
                    {
                         $start_time = $tutorial->value('start_time');
                         $end_time = $tutorial->value('end_time');
                    }
                    $type = 'Tutorial';
                    $object =
                    [
                         'course_code' => $course_code,
                         'course_name' => $course_name,
                         'start_time' => $start_time,
                         'end_time' => $end_time,
                         'type' => $type
                    ];
                    if($days == "TBA")
                    {
                         $result[6]->array_push($object);
                    }
                    else
                    {
                         $days = str_split($days);
                         foreach($days as $key => $day)
                         {
                              if(!($day == '-'))
                              {
                                   array_push($result[$key], $object);
                              }
                         }
                    }
              }
              if(isset($timeslot->lab_id))
              {
                   $lab = DB::table('labs')
                              ->where('lab_id', $timeslot->lab_id);
                   $days = $lab->value('day');
                   $lecture = DB::table('lectures')
                              ->where('lecture_id', $lab->value('lecture_id'));
                   $course_id = $lecture->value('course_id');
                   $course = DB::table('courses')->where('course_id', $course_id);
                   $course_code = $course->value('course_code');
                   $course_name = $course->value('course_name');
                   if($lab->value('start_time') != "TBA")
                   {
                        $start_time = date("G:i", strtotime($lab->value('start_time')));
                        $end_time = date("G:i", strtotime($lab->value('end_time')));
                    }
                    else
                    {
                         $start_time = $lab->value('start_time');
                         $end_time = $lab->value('end_time');
                    }
                    $type = 'Lab';
                    $object =
                    [
                         'course_code' => $course_code,
                         'course_name' => $course_name,
                         'start_time' => $start_time,
                         'end_time' => $end_time,
                         'type' => $type
                    ];
                    if($days == "TBA")
                    {
                         $result[6]->array_push($object);
                    }
                    else
                    {
                         $days = str_split($days);
                         foreach($days as $key => $day)
                         {
                              if(!($day == '-'))
                              {
                                   array_push($result[$key], $object);
                              }
                         }
                    }
              }
         }
         return $result;
    }
}

?>
