<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ADMIN LOGIN</title>
  </head>
  <body>
    <!-- Default form login -->
<form action="adminaction.php" method="post" class="text-center border border-light p-5"  name="myForm"  onsubmit=" return (validate());" action="#!">

<p class="h4 mb-4"> <strong>   ADMIN LOGIN </strong></p>

<!-- Email -->
<input type="text" name="email"id="t1" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" name="password" id="t2" class="form-control mb-4" placeholder="Password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
       
    </div>
   
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

</form>


<script>
$('#t2').attr("autocomplete", "off");
setTimeout('$("#t1").val("");' ,1000);
$('#t3').attr("autocomplete", "off");
setTimeout('$("#t2").val("");', 1000);
</script>

<script>  
function emailcheck(){
   
  var a= document.forms["myForm"]["email"].value;
var atposition=a.indexOf("@");  
var dotposition=a.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length || a==""){   
  alert("Please enter a valid e-mail address");  
  return false;}
  return true;
   
} 

function pass(){
   // var y=document.getElementById("#t2")
  var y= document.forms["myForm"]["password"].value;
  if (y == "" ) {
    alert("Password must be filled out properly");
    return false;
  }
  return true;
}



function validate()
{ 

 
 var e = emailcheck();
 
 var p = pass();


if(p && e )
{
  return true;
}
return false;

  }

</script>
<!-- Default form login -->

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