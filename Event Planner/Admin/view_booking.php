<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.c_img
		{
			height: 200px; width: 100%; border-radius: 10px 0px 0px 10px; object-fit: cover;
		}
		@media only screen and (max-width: 600px) {
  .c_img
		{
			height: 200px; width: 100%; border-radius: 10px; object-fit: cover;
		}
}
	</style>
</head>
<body>


<?php include 'header_ad.php'; ?>


	
	<form method="post">




<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
			<?php
                  

                  $conn = mysqli_connect("localhost","root","","plan");
 
                  $sql = " select * from book_event ";

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
						<img src="../Image/<?php echo $rarar['v_img']; ?>" class="c_img">
					</div>
					<div class="col-md-8">
						<div class="container">
							
							<h6 style="color: #0d6efd; margin-top: 15px; font-size: 12px;">#<?php echo $row['book_id']; ?></h6>
							<h5><?php echo $rarar['v_name']; ?></h5>
							<h6 style="font-size: 13px; color: gray;"><?php echo $rarar['v_add']; ?></h6>

							<div class="row">
								<div class="col-md-5">
									<h6 style="font-size: 13px; color: gray;">Event Type - <?php echo $row['e_type']; ?></h6>
								</div>
								<div class="col-md-7">
									<h6 style="font-size: 13px; color: gray;">D - <?php echo $row['e_date']; ?></h6>
								</div>
							</div>


							<div class="row">
								<div class="col-md-5">
									<h6 style="font-size: 13px; color: gray;">Payment - <span style="color: #18DC80;"><?php echo $row['payment']; ?></span></h6>
								</div>
								<div class="col-md-7">
									<h6 style="font-size: 13px; color: gray;">Action - 
                                          
                                          <?php
                                              
                                              if ($row['action'] == 'Pending') 
                                              {
                                              	?>
                                                 <span style="color: red;"><?php echo $row['action']; ?></span>
                                              	<?php
                                              }
                                              else
                                              {
                                              	?>
                                                  <span style="color: #18DC80;"><?php echo $row['action']; ?></span>
                                              	<?php
                                              }

                                          ?>
             
										</h6>
								</div>
							</div>

<?php
                     
                     if ($row['action'] == 'Pending') 
                     {
                     	?>
                     	<a href="confirm.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Pending" style="background: red; color: #fff;" class="btn"></a>
                     	<?php
                     }
                     else
                     {
                        ?>
                        <input type="button" name="" value="Confirm" style="background: #18DC80; color: #fff;" class="btn">
                        <?php
                     }
  

                  ?>



						</div>
					</div>
				</div>
			</div>
			<?php } } ?>
		</div>
	</div>
</div>






 


	</form>

<br>






</body>
</html>