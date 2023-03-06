<?php 

include 'connection.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Movie Theater List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> Movie Theater List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="wrap">
		
    <form  action = "theatersearch.php" id="reservation-form" method="post" >
       <fieldset>
         <div class="field" >
         
                
                   <input type="text" placeholder="Enter A Theater Name" style="height:30px;width:300px"  required id="search111" name="search">
                            
     
            <input type="submit" name = "submit"  value="Search" style="height:34px;padding-top:3px" id="button111">
            </div>
</div>  


       </fieldset>
        </form>

</div>
     <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="btn btn-warning text-light" href="add_theater.php">Add a Theater</a>
      </li>
     </ul>
   
  </div>
</nav>
</div>

	
  <div class="container">
    
  <hr>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Theater ID </th>
      <th scope="col">Theater Name</th>
      <th scope="col">No. of Post</th>
      <th scope="col">CURD</th>
   


    </tr>
  </thead>
  <?php 

$query = "SELECT * FROM tbl_theaters";
$run = mysqli_query($conn,$query);
if ($run) {
	while ($row = mysqli_fetch_assoc($run)) {

?>
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['t_id']; ?></td>
      <td><?php echo $row['name']; ?> 
      </td>
      <?php 
      $id = $row['id'];
      $query1 = "SELECT count(*) as total from tbl_movie, tbl_theaters where tbl_theaters.t_id= tbl_movie.t_id and tbl_theaters.id=$id ";
      $run1 = mysqli_query($conn,$query1);
      if ($run1) {
       while ($row1 = mysqli_fetch_assoc($run1)) {
               
                  ?>
                   <td><?php echo $row1['total']; ?></td>
                  <?php
                }
      }
       ?>
       <script>
        function checkdelete(){
         return confirm('Are you sure to delete this theatre?');
        }
        </script>

      <td>
      	<a href="deletetheater.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger"  onclick = "return checkdelete()">Delete</a>
       <a class="btn btn-outline-secondary" href="edittheater.php?id=<?php echo $row['id']; ?>&forkey=<?php echo$row['t_id']; ?>&tname=<?php echo$row['name']; ?>">Edit</a></td>
     

    </tr>

  </tbody>
  <?php
	}
}

   ?>
</table>
</div>
