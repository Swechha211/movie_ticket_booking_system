<?php 
include 'connection.php';
$id = $_GET['deleteid'];

$query = "DELETE FROM `tbl_theaters` WHERE id =$id";

$run = mysqli_query($conn,$query);

if ($run) {
	echo "<script>alert('Theatre Has Been Deleted!!');window.location.href='theaterlist.php';</script>";
}
else{
	echo "<script>alert('somthing went wrong!!'); window.location.href='theaterlist.php';</script>";
}

 ?>
