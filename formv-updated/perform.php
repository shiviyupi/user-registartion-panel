<?php
include './conn.php';

if(isset($_POST['update']))
{
	$id = $_POST['getid'];
	
	$sql = "SELECT * FROM `xyz` WHERE `Sid` =".$id;
	$execute = mysqli_query($conn, $sql);
	$r = mysqli_fetch_row($execute);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Update Record</title>
  </head>
  <body>
  
  
  
  <form method="post" action="performaction.php?v=<?php echo $id?>"> 

        <div class="form-group">
          <label for="exampleInputEmail1">  <STRONG>    NAME</STRONG>  </label>
          <input type="text" id="t1" 
          name="uname" placeholder="enter your name" value="<?php echo $r[1]?>" class="form-control formfield w0"  aria-describedby="emailHelp">
     
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"> <STRONG>    EMAIL</STRONG> </label>
            <input type="text" id="t2" placeholder="enter your email address" name="uemail" value="<?php echo $r[2]?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">  <STRONG>    PASSWORD</STRONG> </label>
          <input type="password"  placeholder="password" name="upassword" id="t3" class="form-control" value="<?php echo $r[3]?>" id="exampleInputPassword1">
        </div>
    
        <div class="form-group">
            <label for="exampleInputPassword1"><STRONG>    EXPERTISE</STRONG>  </label>
        <div class="form-check">
            <input class="form-check-input"  name="ura" value="fresher" id="t4" type="radio">
            <label class="form-check-label" for="exampleRadios1">
                <STRONG>   FRESHER</STRONG>  
            </label> </div> 
              <div class="form-check">
            <input class="form-check-input" value="experienced" name="ura" id="t5"type="radio" >
            <label class="form-check-label" for="exampleRadios1">
            <STRONG>    EXPERIENCED</STRONG>  
            </label>
           
          </div>
          <div class="form-check">
            <input class="form-check-input" name="ura"
             type="radio"   id="t6" value="student" >
            <label class="form-check-label" for="exampleRadios1">
                <STRONG>    STUDENT</STRONG>  
            </label>
           
          </div>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><STRONG >QUALIFICATIONS </STRONG></label>
        <div class="form-group form-check">
          <input  type="checkbox"   value=1 name="uqualifications1" id="t7" class="form-check-input"  >
          <label class="form-check-label" for="exampleCheck1">       <STRONG>    BTECH</STRONG>  </label>
        </div>
        
        <div class="form-group form-check">
            <input type="checkbox"  value=1 name="uqualifications2" id="t8" class="form-check-input" >
            <label class="form-check-label" for="exampleCheck1">        <STRONG>    MTECH</STRONG>  </label>
          </div>
          
        <div class="form-group form-check">
            <input type="checkbox"  value=1 name="uqualifications3"  id="t9" class="form-check-input" >
            <label class="form-check-label" for="exampleCheck1">       <STRONG>    DIPLOMA</STRONG>  </label>
          </div>
          </div>


          <input type="submit" value="UPDATE"  name="sub" class="btn btn-danger">

        
    
        </div>
  
</form> 
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>






<?php
}
else if(isset($_POST['delete']))
{
	$id = $_POST['getid'];
	$sql = "DELETE FROM `xyz` WHERE `Sid` = ".$id;
    $execute = mysqli_query($conn, $sql);
	header('location:userdetails.php');
}
else
{
 echo '<script>alert("Deletion Success")</script>';
 header('location:userdetails.php');
}
?>