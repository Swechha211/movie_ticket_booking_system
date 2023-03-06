<?php 

include 'connection.php';
 ?>

<?php 

if (isset($_GET['id'])) {
	$id =$_GET['id'];
	$catname = $_GET['catname'];
	$fk = $_GET['forkey'];

	if (isset($_POST['submit'])) {
		$cname = mysqli_real_escape_string($conn,$_POST['categoryname']);
		$frky = mysqli_real_escape_string($conn,$_POST['frky']);
		$pid = mysqli_real_escape_string($conn,$_POST['pid']);
		// if (preg_match("/^[a-zA-\s]+$/",$cname) ) // check for alphabet
		if ( ctype_alpha(str_replace(' ', '', $cname)))
		{
		
		$query = "UPDATE `category` SET `id`=$pid,`category_id`=$frky,`category_name`='$cname' WHERE id=$id";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "<script>alert('Category Successfully Updated.. :)');window.location.href='categorylist.php';</script>";
		}
		else{
			echo "<script>alert('Something Went Wrong');window.location.href='editcategory.php';</script>";
		}
	}
	else {
	?>
	<script>
		 
	alert("Enter alphabet only for category name")
	</script>
	 <?php
	}
	}

}
else{
	header('location:categorylist.php');
}

 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Movie Category List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
	<div class="head" style="text-align: center;padding: 10px 0px 10px 0px;">
		<h1>Edit Category</h1>
	</div>
	<hr>
	<form action="#" method="post" autocomplete="off">
  <div class="form-row">
    <div class="col-7">
    	<small>Category Name</small>
      <input type="text" class="form-control" name="categoryname" value="<?php echo$catname; ?>" placeholder="Category Name">
    </div>
    <div class="col">
    	<small>Genre ID</small>
      <input type="number"  max="99" min="1" class="form-control" name="frky" value="<?php echo$fk; ?>" placeholder="Genre ID">
    </div>
    <div class="col">
    	<small>Category ID</small>
      <input type="number" max="99" min="1" class="form-control" name="pid" value="<?php echo$id; ?>" placeholder="Category ID">
    </div>
  </div>
  <br>
  <br>
  <input type="submit" class="btn btn-outline-success btn-lg" name="submit">
</form>
</div>
