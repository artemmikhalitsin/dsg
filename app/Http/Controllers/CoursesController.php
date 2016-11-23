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
        ->lists('course_id');
        //$userProgram = array('348');//,'218','39','174'
		$sequenceInfo = SequenceTree::getOutput($userProgram);
		$sequenceInfo = sortByLevel($sequenceInfo);
		$sequence = initSequence(4);
		foreach($sequenceInfo as $si)
		{
			$sequence=plantTrees(0, $sequence, $si);
		}
		printSeq($sequence);
		return view('courses.sequence')->with(['sequenceInfo'=>$sequenceInfo]);
		
	}

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
			//echo "a: $a\n";
			//echo "b: $b\n";
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

function initSequence($cLoad)
{
	$sequence = array();
	$sequence[0]=array();  //0 is the last semester
	for($b = 0; ($b < $cLoad); $b++)
		$sequence[0][$b]= null ;
	return $sequence;
}

function notContain($co, $seq)
{
	$rows=count($seq);
	$courseId = $co -> id;
	$objToTest;
	
	for ($a=0; $a<$rows; $a++){
		//echo "\n a".$a." ";
		for($b=0; $b<count($seq[$a]); $b++){
			//echo "b".$b." ";
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

function findNumberOfPlaces($seq, $sem)//sequence and semester
{
	//echo"\n offset? : ".$sem."\n";
	$ret = 0;
	for($b = 0; $b<count($seq[$sem]); $b++)
	{
		if(is_null($seq[$sem][$b]))
			$ret += 1;
	}
	return $ret;
}

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
	$myfile = fopen("errlog.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $start);
	fclose($myfile);
	
	//printSeq($seq);
	if(!empty($co -> prerequisites))
	{	
		//echo "HAS PRQS MAN \n";
		foreach($co -> prerequisites as $p) //extract prerequistes and corequistes
		{
			//echo "prqCount: ".count($co -> prerequisites)."\n";
			//echo "prqID: ".$p -> prerequisiteChoices[0]->id."\n";
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
			foreach($prereqs as &$prq)
					$seq=plantTrees($nextStart, $seq, $prq);
		}
		
		//place coreqs
		if(!empty($coreqs))
		{
			foreach($coreqs as &$crq)
			{
				if($crq -> level >= $start) //if the level of the crq is higher the current semester, then it must be first attempted to be placed at the same level as its parent.
					$seq=plantTrees($nextStart-1, $seq, $crq);
				else
					$seq=plantTrees($nextStart, $seq, $crq);
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


?>