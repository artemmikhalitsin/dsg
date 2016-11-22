<?php
class course 
{

	function __construct($id, $prq, $crq)
	{
		$this->id = $id;
		$this->prerequisites = $prq;
		$this->corequisites = $crq;
		$this->level = -1;
	}
/*	
	function addCrq($crq)
	{
		$this->corequisites[]=$crq;
	}
*/
	function addPrq($prq)
	{
		$this->prerequisites[]->prerequisite=$prq;
	}
	
	function setPrqs($prqs)
	{
		$this->prerequisites= $prqs;
	}
	
	function getId()
	{
		if (property_exists($this, 'id')) 
			return $this -> id;
	}
	
	function getPrq()
	{
		if (property_exists($this, 'prerequisites')) 
			return $this -> prerequisites;
	}
	
	function getCrq()
	{
		if (property_exists($this, 'corequisites')) 
			return $this -> corequisites;
    }
	
	function getLevel()
	{
		if (property_exists($this, 'level'))
			return $this -> level;
	}
	
	function setLevel($l)
	{
		if (property_exists($this, 'level'))
			$this -> level = $l;
	}
}
?>