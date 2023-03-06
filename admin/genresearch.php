  	<?php include ('connection.php');?>
    <html>
      <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
        <?php
       
 if(isset($_POST['submit']) )
 {
  
    $search =$_POST['search'];
    $qry2=mysqli_query($conn,"SELECT * from genre where genre_name like  '$search%' ");
 }
 $rowcount = mysqli_num_rows($qry2);
 if(!($rowcount)){
  echo "<center><h2>No result</center></h2>";
 }else{
 ?>
  
  <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">Genre ID</th>
      <th scope="col">Genre Name</th>
    
    </tr>
  </thead>
  <tbody>

    <?php
     while($m=mysqli_fetch_array($qry2))
          {
            ?>
       <tr>     

       <div class="movie-text">
       <td><?php echo $m['genre_id'];?>
          <td><h4 class="h-text"> <a href = 'genrelist.php'><?php echo $m['genre_name'];?></a></h4>
     
     </div>
						  	
          </tr>
     </div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}}
  	    	?>
          </tbody>
           </table>
</body>
        </html>