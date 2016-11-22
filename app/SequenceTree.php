<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use DB;

class SequenceTree extends Model
{
  //Everything starts here:
  public static function getOutput(){
    $userProgram = array('18','218','39','174'); //,'218','39','174'
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
  var $prerequisiteList = array();
  var $id;
  var $winter;
  var $fall;
  var $level = -1;  

  function __construct($id, &$CourseList) {
    $this->id = $id;
    $courseInfo = DB::table('courses')
      ->join('courseavailability','courses.course_id', '=','courseavailability.course_id')
      ->join('prerequisites','prerequisites.course_id', '=','courses.course_id')
      ->select('courses.course_code','courses.course_id','winter','fall','prerequisite','prereq_id')
      ->where('courses.course_id','=',$id)
      ->get();

    if (empty($courseInfo)){
      $courseInfo = DB::table('courses')
        ->join('courseavailability','courses.course_id', '=','courseavailability.course_id')
        ->select('courses.course_code','courses.course_id','winter','fall')
        ->where('courses.course_id','=',$id)
        ->get();
    }

    if (!empty($courseInfo)){
        $this->name = $courseInfo[0]->course_code;
        $this->winter = $courseInfo[0]->winter;
        $this->fall = $courseInfo[0]->fall;
      foreach ($courseInfo as $coursePrereq){
        if (!empty($coursePrereq->prerequisite))
          $this->addPrerequisiteObject($coursePrereq->prerequisite, $CourseList);
      }
    }
  }

  //adds a prerequisite object to the current course, checks if that object exists already
  function addPrerequisiteObject($prerequisiteCourseId, &$CourseList){

    $already = false;
    foreach ($CourseList as $course){
      if ($course->id == $prerequisiteCourseId){
        $this->prerequisiteList[] = new Prerequisite($course, $this->id, $CourseList);
        $already = true;
      }
    }

    if (!$already){
      $CourseList[] = $course = new Course ($prerequisiteCourseId, $CourseList, $CourseList);
      $this->prerequisiteList[] = new Prerequisite($course, $this->id, $CourseList);
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
  //this is the list of requisites to complete this prerequisite
  var $prerequisiteChoices = Array();

  //this is the id of the prerequisite
  var $prereq_id;

  var $isCorequisite = 0;

  var $parent_id;

  function __construct($prerequisite, $parent_id, &$CourseList){
    $this->prerequisiteChoices[] = $prerequisite;
    $this->parent_id = $parent_id;
    
    $prereqInfo = DB::table('prerequisites')
    ->select('prereq_id')
    ->where('prerequisite', '=', $prerequisite->id)
    ->where('course_id', '=', $parent_id)
    ->get();

    $this->prereq_id = $prereqInfo[0]->prereq_id;

    //this gets the other options
    $this->getOrReq($CourseList);
  }

  function getOrReq(&$CourseList){
    $orReqInfo = DB::table('courses')
    ->join('prerequisites','prerequisites.course_id', '=','courses.course_id')
    ->join('orprerequisites','prerequisites.prereq_id','=','orprerequisites.prereq_id')
    ->select('orprerequisites.course_id')
    ->where('orprerequisites.prereq_id','=',$this->prereq_id)
    ->get();

    //SELECT orprerequisites.course_id as orPrereq FROM courses JOIN prerequisites ON prerequisites.course_id = courses.course_id JOIN orprerequisites ON orprerequisites.prereq_id = prerequisites.prereq_id WHERE courses.course_id = 9

    foreach ($orReqInfo as $orReq){
      $already = false;
      foreach ($CourseList as $course){
        if ($course->id == $orReq->course_id){
          $this->prerequisiteChoices[] = $course;
          $already = true;
        }
      }
      if (!$already){
        $this->prerequisiteChoices[] = new Course ($orReq->course_id, $CourseList);
      }
    }



  }
}


?>
