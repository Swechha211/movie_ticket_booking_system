<?php
include('connection.php');
session_start();
date_default_timezone_set('Asia/Kathmandu');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Movie Ticket Booking System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css\css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css\css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo" >
			<a href="index.php"><img src="https://www.pngkit.com/png/detail/81-813515_movie-ticket-booking-site-logo-cinema-club.png" alt="Logo Image Here"style="width : 170px;"/></a>
						<a href="index.php" >Home</a>
			  		   <a href="movies_events.php">Movies</a>
						 <!-- <?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($conn,"select * from tbl_registration 
						 where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_assoc($us);
		?>
			<a href="logout.php">Logout <?php echo $user['name'];?></a><?php }
			else
			{?><a href="login.php">Login</a> 
			<a href="registration.php">Register</a><?php }?> -->


			<?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($conn,"select * from tbl_registration 
						 where email='".$_SESSION['user']."'");
        $user=mysqli_fetch_assoc($us);
		?>
		
		<a href="movies_events.php"><?php echo $user['name'];?></a>
			<a href="logout.php">Logout</a><?php }
			else
			{?><a href="login.php">Login</a> 
			<a href="registration.php">Register</a><?php }?>
						 

			  <div class="block">
	<div class="wrap">
		
        <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()" >
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                                <input type="text" placeholder="Enter A Movie Name" style="height:30px;width:300px; color: red" required id="search111" name="search">
                                
         
								<input type="submit" value="Search" style="height:34px;padding-top:3px" id="button111">
								</div>
    </div>       	

		       </fieldset>
            </form>
  
</div>
 			<div class="clear"></div>
			
   		</div>
		
    </div>
     		
   	

<script>
function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter movie name...");
            return false;
        }
    else{
        return true;
    }
}
    </script>
