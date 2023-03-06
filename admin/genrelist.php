<?php 

include ('connection.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Movie Genre List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
	<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Movie Genre List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="wrap">
		
    <form  action = "genresearch.php" id="reservation-form" method="post" >
       <fieldset>
         <div class="field" >
         
                
                   <input type="text" placeholder="Enter A Genre Name" style="height:30px;width:300px"  required id="search111" name="search">
                            
     
            <input type="submit" name = "submit"  value="Search" style="height:34px;padding-top:3px" id="button111">
            </div>
</div>  


       </fieldset>
        </form>

</div>
     <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="btn btn-warning text-light" href="addgenre.php">Add a Genre</a>
      </li>
     </ul>
    
  </div>
</nav>
</div>
	<hr>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Genre Name</th>
     
      <th scope="col">Genre ID</th>
      <th scope="col">No. of Category</th>
      <th scope="col">No. of Posts</th>

      <th scope="col">CURD</th>

    </tr>
  </thead>
  <tbody>
  	<?php 

  	$query = "SELECT * FROM genre";
  	$run = mysqli_query($conn,$query);
  	if ($run) {
  		while ($row=mysqli_fetch_assoc($run)) {
  			?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['genre_name']; ?></td>
     
      <td><?php echo $row['genre_id']; ?></td>
      <?php 
      $id = $row['id'];
      $query1 = "SELECT count(*) as total_category from genre, category where genre.id=category.genre_id and genre.id=$id";
      $run1 = mysqli_query($conn,$query1);
      if ($run1) {
              while ($row1 = mysqli_fetch_assoc($run1)) {

?>                
  
      <td><?php echo $row1['total_category']; ?></td>
<?php
              }
            }
       ?>
<?php 

$query2 = "SELECT count(*) as total_post from tbl_movie,genre where genre.id=tbl_movie.genre_id and genre.id=$id";
$run2 = mysqli_query($conn,$query2);
if ($run2) {
  while ($row2=mysqli_fetch_assoc($run2)) {
    ?>
  
<td><?php echo $row2['total_post']; ?></td>
  <?php
    
  }
}

 ?>
   <script>
        function checkdelete(){
         return confirm('Are you sure to delete this genre?');
        }
        </script>
      <td><a class="btn btn-danger" href="deletegenre.php?id=<?php echo$row['id']; ?>"  onclick = "return checkdelete()" >DELETE</a>
       <a class="btn btn-outline-info" href="editgenre.php?id=<?php echo$row['id']; ?>&genrename=<?php echo$row['genre_name']; ?>&genreid=<?php echo$row['genre_id']; ?>">EDIT</a></td>
    </tr>
<?php
  		}
  	}

  	 ?>
  </tbody>

</table>
</div>