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
		

		.card_img
		{
			height: 170px; width: 100%; border-radius: 15px 0px 0px 15px; object-fit: cover;
		}

		@media only screen and (max-width: 1200px) {
          .card_img 
          {
             border-radius: 15px;
          }
}
	</style>
</head>
<body>


<?php include 'header.php'; ?>

<form method="post">


<div class="container mt-3">
	<h3>All Venues</h3>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-7 m-auto">
			<?php

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from addvenue ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	


?>
			<div style="background: #fff; border-radius: 15px; ">
				
                
                 <div class="row mt-4"> 
                 	<div class="col-xl-4">
                 		<a href="view_venue.php?id=<?php echo $row['id']; ?>"><img src="../Image/<?php echo $row['v_img']; ?>" class="card_img"></a>
                 	</div>
                 	<div class="col-xl-7">
                 		
                 		<div style="padding: 5px;">
                 			<a href="view_venue.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color: black; font-size: 17px; line-height:40px;"><?php echo $row['v_name']; ?></a>
                 		<h6 style="font-size: 12px;"><?php echo $row['v_des']; ?></h6>
                 		<h6 style="font-size: 13px"><b>
					Speciality - </b></h6>
					<?php
                    
                    if ($row['v_prefered'] == 'All') 
                    {
                        ?>
                             <h6 style="font-size: 13px; color: gray;">Marriage,Family Function , Birth Party , Anniversary Party , Farewell party , Collage Event</h6>
                        <?php 
                    }else
                    {
                        ?>
                           
                           <h6 style="font-size: 13px; color: gray;"><?php echo $row['v_prefered']; ?></h6>

                        <?php
                    }


					?>
                 		</div>
					
					
				

                 	</div>
                 </div>


			</div>
			<?php } ?>
		</div>
	</div>
</div>



<br>













</form>










</body>
</html>