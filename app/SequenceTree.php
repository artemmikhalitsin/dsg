<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use DB;

class SequenceTree extends Model
{
  public static function getOutput(){
    $userProgram = array('174'); //,'218','39'
    $CourseList = [];

    foreach ($userProgram as $userCourse){
      $CourseList[] = $course = new Course ($userCourse, $CourseList);
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
  var $level = -1;
  var $prerequisiteList = array();

  function __construct($id, &$CourseList) {
    $this->id = $id;
    $courseInfo = DB::table('courses')
      ->join('courseavailability','courses.course_id', '=','courseavailability.course_id')
      ->join('prerequisites','prerequisites.course_id', '=','courses.course_id')
      ->select('courses.course_code','courses.course_id','winter','fall','prerequisite')
      ->where('courses.course_id','=',$id)
      ->get();
    $this->name = $courseInfo[0]->course_code;
    $this->winter = $courseInfo[0]->winter;
    $this->fall = $courseInfo[0]->fall;

    //coursePrereq is actually not just a prereq, it's more info
    foreach ($courseInfo as $coursePrereq){
      $this->addPrerequisiteObject($coursePrereq->prerequisite, $CourseList);
    }
  }

  //adds a prerequisite object to the current course, checks if that object exists already
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
        $this->prerequisiteList[] = new Prerequisite($course);
        $already = true;
      }
    }

    if (!$already && !empty($courseInfo)){
      $CourseList[] = $course = new Course ($prerequisiteId, $CourseList);
      $this->prerequisiteList[] = new Prerequisite($course);
    }
  }

  function getPrq()
  {
    if (property_exists($this, 'prerequisiteList')) 
      return $this->prerequisiteList;
  }

  function getId()
  {
    if (property_exists($this, 'id')) 
      return $this->id;
  }

  function getLevel()
  {
    if (property_exists($this, 'level'))
      return $this->level;
  }

  function setLevel($l)
  {
    if (property_exists($this, 'level'))
      $this->level = $l;
  }

  /*
  function __construct($id, $prq, $crq)
  {
    $this->id = $id;
    $this->prerequisites = $prq;
    $this->corequisites = $crq;
    $this->level = -1;
  }
  
  function addCrq($crq)
  {
    $this->corequisites[]=$crq;
  }

  function addPrq($prq)
  {
    $this->prerequisiteList[]->prerequisite=$prq;
  }
  
  function setPrqs($prqs)
  {
    $this->prerequisiteList= $prqs;
  }

  function getCrq()
  {
    if (property_exists($this, 'corequisites')) 
      return $this -> corequisites;
    }
  */
}

class Prerequisite
{
  var $isCorequisite = 0;
  var $prerequisite;
  var $orPrereq = Array();

  function __construct($course){
    $this->prerequisite = $course;
  }
}


?>
