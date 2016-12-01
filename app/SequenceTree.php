<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use DB;

use App\User;

use App\Preferences;

use App\Http\Controllers\UserController;

class SequenceTree extends Model
{
  //Everything starts here:
  public static function getOutput($userProgram){

    $listOfCourseTrees = [];

    foreach ($userProgram as $userCourse){
      $already = false;
      foreach ($listOfCourseTrees as $course){
        if ($course->id == $userCourse){
          $already = true;
        }
      }

      if (!$already){
        $listOfCourseTrees[] = $course = new Course ($userCourse, $listOfCourseTrees);
      }
    }

    foreach ($listOfCourseTrees as &$course){
      $currentPrereq = array();
      foreach ($course->prerequisiteList as $key => &$p){
        if (array_search($p->prereq_id,$currentPrereq)){
          unset($course->prerequisiteList[$key]);
        }
        else
          array_push($currentPrereq, $p->prereq_id);
      }
    }


    foreach ($listOfCourseTrees as &$course){
      $course->assignLevel($course);
    }


    return $listOfCourseTrees;
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

  function __construct($id, &$listOfCourseTrees) {

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
        if($this->fall == 0 && $this->winter == 0){
          $this->fall = 1;
          $this->winter = 1;
        }
	//echo 'creating '.$this->name. '<br>';
      foreach ($courseInfo as $coursePrereq){
        if (!empty($coursePrereq->prerequisite))
          $this->addPrerequisiteObject($coursePrereq->prerequisite, $this->id, $listOfCourseTrees);
      }
    }
  }

  //adds a prerequisite object to the current course, checks if that object exists already
  function addPrerequisiteObject($prerequisiteCourseId, $parent_id, &$listOfCourseTrees){
    $already = false;
    foreach ($listOfCourseTrees as $course){
      if ($course->id == $prerequisiteCourseId){
        $this->prerequisiteList[] = new Prerequisite($course, $this->id, $listOfCourseTrees);
        $already = true;
      }
    }

    if (!$already){
      $listOfCourseTrees[] = $course = new Course ($prerequisiteCourseId, $listOfCourseTrees);
      $this->prerequisiteList[] = new Prerequisite($course, $this->id, $listOfCourseTrees);
    }
  }

  //a course and the final list of courses to take
  function assignLevel($rootCourse) {
    if ($this->level == -1){
      $maxLevel = -1; //OVER 9000
      if (empty($this->prerequisiteList))
        $this-> level = 0;
      else {
        foreach($this->prerequisiteList as $prerequisite){
          foreach($prerequisite->prerequisiteChoices as $course){
            $course->assignLevel($course);
            if ($course->level > $maxLevel)
              $maxLevel = $course->level;
          }
        }
        $this->level = $maxLevel + 1;
      }
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

  function __construct($prerequisite, $parent_id, &$listOfCourseTrees){
    $this->prerequisiteChoices[] = $prerequisite;
    $this->parent_id = $parent_id;

    $prereqInfo = DB::table('prerequisites')
    ->select('prereq_id', 'iscorequisite')
    ->where('prerequisite', '=', $prerequisite->id)
    ->where('course_id', '=', $parent_id)
    ->get();

    $this->prereq_id = $prereqInfo[0]->prereq_id;
    $this->isCorequisite = $prereqInfo[0]->iscorequisite;
    //this gets the other options

    //THIS IS IMPORTANT FOR OR-PRREQUISITES
    //THIS IS IMPORTANT FOR OR-PRREQUISITES
    //THIS IS IMPORTANT FOR OR-PRREQUISITES
    //THIS IS IMPORTANT FOR OR-PRREQUISITES
    //THIS IS IMPORTANT FOR OR-PRREQUISITES
    //but we it's not accounted for in sequencing

    //$this->getOrReq($listOfCourseTrees);
  }

  function getOrReq(&$listOfCourseTrees){
    $orReqInfo = DB::table('courses')
    ->join('prerequisites','prerequisites.course_id', '=','courses.course_id')
    ->join('orprerequisites','prerequisites.prereq_id','=','orprerequisites.prereq_id')
    ->select('orprerequisites.course_id')
    ->where('orprerequisites.prereq_id','=',$this->prereq_id)
    ->get();

    //SELECT orprerequisites.course_id as orPrereq FROM courses JOIN prerequisites ON prerequisites.course_id = courses.course_id JOIN orprerequisites ON orprerequisites.prereq_id = prerequisites.prereq_id WHERE courses.course_id = 9

    foreach ($orReqInfo as $orReq){
      $already = false;
      foreach ($listOfCourseTrees as $course){
        if ($course->id == $orReq->course_id){
          $this->prerequisiteChoices[] = $course;
          $already = true;
        }
      }
      if (!$already){
        $listOfCourseTrees[] = $course = new Course ($orReq->course_id, $listOfCourseTrees);
        $this->prerequisiteChoices[] = $course;
      }
    }



  }
}


?>
