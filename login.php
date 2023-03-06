<link rel="stylesheet" href="sss.css">
<div class="container">
<?php include('header.php');?>
</div>

<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
    
			 
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading">Login</div>
				  <div class="panel-body">
       
				<p class="login-box-msg">Please sign in</p>
				<form action="login_process.php" method="post" autocomplete="off">
      <div class="form-group has-feedback">
       <input name="email" type="text" size="35" required placeholder="Email" class="form-control"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
       <input name="password" type="password" size="10" required placeholder="Password" class="form-control"  />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
     
             
      <?php
            $my=mysqli_query($conn,"SELECT * FROM `tbl_registration` ");
   
            while($u=mysqli_fetch_array($my))
            {
             ?>   
      <a href="movies_events.php?user_id=<?php echo $u['user_id'];?>">
      <?php
  	    	}
  	    	?>
          <button type="submit" name = 'submit' class="btn btn-primary">Login</button></a>
          
          <p class="login-box-msg" style="padding-top:20px; color:red">New Here? <a href="registration.php">Register</a></p>
      </div>
      </div>
</div>
    </form>
			</div>
      
		</div>
		<div class="clear"></div>	
		
	</div>
  
</div><br><br><br><br><br>
<?php include('footer.php');?>

        </div>
