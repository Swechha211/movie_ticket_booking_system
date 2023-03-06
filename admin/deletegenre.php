<?php 
include 'connection.php';
if (isset($_GET['id'])) {
	# code...

$id = $_GET['id'];
$query = "DELETE FROM `genre` WHERE id = $id";
$run = mysqli_query($conn,$query);
if ($run) {
	echo "<script>alert('Genre Has Been Deleted!!');window.location.href='genrelist.php';</script>";
}
else{
	echo "<script>alert('somthing went wrong!!'); window.location.href='genrelist.php';</script>";
	}
}
else{
	header('location:genrelist.php');
}


 ?>