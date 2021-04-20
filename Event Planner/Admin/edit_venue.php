<?php

session_start();



if ($_SESSION['email'] == true) 
{
	echo $_SESSION['email'];
}
else
{
	header("location:../logout.php");
}


?>

<a href="../logout.php">Logout</a>
<!DOCTYPE html>
<html>
<head>
	<title>Add Venues</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">


<?php include 'header_ad.php'; ?>

<center>
  


<table border="1">
  <tr>
    <td>Venues Name</td>
    <td>Venues Address</td>
    <td>Venues Phone</td>
    <td>Venues Email</td>
    <td>Venues Capacity</td>
    <td>Venues Prefered</td>
    <td>Price</td>
    <td>Venues Image</td>
    <td>Venues Description</td>
    <td>Action</td>
  </tr>
  <tr>

    <?php

    $id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " select * from addvenue where id = '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
  
?>



    <td><input type="text" name="v_name" value="<?php echo $row['v_name']; ?>"></td>
    <td><input type="text" name="v_add" value="<?php echo $row['v_add']; ?>"></td>
    <td><input type="text" name="v_phone" value="<?php echo $row['v_phone']; ?>"></td>
    <td><input type="text" name="v_email" value="<?php echo $row['v_email']; ?>"></td>
    <td><input type="text" name="v_capacity" value="<?php echo $row['v_capacity']; ?>"></td>
    <td><input type="text" name="v_prefered" value="<?php echo $row['v_prefered']; ?>"></td>
    <td><input type="text" name="price" value="<?php echo $row['price']; ?>"></td>
    <td><img src="../image/<?php echo $row['v_img']; ?>" height="100" width="100">

      <input type="file" name="v_img">
      <input type="submit" name="edit_img" value="Update">

      <?php

      $id = $_GET['id'];
          
          $conn= mysqli_connect("localhost","root","","plan");
         
          if (isset($_POST['edit_img'])) 
          {
            
               $v_img = $_FILES['v_img'] ['name'];

    $image_tmp_name = $_FILES['v_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$v_img");

    $sql = " update addvenue set v_img = '$v_img' where id = '$id' ";

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

    </td>
    <td><textarea rows="6" name="v_des"><?php echo $row['v_des']; ?></textarea></td>
    <th><a href="edit_venue.php?id=<?php echo $row['id']; ?>"><input type="submit" name="update" value="Update"></a>
     </th>

  </tr>

<?php }  ?>

</table>  




<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

if (isset($_POST['update'])) 
{

  $v_name = $_POST['v_name'];
  $v_add = $_POST['v_add'];
  $v_phone = $_POST['v_phone'];
  $v_email = $_POST['v_email'];
  $v_capacity = $_POST['v_capacity'];
  $v_prefered = $_POST['v_prefered'];
  $price = $_POST['price'];
   $v_des = $_POST['v_des'];

   $sql = " update addvenue set v_name = '$v_name' , v_add = '$v_add' , v_phone = '$v_phone' , v_email = '$v_email' , v_capacity = '$v_prefered' , price = '$price' , v_des = '$v_des' where id = '$id' ";

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



<a href="viewvenues.php">Back</a>




</form>

</center>
</body>
</html>