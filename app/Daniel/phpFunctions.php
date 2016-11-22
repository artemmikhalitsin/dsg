<?php

namespace App;

/**
*finds the last semester where there is room to plant a tree. Our semesters are the rows of $sequence
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

/**
* Finds and replaces a course in an array
*/
function findAndReplace($c, $cl)
{
	for ($i=0; $i<count($cl); $i++)
	{
		if($c->id == $cl[$i]->id)
			$cl[$i]=$c;
	}
	return $cl;
}

/**
*assigns level to a single class and all of its children, and also generates subtrees. Meant to go in a for loop
*/
function assignLevel($c, $cl) //a course and the final list of courses to take
{
	echo "id: ".$c -> getId()." :: ";
	$currentLevel = -1;
	$prereqs = '';
	$prereqs = $c -> getPrq(); //gets prerequisites
	$c = (array)$c;
	//$c['subtree']=array();
	//$c['subtree'][0]= $c;
	$c = (object)$c; //creates subtree
	
	if(empty($prereqs)) //if course is a leaf, it is treated as a leaf
		$c -> level = 0;
	else
	{
		foreach($prereqs as &$prq)  
		{
			echo $prq -> getId()." ";
			if(!(inArrayCourse($prq, $cl))) 		//if its prerequisites are not meant to be taken (for example they were taken before)
				;					//nothing happens. It will be treated as leaf because of the last line in the else
			else if($prq ->level != -1) //if its prerequisite was already visited and got a height
			{
				$currentLevel=max($currentLevel, $prq->level); //level of parent must be higher
				//$c['subtree']=array_merge($c['subtree'], $prq['subtree']); //its subtree is added to subtree
			}
			else //else the child are unvisited
			{
				$prq=assignLevel($prq, $cl); //get visited
				$prereqs=findAndReplace($prq, $prereqs); //updates prerequisites
				$currentLevel=max($currentLevel, $prq->level); //checks level
				//$c['subtree']=array_merge($c['subtree'], $prq['subtree']); //subtrees added
			}
		}
		$c -> level = ($currentLevel + 1); //level becomes +1 above highest child
	}
	$c -> prerequisites = $prereqs; //ipdates prerequisites
	return $c;
	
}

/*
Ensures all corequisites must have the same height
*/
function assignCoLevel($c, $cl) //class and final list of courses
{
	echo "id: ".$c -> id." :: ";
	$currentHeight = $c -> level;
	$coreqs ='';
	$coreqs = $c -> corequisites;
	
	if(empty($coreqs)) //if no coreqs nothing happens
	{
		;
	}
	else
	{
		$i = 0;
		foreach($coreqs as &$crq) //finds tallest height
		{
			$currentHeight = max($currentHeight, $crq->level); 
		}
		foreach($coreqs as &$crq) //equalizes height of all corequisites
		{
			$crq ->level = ($currentHeight);
			findAndReplace($crq, $coreqs);
		}
		$c -> corequisites = $coreqs;
		$c -> level =($currentHeight);
	}
	
	return $c;
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

function plantTrees($start, $seq, $co) // semester, sequence, and current course
{
	$prereqs = $co -> prerequisites;
	//$coreqs = $co -> corequisites;
	$spotsOnLevel = findNumberOfPlaces($seq, $start);
	$nextStart=$start-1; //semester for next iteration
	if($start<0)
	{
		echo "error";
		return null;
	}
	if(notContain($co, $seq)) //if the course is not already placed in sequence
	{
		//place course
		if($spotsOnLevel>0) //if there is room in current semester
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
		else if(findNumberOfPlaces($start+1, $start) >0) //if course has not been placed and there is room in a semester with its parent
			$seq = plantTrees($start+1, $seq, $co);		
		else //if there is only room bellow
		{	
			$seq=plantTrees($nextStart, $seq, $co);	
			$nextStart=$nextStart-1; //decremented to ensure prereqs will then be properly placed
		}
			
		//place prereqs
		if(!empty($prereqs)) 
		{	
			foreach($prereqs as &$prq)
			{
				if($prq -> level >= $start) //if the level of the prq is higher the current semester, then it must be first attempted to be placed at the same level as its parent.
					$seq=plantTrees($nextStart+1, $seq, $prq);
				else
					$seq=plantTrees($nextStart, $seq, $prq);
			}	
		}
	}
	return $seq;
}	

?>