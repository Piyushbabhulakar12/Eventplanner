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


 $_SESSION['usiw'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>View detail</title>
</head>
<body>


<?php include 'header.php'; ?>
<form method="post">

<div class="container mt-4">
	<div class="row">
		<div class="col-xl-8 col-md-12 mt-3">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
				<h3>Booking Detail</h3>

				<?php

$gds = $_SESSION['usiw'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from book_event where book_id = '$gds' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$hotel_id = $row['hotel_id'];

?>
                  

                  <div class="row mt-4">
                  	<div class="col-xl-3 col-md-6 col-sm-6">
                  		<h6 class="text_p1">Booking Id</h6>
                        <h6 style="color: #0d6efd;">#<?php echo $row['book_id']; ?></h6>
                  	</div>
                  	<div class="col-xl-3 col-md-6 col-sm-6">
                  		<h6 class="text_p1">Price Paid</h6>
                  		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['total_price']; ?>
                  	</div>
                  	<div class="col-xl-3 col-md-6 col-sm-6">
                  		<h6 class="text_p1">Book</h6>
                  		<h6 style="color: #48c543;">Successfull</h6>
                  	</div>
                  	<div class="col-xl-3 col-md-6 col-sm-6">
                  		<h6 class="text_p1">Date</h6>
                  		<?php echo $row['b_date']; ?>
                  	</div>
                  </div>
    

                   
                   <div class="row mt-4">
                   	 <div class="col-md-3">
                   	 	<h6 class="text_p1">Action</h6>
                           
                           <?php
                           
                           if ($row['action'] == 'Pending') 
                           {
                           	 ?>
                                 <h6 style="color: red;"><?php echo $row['action']; ?></h6>
                           	 <?php
                           }
                           else
                           {
                           	?>
                                <h6 style="color: #48c543;"><?php echo $row['action']; ?></h6>
                           	 <?php
                           }
      

                           ?>

                   	 	
                   	 </div>
                   	 <?php
             
             $conn = mysqli_connect("localhost","root","","plan");

             $saaql = " select * from addvenue where id = '$hotel_id' ";

             $riau = mysqli_query($conn,$saaql);

             $hote_deti = mysqli_fetch_array($riau);

			?>
                   	 <div class="col-md-3">
                   	 	<h6 class="text_p1">Venues Name</h6>
                       <?php echo $hote_deti['v_name']; ?>
                   	 </div>
                   	 <div class="col-md-6">
                   	 	<h6 class="text_p1">Venues Address</h6>
                   	 	<?php echo $hote_deti['v_add']; ?>
                   	 </div>
                   	 
                   </div>


                   
                   <div class="row mt-4">
                   	<div class="col-md-3">
                       <h6 class="text_p1">Venues Phone</h6>
                   	 	<?php echo $hote_deti['v_phone']; ?>
                   	</div>
                   	<div class="col-md-9">
                   		<h6 class="text_p1">Venues Email Id</h6>
                   		<?php echo $hote_deti['v_email']; ?>
                   	</div>
                   </div>
                   

                   <div class="row mt-4">
                   	 <div class="col-md-3">
                   	 	<h6 class="text_p1">Event Type</h6>
                   	 	<?php echo $row['e_type']; ?>
                   	 </div>
                   	 <div class="col-md-3">
                   	 	<h6 class="text_p1">Event Date</h6>
                   	 	<?php echo $row['e_date']; ?>
                   	 </div>
                   	  <div class="col-md-3">
                   	 	<h6 class="text_p1">Number Guest</h6>
                   	 	<?php echo $row['no_guest'] ?>
                   	 </div>
                   </div>


                   <h4 class="mt-4" style="color: #0005;">Personal Detail</h4>



<div class="row mt-4">
	<div class="col-md-3">
		<h6 class="text_p1">Name</h6>
		<?php echo $row['bookby_fname']; ?> <?php echo $row['bookby_lname']; ?>
	</div>
	<div class="col-md-6">
		<h6 class="text_p1">Email Id</h6>
		<?php echo $row['bookby_email']; ?>
	</div>
	
	<div class="col-md-3">
		<h6 class="text_p1">Book Date</h6>
		<?php echo $row['b_date']; ?>
	</div>
</div>


<div class="row mt-4">
	<div class="col-md-4">
		<h6 class="text_p1">Payment</h6>
		<?php echo $row['payment']; ?>
	</div>
	<div class="col-md-4">
		<h6 class="text_p1">Action</h6>
		<?php
                           
                           if ($row['action'] == 'Pending') 
                           {
                           	 ?>
                                 <h6 style="color: red;"><?php echo $row['action']; ?></h6>
                           	 <?php
                           }
                           else
                           {
                           	?>
                                <h6 style="color: #48c543;"><?php echo $row['action']; ?></h6>
                           	 <?php
                           }
      

                           ?>
	</div>
	<div class="col-md-4">
		<h6 class="text_p1">Phone Number</h6>
		<?php echo $row['bookby_phone']; ?>
	</div>
</div>

<br>


<center><a href="index.php"><input type="button" name="" value="Done" class="btn btn-primary rounded-pill" style="width: 150px;"></a></center>

<br>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-12 mt-3"> 
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
				   <h3>Payment</h3>

				   <div class="row mt-3">
				   	<div class="col-6">
				   		Venues Price
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $hote_deti['price']; ?>
				   	</div>
				   </div>

<hr>
<h6 class="text_p1">Equipment</h6>
				   <div class="row mt-3">
				   	<div class="col-6">
				   		DJ
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['dj_price']; ?>
				   	</div>
				   </div>

				   <div class="row mt-2">
				   	<div class="col-6">
				   		Stage
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['stage_price']; ?>
				   	</div>
				   </div>

				    <div class="row mt-2">
				   	<div class="col-8">
				   		Mike and Speaker
				   	</div>
				   	<div class="col-md-4" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['mike_spek_price']; ?>
				   	</div>
				   </div>

<hr>
<h6 class="text_p1">Food</h6>


                    <div class="row mt-3">
				   	<div class="col-6">
				   		Break Fast
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['foodbreak_price']; ?>
				   	</div>
				   </div>

				   <div class="row mt-2">
				   	<div class="col-6">
				   		Lunch
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['foodlunch_price']; ?>
				   	</div>
				   </div>


				   <div class="row mt-2">
				   	<div class="col-6">
				   		Tea & Snacks
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['foodtea_price']; ?>
				   	</div>
				   </div>

				   <div class="row mt-2">
				   	<div class="col-6">
				   		Dinner
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['fooddinner_price']; ?>
				   	</div>
				   </div>


				   <div class="row mt-2">
				   	<div class="col-6">
				   		Food Type
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<?php echo $row['food_type']; ?>
				   	</div>
				   </div>


                   <div class="row mt-2">
				   	<div class="col-6">
				   		Service
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<?php echo $row['service']; ?>
				   	</div>
				   </div>

<hr>
<h6 class="text_p1">Decoration</h6>

                  <div class="row mt-3">
				   	<div class="col-6">
				   		Light
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<?php echo $row['light_type']; ?> -
				   		<i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['light_price']; ?>
				   	</div>
				   </div>


                     
                     <div class="row mt-2">
				   	<div class="col-6">
				   		Flowers
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<?php echo $row['flower_type']; ?> - <i class="fa fa-inr" aria-hidden="true"></i><?php echo $row['flower_price']; ?>
				   	</div>
				   </div>


				   <div class="row mt-2">
				   	<div class="col-4">
				   		Seating
				   	</div>
				   	<div class="col-8" style="text-align: right;">
				   	<?php echo $row['seating_type']; ?> - 
    		       <i class="fa fa-inr" aria-hidden="true"></i><?php echo $row['seat_price']; ?>
				   	</div>
				   </div>

				   <hr>

				   <div class="row mt-3">
				   	<div class="col-6">
				   		<h4>Total</h4>
				   	</div>
				   	<div class="col-6" style="text-align: right;">
				   		<h4><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['total_price']; ?></h4>
				   	</div>
				   </div>






<div class="container mt-3">
	<center><button onclick="window.print()" class="btn btn-primary w-100 rounded-pill">Print Invoice</button></center>
</div>

<br>
				</div>
			</div>
		</div>
	</div>
</div>







</form>



<br>


</body>
</html>