<?php
//session_start();
include './conn.php';

	function matchp(){
		$password= $_POST ["password"];
	
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);

	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
		echo 'Password right <br>';
      // exit('');
	}
	else{
		echo "wrong <br>";
	}
	}

function emailverify(){
	$email = $_POST ["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    echo "Your valid email address is: " .$email;  
}  
}

  function nameverify(){
  $name=$_POST ["name"];  
  if($name==""){
	$ErrMsg = "Name cannot be blank .";  
	echo $ErrMsg; 
  }
else{
	 echo " Your name is :".$name;
}

  }


 function qualification(){
 
     
if(isset($_POST['ra']) || isset($_POST['ra']) || isset($_POST['ra']) ){
     
		echo "Your qualification details has been recieved";
	 }
	 else{
		echo "Your qualification details has not been recieved";
	 }
}
 function expertise(){
    
	if(isset($_POST['ra']) || isset($_POST['ra']) || isset($_POST['ra']) ){
		echo "Your expertise details has been recieved";
	}
	else{
	   echo "Your  expertise details has not been recieved";
	}

 }
 

if(isset($_POST['sub']))
{
	
	matchp();
	emailverify();
	nameverify();
	qualification();
	expertise();

	$name = $_POST['name'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$ra = $_POST['ra'];
	if(isset($_POST['qualifications1']))
	{
		$qualifications1 = '1';
	}
	else
	{
		$qualifications1 = '0';
	}
	if(isset($_POST['qualifications2']))
	{
		$qualifications2 = '1';
	}
	else
	{
		$qualifications2 = '0';
	}
	if(isset($_POST['qualifications3']))
	{
		$qualifications3 = '1';
	}
	else
	{
		$qualifications3 = '0';
	}
	
	$sql = 'INSERT INTO `xyz`(`name`, `email`, `password`, `expertise`, `btech`, `mtech`, `diploma`) VALUES ("'.$name.'","'.$email.'","'.$password.'","'.$ra.'","'.$qualifications1.'","'.$qualifications2.'","'.$qualifications3.'")';
	$execute = mysqli_query($conn, $sql);
	
	if($execute)
	{
		echo '<script>alert("Insertion Success")</script>';
		header('location:./userdetails.php');
		
	}
	else
	{
		echo '<script>alert("Insertion Failed")</script>';
	}
}

if(isset($_POST['logout']))
{

   session_unset();
   session_destroy();
   header('location:adminlogin.php');

}
?>