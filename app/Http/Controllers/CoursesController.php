<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Courses;

use App\SequenceTree;

use DB;

//include (app_path().'\Daniel\phpFunctions.php');

class CoursesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function generateSequence(){

    $userProgram = DB::table('courses')
		->join('courseprogram' , 'courses.course_id', '=' , 'courseprogram.course_id')
		->where('program_id','=','1')
		->where('course_type','=','program_course')
        ->lists('courses.course_id');
    //$userProgram = array('218');//,'218','39','174'

		$sequenceInfo = SequenceTree::getOutput($userProgram);
		$sequenceInfo = sortByLevel($sequenceInfo);
		$courseLoad=4;

		$sequence = initSequence($courseLoad);
		foreach($sequenceInfo as $si2)
			$sequence = outputByLevel(0, $sequence, $si2);

		for ($i = 0; $i < sizeof($sequence); $i++)
			compressIt($sequenceInfo, $sequence, $i, []);

		//printSeq($sequence);
		//$sequence=compressSequence($sequence);
		//printSeq($sequence);
		//moveCourse($sequence[1][0], $sequence[1], $sequence[0]);

		return view('courses.sequence')->with(['sequence'=>$sequence, 'sequenceInfo'=>$sequenceInfo]);

	}
		/*
    // this will be removed
    public function index()
    {
        $electives = Courses::getProgramElectivesList();
        $courses = Courses::getProgramCoursesList();

    	return view('courses.index', compact('courses', 'electives'));
    }

    // sends a list of courses that are left to do for the logged in user to a view
    public function addCompletedCourses()
    {
        $courses = Courses::getOneProgramCoursesList();
        return view('courses.completedCourses', compact('courses'));
    }
		*/
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
	foreach ($destination as $key => $here){
		if ($here == null){
			$destination[$key] = $course;
			break;
		}
	}
}

/**
 * Returns earliest empty semester
 */
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

/**
* Returns whether or not a course is in an array based on its id
*/
function inArrayCourse($c, $cl)
{
	for ($i=0; $i<count($cl); $i++)
	{
		if($c->getId() == $cl[$i]->id)
			return true;
	}
	return false;
}

/**
 * Initializes a sequence based on course load
 */
function initSequence($cLoad)
{
	$sequence = array();
	$sequence[0]=array();  //0 is the last semester
	for($b = 0; ($b < $cLoad); $b++)
		$sequence[0][$b]= null ;
	return $sequence;
}

/**
 * Checks if a course is contained in a semester
 */
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

function sortByLevel($cl)
{
	for($i = 0; $i< count($cl); $i++)
		$cl=sortaSorter($i, $cl);

	return $cl;
}

/**
 * courses at index $i are placed in relative position to courses with indexes lower than $i based on their levels
 */
function sortaSorter($i, $cl) //position in array and array
{
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

/**
 * This function plants a course and their their prereq/coreq trees within a sequence starting at a specified semeseter
 */
function plantTrees($start, $seq, $co) // semester, sequence, and current course.
{
	$prereqs= array();
	$coreqs= array();
	$nextStart=$start+1; //semester for next iteration
	if(!array_key_exists($start, $seq)) //if the current semester doesn't exists, we create it. haha
	{
		$seq[]=array();
		for($a=0; $a<count($seq[0]); $a++)
		{
			$seq[$start][$a]=null;
		}
	}

	$spotsOnLevel = findNumberOfPlaces($seq, $start);

	//printSeq($seq);
	if(!empty($co -> prerequisiteList))
	{
		//echo "HAS PRQS MAN \n";
		foreach($co -> prerequisiteList as $p) //extract prerequistes and corequistes
		{
			//echo " prqCount: ".count($co -> prerequisites)." ";
			//echo "prqID: ".$p -> prerequisiteChoices[0]->name."\n";
			if($p ->isCorequisite == 0)
				$prereqs[] = $p -> prerequisiteChoices[0];

			else if($p ->isCorequisite == 1)
				$coreqs[] = $p -> prerequisiteChoices[0];
		}

		$prereqs=sortByLevel($prereqs);
		$coreqs=sortByLevel($coreqs);
	}
	if(notContain($co, $seq)) //if the course is not already placed in sequence
	{
		//place course
		if($spotsOnLevel>0) //if there is room in current semester
		{
			//echo "placing course".$co->level."\n";
			for($b = 0; $b<count($seq[$start]); $b++)  //find room and place course
			{
				if(is_null($seq[$start][$b]))
				{
					$seq[$start][$b]=$co;
					$b=count($seq[$start]);
				}
			}
		}
		else //if there is only room bellow
		{
			$seq=plantTrees($nextStart, $seq, $co);
			$nextStart=$nextStart+1; //decremented to ensure prereqs will then be properly placed
		}

		//place prereqs
		if(!empty($prereqs))
		{
			//echo "pRQ";
			foreach($prereqs as &$prq)
					$seq=plantTrees($nextStart, $seq, $prq);
		}
		//place coreqs
		if(!empty($coreqs))
		{
			foreach($coreqs as &$crq)
			{
				//echo "CRQ".$crq -> name;
				if($crq -> level >= $start) //if the level of the crq is higher the current semester, then it must be first attempted to be placed at the same level as its parent.
					$seq=plantTrees($nextStart-1, $seq, $crq);
				else
					$seq=plantTrees($nextStart, $seq, $crq);
			}
		}
	}
	return $seq;
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

function compressSequence($seq)
{
	$seqsize = count($seq);
	$sem = $seqsize - 2;  //starting semester is the second semester.
	for ($x = $sem; $x>=0; $x--)
	{
		//echo "<br> x:$x (Semeseter: ".($seqsize-$x).")";
		for ($i = 0; $i<count($seq[$x]); $i++)
		{
			$co = $seq[$x][$i];
			$height; //semester where course is meant to be taken
			$highestprq=0;  //semester of the latest prerequiste
			$highestcrq=0; //semester of the latest corequiste
			$prereqs=array(); //all prerequisites
			$coreqs=array(); //all corequisites
			//echo "<br> i: ".$i." ";
			if(!is_null($co)) //if course exists
			{
				$height = findSemester($co, $seq);
				//echo "ceci n'est pas un null";
				if(!is_null($co -> prerequisiteList))
				{
					//echo " ".$co -> name." ";
					foreach($co -> prerequisiteList as $p) //extract prerequistes and corequistes
					{
						//echo " prqCount: ".count($co -> prerequisiteList)." ";
						//echo "prqID: ".$p -> prerequisiteChoices[0]->name."\n";
						if($p ->isCorequisite == 0)
							$prereqs = array_merge($prereqs, $p -> prerequisiteChoices);
						else if($p ->isCorequisite == 1)
							$coreqs= array_merge($coreqs, $p -> prerequisiteChoices);
					}
					$highestprq=findHighestSem($prereqs, $seq, 0);
					$highestcrq=findHighestSem($coreqs, $seq, 1);
				}

				if((max($highestprq, $highestcrq) == $highestprq || $highestprq == $highestcrq) && $highestprq != -1) //if the lates prereq is after the latest coreq
				{
					//echo " prq rule: ".$highestprq."<br>";
					//echo "height: $height ,highest prereq: $highestprq";
					for($a = $highestprq-1; $a>$height; $a--) //from the semester after the highest prq to the current semester
					{
						//echo " place num: ".findNumberOfPlaces($seq, $a);
						if(findNumberOfPlaces($seq, $a) > 0) //if there is room in the verified semester
						{
							//echo " got if prq ";
							$seq = removeCourse($seq, $co);
							$seq = tryPlaceCourse($seq, $co, $a);
							$a = $height;
						}
					}
				}
				else if(max($highestprq, $highestcrq) == $highestcrq && $highestcrq != -1)//corequisites have the highest height.
				{
					//echo " crq rule: ".$highestcrq."<br>";
					//echo "height: $height ,highest coreq: $highestcrq";
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
					//echo "no coreqs or prereqs";
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
			echo $x;
			unset($seq[$x]);
		}
		*/
	}

	return $seq;
}


function reCompressSequence($seq)
{
	$seqsize = count($seq);
	for($a = 0; $a<$seqsize; $a++)
	{
		for($b = 0; $b<count($seqsize); $b++)
		{

		}

	}
	return $seq;
}


function removeCourse($s, $co)
{
	//echo var_dump($co);
	//echo "removing: ".$co -> name;
	$rows = (count($s)); //these are our total semeseters
	$cols = (count($s[0])); //these are our slots per semester

	for($a = $rows-1; $a >= 0; $a--)
	{
		for($b = (count($s[$a]))-1; $b >= 0; $b--)
		{
			//echo "a: $a\n";
			//echo "b: $b\n";
			if (!is_null($s[$a][$b]))
			{
				//echo ($s[$a][$b])->id;

				//echo $co->id;
				if($s[$a][$b]->id == $co->id)
				{
					//echo "a: $a\n";
					//echo "b: $b\n";
					$s[$a][$b]=null;
				}
			}
		}
	}
	if(notContain($co, $s))
		//echo "removal successfull!";
	return $s;
}



function tryPlaceCourse($seq, $co, $sem)
{
	//echo " placing: ".$co->name." in semester: ".(count($seq)-$sem);
	for($b = 0; $b<count($seq[$sem]); $b++)  //find room and place course
		{
			if(is_null($seq[$sem][$b]))
			{
				//echo "placed in $sem and $b!";
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
	//echo "<br> rq size: ".count($rq)."\n";
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
		return -1;
}

function findSemester($co, $s)
{
	//echo "finding semester for \n".$co -> id;
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



?>
