<html>
	<head>
	
	</head>
	<body>
	
	<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_4 span_1_of_4">
					<div class="footer-nav">
		                <a href="index.php" >Home</a>
			  		   <a href="movies_events.php" >Movies</a>
			  		   <?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($conn,"select * from tbl_registration 
						 where email='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?>
		
			<a href="logout.php">Logout <?php echo $user['name'];?></a><?php }
			else
			{?><a href="login.php">Login</a> 
			<a href="registration.php">Register</a><?php }?>
		                   
		              </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="textcontact">
						<p style=" color : #6a4aed">
						Movie Ticket Booking System<br>
						Ph: 9861797208<br>
						</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="call_info">
						<p class="txt_3" style=" color : #6a4aed">Call us</p>
						<p class="txt_4" style=" color : #6a4aed">9861757208</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><div class="footer">
					<div class=social>
				
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-instagram"></a>
						<a href="#" class="fa fa-whatsapp"></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>
</html>

<style>
.content {
	padding-bottom:0px !important;
}
#form111 {
                width:500px;
                margin:50px auto;
}
#search111{
                padding:8px 15px;
                background-color:#fff;
                border:0px solid #dbdbdb;
}
#button111 {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #ca072b;
                background-color:#ca072b;
                color:#fafafa;
}
#button111:hover  {
                background-color:#b70929;
                color:white;
}

</style>
