<?php
class DBcontroller
{
	//protected $host ='localhost';
	// protected $user='root';
	// protected $password="";
	// protected $database="u613418722_Forrestaurant";
	protected $host ='localhost';
	protected $user='u511712962_Forrestaurant';
	protected $password="Forrestaurant@123";
	protected $database="u511712962_Forrestaurant";
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
