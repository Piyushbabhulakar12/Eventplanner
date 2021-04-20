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

$isd = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from addvenue where id = '$isd' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  


?>


<div class="container mt-4">

  <img src="../Image/<?php echo $row['v_img']; ?>" style="background-size: cover; background-position: center; border-radius: 20px; height: 250px; width: 100%; object-fit:cover;">
  
</div>


<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
        <div style="background: #fff; border-radius: 15px;">
          <div class="container">
         
             <div class="row">
               <div class="col-md-9">
                <br>
                 <h4><?php echo $row['v_name']; ?></h4>
                 <h6 style="font-size: 12px; color: gray;"><?php echo $row['v_des']; ?></h6>

                 <b style="font-size: 14px;">
          Speciality - </b>
          <?php
                    
                    if ($row['v_prefered'] == 'All') 
                    {
                        ?>
                            <h6 style="font-size: 14px; color: gray;"> Marriage,Family Function , Birth Party , Anniversary Party , Farewell party , Collage Event</h6>
                        <?php 
                    }else
                    {
                        ?>
                           
                           <h6 style="font-size: 14px; color: gray;"><?php echo $row['v_prefered']; ?></h6>

                        <?php
                    }


          ?>

          <div class="row">
            <div class="col-md-4">
               <b style="font-size: 14px;">Phone Number</b> - <h6 style="font-size: 14px; color: gray;"><?php echo $row['v_phone']; ?></h6>
            </div>
            <div class="col-md-8">
                 <b style="font-size: 14px;">Email Id</b> - <h6 style="font-size: 14px; color: gray;"><?php echo $row['v_email']; ?></h6> 
            </div>
          </div>
         

       

          <b style="font-size: 14px;">Capacity</b> - <h6 style="font-size: 14px; color: gray;"><?php echo $row['v_capacity']; ?></h6>

          <b style="font-size: 14px;">Address</b> - <h6 style="font-size: 14px; color: gray;"><?php echo $row['v_add']; ?></h6>
<br>
               </div>
               <div class="col-md-3">
                 <br>
                  <center><button class="btn btn-outline-primary">Event Price <br><?php echo $row['price']; ?> </button></center>
<br>
                  

               </div>
             </div>
 

         </div>
      </div>
    </div>
  </div>
</div>

<input type="hidden" name="hotel_id" value="<?php echo $row['id']; ?>">


<?php } ?>






<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 15px;">
        <div class="container">
          <br>
          <h4>Book Your Event</h4>
             
         <div class="row">
           <div class="col-md-3">
              <h6 class="text_p1 mt-3">Event Type</h6>
                <select name="e_type" class="form-control">
          <option>Select</option>
          <option value="Marriage">Marriage</option>
          <option value="Marriage">Family Function</option>
          <option value="Marriage">Birth Party</option>
          <option value="Marriage">Anniversary Party</option>
          <option value="Marriage">Farewell party</option>
          <option value="Marriage">Collage Event</option>   
    </select>
           </div>
           <div class="col-md-3">
             <h6 class="text_p1 mt-3">Event Date</h6>
             <input type="date" name="e_date" class="form-control">
           </div>
           <div class="col-md-3">
             <h6 class="text_p1 mt-3">Number Of Guest</h6>
             <input type="text" name="no_guest" placeholder="Enter Number of Guest" class="form-control">
           </div>
         </div>

         <div class="row">
           <div class="col-md-6">
              <h6 class="text_p1 mt-3">Equipment</h6>
               <input type="checkbox" name="equipm_dj" value="DJ"> &nbsp <label>DJ</label> &nbsp
               <input type="checkbox" name="equipm_stage" value="Stage">  &nbsp<label>Stage</label> &nbsp
               <input type="checkbox" name="equipm_mike_spka" value="Mike and Speaker">&nbsp <label>Mike & Speaker</label>
           </div>
           <div class="col-md-6">
             <h6 class="text_p1 mt-3">Food</h6>
              <input type="checkbox" name="food_break" value="Break Fast"> &nbsp<label>Break Fast</label>&nbsp
               <input type="checkbox"  name="food_lunch" value="Lunch">&nbsp <label>Lunch</label>&nbsp
               <input type="checkbox"  name="food_tea_sna" value="Tea and Snacks"> &nbsp<label>Tea & Snacks</label>&nbsp
               <input type="checkbox"  name="food_dinner" value="Dinner"> &nbsp<label>Dinner</label>

               <br><br>

               <input type="radio" name="food_type" value="Veg">&nbsp <label>Veg</label>&nbsp
               <input type="radio" name="food_type" value="Non-Veg"> &nbsp<label>Non-Veg</label>&nbsp
               <input type="radio" name="food_type" value="Both">&nbsp <label>Both</label>
           </div>
         </div>


         <div class="row">
           <div class="col-md-3">
             <h6 class="text_p1 mt-3">Service</h6>
             <select name="service" class="form-control">
          <option value="Normal">Normal</option>
          <option value="Delux">Delux</option>
          <option value="Royel">Royel</option>
        </select>
           </div>
          
         </div>
<h6 class="text_p1 mt-3" style="color: black;">Decoration</h6>
         <div class="row">
           <div class="col-md-3">
             
                
              <h6 class="text_p1 mt-3">Lighting</h6>

              <select name="light_type" class="form-control">
          <option value="No">No</option>
          <option value="Normal">Normal</option>
          <option value="Delux">Delux</option>
          <option value="Royel">Royel</option>
        </select>


           </div>
           <div class="col-md-3">
             <h6 class="text_p1 mt-3">Flower</h6>
             <select name="flower_type" class="form-control">
          <option value="No">No</option>
          <option value="Normal">Normal</option>
          <option value="Delux">Delux</option>
          <option value="Royel">Royel</option>
        </select>
           </div>
           <div class="col-md-3">
             <h6 class="text_p1 mt-3">Seating</h6>

             <select name="seating_type" class="form-control">
          <option value="No">No</option>
          <option value="Chair">Chair</option>
          <option value="Chair & Sofa">Chair & Sofa</option>
          <option value="Sofa">Sofa</option>
        </select>

           </div>
         </div>
         
<br>
         <center><input type="submit" name="submit" value="Book Now" class="btn btn-primary rounded-pill" style="width: 150px;"></center>
 
<br>
        </div>
      </div>
    </div>
  </div>
</div>




<input type="hidden" name="book_id" value="<?php echo uniqid(); ?>">

<?php

error_reporting(0);

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['submit'])) 
{
    $book_id = $_POST['book_id'];
    $hotel_id = $_POST['hotel_id'];
    $e_type = $_POST['e_type'];
    $e_date = $_POST['e_date'];
    $no_guest = $_POST['no_guest'];
    $equipm_dj = $_POST['equipm_dj'];
    $equipm_stage = $_POST['equipm_stage'];
    $equipm_mike_spka = $_POST['equipm_mike_spka'];
    $food_break = $_POST['food_break'];
    $food_lunch = $_POST['food_lunch'];
    $food_tea_sna = $_POST['food_tea_sna'];
    $food_dinner = $_POST['food_dinner'];
    $food_type = $_POST['food_type'];
    $service = $_POST['service'];
    $light_type = $_POST['light_type'];
    $flower_type = $_POST['flower_type'];
    $seating_type = $_POST['seating_type'];
  

   $sql = " insert into book_event (book_id,hotel_id,e_type,e_date,no_guest,equipm_dj,equipm_stage,equipm_mike_spka,food_break,food_lunch,food_tea_sna,food_dinner,food_type,service,light_type,flower_type,seating_type) values ('$book_id','$hotel_id','$e_type','$e_date','$no_guest','$equipm_dj','$equipm_stage','$equipm_mike_spka','$food_break','$food_lunch','$food_tea_sna','$food_dinner','$food_type','$service','$light_type','$flower_type','$seating_type') ";


   if (mysqli_query($conn,$sql)) 
   {
     $_SESSION['usiw'] = $book_id;
      ?>

              <script>
                location.href = "view_bookdet.php";
              </script>

           <?php
   }
   else
   {
    echo "Not Done";
   }


  

}



?>




<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
           <h4>Feedback Summary</h4>

           <div class="row">
             <div class="col-md-6 mt-3">
               <input type="text" name="feed" placeholder="Enter Feedback" class="form-control">
             </div>
             <div class="col-md-6 mt-3">
               
           <input type="submit" name="feed_b" value="Send" class="btn btn-primary rounded-pill" style="width: 120px;">
             </div>
           </div>
<br>

        </div>
      </div>
    </div>
  </div>
</div>


<?php


$conn = mysqli_connect("localhost","root","","plan");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>

<input type="hidden" name="send_by" value="<?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?>">
<input type="hidden" name="sendby_id" value="<?php echo $row['id']; ?>">

<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['feed_b'])) 
{
  
  $feed = $_POST['feed'];
  $v_id = $_GET['id'];
  $send_by = $_POST['send_by'];
  $sendby_id = $_POST['sendby_id'];

  $sql = " insert into feedback (feed,v_id,send_by,sendby_id) values ('$feed','$v_id','$send_by','$sendby_id') ";

  if (mysqli_query($conn,$sql)) 
  {
   echo '<meta http-equiv="refresh" content="0">';
  }
  else
  {
    echo "Not Done";
  }

}


?>





<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
          <h4>All Feedback</h4>

<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from feedback where v_id = '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  
   $user_id = $row['sendby_id'];

   $adsd = " select * from regi where id = '$user_id' ";

   $rar = mysqli_query($conn,$adsd);
     
  while ($user = mysqli_fetch_array($rar)) 
  {

?>


<?php echo $user['f_name']; ?> <?php echo $user['l_name']; ?> By -<br>
<h6 class="text_p1"><?php echo $row['feed']; ?></h6><hr>

  <?php } } ?>
<br>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
          <h4>Photos</h4>

<?php

$isd = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from addvenue where id = '$isd' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  


?>

<div class="row">
  <div class="col-md-6">
    <img src="../Image/<?php echo $row['v_img']; ?>" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
  </div>
</div>


<?php } ?>
<br><br>

        </div>
      </div>
    </div>
  </div>
</div>



<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
<h4>About</h4>

<?php

$isd = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from addvenue where id = '$isd' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  


?>


<b> Speciality - </b>

 <?php
                    
                    if ($row['v_prefered'] == 'All') 
                    {
                        ?>
                            <h6 class="text_p1"> Marriage,Family Function , Birth Party , Anniversary Party , Farewell party , Collage Event</h6>
                        <?php 
                    }else
                    {
                        ?>
                           
                           <h6 class="text_p1"><?php echo $row['v_prefered']; ?></h6>

                        <?php
                    }


          ?>

          <b>Address - </b>

          <h6 class="text_p1"><?php echo $row['v_add']; ?></h6>

          <b>Email Id - </b>
             
          <h6 class="text_p1"><?php echo $row['v_email']; ?></h6>

          <b>Phone Number - </b>
           
           <h6 class="text_p1"><a href="tel:<?php echo $row['v_phone']; ?>" style="text-decoration: none; color: gray;"><?php echo $row['v_phone']; ?></a></h6>

           <b>Descripion - </b>

           <h6 class="text_p1"><?php echo $row['v_des']; ?></h6>



<?php } ?>
<br>
        </div>
      </div>
    </div>
  </div>
</div>



<br>


</form>







</body>
</html>