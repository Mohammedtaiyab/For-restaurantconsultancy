<?php
class DBcontroller
{
	
<<<<<<< HEAD
	// 	protected $host ='localhost';
	// protected $user='root';
	// protected $password="";
	// protected $database="u613418722_Forrestaurant";
	protected $host ='localhost';
	protected $user='u511712962_Forrestaurant';
	protected $password="Forrestaurant@123";
	protected $database="u511712962_Forrestaurant";
=======
		protected $host ='localhost';
	protected $user='u511712962_Forrestaurant';
	protected $password="Forrestaurant@123";
	protected $database="u511712962_Forrestaurant";

>>>>>>> 1f28d4187baf702cce340db5611a8dcc765882dc
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
