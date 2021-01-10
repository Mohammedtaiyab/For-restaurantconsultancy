<?php
class Blogs
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}
	public function getallData(){
		$result =$this->db->con->query("SELECT * FROM blog");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function addblog($title,$paragraph,$new_filename,$category,$tags){
			$addon=date('Y-m-d');
		$sql="INSERT INTO blog(Image,Title,Blog,Addon,Category,Tags) VALUES ('$new_filename','$title','$paragraph','$addon','$category','$tags')";
		$result = mysqli_query($this->db->con,$sql) or die(mysqli_error($this->db->con));
		return $result;
	}
		public function getcategory(){
		$result =$this->db->con->query("SELECT DISTINCT(Category) FROM blog ORDER BY Category DESC;");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
}


?>