<!-- <script> alert('Are you sure to delete this admin?');window.location.href='adminlist.php';</script> -->
<?php 
include 'connection.php';


$id = $_GET['id'];
$query = "DELETE FROM `admin` WHERE id = $id";
$run = mysqli_query($conn,$query);

if ($run) {
  
	echo "<script>alert('Admin Has Been Deleted!!');window.location.href='adminlist.php';</script>";

}
else{
	echo "<script>alert('somthing went wrong!!'); window.location.href='adminlist.php';</script>";
	}
 ?>
