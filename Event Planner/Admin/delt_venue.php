<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " delete from addvenue where id = '$id' ";

if ($run = mysqli_query($conn,$sql)) 
{
	header("location:viewvenues.php");
}
else
{
	echo "Not Donw";
}


?>