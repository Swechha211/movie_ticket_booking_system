<?php


include 'connection.php';
$id = $_GET['id'];


    $sql = "UPDATE tbl_booking SET status = '0' where book_id = '$id'";
    echo "$sql";
    $run = mysqli_query($conn,$sql);
    echo "cancel";

if ($run) 
	echo "<script>alert('Ticket is cancelled!!');window.location.href='bookedlist.php';</script>";
else{
	echo "<script>alert('somthing went wrong!!'); window.location.href='bookedlist.php';</script>";
}

?>