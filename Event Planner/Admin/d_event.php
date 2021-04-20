<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " delete from addevent where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
  header("location:add_event.php");
}
else
{
	echo "Not done";
}


?>