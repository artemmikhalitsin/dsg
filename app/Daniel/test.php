<?php 
include 'phpFunctions.php';

///////////////////test stuff///////////
$SOEN248 = new Course(10, array(), array());
$SOEN249 = new Course(20, array($SOEN248), array());
$COMP232 = new Course(1, array(), array($SOEN248));
$SOEN248 -> addCrq($COMP232);
$SOEN352 = new Course(30, array($SOEN248), array());
$SOEN341 = new Course(40, array($SOEN248), array());
$SOEN342 = new Course(50, array($SOEN341), array());
$SOEN343 = new Course(60, array($SOEN342), array());

$courseLoad=4;
$program = array($SOEN248, $SOEN249, $SOEN352, $COMP232, $SOEN341, $SOEN342, $SOEN343);
$cl = $program; //course List. Should be program - academic record. 

////////everything after this line should be placed in functions///////
//initialize sequence, requires courseList and courseLoad
$sequenceSize = count($cl);
echo "SS: $sequenceSize\n";
$semesterCount = ceil( $sequenceSize / $courseLoad); //ceiling of this 
echo "SC: $semesterCount\n";
$sequence = array();
for ($a = 0; $a < $semesterCount; $a++) //creates a 2d empty array
{
	$sequence[$a]=array();
	for($b = 0; ($b < $courseLoad) && ($a * $courseLoad + $b) < $sequenceSize; $b++)
	{
		$sequence[$a][$b]= null ;
	}
}
/// assign level functions. Require CourseList
foreach($cl as &$c) //assign levels based on prerequisites and update stuff
{
	//echo $c -> getPrq();
	$c=assignLevel($c, $cl);
	echo "level: ".$c -> level."\n";
}

foreach($cl as &$c) //assign levels based on corequisites
{
	//echo $c -> getPrq();
	$c=assignCoLevel($c, $cl);
	echo "level: ".$c -> level."\n";
}
///
$cl = sortByLevel($cl); //sort by level to ensure top-down tree placement

foreach($cl as &$c) //soft verification
{
	echo "id: ".$c -> id."::".$c -> level." ";
}
	

foreach($cl as &$c) //plant trees, man. Requires a sroted courseList
{
	$sequence=plantTrees(findLastEmptySemester($sequence), $sequence, $c);
}

echo "\n";
printSeq($sequence);


function printSeq($seqs) //prints sequence I guess
{
	for($a = 0; $a<count($seqs); $a++)
	{
		for($b = 0; $b<count($seqs[$a]); $b++)
		{
			echo $seqs[$a][$b] -> id." "; 
		}
		echo " row $a end \n";
	}
}

?>