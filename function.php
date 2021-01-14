<?php
require ('include/functions.php');
if(isset($_POST['contactpop'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	$subscribe=0;
	if(isset($_POST['subscribe'])){
		$subscribe=1;
	}
	$conatact=$header->contactpop($fname,$lname,$email,$phone,$msg,$subscribe);
	header('Location: contact.php');
}
if(isset($_POST['contact'])){

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$company=$_POST['company'];
	$location=$_POST['location'];
	$category=$_POST['category'];
	$budget=$_POST['budget'];
	$service=$_POST['service'];
	$subscribe=0;
	if(isset($_POST['subscribe'])){
		$subscribe=1;
	}
	$msg=$_POST['msg']."<br>Interested into Services :-".implode(', ', $service);

//echo $fname." ".$lname." ".$email." ".$phone." ".$msg." ".$budget."  ".$company." ".$location." ".$category;
$conatact=$header->contact($fname,$lname,$email,$phone,$msg,$subscribe,$budget,$company,$location,$category);
	header('Location: contact.php');
}
?>