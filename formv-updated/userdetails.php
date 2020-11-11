<?php
session_start();
include './conn.php';
include 'action.php';

$sql = "SELECT * FROM `xyz`";

$execute = mysqli_query($conn,$sql);

$r = mysqli_num_rows($execute);
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>User Details</title>
  </head>
  <body>
    <h4 class="text-center">User Details</h4>
	
	<table class="table table-hover table-dark text-center text-bold">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
	  <th scope="col">Expertise</th>
	  <th scope="col">B.Tech</th>
	  <th scope="col">M.Tech</th>
	  <th scope="col">Diploma</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
		for($i = 0; $i<$r; $i++)
		{
			$row = mysqli_fetch_row($execute);
	?>
    <tr>
	<form action="perform.php" method="POST">
      <td><?php echo $i+1;?></td>
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[2];?></td>
	  <td><?php echo $row[3];?></td>
      <td><?php echo $row[4];?></td>
      <td>
		  <?php 
		  $btech =  $row[5];
		  if($btech == 1)
		  {
			  $bstatus = "Yes";
		  ?>
			<span class="badge badge-pill badge-success"><?php echo $bstatus;?></span>
		  <?php
		  }
		  else
		  {
			  $bstatus = "No";
		  ?>
			  <span class="badge badge-pill badge-danger"><?php echo $bstatus;?></span>
		  <?php
		  }
		  ?>
		  
	  </td>
	  <td>
		  <?php 
		  $mtech =  $row[6];
		  if($mtech == 1)
		  {
			  $mstatus = "Yes";
		  ?>
			<span class="badge badge-pill badge-success"><?php echo $mstatus;?></span>
		  <?php
		  }
		  else
		  {
			  $mstatus = "No";
		  ?>
			  <span class="badge badge-pill badge-danger"><?php echo $mstatus;?></span>
		  <?php
		  }
		  ?>
	  </td>
      <td>
		  <?php 
		  $dip =  $row[7];
		  if($dip == 1)
		  {
			  $dstatus = "Yes";
		  ?>
			<span class="badge badge-pill badge-success"><?php echo $dstatus;?></span>
		  <?php
		  }
		  else
		  {
			  $dstatus = "No";
		  ?>
			  <span class="badge badge-pill badge-danger"><?php echo $dstatus;?></span>
		  <?php
		  }
		  ?>
	  </td>
      <td>
		<input type = "hidden" name = "getid" value = "<?php echo $row[0]?>">
		<input type = "submit" name = "update" class = "btn btn-primary" value = "Update">
		<input type = "submit" name = "delete" class = "btn btn-danger" value = "Delete">
	  </td>
    </tr>
	</form>
	<?php
		}
	?>
  </tbody>
</table>

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