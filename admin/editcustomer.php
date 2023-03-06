<?php 
include 'connection.php';

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	$name = $_GET['username'];
    $email = $_GET['emailid'];
    $phone = $_GET['phoneno'];
    $age = $_GET['userage'];
    $gender = $_GET['gen_der'];
   

	if (isset($_POST['submit'])) {
		
		$name1 = $_POST['namee'];
        $email1 = $_POST['emaill'];
        $phone1 = $_POST['phonee'];
        $age1 = $_POST['agee'];
        $gender1 = $_POST['genderr'];
        if( $name1 != "" && $email1 != "" && $phone1 != "" && $age1 != "" && $gender1 != ""  )
        {
        if ( ctype_alpha(str_replace(' ', '', $name1))&&  ctype_alpha($gender1) )// check for alphabet and space
         {
          if (preg_match ("/^[0-9]*$/", $phone1) && strlen ($phone1) == 10  ) {  
          
		$query = "UPDATE `tbl_registration` 
    SET  name='$name1', email='$email1',phone=' $phone1',age='$age1',gender='$gender1' WHERE user_id ='$id' ";
    //  echo $query;
    //  die();
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "<script>alert('Customer Successfully Updated.. :)');window.location.href='customerlist.php';</script>";
		}
		else{
			echo "<script>alert('Something Went Wrong');window.location.href='editcustomer.php';</script>";
		}
  }else{
    ?>
  <script>
       
  alert("Enter numeric value of 10 digits")
  </script>
   <?php
  }

  }
  else {
  ?>
  <script>
       
  alert("Enter alphabet only for name")
  </script>
   <?php
  }
  }
   else{
      ?>
      <script>
            
      alert("Please fill all the fields")
      window.location="editcustomer.php";
      </script>
       <?php

	}


}}
else{
	header('location:customerlist.php');
}
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Customer List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <div class="container">
 	<div class="head">
 		
 		<div class="jumbotron">
  <h1 class="display-4">Edit Customer</h1>
  <p class="lead">Edit Customer </p>
  <hr class="my-4">
  <form action="#" method="post" autocomplete="off">
  <div class="form-group">
    <div class="col-7">
      <input type="text" value="<?php echo$name; ?>" name="namee" class="form-control" placeholder="Name">
    </div>
  
 <div class="col">
      <input type="email" value="<?php echo$email; ?>" name="emaill"  class="form-control" placeholder="Email ID ">
    </div>
    <div class="col">
      <input type="text"   value="<?php echo$phone; ?>" name="phonee"  class="form-control" placeholder="Phone Number">
    </div>
    <div class="col">
      <input type="number"  max="99" min="1" value="<?php echo$age; ?>" name="agee"  class="form-control" placeholder="Age ">
    </div>
    <div class="col">
      <input type="text" value="<?php echo$gender; ?>" name="genderr"  class="form-control" placeholder="Gender ">
    </div>
  </div>
  <br><br>
  <button class="btn btn-primary btn-lg" name="submit">Edit Customer</button>
</form>
</div>
 	</div>
 </div>
