<?php
class DBcontroller
{
	
	protected $host ='localhost';
	protected $user='u613418722_forrestaurant';
	protected $password="SoftEzi@123";
	protected $database="u613418722_forrestaurant";

	public $con=null;
public function __construct(){
 	$this->con =mysqli_connect($this->host,$this->user,$this->password,$this->database);
 	if($this->con->connect_error){
 		echo "Fail".$this->con->connect_error;
 	}
 	//echo "Connection Successfull!";
}


public function __destruct(){
 $this->closeConnection();
}
protected function closeConnection(){
	if($this->con!=null){
		$this->con->close();
		$this->con=null;
	}
}
}

?>