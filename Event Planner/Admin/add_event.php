<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<br><br>

<form method="post" enctype="multipart/form-data">
<div class="container">
	<div class="row">
		<div class="col-md-7 m-auto">
			<div style="background: #fff; border-radius: 10px;">
				<div class="container">
					<br>
					<center><h2>Add Event</h2></center>
<br>
					<div class="row">
						<div class="col-md-5">
							<h6 class="text_p1">Add Image</h6>
					<span class="btn btn-light btn-file w-50 shadow-sm">
                       Upload <input type="file" name="e_img">
                    </span>
						</div>
					</div>
                      

                      <div class="row mt-3">
                      	<div class="col-md-10">
                      		<h6 class="text_p1">Add Title</h6>
                      <input type="text" name="e_title" placeholder="Enter Title" class="form-control">
                      	</div>
                      </div>

                      <div class="row mt-3">
                      	<div class="col-md-10">
                      		<h6 class="text_p1">Add Description</h6>
                      <textarea rows="10" cols="50" name="e_des" class="form-control"></textarea>
                      	</div>
                      </div>
<br>
                      <center><input type="submit" name="submit" value="Send" class="btn btn-primary rounded-pill" style="width: 150px;"></center>
<br>


 

				</div>
			</div>
		</div>
	</div>
</div>


<br>



<div class="container">
	<div class="row">
		<?php
         
             $conn = mysqli_connect("localhost","root","","plan");

             $sql = " select * from addevent ";

             $run = mysqli_query($conn,$sql);
             
             while ($rowa = mysqli_fetch_array($run))
             {
             
		?>
		<div class="col-xl-3 col-md-6 col-sm-6 mt-3">
			<div style="background: #fff; border-radius: 10px;">
				<img src="../Image/<?php echo $rowa['e_img']; ?>" style="width: 100%; height: 150px; border-radius: 10px 10px 0px 0px;">
               
               <div class="container">
               	 <h5 style="margin-top: 15px;"><?php echo $rowa['e_title']; ?></h5>
               	 <h6 style="font-size: 12px; color: gray;"><?php echo $rowa['e_des']; ?></h6>
               	 <a href="d_event.php?id=<?php echo $rowa['id']; ?>"><input type="button" name="" value="Delete" class="btn btn-danger w-100"></a>

               </div>
<br>
			</div>
		</div>
	<?php } ?>
	</div>
</div>





<br>





	</form>


<?php

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['submit'])) 
{
     $e_title = $_POST['e_title'];
     $e_des = $_POST['e_des'];

     $e_img = $_FILES['e_img'] ['name'];

    $image_tmp_name = $_FILES['e_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$e_img");


    $sql = " insert into addevent (e_title,e_des,e_img) values ('$e_title','$e_des','$e_img') ";

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





</body>
</html>