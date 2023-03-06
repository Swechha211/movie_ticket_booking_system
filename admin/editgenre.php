<?php 
include 'connection.php';

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	$genrename = $_GET['genrename'];

	$genreid = $_GET['genreid'];
	

	if (isset($_POST['submit'])) {
		
		$genrename1 = $_POST['genrename'];
	
		$genreid1 = $_POST['genre_id'];
		if ( ctype_alpha($genrename1) && $genrename1 != "" && $genreid1 != "" )// check for alphabet
		{

		$query = " UPDATE `genre` SET `genre_name`='$genrename1',`genre_id`=$genreid1 WHERE id=$id ";
		
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "<script>alert('Genre Successfully Updated.. :)');window.location.href='genrelist.php';</script>";
		}
		else{
			echo "<script>alert('Something Went Wrong');window.location.href='editgenre.php';</script>";
		}	}
		else {
		?>
		<script>
			 
		alert("Enter alphabet only for genre name and numeric value for id")
		</script>
		 <?php

	}


}}
else{
	header('location:genrelist.php');
}


 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Movie Genre List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <div class="container">
 	<div class="head">
 		
 		<div class="jumbotron">
  <h1 class="display-4">Edit Genre</h1>
  <p class="lead">Edit Genre </p>
  <hr class="my-4">
  <form action="#" method="post" autocomplete="off">
  <div class="form-row">
    <div class="col-7">
      <input type="text" value="<?php echo$genrename; ?>" name="genrename" class="form-control" placeholder="Genre Name">
    </div>
  
 <div class="col">
      <input type="number"  max="99" min="1" value="<?php echo$genreid; ?>" name="genre_id"  class="form-control" placeholder="Genre ID ">
    </div>
  </div>
  <br><br>
  <button class="btn btn-primary btn-lg" name="submit">Edit Genre</button>
</form>
</div>
 	</div>
 </div>
