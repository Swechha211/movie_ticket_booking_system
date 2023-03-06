<link rel="stylesheet" href="sss.css">
<div class="container">
	<?php

include('header.php');?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<center><h1 style="color:#555;">(NOW SHOWING)</h1></center>
			

			<?php
			//   print_r($_SESSION);
          	 $today=date("Y-m-d");
          	 $qry2=mysqli_query($conn,"select * from  tbl_movie ");
          	  while($m = mysqli_fetch_array($qry2))
                   {	
                    ?>
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<div class="single">
						  		<a href="booking.php?id=<?php echo $m['movie_id'];?>"><img src="img/<?php echo $m['image']; ?>"  alt="" width="500" height="500"/></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="booking.php?id=<?php echo $m['movie_id'];?>" style="text-decoration: underline overline;"><?php echo $m['movie_name'];?></a></h4>
						  		Cast: <Span class="color2" style="text-decoration: underline overline;"><?php echo $m['cast'];?></span><br>
							</div>
		  				</div>
		  		</div>
				
		    <?php
  	    	}
  	    	?>
			</div>
				<div class="clear"></div>
			</div>
			<?php include('footer.php');?>
		
		</div>