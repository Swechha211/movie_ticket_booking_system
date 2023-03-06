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
		<h1>Booked Ticket List</h1>
		<hr>
    <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Booked Ticket List</a>
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
   
    
  </div>
</nav>
</div>
	</div>
	<table class="table a">
  <thead>

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ticket id</th>
      <th scope="col">Theatre id</th>
      <th scope="col">User id</th>
      <th scope="col">Show id</th>
      <th scope="col">Seats </th>
      <th scope="col">Amount</th>
      <th scope="col">Booked date</th>
      <th scope="col">Booking date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
    	<?php
     

  	$query = "SELECT * from tbl_booking order by book_id asc";
  	$run = mysqli_query($conn,$query);
  	if ($run) {
  		while ($row = mysqli_fetch_assoc($run)) {
  			
  	?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['book_id']; ?></th>
      <td><?php echo $row['ticket_id']; ?></td>
      <td><?php echo $row['t_id']; ?></td>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['show_id']; ?></td>
      <td><?php echo $row['no_seat']; ?></td>
      <td><?php echo $row['amount']; ?></td>
      <td><?php echo $row['ticket_date']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <?php
      // echo ("$row[date]");
      // echo date('Y-m-d');
      // die();
        $_SESSION['success']="Bookings Done!";
    
        if($_SESSION['success']  ){
          if("$row[ticket_date]" < date('Y-m-d') ){
          
            $sql = "UPDATE tbl_booking SET status = 0 where  ticket_id = '$row[ticket_id]' and status = '1' and ticket_date='$row[ticket_date]'";
            $mysqli_result = mysqli_query($conn, $sql);
         
           
  
          
           if($mysqli_result){
          
          //  while($row = mysqli_fetch_assoc($mysqli_result)){?>
   
               
             
        <?php    }}
      
      
      }
      ?>
      <script>
        function checkdelete(){
         return confirm('Are you sure to cancel this ticket?');
        }
        </script>
      <td><a class="btn btn-danger" name = 'cancel' href="cancelticket.php?id=<?php echo $row['book_id']; ?>" onclick = "return checkdelete()">Cancel</a>
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