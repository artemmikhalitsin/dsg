<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Courses;
use App\SequenceTree;
use App\User;
use App\Preferences;
use App\Lectures;
use App\Tutorials;
use App\Labs;
use App\Semesters;

use DB;

class CoursesController extends Controller
{
	// sends a list of courses that are left to do for the logged in user to a view
    public function addCompletedCourses()
    {
        $courses = Courses::getOneProgramCoursesList();
        return view('courses.completedCourses', compact('courses'));
    }

	public function __construct()
    {
        $this->middleware('auth');
    }

   public function showInfo(Request $request, $sectiontype, $sectionid)
   {
        $sectiontype = strtolower($sectiontype);
        switch($sectiontype)
        {
            case('lecture'):
                   $section = Lectures::find($sectionid);
                   $section['instructor_name'] = $section->instructor->name;
                   $course = $section->getCourse();
                   break;
            case('tutorial'):
                  $section = Tutorials::find($sectionid);
                  $course = $section->getCourse();
                   break;
            case('lab'):
                  $section = Labs::find($sectionid);
                  $course = $section->getCourse();
                   break;
        }

        $sectiontype = ucwords($sectiontype);

        return view('courses.courseInfo', compact('section', 'course', 'sectiontype'));
   }

public function generateSequence(){
		/*
	    $user = Auth::user();
	    $pref = Preferences::where('user_id', $user->id);
	    $exists = $pref->exists();
	    $preferences = array();
	    if ($exists) {
	      $pref_id = $pref->value('preference_id');
	      $preferences = Preferences::find($pref_id);
	      $days_off = explode("|", $preferences->days_off);
	      $preferences->days_off = $days_off;
	    }
	    */

    	$userProgram = DB::table('courses')
		->join('courseprogram' , 'courses.course_id', '=' , 'courseprogram.course_id')
		->where('program_id','=','1')
		->where('course_type','=','program_course')
        ->lists('courses.course_id');
    	//$userProgram = array('218');//,'218','39','174'

    	//gets completed courses, array of ints (course id)
	    $completedCourses = User::getCompletedCourses();

	    //hacky fix to convert from collection object to array
	    $completedCourses = json_decode(json_encode($completedCourses));
	    foreach ($completedCourses as $key => $completeCourse){
	    	$completedCourses[$key] = $completedCourses[$key]->course_id;
	    }

    	$userProgram = Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')
            ->join('programs', 'courseProgram.program_id', '=', 'programs.program_id')
            ->join('users', 'programs.program_id', '=', 'users.program_id')
            ->leftJoin('completedCourses', function ($join) {
                $join->on('courses.course_id', '=', 'completedCourses.course_id')
                     ->on('users.id', '=', 'completedCourses.user_id');
            })->select('courses.*', 'courseProgram.course_type')
            ->whereNull('completedCourses.course_id')
            ->where([
                ['courseProgram.course_type', 'program_course'],
                ['programs.program_id', Auth::user()->program_id],
                ['users.id', Auth::user()->id]
           ])->lists('courses.course_id')->toArray();

    	//gets completed courses
		$sequenceInfo = SequenceTree::getOutput($userProgram);

		$sequenceInfo = sortByLevel($sequenceInfo);

		/*************************/
		$courseLoad = 4;
		/*************************/

		$sequence = initSequence($courseLoad);

		foreach($sequenceInfo as $si2)
			$sequence = outputByLevel(0, $sequence, $si2);

		for ($i = 0; $i < sizeof($sequence); $i++)
			compressIt($sequenceInfo, $sequence, $i, []);

		foreach ($sequence as $key => $semester){
			if (!empty($semester))
				if ($semester[0] == null)
					unset($sequence[$key]);
		}

		rearrangeSemester($sequence);

        $sequence = compressSequence($sequence);

	 	foreach ($sequence as $key => $semester){
				if ($semester[0] == null)
					array_shift($sequence);
		}

		return view('courses.sequence')->with(['sequence'=>$sequence, 'sequenceInfo'=>$sequenceInfo]);

	}
}

function compressSequence($seq)
{
	$seqsize = count($seq);
	$sem = $seqsize - 2;  //starting semester is the second semester.
	for ($x = $sem; $x>=0; $x--)
	{
		for ($i = 0; $i<count($seq[$x]); $i++)
		{
			$co = $seq[$x][$i];
			$height; //semester where course is meant to be taken
			$highestprq=0;  //semester of the latest prerequiste
			$highestcrq=0; //semester of the latest corequiste
			$prereqs=array(); //all prerequisites
			$coreqs=array(); //all corequisites
			if(!is_null($co)) //if course exists
			{
				$height = findSemester($co, $seq);
				if(!is_null($co -> prerequisiteList))
				{
					foreach($co -> prerequisiteList as $p) //extract prerequistes and corequistes
					{
						if($p ->isCorequisite == 0)
							$prereqs = array_merge($prereqs, $p -> prerequisiteChoices);
						else if($p ->isCorequisite == 1)
							$coreqs= array_merge($coreqs, $p -> prerequisiteChoices);
					}
					$highestprq=findHighestSem($prereqs, $seq);
					$highestcrq=findHighestSem($coreqs, $seq);
				}

				if(((min($highestprq, $highestcrq) == $highestprq) || $highestprq == $highestcrq) && $co ->level != 0) //if the latest prereq is after the latest coreq
				{
					for($a = $highestprq-1; $a>$height; $a--) //from the semester after the highest prq to the current semester
					{
						if(findNumberOfPlaces($seq, $a) > 0) //if there is room in the verified semester
						{
							$seq = removeCourse($seq, $co);
							$seq = tryPlaceCourse($seq, $co, $a);
							$a = $height;
						}
					}
				}
				else if((min($highestprq, $highestcrq) == $highestcrq) && $highestcrq != count($seq)-1)//corequisites have the highest height.
				{
					for($a = $highestcrq; $a>$height; $a--) //from the highest coreq
					{
						if(findNumberOfPlaces($seq, $a) > 0) //if there is room in the verified semester
						{
							$seq = removeCourse($seq, $co);
							$seq = tryPlaceCourse($seq, $co, $a);
							$a = $height;
						}
					}
				}
				else //has no coreqs nor prereqs
				{
					$highestprq=findLastEmptySemester($seq);
					for($a = $highestprq; $a>$height; $a--)
					{
						if(findNumberOfPlaces($seq, $a) > 0)
						{
							$seq = removeCourse($seq, $co);
							$seq = tryPlaceCourse($seq, $co, $a);
							$a = $height;
						}
					}
				}
			}
		}
		/*
		if(empty($seq[$x][0]))
		{
			unset($seq[$x]);
		}
		*/
	}

	return $seq;
}

function removeCourse($s, $co)
{
	$rows = (count($s)); //these are our total semeseters
	$cols = (count($s[0])); //these are our slots per semester

	for($a = $rows-1; $a >= 0; $a--)
	{
		for($b = (count($s[$a]))-1; $b >= 0; $b--)
		{
			if (!is_null($s[$a][$b]))
			{

				if($s[$a][$b]->id == $co->id)
				{
					$s[$a][$b]=null;
				}
			}
		}
	}
	if(notContain($co, $s))
	return $s;
}



function tryPlaceCourse($seq, $co, $sem)
{
	for($b = 0; $b<count($seq[$sem]); $b++)  //find room and place course
		{
			if(is_null($seq[$sem][$b]))
			{
				$seq[$sem][$b]=$co;
				$b=count($seq[$sem]);
			}
		}
	return $seq;
}

/**
 * Finds the highest semester of a list of multiple courses
 */
function findHighestSem($rq, $seq)
{
	if(array_key_exists(0, $rq))
	{
		foreach($rq as $co)
		{
			if(!is_null($co))
				$ret[] = findSemester($co, $seq);
		}
		return max($ret);
	}
	else
		return count($seq)-1;
}

function findSemester($co, $s)
{
	$rows = (count($s)); //these are our total semeseters
	$cols = (count($s[0])); //these are our slots per semester
	$ret = $rows-1;
	if(is_null($co))
		return 0;
	else {
		for($a = $rows-1; $a >= 0; $a--)
		{
			for($b = (count($s[$a]))-1; $b >= 0; $b--)
			{
				if(!is_null($s[$a][$b]))
				{
					if(($s[$a][$b] -> id) == ($co -> id))
						return $ret;
				}
			}
			$ret = $ret-1;
		}
	}
	return 0;
}

/**
 * Finds number of empty places in a semester
 */
function findNumberOfPlaces($seq, $sem)//sequence and semester
{
	$ret = 0;
	for($b = 0; $b<count($seq[$sem]); $b++)
	{
		if(is_null($seq[$sem][$b]))
			$ret += 1;
	}
	return $ret;
}

function findLastEmptySemester($s) //initialized sequence as input
{
	$rows = (count($s)); //these are our total semeseters
	$cols = (count($s[0])); //these are our slots per semester
	$ret = $rows-1;

	for($a = $rows-1; $a >= 0; $a--)
	{
		for($b = (count($s[$a]))-1; $b >= 0; $b--)
		{
			if(($s[$a][$b]) == '')
				return $ret;
		}
		$ret = $ret-1;
	}
	return 0;
}

function compressIt($sequenceInfo, &$sequence, $rowNumber, $requiredSoFar){
	//gets prerequisites required of every course in this row

	foreach ($sequence[$rowNumber] as $course){
		//for every course in side your row
		if($course != null)
		foreach ($course->prerequisiteList as $prerequisite){
			if($prerequisite != null)
				$requiredSoFar = array_merge($requiredSoFar,getPrerequisitesFirstRun($course));
		}
	}


	foreach ($sequence[$rowNumber] as $blank){
		$realGhetto = 0;
		if ($blank == null){
			//for every blank space
			for ($i = $rowNumber+1; $i < sizeof($sequence) ; $i++){
				//for every semester after this one
				foreach ($sequence[$i] as $course){
					//for every course in those semesters

					$THISONE = $course;
					//if it's not required (i.e. can be moved)
					foreach ($requiredSoFar as $required){
						if ($course != null && $course->name == $required->name){
							$THISONE = null;
						}
					}

					//do THIS!
					if ($THISONE != null){
						moveCourse($course, $sequence[$i], $sequence[$rowNumber]);
						$requiredSoFar = array_merge($requiredSoFar,getPrerequisitesFirstRun($course));
						$realGhetto = 1;
					}
				if ($realGhetto == 1)
					break;
				}
			if ($realGhetto == 1)
				break;
			}
		}
	}

	foreach ($sequence[$rowNumber] as $course){
		//get's corequisites
		if($course != null)
		foreach ($course->prerequisiteList as $prerequisite){
			if($prerequisite != null)
				if($prerequisite->isCorequisite == 1)
					$requiredSoFar[] = $prerequisite->prerequisiteChoices[0];
		}
	}

	if ($rowNumber+1 < sizeof($sequence))
		compressIt($sequenceInfo, $sequence, $rowNumber+1, $requiredSoFar);
}

function getPrerequisitesFirstRun($course){
	$prerequisites =  array();
	if($course != null)
	foreach ($course->prerequisiteList as $prerequisite){
		if($prerequisite != null){
			$prerequisites = array_merge($prerequisites, getPrerequisites($prerequisite->prerequisiteChoices[0]));
			if ($prerequisite->isCorequisite == 0)
				$prerequisites[] = $prerequisite->prerequisiteChoices[0];
		}
	}
	return $prerequisites;
}

function getPrerequisites($course){
	$prerequisites =  array();
	if($course != null)
	foreach ($course->prerequisiteList as $prerequisite){
		if($prerequisite != null){
			$prerequisites = array_merge($prerequisites, getPrerequisites($prerequisite->prerequisiteChoices[0]));
			$prerequisites[] = $prerequisite->prerequisiteChoices[0];
		}
	}
	return $prerequisites;
}

function moveCourse($course, &$source, &$destination){
	foreach ($source as $key => $here){
		if ($here != null && $here->name == $course->name){
			$source[$key] = null;
		}
	}
	for ($i = 0; $i < sizeof($destination) ; $i++){
		if ($destination[$i] == null){
			$destination[$i] = $course;
			break;
		}
	}
}

function rearrangeSemester(&$sequence){
	if (!empty($sequence[0])){
		$sizeSequence = count($sequence);
		$coursesToBeMoved = array();
		$courseLoad = count($sequence[0]);
		for ($i = 0; $i < $sizeSequence; $i++){
			if (findNumberOfPlaces($sequence, $i) != 0){
				$courseCount = 0;
				foreach($sequence[$i] as $slot){
					if (!is_null($slot)){ //if not null, save the course
						$coursesToBeMoved [$courseCount] = $slot;
						$courseCount++;
					}
				}
				$sequence[$i] = array();
				for ($j = 0; $j < $courseLoad; $j++){
					if (array_key_exists($j, $coursesToBeMoved)){
						$sequence[$i][$j] = $coursesToBeMoved[$j];
					}
					else{
						$sequence[$i][$j] = null;
					}
				}
				$coursesToBeMoved = array(); //setting empty
			}
		}
	}
}

/**
 * courses at index $i are placed in relative position to courses with indexes lower than $i based on their levels
*/
//position in array and array
function sortaSorter($i, $cl){
	$placeholder ='';
	if($i-1>=0)
	{
		if($cl[$i-1] -> level < $cl[$i] -> level) //higher levels go up.
		{
			$placeholder = $cl[$i-1];
			$cl[$i-1] = $cl[$i];
			$cl[$i] = $placeholder;
			$cl = sortaSorter($i-1, $cl);
		}
	}
	return $cl;
}

function sortByLevel($cl)
{
	for($i = 0; $i< count($cl); $i++)
		$cl=sortaSorter($i, $cl);

	return $cl;
}

function initSequence($cLoad)
{
	$sequence = array();
	$sequence[0]=array();  //0 is the last semester
	for($b = 0; ($b < $cLoad); $b++)
		$sequence[0][$b]= null ;
	return $sequence;
}

function outputByLevel($start, $seq, $co)
{
	$courseload = count($seq[0]);
	if(!array_key_exists($start, $seq)) //if the current semester doesn't exists, we create it. haha :)
	{
		$seq[]=array();
		for($a=0; $a<count($seq[0]); $a++)
			$seq[$start][$a]=null;
	}
	$spotsOnLevel = findNumberOfPlaces($seq, $start);
	if($spotsOnLevel != $courseload) //if there are unclaimed spots on this row
	{
		if($co -> level != $seq[$start][0]->level || $spotsOnLevel == 0)// if current course
			$seq = outputByLevel($start+1, $seq, $co);
		else
		{
			for($b = 0; $b<count($seq[$start]); $b++)  //find room and place course
			{
				if(is_null($seq[$start][$b]))
				{
					$seq[$start][$b]=$co;
					$b=count($seq[$start]);
				}
			}
		}
	}
	else
	{
		for($b = 0; $b<count($seq[$start]); $b++)  //find room and place course
		{
			if(is_null($seq[$start][$b]))
			{
				$seq[$start][$b]=$co;
				$b=count($seq[$start]);
			}
		}
	}
	return $seq;
}

function printSeq($seqs) //prints sequence I guess
{
	for($a = 0; $a<count($seqs); $a++)
	{
		for($b = 0; $b<count($seqs[$a]); $b++)
		{
			if(!is_null($seqs[$a][$b]))
				echo $seqs[$a][$b] -> name." ";
		}
		echo '<br>';
	}
}

//Checks if a course is contained in a semester

function notContain($co, $seq)
{
    $rows=count($seq);
    $courseId = $co -> id;
    $objToTest;

    for ($a=0; $a<$rows; $a++){
         for($b=0; $b<count($seq[$a]); $b++){
              if(is_object($seq[$a][$b]))
              {
                   if($courseId==($seq[$a][$b] -> id))
                        return false;
              }
         }
    }
    return true;
}
