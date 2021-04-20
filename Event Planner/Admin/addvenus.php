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
  <style type="text/css">
    .btn-file {
  position: relative;
  overflow: hidden;
}

.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: inherit;
  display: block;
}
  </style>
</head>
<body>




<?php include 'header_ad.php'; ?>



<br>

<form method="post" enctype="multipart/form-data">




<div class="container">
  <div class="row">
    <div class="col-md-8 m-auto">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
          <h3>Add Venues</h3>
           
           <div class="row mt-3">
             <div class="col-md-5 mt-3">
               <h6 class="text_p1">Venue Name</h6>
                <input type="text" name="v_name" placeholder="Enter Venue Name" class="form-control">
             </div>
             <div class="col-md-5 mt-3">
               <h6 class="text_p1">Venue Address</h6>
               <input type="text" name="v_add" placeholder="Enter Venue Address" class="form-control">
             </div>
           </div>

           <div class="row mt-1">
             <div class="col-md-5 mt-3">
               <h6 class="text_p1">Venue Phone Number</h6>
               <input type="text" name="v_phone" placeholder="Enter Venue Address" class="form-control">
             </div>
             <div class="col-md-5 mt-3">
               <h6 class="text_p1">Venue Email Id</h6>
               <input type="text" name="v_email" placeholder="Enter Venue Email Id" class="form-control">
             </div>
           </div>

           <div class="row mt-1">
             <div class="col-md-5 mt-3">
               <h6 class="text_p1">Capacity</h6>
               <input type="text" name="v_capacity" placeholder="Enter Capacity" class="form-control">
             </div>
             <div class="col-md-5 mt-3">
               <h6 class="text_p1">Venue Prefered For</h6>
               <select name="v_prefered" class="form-control">
          <option>Select</option>
          <option value="All">All</option>
          <option value="Marriage">Marriage</option>
          <option value="Marriage">Family Function</option>
          <option value="Marriage">Birth Party</option>
          <option value="Marriage">Anniversary Party</option>
          <option value="Marriage">Farewell party</option>
          <option value="Marriage">Collage Event</option>
        </select>
             </div>
           </div>
          

          <div class="row mt-1">
            <div class="col-md-5 mt-3">
              <h6 class="text_p1">Price</h6>
              <input type="text" name="price" placeholder="Enter Price" class="form-control">
            </div>
            <div class="col-md-5 mt-3">
               <h6 class="text_p1">Venue Image</h6>
               <span class="btn btn-light btn-file w-50 shadow-sm">
  Upload <input type="file" name="v_img">
</span>
            </div>
          </div>


          <div class="row mt-1">
            <div class="col-md-10 mt-3">
              <h6 class="text_p1">Description</h6>
              <textarea name="v_des" placeholder="Enter Description" rows="6" cols="30" class="form-control"></textarea>
            </div>
          </div>
<br>
<center><input type="submit" name="submit" value="submit" class="btn btn-primary rounded-pill" style="width: 140px;"></center>
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



<?php

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['submit'])) 
{
  
  $v_name = $_POST['v_name'];
  $v_add = $_POST['v_add'];
  $v_phone = $_POST['v_phone'];
  $v_email = $_POST['v_email'];
  $v_capacity = $_POST['v_capacity'];
  $v_prefered = $_POST['v_prefered'];
  $price = $_POST['price'];

     $v_img = $_FILES['v_img'] ['name'];

    $image_tmp_name = $_FILES['v_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$v_img");

    $v_des = $_POST['v_des'];


    $sql = " insert into addvenue (v_name,v_add,v_phone,v_email,v_capacity,v_prefered,price,v_img,v_des) values ('$v_name','$v_add','$v_phone','$v_email','$v_capacity','$v_prefered','$price','$v_img','$v_des') ";

    if (mysqli_query($conn,$sql)) 
    {
    	echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
    	echo "Not Send";
    }





}

?>