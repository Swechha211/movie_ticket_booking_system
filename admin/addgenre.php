<link rel="stylesheet" href="sss.css">
<div class="container">
<?php
  require'connection.php';
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add genre</title>
    <link rel = 'stylesheet' href = 'style.css'>
    <style> .formerror {
            color: red;
        }</style>
</head>
<body>
<div class="container">
 	<div class="head">
     <h1 >Add  Genre</h1>
  <p >Add Genre of the movie </p>
  <hr>
  <form action="addgenre.php" name="myForm" onsubmit="return validateForm()" method="post" >

     <div class = 'myform'id="name">
     
        <input type="text" name="genrename" placeholder="Genre Name" required>
        <b><span class="formerror"> </span></b>
      </div>
        <div class = 'myform'id="id">
        <input type="text" name="genre_id" placeholder="Genre ID " required>
        <b><span class="formerror"> </span></b>
        <button type="submit" name = 'submit'>Add genre</button>
      </div>
      </form>
      </div>
      </div>
</body>
<script>
  function clearErrors(){
  errors = document.getElementsByClassName('formerror');
  for(let item of errors)
  {
      item.innerHTML = "";
  }}

  function seterror(id, error){
  //sets error inside tag of id 
  element = document.getElementById(id);
  element.getElementsByClassName('formerror')[0].innerHTML = error;
  }

  function validateForm(){
  var returnval = true;
  clearErrors();
  var id = document.forms['myForm']["genre_id"].value;
    if (isNaN(id)){
          seterror("id", "*Enter Numeric value only!");  
           
          return false;  
        }
     if (id.length>2){
          seterror("id", "*Enter one or two digit only");
          returnval = false;
      }
      if (id<=0){
            seterror("id", "*Enter natural number only ");
            returnval = false;
        }
     
    var name = document.forms['myForm']["genrename"].value;
  if (name.length == 0){
      seterror("name", "*Length of name cannot be zero!");
      returnval = false;
    }
    
   if (name.length<=2){
      seterror("name", "*Length of name is too short");
      returnval = false;
    }
    return returnval;
    }
    
</script>
</html>
<?php
if (isset($_POST['submit'])) {
	$gename = $_POST['genrename'];

	$genre= $_POST['genre_id'];
  if ( ctype_alpha( $gename))// check for alphabet
  {
	$query = "INSERT INTO `genre`( `genre_name`,  `genre_id`) VALUES ('$gename','$genre')"; 
	$run = mysqli_query($conn,$query);
	if ($run) {
   
		echo "<script>alert('Genre Successfully Added.. :)');window.location.href='genrelist.php';</script>";
	}

	else{
		echo "<script>alert('Something Went Wrong :(');window.location.href='addgenre.php';</script>";
	}
}
else {
?>
<script>
     
alert("Enter alphabet only for genre name")
</script>
 <?php
}

}

  ?>
  </div>