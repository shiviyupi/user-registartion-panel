<?php
include './conn.php';
if(isset($_POST['sub']))
{
	$id = $_GET['v'];
	$name = $_POST['uname'];
	$email= $_POST['uemail'];
	$password= $_POST['upassword'];
	$ra = $_POST['ura'];
	if(isset($_POST['uqualifications1']))
	{
		$qualifications1 = '1';
	}
	else
	{
		$qualifications1 = '0';
	}
	if(isset($_POST['uqualifications2']))
	{
		$qualifications2 = '1';
	}
	else
	{
		$qualifications2 = '0';
	}
	if(isset($_POST['uqualifications3']))
	{
		$qualifications3 = '1';
	}
	else
	{
		$qualifications3 = '0';
	}
	
	$sq = "UPDATE `xyz` SET `name`='".$name."',`email`='".$email."',`password`='".$password."',`expertise`='".$ra."',`btech`='".$qualifications1."',`mtech`='".$qualifications2."',`diploma`='".$qualifications3."' WHERE `Sid` = ".$id; 
	
	$exe = mysqli_query($conn, $sq);
	echo '<script>alert("Updation Success");</script>';
	header('location:userdetails.php');
}
else{
	header('location:userdetails.php');
}
?>