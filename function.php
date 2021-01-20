<?php
require ('include/functions.php');

if(isset($_POST['contact'])){

	$fname=$_POST['fname'];
	$lname='';
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$company=$_POST['company'];
	$location=$_POST['location'];
	$category='';
	$budget='';
	$service=$_POST['service'];
	$subscribe=0;
	if(isset($_POST['subscribe'])){
		$subscribe=1;
	}
	$msg=$_POST['msg']."<br>Interested into Services :-".implode(', ', $service);

//echo $fname." ".$lname." ".$email." ".$phone." ".$msg." ".$budget."  ".$company." ".$location." ".$category;
$conatact=$header->contact($fname,$lname,$email,$phone,$msg,$subscribe,$budget,$company,$location,$category);
echo "<script>alert('success');</script>";
	header('Location: contact.php');
}
?>