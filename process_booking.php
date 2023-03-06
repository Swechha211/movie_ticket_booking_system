
<?php 

include('header.php');

// print_r($_SESSION);
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    <link rel = 'stylesheet' href = 'admin/style.css'>
    <style>
        body {
 background-image: url("book.jpg");
 background-color: #cccccc;
}
    </style>
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
 
    <title>Process Booking</title>
</head>
<body>

<?php


if(isset($_POST['book'])&& empty($_POST['book']))
{  
    $k = 0;
    $j = 0;
    $seat_status = array();

    $bookid="BKID".rand(1000,9999);
    $seat =$_POST['seats'];
    $date =$_POST['date'];
    $charge =$_POST['amount'];
    $theatre =$_POST['theatre'];
    $shw =$_POST['screen'];
    $use =$_POST['user'];
    $total_choosen_seat = $seat;
    $seat_available = $_POST['total_seat'];
    
    $mysqli_result=mysqli_query($conn,"SELECT * from tbl_booking where
								ticket_date='$date' and show_id ='$shw' ");
								$avl=mysqli_fetch_assoc($mysqli_result);
    // $mov =$_POST['movie'];
    
    
// if( $_SESSION['dd'] || $_SESSION['user'] ){
//         for($seat = 1; $seat <= 50; $seat++){

//             $num = 50 - $seat;
            
//         }

if ( $total_choosen_seat <= $seat_available) {
     
    if( $bookid != "" && $seat != "" && $date != "" && $charge != "" &&  $theatre != "" &&  $shw != "" && $use != "" )
    {
        if($theatre != "," || $charge != ""){

            if( $_SESSION['dd'] && $_SESSION['user']){
        //   for ($total_choosen_seat = 1; $total_choosen_seat <=  $seat_available; $total_choosen_seat++) {
        //         $fetch_status_query_result = mysqli_query($conn, "SELECT [status] from tbl_booking where ticket_date='$date' and no_seat = '$seat ' ");
        //         if($fetch_status_query_result){
        //             while($row = mysqli_fetch_assoc($fetch_status_query_result)){
        //                 $seat_status = $row['status'];
        //                 if($seat_status == 1){
        //                     $k--;
        //                 }else{
        //                     $update_seat_result = mysqli_query($conn, "UPDATE tbl_booking SET [status] = 1 where ticket_date='$date' and no_seat = '$seat ' ");
        //                     if($update_seat_result){
        //                         $j--;
        //                     }
                        
        //             } 
        //         }
             
        //     }
        // }
 
        $bseat =  "SELECT SUM(no_seat) as total from tbl_booking where ticket_date='$date' AND status = 1";
        $result = mysqli_query($conn,$bseat);
        $values = mysqli_fetch_assoc($result);
        $b_seat = $values['total'];

        if(  $seat_available == $b_seat ||$seat_available < $b_seat ){

            echo "<center><h1>Houseful</center></h1>";
        }else{
          
        for ($i = $seat; $i <=  $seat_available; $i++) {

        $remaining_seat = $seat_available -$b_seat;
        // $remaining_seat = $seat_available - $b_seat-$total_choosen_seat ;

        }
        
       $update_seats_result = mysqli_query($conn, "UPDATE tbl_showtime a  SET seats = $remaining_seat INNER JOIN tbl_show on a.st_id = b.st_id 
        INNER JOIN tbl_booking c  where c.ticket_date='$date' and b.status  = 1 ");
        if($update_seats_result){
            echo "seat updated";
        }
       
        if($total_choosen_seat >  $remaining_seat){
            echo "<center><h1>Seat unavailable</center></h1>";
          echo "<center><h1> Remaining number of seat is : $remaining_seat</center></h1>";
        }elseif($remaining_seat >= $total_choosen_seat){
                  $remaining_seats = $remaining_seat-$total_choosen_seat ;
          
           
        mysqli_query($conn,"INSERT into tbl_booking values(NULL,'$bookid','".$theatre."','".	$use ."','".$shw."','".$seat."','".$charge."','".$date."',CURDATE(),'1')");
        
        $_SESSION['success']="Bookings Done!";
        // if($_SESSION['success'] && $date < date('Y-m-d')){
        //     $queery = mysqli_query($conn,"UPDATE tbl_booking SET status = 0 where ticket_date='$date' and status = 1");
            
        // }
       
          
//    if( $_SESSION['dd'] && $avl['status'] == 1 ) { ?>
    
   
     <?php
//  $query = "SELECT * from tbl_booking order by book_id asc";
$query = mysqli_query($conn , "SELECT book_id from tbl_booking where ticket_date='$date' and ticket_id = '$bookid'");
  	
 while($row = mysqli_fetch_assoc($query)){?>
   
   <p class="login-box-msg" style="padding-top:20px; color:red">Do you want to cancel this ticket?<a class="btn btn-danger"  href="cancelticket.php?id=<?php echo $row ['book_id']; ?>" onclick = "return checkdelete()">Cancel Ticket</a>     <?php

 }
    
          
?>
    <h2 style="text-shadow: 2px 2px ; color : red">Thank you for booking the movie ticket</h2><br>
 <h2 style="text-shadow: 2px 2px ">Your ticket id is <?php echo$bookid; ?></h2>
         <h2 style="text-shadow: 2px 2px ">Your user id is <?php echo $use; ?></h2>
         
         <h2 style="text-shadow: 2px 2px ">You have booked <?php echo $seat ; ?> seat 
         <h2 style="text-shadow: 2px 2px ">Your total amount is <?php echo$charge; ?></h2>
         <h2 style="text-shadow: 2px 2px ">Your booked date is <?php echo$date; ?></h2>
         <h3 style=" color : red">Please screenshot the info and show it in booking department at the time of your visit</h3>
         
       


     <?php 
        // $mysqli_result=mysqli_query($conn,"select c.movie_name from tbl_booking a inner join tbl_shows b on a.show_id = b.s_id
        // inner join tbl_movie c on b.movie_id = c.movie_id ");
        // $movie=mysqli_fetch_assoc($mysqli_result);
    } }
        }      }
   
}



else
{

    $_SESSION['error']="Booking Failed";
    ?>
    <script>
    alert("Inappropriate credentials")
    window.location.href='movies_events.php';
    </script>
   <?php
}
// }else{
//     if($num>=0)
//     echo"cannot book";
// }
}else{ ?>
    <h2 style="text-shadow: 2px 2px ">"We don't have such numbers of seat"</h2>   

<?php } 
   

}




 

    ?>
    
    </body>




    <script>
    function checkdelete(){
     return confirm('Are you sure to cancel this ticket?');
    }
    </script>

<?php 
include('footer.php');
?>

