<?php

session_start();



if ($_SESSION['email'] == true) 
{
	 $_SESSION['email'];
}
else
{
	header("location:../logout.php");
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Venues</title>
</head>
<body>


<?php include 'header_ad.php'; ?>



 




<br>

<form method="post">



<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
            
            <div class="row">
            	<div class="col-md-10">
            		<input type="text" name="title" placeholder="Search Here" class="form-control">
            	</div>
            	<div class="col-md-2">
            		<center><input type="submit" name="submit" value="Search" class="btn btn-primary w-100 rounded-pill"></center>
            	</div>
            </div>


			
          
		</div>
	</div>
</div>


<br><br>



<?php

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['submit'])) 
{
	$title = $_POST['title'];

    $sql = " select * from addvenue where v_name = '$title' or 	v_prefered = '$title' ";

    $run = mysqli_query($conn,$sql);
 

?>


<div class="container">
	<div class="row">
		<div class="col-md-10 m-auto">
<?php 

while ($row = mysqli_fetch_array($run)) 
{
	
?>
			<div style="background: #fff; border-radius: 10px;">
				<div class="row mt-4">
					<div class="col-md-4">
						<img src="../image/<?php echo $row['v_img']; ?>" style="width: 100%; height: 260px; border-radius: 10px 0px 0px 10px; object-fit: cover;">
					</div>
					<div class="col-md-8">
						<h5 style="margin-top: 15px;"><?php echo $row['v_name']; ?></h5>
						<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_add']; ?></h6>
						<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_phone']; ?></h6>
                        
                        <div class="row">
                        	<div class="col-md-5">
                        		<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_email']; ?></h6>
                        	</div>
                        	<div class="col-md-5">
                        		<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_capacity']; ?></h6>
                        	</div>
                        </div>	
						<div class="row">
							<div class="col-md-5">
								<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_prefered']; ?></h6>
							</div>
							<div class="col-md-5">
								<h6 style="font-size: 12px; color: gray;">Price - <?php echo $row['price']; ?></h6>
							</div>
						</div>

						<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_des']; ?></h6>
<a href="edit_venue.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Update" class="btn btn-primary rounded-pill"></a>
			<a href="delt_venue.php?id=<?php echo $row['id']; ?>"><input type="button" name="" class="btn btn-danger rounded-pill" value="Delete"></a>
                       

					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>


<?php  } } else { ?>
</tbody>
</table>


</center>

<div class="container">
	<div class="row">
		<div class="col-md-10 m-auto">
			<?php

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from addvenue ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>
			<div style="background: #fff; border-radius: 10px;">
				<div class="row mt-4">
					<div class="col-md-4">
						<img src="../image/<?php echo $row['v_img']; ?>" style="width: 100%; height: 260px; border-radius: 10px 0px 0px 10px; object-fit: cover;">
					</div>
					<div class="col-md-8">
						<h5 style="margin-top: 15px;"><?php echo $row['v_name']; ?></h5>
						<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_add']; ?></h6>
						<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_phone']; ?></h6>
                        
                        <div class="row">
                        	<div class="col-md-5">
                        		<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_email']; ?></h6>
                        	</div>
                        	<div class="col-md-5">
                        		<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_capacity']; ?></h6>
                        	</div>
                        </div>	
						<div class="row">
							<div class="col-md-5">
								<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_prefered']; ?></h6>
							</div>
							<div class="col-md-5">
								<h6 style="font-size: 12px; color: gray;">Price - <?php echo $row['price']; ?></h6>
							</div>
						</div>

						<h6 style="font-size: 12px; color: gray;"><?php echo $row['v_des']; ?></h6>
<a href="edit_venue.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Update" class="btn btn-primary rounded-pill"></a>
			<a href="delt_venue.php?id=<?php echo $row['id']; ?>"><input type="button" name="" class="btn btn-danger rounded-pill" value="Delete"></a>
                       

					</div>
				</div>
			</div>
		<?php } } ?>
		</div>
	</div>
</div>


<br>


</form>














</center>


</body>
</html>