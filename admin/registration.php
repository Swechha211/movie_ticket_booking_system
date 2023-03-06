<?php include('header.php');

?>
<html>
  <head>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
<!-- <script src="/project/val.js"></script>   -->
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
<style> .formerror {
            color: red;
        }</style>
</head>
<body>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading">Register</div>
				  <div class="panel-body">
           <!-- id="form1" -->
				<form action="registration.php" name="myForm" onsubmit="return validateForm()" method="post" autocomplete="off">
				    <div class="form-group has-feedback" id="name">
        <input name="name" type="text" size="25" placeholder="Name"  class="form-control"/>
        <b><span class="formerror"> </span></b>
      </div>
      <div class="form-group has-feedback" id="email">
        <input name="email" type="email" size="30" placeholder="Email"  class="form-control"/>
        <b><span class="formerror"> </span></b>
        
      </div>
      <div class="form-group has-feedback" id="phone">
        <input name="phone" type="text" size="10" placeholder="Mobile Number"  class="form-control"/>
        <b><span class="formerror"> </span></b>
      </div>
      <div class="form-group has-feedback" id="age" >
        <input name="age" type="text" size="2" placeholder="Age"  class="form-control"/>
        
        <b><span class="formerror"> </span></b>
      </div>
      <div class="form-group has-feedback" required id="gender" >
        <select name="gender"  class="form-control">
            <option value>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <b><span class="formerror"> </span></b>
        
      </div>
      
      
      <div class="form-group has-feedback" id="pass">
        <input name="password" type="password" size="25" placeholder="Password"  class="form-control" placeholder="Password" />
       
        <b><span class="formerror"> </span></b>
      </div>
      <div class="form-group has-feedback" id="cpass">
        <input name="cpassword" type="password" size="25" placeholder="Confirmed Password" class="form-control" placeholder="Password" />
       
        <b><span class="formerror"> </span></b>
      </div>
      <div class="form-group">
          <button name="submit" class="btn btn-primary">Continue</button>

      </div>
      </div>
</div>
    </form>
			</div>
		</div>
		<div class="clear"></div>	
		
	</div>

</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='footer'allign = 'bottom'>
<?php include('footer.php');?>
</div>
</body>

</html>

<?php

$name = "";
$_SESSION['success'] = "";
include'connection.php';


if (isset($_POST['submit']))
{
    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $phone =mysqli_real_escape_string($conn,$_POST['phone']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $gender =mysqli_real_escape_string($conn,$_POST['gender']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);
    $Cpassword =mysqli_real_escape_string($conn,$_POST['cpassword']);
    $pass = password_hash( $password, PASSWORD_BCRYPT);
    $Cpass = password_hash( $Cpassword, PASSWORD_BCRYPT);

        $exit = false;
        if( $name != "" && $email != "" && $phone != "" && $age != "" && $gender != "" && $password != "" && $Cpassword != "" )
        {
        if ( ctype_alpha(str_replace(' ', '', $name)))// check for alphabet and space
         {
      
        if(($password == $Cpassword)&& $exit == false){
            
            $sql = "SELECT * FROM `tbl_registration` WHERE name ='".$name."'"; 
            $res = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($res);
      

            if(empty($data["user_id"])){
            $sql = "INSERT INTO tbl_registration(name,email,phone,age,gender, pass_word, cpassword) 
    VALUES ('$name','$email','$phone',' $age','$gender','$pass','$Cpass')"; 
              $_SESSION['user'] = $name;
    if( mysqli_query($conn,$sql))
    {
        ?>
        <script>
            alert("Registration successfull!")
            window.location="customerlist.php"; 
            
            </script>
         <?php
         header('location:customerlist.php?status=success');

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

    }else{
        ?>
        <script>
        alert("Password and confirm password doesnot match")
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
          window.location="registration.php"; 
    alert("Please fill all the fields")

    </script>
     <?php
     
}
}else{
   
    ?>
    <script>
    window.location="registration.php"; 
    alert 'Please enter your information';
    </script>
    <?php
  }


?>
<script>


function clearErrors(){

errors = document.getElementsByClassName('formerror');
for(let item of errors)
{
    item.innerHTML = "";
}
}
function seterror(id, error){
//sets error inside tag of id 
element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
var returnval = true;
clearErrors();
var email = document.forms['myForm']["email"].value;
if (email.length>35){
    seterror("email", "*Email length is too long");
    returnval = false;
}


var age = document.forms['myForm']["age"].value;
if (isNaN(age) || age < 1 || age > 100){
    seterror("age", "*Enter Numeric value from 1 to 100");  
     
    return false;  
   
  }
 
var password = document.forms['myForm']["password"].value;
if (password.length < 3){

    
    seterror("pass", "*Password should be atleast 3 characters long!");
    returnval = false;
}
var name = document.forms['myForm']["name"].value; 
if (name.length == 0){
    seterror("name", "*Length of name cannot be zero!");
    returnval = false;
}

 if (name.length<=2){
    seterror("name", "*Length of name is too short");
    returnval = false;
}

var phone = document.forms['myForm']["phone"].value;

if (isNaN(phone)){
        seterror("phone", "*Enter Numeric value only!");  
         
        return false;  
      }
    if (phone.length != 10){
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    }
    if(phone.charAt(0) != 9){
    seterror("phone", "*Enter valid phone number!");
    returnval = false;
    }
    if(phone.charAt(1) != 8 && phone.charAt(1) != 7 && phone.charAt(1) != 6){
    seterror("phone", "*Enter valid phone number!");
    returnval = false;
    }

return returnval;
}




  
  </script>



