<?php
class Services
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}
	public function getallData(){
		$result =$this->db->con->query("SELECT * FROM services");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function getDataid($id){
		$result =$this->db->con->query("SELECT * FROM services WHERE ID=".$id);
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function update($id,$title,$short_desc,$link,$image){
			if(!$image==''|| !$image==null){
		$result =$this->db->con->query("UPDATE services SET Title='".$title."',Short_Description='".$short_desc."',Button_link='".$link."',Image='".$image."' WHERE ID=".$id);}
		else{
			$result =$this->db->con->query("UPDATE services SET Title='".$title."',Short_Description='".$short_desc."',Button_link='".$link."' WHERE ID=".$id);
		}
		return $result;
	}
		public function updatesect($id,$title,$long_desc){
		$result =$this->db->con->query("UPDATE services SET Section_title='".$title."',Long_Description='".$long_desc."' WHERE ID=".$id);
		return $result;
	}
	public function insersersec($id,$title,$paragraph,$new_filename){
	
		$sql="INSERT INTO services_section(Service_ID,Title,Description,Image) VALUES (".$id.",'".$title."','".$paragraph."','".$new_filename."')";
		echo $sql;
			$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted 2");
		return $result;
	}
		public function servicessection($id){
		$result =$this->db->con->query("SELECT * FROM services_section WHERE Service_ID=".$id);
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function servicessectionbyid($id){
		$result =$this->db->con->query("SELECT * FROM services_section WHERE ID=".$id);
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function updatesersec($id,$title,$paragraph,$image){
		if(!$image==''|| !$image==null){
		$sql="UPDATE `services_section` SET Title='".$title."',Description='".$paragraph."',Image='".$image."' WHERE ID=".$id;
			}else{
				$sql="UPDATE `services_section` SET Title='".$title."',Description='".$paragraph."' WHERE ID=".$id;
		
			}

			$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted 2");
		return $result;
	}
}


?>