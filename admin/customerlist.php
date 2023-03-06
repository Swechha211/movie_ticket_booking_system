<?php 
include 'connection.php';

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Customer List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">
	<div class="head" style="padding-top: 10px; padding-bottom: 10px;text-align: center;">
		<h1>Customer List</h1>
		<hr>
    <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Registered Customer List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="wrap">
		
    <form  action = "customersearch.php" id="reservation-form" method="post" >
       <fieldset>
         <div class="field" >
         
                
                   <input type="text" placeholder="Enter Customer's Name or id" style="height:30px;width:300px"  required id="search111" name="search">
                            
     
            <input type="submit" name = "submit"  value="Search" style="height:34px;padding-top:3px" id="button111">
            </div>
</div>  


       </fieldset>
        </form>

</div>
     <ul class="navbar-nav ml-auto">
     
            <li class="nav-item">
        <a class="btn btn-warning text-light" href="registration.php">Add Customer</a>

      </li>
     </ul>
    
  </div>
</nav>
</div>
	</div>
	<table class="table a">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email id</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">CURD</th>
    </tr>
  </thead>
    	<?php 

  	$query = "SELECT * from tbl_registration order by user_id asc";
  	$run = mysqli_query($conn,$query);
  	if ($run) {
  		while ($row = mysqli_fetch_assoc($run)) {
  			
  	?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['user_id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><pre>Password Encrypted</pre></td>
      <script>
        function checkdelete(){
         return confirm('Are you sure to delete this customer?');
        }
      </script>
      <td><a class="btn btn-danger" href="deletecustomer.php?id=<?php echo $row['user_id']; ?>" onclick = " return checkdelete()">Delete</a> 
      <a class="btn btn-success" href="editcustomer.php?id=<?php echo$row['user_id']; ?>&username=<?php echo$row['name']; ?>&emailid=<?php echo$row['email']; ?>&phoneno=<?php echo$row['phone'];?>&userage=<?php echo$row['age']; ?>&gen_der=<?php echo$row['gender']; ?>">EDIT</a></td>  
    </tr>
    <?php
	}
  	}

  	 ?>

  </tbody>
</table>
</div>
</body>
 </html>