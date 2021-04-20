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




<div class="container mt-md-4">
	<div class="row">

		<?php
         
             $conn = mysqli_connect("localhost","root","","plan");

             $sql = " select * from addevent ";

             $run = mysqli_query($conn,$sql);
             
             while ($rowa = mysqli_fetch_array($run))
             {
             
		?>

		<div class="col-xl-3 col-md-4 col-sm-6 mt-4">
			<div style="background: #fff; border-radius: 15px;">
              
              
              	
              		<img src="../Image/<?php echo $rowa['e_img']; ?>" style="width: 100%; height: 200px; border-radius: 15px;">
              	

              		<div class="container">
					<h5 class="mt-3"><?php echo $rowa['e_title']; ?></h5>
				<h6 style="font-size: 12px; font-weight: 200;"><?php echo $rowa['e_des']; ?></h6>
				</div>
              		
              	
             

				<br>
				
			</div>
		</div>

<?php } ?>

	</div>
</div>








<br><br>



</body>
</html>