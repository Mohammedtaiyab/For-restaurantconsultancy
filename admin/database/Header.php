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
	public function getDatabyId($id){
		$result =$this->db->con->query("SELECT * FROM header WHERE ID='".$id."'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
public function getallData(){
		$result =$this->db->con->query("SELECT * FROM header");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
public function update($id,$title,$paragraph,$url,$new_filename){
		if($new_filename==''||$new_filename==null){
$result =$this->db->con->query("UPDATE header SET Title='".$title."',Paragraph='".$paragraph."',Button_link='".$url."' WHERE ID='".$id."'");
		}else{
		$result =$this->db->con->query("UPDATE header SET Title='".$title."',Paragraph='".$paragraph."',Button_link='".$url."',Bg_image='".$new_filename."' WHERE ID='".$id."'");
	}
		return $result;
	}
		///////////////////////////////////////////////Head//////////////////////////////
	public function getallhead(){
		$result =$this->db->con->query("SELECT * FROM head");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}

	public function getheadpage($page){
		$result =$this->db->con->query("SELECT * FROM head WHERE Page='".$page."'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}

	public function updatehead($id,$title,$description,$keywords,$robots,$script){
		$result =$this->db->con->query("UPDATE head SET Title='".$title."',Description='".$description."',keywords='".$keywords."',Robots='".$robots."',Script='".$script."' WHERE ID='".$id."'");
	
		return $result;
	}
	/////////////////////////////////////////////head////////////////////////////////////////
	/////////////////////////////////////////////Login///////////////////////////////////////
	public function login($username,$password){
			$result =$this->db->con->query("SELECT * FROM admin WHERE Username='" . $username . "' AND Password='".$password."'");
			
		if (mysqli_num_rows($result) == 0) {
    	return false;
		}else{
				return true;
		}

	}
		/////////////////////////////////////////////Conatct///////////////////////////////////////
	public function getAllcontact(){
		$result =$this->db->con->query("SELECT * FROM contact where Type='0'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function getcontact(){
		$result =$this->db->con->query("SELECT * FROM contact where Type='1'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
}


?>