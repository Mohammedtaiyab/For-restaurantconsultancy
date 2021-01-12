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
		public function getAllData(){
		$result =$this->db->con->query("SELECT * FROM sections");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	
	}
		public function getDatabyid($id){
		$result =$this->db->con->query("SELECT * FROM sections WHERE ID=".$id);
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	
	}
	public function update($section,$paragraph,$id){
		$result =$this->db->con->query("UPDATE sections SET Section='".$section."', Paragraph='".$paragraph."' WHERE ID=".$id);
		return $result;
	
	}
	
}


?>