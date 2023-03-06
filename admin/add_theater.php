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
    <title>Add theater</title>
    <link rel = 'stylesheet' href = 'style.css'>
  
    <style> .formerror {
            color: red;
        }</style>
</head>
</head>
<body>
<div class="container">
 	<div class="head">
     <h1 >Add Theater</h1>
  <p >Add theater and  please mention their Theater ID</p>
  <hr>
  <form action="add_theater.php" name="myForm" onsubmit="return validateForm()" method="post">

     <div class = 'myform' id="id">
     <input type="text" name="tid" placeholder="Theater ID " required>
     <b><span class="formerror"> </span></b>
      </div> 
      <div class = 'myform' id="name">
        <input type="text" name="tname" placeholder="Theater Name" required>
        <b><span class="formerror"> </span></b>
        </div>
        <div class = 'myform' id="address">
        <input type="text" name="address" placeholder="Address" required>
        <b><span class="formerror"> </span></b>
        </div>
        <div class = 'myform' id="place">
        <input type="text" name="place" placeholder="Place" required >
        <b><span class="formerror"> </span></b>
        </div>
        <div class = 'myform' id="province">
        <input type="text" name="province" placeholder="Province" required>
        <b><span class="formerror"> </span></b>
        <button type="submit" name = 'submit'>Add theater</button>
        </div>
      </form>
      </div>
      </div>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
  $tid = $_POST['tid'];
 	$tname = $_POST['tname'];
 	$address = $_POST['address'];
   $place = $_POST['place'];
  $province = $_POST['province'];
  if($tid != "" && $tname != "" && $address != "" && $place != "" && $province != ""  )
  {
    if ( ctype_alpha( $tname) ||ctype_alpha( $address)||ctype_alpha(  $place))// check for alphabet
    {
    if ($province == "1" || $province == 'Madhesh' || $province == 'madhesh' || $province == 'MADESH' || $province == 'Bagmati' || $province == 'bagmati'|| $province == 'BAGMATI' || $province == 'Gandaki' || $province == 'gandaki'|| $province == 'GANDAKI' || $province == 'Lumbini' || $province == 'lumbini' || $province == 'LUMBINI'  || $province == 'Karnali' || $province == 'karnali'|| $province == 'KARNALI' || $province == 'Sudurpashchim' || $province == 'sudurpashchim'|| $province == 'SUDURPASHCHIM' )
    {
 	$query = "INSERT INTO `tbl_theaters`(`t_id`, `name`, `address`, `place`, `province`) VALUES (' $tid ','	$tname ','	$address','$place ',' $province')";
 	$run = mysqli_query($conn,$query);
  	if ($run) {
 		echo "<script>alert('Theater Successfully Added.. :)');window.location.href='theaterlist.php';</script>";
 	}
 	else{
 		 		echo "<script>alert('There Was A Problem While adding Theater'); window.location.href='addtheater.php';</script>";
 	}
}else{
  ?>
  <script>
  alert("Enter valid province!")
  </script>
 <?php
}
}
else {
?>
<script>
     
alert("Enter alphabet only for theater name, address and place ")
</script>
 <?php
  }
 }
 else{
  ?>
  <script>
       
  alert("Please fill all the fields")
  </script>
   <?php
    }
}

  ?>
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
    //perform validation and if validation fails, set the value of returnval to false
    var id = document.forms['myForm']["tid"].value;
    if (isNaN(id) || id < 1 ||   id >= 100){
      seterror("id", "*Enter Numeric value from 1 to 99");  
       
      return false;  
     
    }
    var name = document.forms['myForm']["tname"].value;
  if (name.length == 0){
      seterror("name", "*Length of theater name cannot be zero!");
      returnval = false;
    }
   
   if (name.length<=2){
      seterror("name", "*Length of theater name is too short");
      returnval = false;
    }
    var name = document.forms['myForm']["address"].value;
  if (name.length == 0){
      seterror("address", "*Length of address cannot be zero!");
      returnval = false;
    }
    
   if (name.length<=2){
      seterror("address", "*Length of address is too short");
      returnval = false;
    }
  
    var name = document.forms['myForm']["place"].value;
  if (name.length == 0){
      seterror("place", "*Length of place cannot be zero!");
      returnval = false;
    }
    
   if (name.length<=2){
      seterror("place", "*Length of place is too short");
      returnval = false;
    }
    var name = document.forms['myForm']["province"].value;
  if (name.length == 0){
      seterror("province", "*Length of province cannot be zero!");
      returnval = false;
    }
  

    return returnval;
  }
    
  
  
 


    
  </script>