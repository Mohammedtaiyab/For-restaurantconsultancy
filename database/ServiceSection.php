<?php
class ServiceSection
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}
	public function servicepage($page){
		$result =$this->db->con->query("SELECT *,ss.Title AS secTitle,ss.Description AS secDesc,ss.Image AS secImg FROM services_section ss,services WHERE ss.Service_ID=services.ID AND services.Page='".$page."'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	
	}
}


?>