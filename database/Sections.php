<?php
class Sections
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}
	public function getData($section){
		$result =$this->db->con->query("SELECT * FROM sections WHERE Page='".$section."'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	
	}
	
	public function getClients(){
		$result =$this->db->con->query("SELECT * FROM clients WHERE Status=1");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	
	}
}


?>