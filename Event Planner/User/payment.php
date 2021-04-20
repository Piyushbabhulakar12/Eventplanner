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
	<title>Payment</title>
</head>
<body>


<?php include 'header.php'; ?>

<form method="post">


<br>



<div class="container mt-3">
  <div class="row">
    <div class="col-md-8 mt-3">
      <div style="background: #fff; border-radius: 10px;">
       
           <div class="container">
             <br>
             <h3>Make Payment</h3>

             <div class="row mt-4">
               <div class="col-md-6 mt-3">
                 <h6 class="text_p1">Cardholder Name</h6>
                 <input type="text" name="" placeholder="Cardholder Name" class="form-control">
               </div>
               <div class="col-md-6 mt-3">
                 <h6 class="text_p1">Card Number</h6>
                 <input type="number" name="" placeholder="Card Number" class="form-control">
               </div>
             </div>

             <div class="row mt-2">
               <div class="col-md-6 mt-3">
                 <h6 class="text_p1">Name Of Card</h6>
                 <input type="text" name="" placeholder="Name Of Card" class="form-control">
               </div>
               <div class="col-md-6 mt-3">
                 <h6 class="text_p1">Card Type</h6>
                 <select name="" class="form-control">
              <option value="Debit Card">Debit Card</option>
              <option value="Credit Card">Credit Card</option>
            </select>
               </div>
             </div>


             <div class="row mt-2">
               <div class="col-md-6 mt-3">
                 <h6 class="text_p1">Card Expirey</h6>
                 <input type="month" name="" class="form-control">
               </div>
               <div class="col-md-6 mt-3">
                 <h6 class="text_p1">CVV</h6>
                 <input type="password" name="" class="form-control">
               </div>
             </div>

<br>

           </div>

      </div>
    </div>
    <div class="col-md-4 mt-3">
       <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
          <h3>Order Summary</h3>

          <hr>
          <div class="row mt-3">
            <div class="col-6">
              <h5>Total</h5>
            </div>
            <div class="col-6" style="text-align: right;">
              <?php

                      $boaok_id = $_SESSION['usiw'];

                      $conn = mysqli_connect("localhost","root","","plan");

                      $sql = " select * from book_event where book_id = '$boaok_id' ";

                      $run = mysqli_query($conn,$sql);
                        
                        $row = mysqli_fetch_array($run);
 

              ?>

              <h5><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['total_price']; ?></h5>
                

            </div>
          </div>

          <hr>


          <div class="container">
  <center><input type="submit" name="submit" value="Book Now" class="btn btn-primary rounded-pill w-100"></center>
</div>
 <br>

        </div>
      </div>
    </div>
  </div>
</div>



	

<input type="hidden" name="payment" value="Done">
<input type="hidden" name="action" value="Pending">

<input type="hidden" name="b_date" value="<?php echo date("Y/m/d"); ?>">

 

 <?php

$boaok_id = $_SESSION['usiw'];

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['submit'])) 
{
  
  $payment = $_POST['payment'];
  $action = $_POST['action'];
  $b_date = $_POST['b_date'];

  $sql = " update book_event set payment = '$payment' , action = '$action' , b_date = '$b_date' where book_id = '$boaok_id' ";

  if (mysqli_query($conn,$sql)) 
  {
  	?>
         <script type="text/javascript">
               location.href = "viewdetail.php";
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
