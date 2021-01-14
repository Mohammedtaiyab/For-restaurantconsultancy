<?php
class Header
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}

public function getData($page){
		$result =$this->db->con->query("SELECT * FROM header WHERE Page='".$page."'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function gethead(){
		$result =$this->db->con->query("SELECT * FROM head");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function contactpop($fname,$lname,$email,$phone,$msg,$subscribe){
			$sql="INSERT INTO contact(Fname,Lname,Email,Phone,Message,Subscribed,Status) VALUES ('".$fname."','".$lname."','".$email."','".$phone."','".$msg."',".$subscribe.",0)";
			$result = mysqli_query($this->db->con,$sql) or die(mysqli_error($this->db->con));
			return $result;
	}
	public function contact($fname,$lname,$email,$phone,$msg,$subscribe,$budget,$company,$location,$category){
			$sql="INSERT INTO contact(Fname,Lname,Email,Phone,Message,Subscribed,Budget,Company,Location,Category,Status) VALUES ('".$fname."','".$lname."','".$email."','".$phone."','".$msg."',".$subscribe.",'".$budget."','".$company."','".$location."','".$category."',0)";
			$result = mysqli_query($this->db->con,$sql) or die(mysqli_error($this->db->con));
			return $result;
	}

}


?>