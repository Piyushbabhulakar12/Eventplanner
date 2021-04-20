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
	<style type="text/css">
		.c_img
		{
			width: 100%; 
			height: 200px; 
			border-radius: 10px 0px 0px 10px; 
			object-fit: cover;
		}
		@media only screen and (max-width: 600px) 
		{
             .c_img
             {
             	border-radius: 10px; 
             }      
        }
	</style>
</head>
<body>


<?php include 'header.php'; ?>


<div class="container">
	


<div class="row mt-5">
	<div class="col-md-9 m-auto">
		<?php
                  
                   $email = $_SESSION['email'];

                  $conn = mysqli_connect("localhost","root","","plan");
 
                  $sql = " select * from book_event where bookby_email = '$email' ";

                  $run = mysqli_query($conn,$sql);
                  
                  while ($row = mysqli_fetch_array($run)) 
                  {
                   
                   $hotel_id = $row['hotel_id'];

                  	$sqaa = " select * from addvenue where id = '$hotel_id' ";

                  	$raaa = mysqli_query($conn,$sqaa);

                  	while ($rarar = mysqli_fetch_array($raaa)) 
                  	{
                  
               ?>

		<div style="background: #fff; border-radius: 10px;">
			
			<div class="row mt-4">
				<div class="col-md-4">
					<a href="view_hdetail.php?id=<?php echo $row['book_id']; ?>"><img src="../Image/<?php echo $rarar['v_img']; ?>" class="c_img"></a>
				</div>
				<div class="col-md-8">
					<div class="container">
						
					
					<h6 style="margin-top: 15px; font-size: 12px; color: #0d6efd;">#<?php echo $row['book_id']; ?></h6>
					<h5><a href="view_hdetail.php?id=<?php echo $row['book_id']; ?>" style="text-decoration: none;color: black;"><?php echo $rarar['v_name']; ?></a></h5>
					<h6 style="color: gray; font-size: 14px;">Add - <?php echo $rarar['v_add']; ?></h6>
					<div class="row">
						<div class="col-md-4">
							<h6 style="color: gray; font-size: 14px;">Event - <?php echo $row['e_type']; ?></h6>
						</div>
						<div class="col-md-4">
							<h6 style="color: gray; font-size: 14px;">Date - <?php echo $row['e_date']; ?></h6>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4">
							<h6 style="color: gray; font-size: 14px;">Payment - <span style="color: #48c543;"><?php echo $row['payment']; ?></span> </h6>
						</div>
						<div class="col-md-4">
							<h6 style="color: gray; font-size: 14px;">Booking - <?php
                           
                           if ($row['action'] == 'Pending') 
                           {
                           	 ?>
                                 <span style="color: red;"><?php echo $row['action']; ?></span>
                           	 <?php
                           }
                           else
                           {
                           	?>
                                <span style="color: #48c543;"><?php echo $row['action']; ?></span>
                           	 <?php
                           }
      

                           ?> </h6>
						</div>
					</div>
</div>
				</div>
			</div>

		</div>

		<?php } } ?>
	</div>
</div>




</div>



<br>







</body>
</html>