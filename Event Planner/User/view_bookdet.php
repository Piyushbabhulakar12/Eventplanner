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
	<title>View Fill Detail</title>
</head>
<body>


<?php include 'header.php'; ?>

	<form method="post"> 






<div class="container mt-4">
  <div class="row">
    <div class="col-md-8">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
          <h4>Your Detail</h4>

<?php
                   
                   $isdi = $_SESSION['usiw'];

                   $conn = mysqli_connect("localhost","root","","plan");

                   $sql = " select * from book_event where book_id = '$isdi' ";

                   $run = mysqli_query($conn,$sql);

                  $row = mysqli_fetch_array($run);

                  $hotel_id = $row['hotel_id'];

          ?>


<?php


$conn = mysqli_connect("localhost","root","","plan");

$sqwwl = " select * from addvenue where id = '$hotel_id' ";

$rssun = mysqli_query($conn,$sqwwl);

$atay = mysqli_fetch_array($rssun);

?>
<br>

<img src="../Image/<?php echo $atay['v_img']; ?>" style="height: 220px; object-fit: cover; width: 100%; border-radius: 15px;">
<br><br>
<div class="row mt-3">
  <div class="col-md-3">
    <h6 class="text_p1">Hotel Name</h6>
      <?php echo $atay['v_name']; ?>
  </div>
  <div class="col-md-6">
    <h6 class="text_p1">Hotel Add</h6>
    <?php echo $atay['v_add']; ?>
  </div>
  <div class="col-md-3">
    <h6 class="text_p1">Hotel Price</h6>
    <?php echo $atay['price']; ?>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-3">
    <h6 class="text_p1">Event Type</h6>
    <?php echo $row['e_type'] ?>
  </div>
  <div class="col-md-3">
    <h6 class="text_p1">Event Date</h6>
    <?php echo $row['e_date'] ?>
  </div>
  <div class="col-md-3">
    <h6 class="text_p1">No Guest</h6>
    <?php echo $row['no_guest']; ?>
  </div>
  <div class="col-md-3">
    <h6 class="text_p1">Equipment</h6>
    <?php echo $row['equipm_dj']; ?> , <?php echo $row['equipm_stage']; ?> , <?php echo $row['equipm_mike_spka']; ?>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-3">
    <h6 class="text_p1">Food</h6>
    <?php echo $row['food_break']; ?> , <?php echo $row['food_lunch']; ?> , <?php echo $row['food_tea_sna']; ?> , <?php echo $row['food_dinner']; ?>
  </div>
  <div class="col-md-3">
    <h6 class="text_p1">Food Type</h6>
    <?php echo $row['food_type']; ?>
  </div>
  <div class="col-md-3">
    <h6 class="text_p1">Service</h6>
    <?php echo $row['service']; ?>
  </div>
  <div class="col-md-3">
    <h6 class="text_p1">Lighting</h6>
    <?php echo $row['light_type']; ?>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-3">
    <h6 class="text_p1">Flower</h6>
    <?php echo $row['flower_type']; ?>
  </div>
  <div class="col-md-3">
     <h6 class="text_p1">Seating</h6>
     <?php echo $row['seating_type']; ?>
  </div>
</div>


<br>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>

          <h4>Total</h4>


          <div class="row">
            <div class="col-md-6">
            Hotel Price
            </div>
            <div class="col-md-6" style="text-align: right;">
            <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $atay['price']; ?>
            </div>
          </div>
          <hr>

          <h6 class="mt-2 text_p1">Equipment</h6>

          <div class="row mt-3">
            <div class="col-md-6">
               DJ
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php  

               if ($row['equipm_dj'] == 'DJ') 
               {
                  $equi_dj = 7000;
                  ?>
                      
                      <i class="fa fa-inr" aria-hidden="true"></i> 7,000
                      
                  <?php
               }
               else
               {
                $equi_dj = 0;
                ?>
                  
                  <i class="fa fa-inr" aria-hidden="true"></i> 0
                    
                <?php
               }

      ?>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col-md-6">
              Stage
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php  

               if ($row['equipm_stage'] == 'Stage') 
               {
                $equi_stg = 3000;
                  ?>
                      
                      <i class="fa fa-inr" aria-hidden="true"></i> 3,000
                      
                  <?php
               }
               else
               {
                $equi_stg = 0;
                ?>
                  
                  <i class="fa fa-inr" aria-hidden="true"></i> 0
                    
                <?php
               }

      ?>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col-md-6">
              Mike & Speaker
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php  

               if ($row['equipm_mike_spka'] == 'Mike and Speaker') 
               {
                $equi_mil = 3000;
                  ?>
                      
                      <i class="fa fa-inr" aria-hidden="true"></i> 3,000
                      
                  <?php
               }
               else
               {
                $equi_mil = 0;
                ?>
                  
                 <i class="fa fa-inr" aria-hidden="true"></i> 0
                    
                <?php
               }

      ?>
            </div>
          </div>

<hr>
<h6 class="mt-2 text_p1">Food</h6>

<div class="row mt-3">
            <div class="col-md-6">
              Break Fast
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php  

               if ($row['food_break'] == 'Break Fast') 
               {
                $food_br = 2000;
                  ?>
                      
                      <i class="fa fa-inr" aria-hidden="true"></i> 2,000
                      
                  <?php
               }
               else
               {
                $food_br = 0;
                ?>
                  
                  <i class="fa fa-inr" aria-hidden="true"></i> 0
                    
                <?php
               }

      ?>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col-md-6">
              Lunch
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php  

               if ($row['food_lunch'] == 'Lunch') 
               {
                $food_lnc = 4000;
                  ?>
                      
                      <i class="fa fa-inr" aria-hidden="true"></i> 4,000
                      
                  <?php
               }
               else
               {
                $food_lnc = 0;
                ?>
                  
                  <i class="fa fa-inr" aria-hidden="true"></i> 0
                    
                <?php
               }

      ?>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col-md-6">
              Tea & Snacks
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php  

               if ($row['food_tea_sna'] == 'Tea & Snacks') 
               {
                $food_tea = 1000;
                  ?>
                      
                      <i class="fa fa-inr" aria-hidden="true"></i> 1,000
                      
                  <?php
               }
               else
               {
                $food_tea = 0;
                ?>
                  
                  <i class="fa fa-inr" aria-hidden="true"></i> 0
                    
                <?php
               }

      ?>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col-md-6">
              Dinner
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php  

               if ($row['food_dinner'] == 'Dinner') 
               {
                $food_dinn = 5000;
                  ?>
                      
                      <i class="fa fa-inr" aria-hidden="true"></i> 5,000
                      
                  <?php
               }
               else
               {
                $food_dinn = 0;
                ?>
                  
                 <i class="fa fa-inr" aria-hidden="true"></i> 0
                    
                <?php
               }

      ?>
            </div>
          </div>



          <div class="row mt-2">
            <div class="col-md-6">
              Food Type
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php echo $row['food_type']; ?>
            </div>
          </div>


          <hr>
          <h6 class="mt-2 text_p1">Service</h6>

          <div class="row mt-3">
            <div class="col-md-6">
              Service
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php echo $row['service'] ?>
            </div>
          </div>

          <hr>
          <h6 class="mt-2 text_p1">Decoration</h6>

          <div class="row mt-3">
            <div class="col-md-6">
              Lighting
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php 

              if ($row['light_type'] == 'No') 
              {
                $light = 0;
                ?>
                 No - <i class="fa fa-inr" aria-hidden="true"></i> 0
                <?php
              }
              else if ($row['light_type'] == 'Normal') 
              {
                $light = 1000;
                ?>
                 
                 Normal - <i class="fa fa-inr" aria-hidden="true"></i> 1000
                
                <?php 
              }
              else if ($row['light_type'] == 'Delux') 
              {
                $light = 2000;
                ?>
                    Delux - <i class="fa fa-inr" aria-hidden="true"></i> 2000
                <?php
              }
              else if ($row['light_type'] == 'Royel') 
              {
                $light = 4000;
                ?>
                 Royel - <i class="fa fa-inr" aria-hidden="true"></i> 4000
                <?php
              }
              else
              {
                $light = 0;
                ?>
                   <i class="fa fa-inr" aria-hidden="true"></i> 0
                <?php
              }

      ?>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col-md-6">
              Flower
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php 

              if ($row['flower_type'] == 'No') 
              {
                $flower = 0;
                ?>
                 No - <i class="fa fa-inr" aria-hidden="true"></i> 0
                <?php
              }
              else if ($row['flower_type'] == 'Normal') 
              {
                $flower = 2000;
                ?>
                 
                 Normal - <i class="fa fa-inr" aria-hidden="true"></i> 2000
                
                <?php 
              }
              else if ($row['flower_type'] == 'Delux') 
              {
                $flower = 4000;
                ?>
                    Delux - <i class="fa fa-inr" aria-hidden="true"></i> 4000
                <?php
              }
              else if ($row['flower_type'] == 'Royel') 
              {
                $flower = 6000;
                ?>
                 Royel - <i class="fa fa-inr" aria-hidden="true"></i> 6000
                <?php
              }
              else
              {
                $flower = 0;
                ?>
                    <i class="fa fa-inr" aria-hidden="true"></i> 0
                <?php
              }

      ?>
            </div>
          </div>


<div class="row mt-2">
            <div class="col-md-6">
              Seating
            </div>
            <div class="col-md-6" style="text-align: right;">
              <?php 

              if ($row['seating_type'] == 'No') 
              {
                $seat = 0;
                ?>
                 No - 0
                <?php
              }
              else if ($row['seating_type'] == 'Chair') 
              {
                  $seat = 2000;
                ?>
                 
                 Chair - 2000
                
                <?php 
              }
              else if ($row['seating_type'] == 'Chair & Sofa') 
              {
                $seat = 4000;
                ?>
                    C&S - 4000
                <?php
              }
              else if ($row['seating_type'] == 'Sofa') 
              {
                 $seat = 6000;
                ?>
                 Sofa - 6000
                <?php
              }
              else
              {
                 $seat = 0;
                ?>
                    0
                <?php
              }

      ?>
            </div>
          </div>

<hr>
          <div class="row mt-3">
             <div class="col-md-6">
               <h4>Total</h4>
             </div>  
             <input type="hidden" name="hotel_price" value="<?php echo $to_h = $atay['price']; ?>">
<input type="hidden" name="dj_price" value="<?php echo $equi_dj; ?>">
<input type="hidden" name="stage_price" value="<?php echo $equi_stg; ?>">
<input type="hidden" name="mike_spek_price" value="<?php echo $equi_mil; ?>">
<input type="hidden" name="foodbreak_price" value="<?php echo $food_br; ?>">
<input type="hidden" name="foodlunch_price" value="<?php echo $food_lnc; ?>">
<input type="hidden" name="foodtea_price" value="<?php echo $food_tea; ?>">
<input type="hidden" name="fooddinner_price" value="<?php echo $food_dinn; ?>">
<input type="hidden" name="light_price" value="<?php echo $light; ?>">
<input type="hidden" name="flower_price" value="<?php echo $flower; ?>">
<input type="hidden" name="seat_price" value="<?php echo $seat; ?>">
             <div class="col-md-6" style="text-align: right;">
               <h4><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $total_price = $to_h+$equi_dj+$equi_stg+$equi_mil+$food_br+$food_lnc+$food_tea+$food_dinn+$light+$flower+$seat; ?></h4>
             </div>            
          </div>

          <div class="container mt-2">
            <center><input type="submit" name="submit" value="Continue" class="btn btn-primary rounded-pill w-100"></center>
          </div>

<br>



        </div>
      </div>
    </div>
  </div>
</div>


<input type="hidden" name="total_price" value="<?php echo $total_price; ?>">


<?php


$conn = mysqli_connect("localhost","root","","plan");

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$usre_row = mysqli_fetch_array($run);

?>

<input type="hidden" name="bookby_fname" value="<?php echo $usre_row['f_name']; ?>">
<input type="hidden" name="bookby_lname" value="<?php echo $usre_row['l_name']; ?>">
<input type="hidden" name="bookby_email" value="<?php echo $usre_row['email']; ?>">
<input type="hidden" name="bookby_phone" value="<?php echo $usre_row['phone']; ?>">

<br>



<?php

$boaok_id = $_SESSION['usiw'];

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['submit'])) 
{
  
  $hotel_price = $_POST['hotel_price'];
  $dj_price = $_POST['dj_price'];
  $stage_price = $_POST['stage_price'];
  $mike_spek_price = $_POST['mike_spek_price'];
  $foodbreak_price = $_POST['foodbreak_price'];
  $foodlunch_price = $_POST['foodlunch_price'];
  $foodtea_price = $_POST['foodtea_price'];
  $fooddinner_price = $_POST['fooddinner_price'];
  $light_price = $_POST['light_price'];
  $flower_price = $_POST['flower_price'];
  $seat_price = $_POST['seat_price'];
  $bookby_fname = $_POST['bookby_fname'];
  $bookby_lname = $_POST['bookby_lname'];
  $bookby_email = $_POST['bookby_email'];
  $bookby_phone = $_POST['bookby_phone'];
  $total_price = $_POST['total_price'];

  $sql = " update book_event set hotel_price = '$hotel_price' , dj_price = '$dj_price' , stage_price = '$stage_price' , mike_spek_price = '$mike_spek_price' , foodbreak_price = '$foodbreak_price' , foodlunch_price = '$foodlunch_price' , foodtea_price = '$foodtea_price' , fooddinner_price = '$fooddinner_price' , light_price = '$light_price' , flower_price = '$flower_price' , seat_price = '$seat_price' , bookby_fname = '$bookby_fname' , bookby_lname = '$bookby_lname' , bookby_email = '$bookby_email' , bookby_phone = '$bookby_phone' , total_price = '$total_price' where book_id = '$boaok_id' ";

  if (mysqli_query($conn,$sql)) 
  {
  ?>

    <script type="text/javascript">
      location.href = "payment.php";
    </script>

  <?php
  }
  else
  {
    echo "Not Done";
  }
 

}


?>





		</center>

	</form>




</body>
</html>
