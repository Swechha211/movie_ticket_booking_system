<?php
  require'connection.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Registration </title>
  
  <link rel = 'stylesheet' href = 'style.css'>
  <style> .formerror {
            color: red;
        }</style>
</head>
<body>
<div class="container">

	<form action="aregistration.php" name="myForm" onsubmit="return validateForm()"  method="post" autocomplete="off">
  <div class="myform" id="name">
  <h2>  Register Admin </h2>
    <input type="text" name="uname" class="form-control"  aria-describedby="emailHelp" placeholder="Username" required><br>
    <b><span class="formerror"> </span></b>
  </div>

  <div class="myform" id="password">
    <input type="password" name="pwd" class="form-control"  placeholder="Password" required>
    <b><span class="formerror"> </span></b>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
  </div>

</form>
<div class = 'image'>
  <img src ='admin.jpg' >
</div>
</div>
<script >
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
  //perform validation and if validation fails, set the value of returnval to false
  var name = document.forms['myForm']["uname"].value;
if (name.length == 0){
    seterror("name", "*Length of name cannot be zero!");
    returnval = false;
  }
 
 if (name.length<=2){
    seterror("name", "*Length of name is too short");
    returnval = false;
  }
  var password = document.forms['myForm']["pwd"].value;
  if (password.length < 3){
    seterror("password", "*Password should be atleast 3 characters long!");
    returnval = false;
  }
  return returnval;
  }
  
  </script> 
</body>
</html>

 <?php 
 session_start();
if (isset($_POST['submit'])) {

	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$hash = password_hash("$pwd", PASSWORD_BCRYPT);

  $exit = false;
  if( $exit == false){
    if ( ctype_alpha(str_replace(' ', '', $uname)))// check for alphabet
    {
 
      $sql = "SELECT * FROM `admin` WHERE uname ='".$uname."'"; 
      $_SESSION['user'] = $uname;
      $res = mysqli_query($conn, $sql);
      $data = mysqli_fetch_assoc($res);


      if(empty($data["id"])){
      $sql = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$uname','$hash')";

if( mysqli_query($conn,$sql))
{
  ?>
  <script>
      alert("Successfully Added.. :)")
    
      
      </script>
   <?php
   header('location:adminpanel.php?status=success');

}else
{
  ?>
  <script>
      alert("Error")
      </script>
       <?php
       

}
  }else{
      ?>
      <script>
      alert("Username already exist")
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

}else{
  ?>
  <script>
  alert("Password and confirm password doesnot match")
  </script>
   <?php
}

} 

?>


