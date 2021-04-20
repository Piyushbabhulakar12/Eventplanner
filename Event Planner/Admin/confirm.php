<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","plan");

$sql = " update book_event set action = 'Confirm' where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:view_booking.php");
}
else
{
	echo "Not Done";
}

?>