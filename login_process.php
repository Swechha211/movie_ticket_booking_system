
<?php 
session_start();
// print_r($_SESSION);
require_once 'connection.php';
  if(isset($_POST['submit']) )
  {
    $user =$_POST['email'];
    
    $password =$_POST['password'];


    $query = "SELECT * from tbl_registration where email = '$user'";
    $result = mysqli_query($conn,$query);
  //   	echo $query;
	// die();


    if (mysqli_num_rows($result)>0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password,  $row['pass_word'])) {
          $_SESSION['success']=1;
          $_SESSION['user'] = $user;
          echo "<script>alert('Logged in Successfully'); </script>";
          header("location: movies_events.php");
      
        }
    }
  }
    else{
      ?>
  <script>
  alert("Check your ID pass - They don't match our Users")
  window.location.href='login.php';
  </script>
 <?php
         echo "<script>alert('Check your ID pass - They don't match our Users');window.location.href='login.php'; </script>";
         
      }
      
     
    }else{
        echo 'Please enter email id and password';
          ?>
          <script>
          window.location="login.php"; 
          </script>
          <?php
        
      
      }

      ?> 

      
