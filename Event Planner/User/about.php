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



<div class="container mt-4">
	<center><h3>About Us</h3></center>
</div>


<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					
                     
                     <div class="row">
                     	<div class="col-md-6">
                     		<br>
                            <br>
                            <h6 style="color: #969696; font-size: 14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</h6>

                            <h6 style="color: #969696; font-size: 14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</h6>

                            <h6 style="color: #969696; font-size: 14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</h6>

                            <h6 style="color: #969696; font-size: 14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</h6>
<br>
<br>
                     	</div>
                     	<div class="col-md-6">
                     		<br>
                     		<img src="about.jpg" style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px;">
                     		<br><br>
                     	</div>
                     </div>


				</div>
			</div>
		</div>
	</div>
</div>


<br>



</body>
</html>