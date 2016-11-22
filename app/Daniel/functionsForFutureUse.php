<?php
/**
Places user courses based on the assumption that the user wants to take those courses ASAP. Probably ignorable for now
*/
function placeUserCoursesASAP($uC, $s, $load) //array of userCourses, the sequence as a 2D array, and course load
{
	$sequenceSize = (int) (count($s) * count($s[0]));
	for($a=0; $a<($sequenceSize/$load); $a++)
	{
		for( $b=0; ($b < $load) && ($a+$b < $sequenceSise); $b++) 
		{
			if($a+$b < count($uC)) //implies there are still courses to place
				$s[$a][$b] = $uC[$a+$b]; //places user courses at the minimum positon
		}
	}
	
	return $s;
}


function plantTrees($start, $seq, $co) // semester, sequence, and current course
{
	$prereqs = $co -> prerequisites;
	$coreqs = $co -> corequisites;
	$spotsOnLevel = findNumberOfPlaces($seq, $start);
	$nextStart=$start-1; //semester for next iteration
	if($start<0)
	{
		echo "error";
		return null;
	}
	if(notContain($co, $seq)) //if the course is not already placed in sequence
	{
		//place corequisites
		if ((!empty($coreqs)) && ($spotsOnLevel < ( count($coreqs)+1 ))) //if there are corequisites but their number does not fit in the current semester
		{
			$seq=plantTrees($nextStart, $seq, $co); //try again but in a lower semester instead
		}
		else if(!empty($coreqs)) //coreqs exist and can be placed on the current level
		{	
			//place course
			for($b = 0; $b<count($seq[$start]); $b++) //find empty spot in semester
			{
				if(is_null($seq[$start][$b]))
				{
					$seq[$start][$b]=$co;
					$b=count($seq[$start]);
				}
			}
			//place coreqs
			foreach($coreqs as &$crq) //find empty spot in semester for each coreq
			{
				for($b = 0; $b<count($seq[$start]); $b++)
				{
					if(is_null($seq[$start][$b]))
					{
						$seq[$start][$b]=$crq;
						$b=count($seq[$start]);
					}
				}
			}
			
			//place prereqs
			if(!empty($prereqs))
			{	
				foreach($prereqs as &$prq)
				{
					if($prq -> level >= $start) //if the level of the prq is higher the current semester, then it needs to be placed in the same semester as the parent for everyone to fit in
						$seq=plantTrees($nextStart+1, $seq, $prq);
					else
						$seq=plantTrees($nextStart, $seq, $prq);
				}	
			}
			
			//place prereqs of coreqs
			foreach($coreqs as &$crq)
			{
				$prqOfCrq= $crq -> getPrq(); //preqs of coreqs
				if(! empty($prqOfCrq))
				{
					foreach($prqOfCrq as &$poc)
						$seq=plantTrees($nextStart, $seq, $poc);
				}
			}
		}
		else //no coreqs
		{
			//echo "\n no friends! yay! \n";
			//echo "\n spots on level: ".$spotsOnLevel;
			//place course
			if($spotsOnLevel>0) //if there is room in current semester
			{
				for($b = 0; $b<count($seq[$start]); $b++) 
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
				//echo "\n spots on level: ".$spotsOnLevel;
				$seq=plantTrees($nextStart, $seq, $co);	
				$nextStart=$nextStart-1;
			}
			
			//place prereqs
			if(!empty($prereqs))
			{	
				foreach($prereqs as &$prq)
				{
					//echo "\n placing prq: ".$prq->course_id.":: ". "prq level: ". $prq -> level."\n";
					if($prq -> level >= $start) //if the level of the prq is higher the current semester, then it needs to be placed in the same semester as the parent to make room
						$seq=plantTrees($nextStart+1, $seq, $prq);
					else
						$seq=plantTrees($nextStart, $seq, $prq);
				}	
			}
		}
	}
	return $seq;
}	
?>