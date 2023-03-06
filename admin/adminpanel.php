<?php
  session_start();
  require'connection.php';
  // print_r($_SESSION);
  if(!isset($_SESSION['user']))
{
	header('location:alogin.php');
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel = 'stylesheet' href = 'panel.css'>
</head>
<body>
  
    <div class = 'header'>
    <h1><center>Welcome To Admin Panel </center></h1>
    
    </div>
    <div class = 'container'>
    <div class = btn6>
    <a href = 'adminlist.php'><button  >EDIT ADMIN'S DETAIL</button>
    </div>
    <div class = btn6>
    <a href = 'customerlist.php'><button  >EDIT CUSTOMER'S DETAIL</button>
    </div>
    <div class = btn6>
    <a href = 'bookedlist.php'><button  >BOOKED TICKET LIST</button>
    </div>
    
    <div class = btn2>
    <a href = 'theaterlist.php'><button  > EDIT THEATER DETAIL</button>
    </div>
    <div class = btn4>
    <a href = 'genrelist.php'><button  > EDIT GENRE DETAIL</button>
    </div>
    <div class = btn3>
    <a href = 'categorylist.php'><button  > EDIT CATEGORY DETAIL</button>
    </div>
 
    <div class = btn1>
    <a href = 'movielist.php'><button  > EDIT MOVIE DETAIL</button>
    </div>

    <div class = btn7>
    <a href = 'logout.php'><button  >LOG OUT</button>
    </div>
</div>
    
</body>
</html>