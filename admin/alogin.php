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
  <title>Admin Login </title>
  <link rel = 'stylesheet' href = 'style.css'>
</head>
<body>
  
  <div class = 'container'>
    <div class = 'myform'>
      <form method = 'post' action ='alogin.php' autocomplete="off" >
        <h2>Admin Login</h2>
        <input type="text" name="uname" placeholder = 'Admin name' required>
        <input type="password" name="pwd" placeholder = 'Admin password' required>
        <button type="submit" name = 'sign'>Sign in</button>
       
      </form>
</div>
<div class = 'image'>
  <img src ='admin.jpg' >
</div>
<div>
  <?php 
  session_start();
  if(isset($_POST['sign']))
  {
    $user =$_POST['uname'];
    
    $pwd =$_POST['pwd'];

    $query = "Select * From admin where uname = '$user'";
    $result = mysqli_query($conn,$query);


    if (mysqli_num_rows($result)>0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($pwd, $row['pwd'])) {
          $_SESSION['loginsuccesfull']=1;
          $_SESSION['user'] = $user;
          echo "<script>alert('Logged in Successfully'); window.location.href='adminpanel.php';</script>";
      
        }
          
      }	
  
    }
    else{
      ?>
      <script>
      alert("Check your ID pass - They don't match our Users")
      window.location.href='alogin.php';
      </script>
     <?php
          // echo "<script>alert('Check your ID pass - They don't match our Users'); </script>";
        }
      }
    
//   if(mysqli_query($conn,$query))
//   {
//       echo"Login successfull!";
//       header("location:adminpanel.php");
//   }else
//   {
//       echo"Login failed";
//   }
//   mysqli_close($conn);
// }
  
    ?>
    </div>
    </body>
    </html>


