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
     <title>Admin List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">

	<div class="head" style="padding-top: 10px; padding-bottom: 10px;text-align: center;">
		<h1>Admins List</h1>
    <div class="wrap">
		
    <form  action = "adminsearch.php" id="reservation-form" method="post" >
       <fieldset>
         <div class="field" >
         
                
                   <input type="text" placeholder="Enter Admin's Name" style="height:30px;width:300px"  required id="search111" name="search">
                            
     
            <input type="submit" name = "submit"  value="Search" style="height:34px;padding-top:3px" id="button111">
            </div>
</div>  


       </fieldset>
        </form>

</div>
		<hr>
	</div>
	<table class="table a">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">CURD</th>
    </tr>
  </thead>
    	<?php 

  	$query = "SELECT * from admin order by id asc";
  	$run = mysqli_query($conn,$query);
  	if ($run) {
  		while ($row = mysqli_fetch_assoc($run)) {
  			
  	?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['uname']; ?></td>
      <td><pre>Password Encrypted</pre></td>
      <script>
        function checkdelete(){
         return confirm('Are you sure to delete this admin?');
        }
        </script>
      <td><a class="btn btn-danger"  href="deleteadmin.php?id=<?php echo $row['id']; ?>" onclick = "return checkdelete()">Delete</a> 
      <a class="btn btn-success" href="aregistration.php">New Admin</a></td>
    </tr>
    <?php
	}
  	}

  	 ?>

  </tbody>
</table>
</div>
</body>
  </div>
 </html>