<?php
session_start(); 
error_reporting(0);
 if($_SESSION['email']==false){
   header('location:adminlogin.php');
 }
?>
<!doctype html>
<html lang="en">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <head>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
#head1{
margin-top: 10px;}

   #t1{
    color:red;
   }

   #t3{
    color:red;
   }

   #t2{
    color:red;
   }


   #t4{
    color:red;
   }

   #t5{
    color:red;
   }

   #t6{
    color:red;
   }
    </style>
<script>
$('#t2').attr("autocomplete", "off");
setTimeout('$("#t2").val("");' ,1000);
$('#t3').attr("autocomplete", "off");
setTimeout('$("#t3").val("");', 1000);

 $nameo= document.getElementById('#t1');

function namecheck(){
  var x = document.forms["myForm"]["name"].value;
//  var x=document.getElementById("#t1")

  if (x == '') {
    alert("Name must be filled out");
    return false;
  }
  return true;
  
}
function pass(){
   // var y=document.getElementById("#t2")
  var y= document.forms["myForm"]["password"].value;
  if (y == "") {
    alert("Password must be filled out properly");
    return false;
  }
  return true;
  
}
function emailcheck(){
   
  var a= document.forms["myForm"]["email"].value;
  //var x=document.myform.email.value;  
var atposition=a.indexOf("@");  
var dotposition=a.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length || a==""){   
  alert("Please enter a valid e-mail address");  
  return false;}
  return true;
  
 
 
}
    
    function radioche(){
 // var z= document.forms["myForm"]["ra"].value;
  if (document.getElementById("t4").checked == false && document.getElementById("t5").checked == false && 
   document.getElementById("t6").checked == false  )   {
    alert("Expertise should be filled correctly");
return false;
  }

return true;

}
 function checkboxo(){
  //var q = document.forms["myForm"]["qualifications[]"].value;
  if (document.getElementById("t7").checked == false && document.getElementById("t8").checked == false && 
   document.getElementById("t9").checked == false )  
   
    {
    alert("Qualifications should be filled correctly");
    return false;
}
return true;
}

function validate()
{ 

 var n = namecheck();
 var p = pass();
 var e = emailcheck();
 var r = radioche();
 var c = checkboxo();

if(n && p && e && r && c)
{
  return true;
}
return false;

  }

  
</script>

  

<title> Edit your   details here</title>

</head>
<body>


  <div class="container">

  


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> <STRONG> ADMIN PANEL </STRONG></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

        <a class="btn btn-danger" href="userdetails.php">Back <span class="sr-only">(current)</span></a>
      </li> &nbsp;
      <li class="nav-item active">
      <form action="action.php " method="post">
<input type = "submit" value="Logout" name="logout" class="btn btn-danger"> </form>
      </li>
    
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="head1" class="alert alert-primary" role="alert">  
    
    <h1 id="head1" class="text-center">  EDIT YOUR <script> {nameo} </script>FORM</h1>
</div> 





   
<form name="myForm"  onsubmit=" return (validate());" action="edit.php"  method="post" > 

        <div class="form-group">
          <label for="exampleInputEmail1">   <!--  <STRONG>    NAME</STRONG>-->  </label>
          <input type="text" id="t1" 
          name="name" placeholder="enter your new name"  class="form-control formfield w0"  aria-describedby="emailHelp">
     
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"> <!--      <STRONG>    EMAIL</STRONG> --> </label>
            <input type="text" id="t2" placeholder="enter your  new email address" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">   <!--   <STRONG>    PASSWORD</STRONG> --> </label>
          <input type="password"  placeholder="password" name="password" id="t3" class="form-control" id="exampleInputPassword1">
        </div>
    
        <div class="form-group">
            <label for="exampleInputPassword1"> <!--     <STRONG>    EXPERTISE</STRONG> -->  </label>
        <div class="form-check">
            <input class="form-check-input"  name="ra" value="fresher"id="t4" type="radio">
            <label class="form-check-label" for="exampleRadios1">
                <STRONG>   FRESHER</STRONG>  
            </label> </div> 
              <div class="form-check">
            <input class="form-check-input" value="experienced" name="ra" id="t5"type="radio" >
            <label class="form-check-label" for="exampleRadios1">
            <STRONG>    EXPERIENCED</STRONG>  
            </label>
           
          </div>
          <div class="form-check">
            <input class="form-check-input" name="ra"
             type="radio"  id="t6" value="student" >
            <label class="form-check-label" for="exampleRadios1">
                <STRONG>    STUDENT</STRONG>  
            </label>
           
          </div>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><!-- <STRONG >QUALIFICATIONS </STRONG></label>-->
        <div class="form-group form-check">
          <input  type="checkbox" value=1 name="qualifications1" id="t7" class="form-check-input"  >
          <label class="form-check-label" for="exampleCheck1">       <STRONG>    BTECH</STRONG>  </label>
        </div>
        
        <div class="form-group form-check">
            <input type="checkbox"   value=1 name="qualifications2" id="t8" class="form-check-input" >
            <label class="form-check-label" for="exampleCheck1">        <STRONG>    MTECH</STRONG>  </label>
          </div>
          
        <div class="form-group form-check">
            <input type="checkbox"  value=1 name="qualifications3"  id="t9" class="form-check-input" >
            <label class="form-check-label" for="exampleCheck1">       <STRONG>    DIPLOMA</STRONG>  </label>
          </div>
          </div>


          <input type="submit" value="Update"  name="sub" class="btn btn-danger">

        
    
        </div>
  
</form> 

</script>

<script>



          $("input").on("keypress", function(e) {
    if (e.which == 32 && !this.value.length)
        e.preventDefault();
});


        
</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </body>
</html>




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
	//	echo 'Password right <br>';
      // exit('');
	}
	else{
	//	echo "wrong <br>";
	}
	}

function emailverify(){
	$email = $_POST ["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    //echo "Your valid email address is: " .$email;  
}  
}

  function nameverify(){
  $name=$_POST ["name"];  
  if($name==""){
	$ErrMsg = "Name cannot be blank .";  
	echo $ErrMsg; 
  }
else{
	// echo " Your name is :".$name;
}

  }


 function qualification(){
 
     
if(isset($_POST['ra']) || isset($_POST['ra']) || isset($_POST['ra']) ){
     
		//echo "Your qualification details has been recieved";
	 }
	 else{
		//echo "Your qualification details has not been recieved";
	 }
}
 function expertise(){
    
	if(isset($_POST['ra']) || isset($_POST['ra']) || isset($_POST['ra']) ){
		//echo "Your expertise details has been recieved";
	}
	else{
	 //  echo "Your  expertise details has not been recieved";
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
   $ca1= $_POST['qualifications1'];
   $ca2= $_POST['qualifications2'];
   $ca3= $_POST['qualifications3'];
   

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
    
   
    $sql = "SELECT * FROM `xyz` ";

    $execute = mysqli_query($conn, $sql);
    
    $rows = mysqli_num_rows($execute);
 
    if($rows > 0 )
    {
        while($row = mysqli_fetch_array($execute)){
     $re= $row['Sid']  ; 
        
    
  $sql=" UPDATE `xyz` SET `name`= '".$name."',`email`= '".$email."' ,
   `password`='".$password."',`expertise`='".$ra."',`btech`= '".$ca1."' `mtech`= '".$ca2."',`diploma`= '".$ca3."'
    WHERE   `sid`='".$re."'   ";
    
         echo $sql;
    $execute = mysqli_query($conn, $sql);
    
   //$rows = mysqli_num_rows($execute);
    
	
	if($execute)
	{
		echo 'modified';
		///header('location:./userdetails.php');
		
	} } }
	else
	{
		echo '<script>alert("Insertion Failed")</script>';
	}
}  
/*
if(isset($_POST['logout']))
{

   session_unset();
   session_destroy();
   header('location:adminlogin.php');

}
?>
*/


?>