<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php include 'header_ad.php'; ?>



	


<div class="container">
  <div class="row">
    <div class="col-md-9 m-auto">
      <?php




$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from feedback ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  
   $user_id = $row['sendby_id'];

   $adsd = " select * from regi where id = '$user_id' ";

   $rar = mysqli_query($conn,$adsd);
     
  while ($user = mysqli_fetch_array($rar)) 
  {

    
?>
<?php

$is = $row['v_id'];

$conn = mysqli_connect("localhost","root","","plan");

$sqfdsdl = " select * from addvenue where id = '$is' ";

$rsuus = mysqli_query($conn,$sqfdsdl);

while ($tstts = mysqli_fetch_array($rsuus)) 
{
  
?>
      <div style="background: #fff; border-radius: 10px;">
        <div class="row mt-4">
          <div class="col-md-4">
            <img src="../Image/<?php echo $tstts['v_img']; ?>" style="width: 100%; height: 115px; border-radius: 10px 0px 0px 10px; object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="container">
              <h5 style="margin-top: 15px;"><?php echo $tstts['v_name']; ?></h5>
              <h6><?php echo $user['f_name']; ?> <?php echo $user['l_name']; ?> By -</h6>
              <h6 style="color: gray;"><?php echo $row['feed']; ?></h6>
            </div>
          </div>
        </div>
      </div>
  <?php } } }  ?>

    </div>
  </div>
</div>




<br>




</body>
</html>