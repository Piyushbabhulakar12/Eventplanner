<?php

session_start();



if ($_SESSION['email'] == true) 
{
	 $_SESSION['email'];
}
else
{
	header("location:logout.php");
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>All Venues</title>
</head>
<body>


<?php include 'header.php'; ?>

<form method="post">


<?php


$conn = mysqli_connect("localhost","root","","plan");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


<div class="container mt-5">
	<div class="row">
		<div class="col-md-8 m-auto">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
					<h3>Profile</h3>

					<div class="row mt-3">
						<div class="col-md-4 mt-3">
							<h6 class="text_p1">First Name</h6>
					<input type="text" name="f_name" value="<?php echo $row['f_name']; ?>" class="form-control">
						</div>
						<div class="col-md-4 mt-3">
							<h6 class="text_p1">Last Name</h6>
							<input type="text" name="l_name" value="<?php echo $row['l_name']; ?>" class="form-control">
						</div>
					</div>

					<div class="row mt-1">
						<div class="col-md-4 mt-3">
							<h6 class="text_p1">Email Id</h6>
							<input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
						</div>
						<div class="col-md-4 mt-3">
							<h6 class="text_p1">Phone Number</h6>
							<input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
						</div>
					</div>
<br>
					<center><input type="submit" name="submit" value="Save" class="btn btn-primary rounded-pill" style="width: 125px;"></center>
<br>

				</div>
			</div>
		</div>
	</div>
</div>



</form>


<?php


$conn = mysqli_connect("localhost","root","","plan");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>

<?php

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['submit'])) 
{
	
      $f_name = $_POST['f_name'];
      $l_name = $_POST['l_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];

      $aasql = " update regi set f_name = '$f_name' , l_name = '$l_name' , email = '$email' , phone = '$phone' where id = '$id' ";

      if (mysqli_query($conn,$aasql)) 
      {
      	echo '<meta http-equiv="refresh" content="0">';
      }
      else
      {
      	echo "Not Done";
      }

}

?>









</body>
</html>