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
    <title>Add category</title>
    <link rel = 'stylesheet' href = 'style.css'>
    <style> .formerror {
            color: red;
        }</style>
</head>
<body>
<div class="container">
 	<div class="head">
     <h1 >Add  Category</h1>
  <p >Add Category and  please mention their Category ID</p>
  <hr>
  <form action="addcategory.php" name="myForm" onsubmit="return validateForm()" method="post" >

     <div class = 'myform' id="name">
     <input type="text" name="catname" placeholder="Category Name" required>
     <b><span class="formerror"> </span></b>
      </div>
        <div class = 'myform' id="id">
        <input type="text" name="catid" placeholder="Category ID " required>
        <b><span class="formerror"> </span></b>
        </div>
        <div class = 'myform' id="gid">
        <input type="text" name="genid" placeholder="Genre ID " required>
        <b><span class="formerror"> </span></b>
        <button type="submit" name = 'submit'>Add category</button>
        </div>
      </form>
      </div>
      </div>

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
  var id = document.forms['myForm']["catid"].value;
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
      var id = document.forms['myForm']["genid"].value;
      if (isNaN(id)){
            seterror("gid", "*Enter Numeric value only!");  
             
            return false;  
          }
       if (id.length>2){
            seterror("gid", "*Enter one or two digit only");
            returnval = false;
        }
        if (id<=0){
          seterror("id", "*Enter natural number only ");
          returnval = false;
      }
    var name = document.forms['myForm']["catname"].value;
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
</body>
</html>
<?php
if (isset($_POST['submit'])) {
 	$catname = $_POST['catname'];
 	$catid = $_POST['catid'];
  $genre = $_POST['genid'];
  if ( ctype_alpha( 	$catname))// check for alphabet
  {
 	$query = "INSERT INTO `category`(`category_id`, `category_name`, `genre_id`) VALUES ($catid,'$catname',$genre)";
 	$run = mysqli_query($conn,$query);
 	if ($run) {
 		echo "<script>alert('Category Successfully Added.. :)');window.location.href='categorylist.php';</script>";
 	}
 	else{
 		 		echo "<script>alert('There Was A Problem While adding Category'); window.location.href='addcategory.php';</script>";

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

  ?>
  </div>