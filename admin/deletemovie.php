<?php 

include 'connection.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM `tbl_movie` WHERE movie_id=$id";
	$run = mysqli_query($conn,$query);
	if ($run) {
		echo "<script>alert('Movie Has Been Deleted!!');window.location.href='movielist.php';</script>";
	}
	else{
		echo "<script>alert('Something went Wrong!!');window.location.href='movielist.php';</script>";
	}
}
else{
	header('location:movielist.php');
}

 ?>
