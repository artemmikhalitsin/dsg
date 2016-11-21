<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use DB;

class SequenceTree extends Model
{
  public static function getOutput(){
    $userProgram = array('218','39');
    $CourseList = [];

    foreach ($userProgram as $userCourse){

    $courseInfo = DB::table('courses')
      ->join('courseavailability','courses.course_id', '=','courseavailability.course_id')
      ->join('prerequisites','prerequisites.course_id', '=','courses.course_id')
      ->select('courses.course_code','courses.course_id','winter','fall','prerequisite')
      ->where('courses.course_id','=',$userCourse)
      ->get();

    $CourseList[] = $course = new Course($userCourse);
    $course->name = $courseInfo[0]->course_code;
    $course->winter = $courseInfo[0]->winter;
    $course->fall = $courseInfo[0]->fall;

    //coursePrereq is actually not just a prereq, it's more info
    foreach ($courseInfo as $coursePrereq)
      $course->addPrerequisiteObject($coursePrereq->prerequisite, $CourseList);
    }

    return json_encode($CourseList);
  }
}

class Course
{
  var $name;
  var $id;
  var $winter;
  var $fall;
  var $prerequisites = array();
  //var $corequisites = array();
  //var $height = 0;

  function __construct($id) {
    $this->id = $id;
  }

  function addPrerequisiteObject($prerequisiteId, &$CourseList){

    $courseInfo = DB::table('courses')
    ->join('courseavailability','courses.course_id', '=','courseavailability.course_id')
    ->join('prerequisites','prerequisites.course_id','=','courses.course_id')
    ->select('courses.course_code','courses.course_id','winter','fall','prerequisite')
    ->where('courses.course_id','=',$prerequisiteId)
    ->get();

    $already = false;
    foreach ($CourseList as $course){
      if ($course->id == $prerequisiteId){
        $this->prerequisites[] = $course;
        $already = true;
      }
    }

    if (!$already && !empty($courseInfo)){
      $CourseList[] = $course = new Course ($prerequisiteId);
      $course->name = $courseInfo[0]->course_code;
      $course->winter = $courseInfo[0]->winter;
      $course->fall = $courseInfo[0]->fall;
      foreach ($courseInfo as $coursePrereq)
        $course->addPrerequisiteObject($coursePrereq->prerequisite, $CourseList);
      $this->prerequisites[] = $course;
    }
  }
}


?>
