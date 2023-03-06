<link rel="stylesheet" href="sss.css">
<div class="container">
<?php 

include 'connection.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Movie List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Movies List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="wrap">
		
    <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
       <fieldset>
         <div class="field" >
         
                
                            <input type="text" placeholder="Enter A Movie Name" style="height:30px;width:300px"  required id="search111" name="search">
                            
     
            <input type="submit" value="Search" style="height:34px;padding-top:3px" id="button111">
            </div>
</div>       	

       </fieldset>
        </form>

</div>
  	 <ul class="navbar-nav ml-auto">
  	 	      <li class="nav-item">
        <a class="btn btn-warning text-light" href="add_movie.php">Add a Movie</a>
      </li>
  	 </ul>
   
  </div>
</nav>
</div>

		
	
		
<div class="container">
  

<div class="row">
<?php 

$query = "SELECT * FROM tbl_movie";
$run = mysqli_query($conn,$query);

if ($run) {
	while ($row = mysqli_fetch_assoc($run)) {
		?>
  <div class="col-md-2">

    <div class="card" style="width:200px;text-align: center;">
    	<p><?php echo $row['movie_id']; ?></p>
     <?php echo "<img height='180px' width='auto' src='../img/".$row['image']."'>"; ?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['movie_name']; ?></h5>
        <p class="card-text"><?php echo $row['description']; ?></p>
        
      <br>
      <br>
      <script>
        function checkdelete(){
         return confirm('Are you sure to delete this movie?');
        }
      </script>
      <a href="deletemovie.php?id=<?php echo$row['movie_id'] ?>" class="btn btn-danger" onclick = " return checkdelete()">DELETE</a>
      <a href="editmovie.php?id=<?php echo$row['movie_id'] ?>" class="btn btn-info ">Edit</a>
</div>

    </div>
  </div><?php		
	}}

 ?>
</div>
	</div>
</div>