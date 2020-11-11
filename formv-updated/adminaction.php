<?php
session_start();
include './conn.php';
$e= $_POST ["email"];
$p= $_POST ["password"];
	$sql = "SELECT `email`, `password` FROM `admin` WHERE `email` ='".$e."'  AND `password`='".$p."'";
	$execute = mysqli_query($conn, $sql);
    
    $rows = mysqli_num_rows($execute);

    if($rows > 0 )
    {
        $_SESSION['email'] = $e;
        header('location:./test.php');
    }
    else{
        echo "<script> alert('User not found'); </script>";
    }


?>