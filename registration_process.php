<?php
session_start();

$name = "";
$_SESSION['success'] = "";
require_once 'connection.php';


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
      
        if(($password == $Cpassword) && $exit == false){
            
            $sql = "SELECT * FROM `tbl_registration` WHERE   email = '$email'"; 
            $res = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($res);
  

            if(empty($data["user_id"])){
            $sql = "INSERT INTO tbl_registration(name,email,phone,age,gender, pass_word, cpassword) 
    VALUES ('$name','$email','$phone',' $age','$gender','$pass','$Cpass')"; 
           $_SESSION['success']=1;
              $_SESSION['user'] = $email;
              print_r($_SESSION);


    if( mysqli_query($conn,$sql))
    {
        ?>
        <script>
            alert("Registration successfull!")
          
            
            </script>
         <?php
         header('location:movies_events.php?status=success');

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
            alert("Email already exist")
            </script>
             <?php
        }

    }else{
        ?>
        <script>
             window.location="registration.php"; 
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




