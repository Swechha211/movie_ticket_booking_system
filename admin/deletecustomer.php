<?php 
include 'connection.php';


$id = $_GET['id'];
$query = "DELETE FROM `tbl_registration` WHERE user_id = $id";
$run = mysqli_query($conn,$query);
if ($run) {
	echo "<script>alert('Customer Has Been Deleted!!');window.location.href='customerlist.php';</script>";
}
else{
	echo "<script>alert('somthing went wrong!!'); window.location.href='customerlist.php';</script>";
	}
 ?>
