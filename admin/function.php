<?php
require ('include/functions.php');
if(isset($_POST['header'])){
	$page=$_POST['page'];
	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$url=$_POST['url'];
	$filename = $_FILES['bgimage']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_".$page.'.'.$ext;
				move_uploaded_file($_FILES['bgimage']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}
	$updateheader=$header->update($page,$title,$paragraph,$url,$new_filename);
	header('Location: header.php');
}
if(isset($_POST['sectionupdate'])){
	$id=$_POST['id'];
	$section=$_POST['section'];
	$paragraph=$_POST['paragraph'];
	$updatesection=$sections->update($section,$paragraph,$id);
	header('Location: sections.php');
}


if(isset($_POST['updatedesc'])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$no=$_POST['sqno'];
	$paragraph=$_POST['paragraph'];
	$url=$_POST['url'];
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_".$url.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}
	$updateservice=$services->update($id,$title,$paragraph,$url,$new_filename,$no);
	header('Location: services.php?id='.$id);
}


if(isset($_POST['updatesection'])){
	$serviceid=$_POST['servieid'];
	$id=$_POST['id'];
	$section=$_POST['section'];
	$paragraph=$_POST['paragraph'];
	$updatesection=$sections->update($section,$paragraph,$id);
	header('Location: services.php?id='.$serviceid);
}




if(isset($_POST['sersec'])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$filename = $_FILES['bgimage']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_IMG".'.'.$ext;
				move_uploaded_file($_FILES['bgimage']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}
	$sersec=$services->insersersec($id,$title,$paragraph,$new_filename);
	header('Location: services.php?id='.$id);
}
if(isset($_POST['Updatesersec'])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_IMG".'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}
	$sersec=$services->updatesersec($id,$title,$paragraph,$new_filename);
	header('Location: servicesec_edit.php?id='.$id);
}
if(isset($_POST['aboutus'])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_".$id.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}
	$updateservice=$employee->aboutupdate($id,$title,$paragraph,$new_filename);
	header('Location: aboutus.php');
}
if(isset($_POST['employee'])){
	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_Emp".'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}
	$updateservice=$employee->inserteply($title,$paragraph,$new_filename);
	header('Location: aboutus.php');
}
if(isset($_POST['aboutusid'])){
	$data=$_POST['aboutusid'];
	echo "<script>alert('".$data."')</script>";
	//echo json_encode($data);
}
if(isset($_POST['blog'])){

	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$filename = $_FILES['blogimage']['name'];
	$category=$_POST['category'];
	$tags=$_POST['tags'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_Blog".'.'.$ext;
				move_uploaded_file($_FILES['blogimage']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}
	if ($category=="Add") {
		$category=$_POST['newcat'];
	}
	$updateservice=$blogs->addblog($title,$paragraph,$new_filename,$category,$tags);
	header('Location: blog.php');
}

if(isset($_POST['updateblog'])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$filename = $_FILES['blogimage']['name'];
	$category=$_POST['category'];
	$tags=$_POST['tags'];
		if ($category=="Add") {
		$category=$_POST['newcat'];
	}
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_Blog".'.'.$ext;
				move_uploaded_file($_FILES['blogimage']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

	$updateservice=$blogs->updateblog($id,$title,$paragraph,$new_filename,$category,$tags);
	header('Location: blog.php');
}
if(isset($_POST['head'])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$page=$_POST['page'];
	$description=$_POST['description'];
	$script=$_POST['script'];
	$robots=$_POST['robots'];
	$keywords=$_POST['keywords'];
	$filename = $_FILES['file']['name'];
	if(!empty($filename)){
				move_uploaded_file($_FILES['file']['tmp_name'], '../assets/img/pages/'.$filename);	
			}
	$updatehead=$header->updatehead($id,$title,$description,$keywords,$robots,$script);
	header('Location: head.php?page='.$page);
}

if(isset($_POST['login'])){
	$username= $_POST['username'];
	$password= md5($_POST['password']);
$user=$header->login($username, $password);
if($user==true){
	 $_SESSION['login'] = true;
	header('Location: index.php');
}else{
	header('Location: login.php?login=false');
}
}
if(isset($_POST['updateabout'])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$paragraph=$_POST['paragraph'];
	$filename = $_FILES['blogimage']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_emply".'.'.$ext;
				move_uploaded_file($_FILES['blogimage']['tmp_name'], '../assets/img/pages/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

	$updateservice=$employee->updateabout($id,$title,$paragraph,$new_filename);
	header('Location: aboutus.php');
}




if(isset($_POST['client'])){
	$name=$_POST['name'];
	$filename = $_FILES['image']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(10,10000)."_client".'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/clients/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

	$clients=$sections->addclients($name,$new_filename);
	header('Location: clients.php');
}


?>