<?php
if( $_SESSION['dd']){
        for($seat = 1; $seat = 50; $seat++){

            $num = 50 - $seat;
            echo "u can order "+ $num+ "seats";
//             ?>
//             <script>
//   function clearErrors(){
//   errors = document.getElementsByClassName('formerror');
//   for(let item of errors)
//   {
//       item.innerHTML = "";
//   }}

//   function seterror(id, error){
//   //sets error inside tag of id 
//   element = document.getElementById(id);
//   element.getElementsByClassName('formerror')[0].innerHTML = error;
//   }

//   function validateForm(){
//   var returnval = true;
//   clearErrors();
//   var id = document.forms['myForm']["genre_id"].value;
//     if (isNaN(id)){
//           seterror("id", "*Enter Numeric value only!");  
           
//           return false;  
//         }
//      if (id.length>2){
//           seterror("id", "*Enter one or two digit only");
//           returnval = false;
//       }
//       if (id<=0){
//             seterror("id", "*Enter natural number only ");
//             returnval = false;
//         }
     
//     var name = document.forms['myForm']["genrename"].value;
//   if (name.length == 0){
//       seterror("name", "*Length of name cannot be zero!");
//       returnval = false;
//     }
    
//    if (name.length<=2){
//       seterror("name", "*Length of name is too short");
//       returnval = false;
//     }
//     return returnval;
//     }
    
// </script>
// <?php
        }
    }


    <?php
    if ( $total_choosen_seat > $seat_available) { ?>
    <!-- <h2 style="text-shadow: 2px 2px ">"We don't have such numbers of seat"</h2>  -->
   <?php }
  
    else {
 //    if( $_SESSION['dd'] && $avl['status'] == 1) {?>
    <!-- <h2 style="text-shadow: 2px 2px ">"Ticket already booked"</h2> 
 
 else{?> -->


    
   if ( $total_choosen_seat > $seat_available) { ?>
    <h2 style="text-shadow: 2px 2px ">"We don't have such numbers of seat"</h2> 
   <?php }

   
   else {
    if( $_SESSION['dd'] && $avl['status'] == 1 ) {?>
    <h2 style="text-shadow: 2px 2px ">"Ticket already booked"</h2> 
    <?php}
 else{?>
    <h2 style="text-shadow: 2px 2px ; color : red">Thank you for booking the movie ticket</h2><br>
 <h2 style="text-shadow: 2px 2px ">Your ticket id is <?php echo$bookid; ?></h2>
         <h2 style="text-shadow: 2px 2px ">Your user id is <?php echo $use; ?></h2>
         
         <h2 style="text-shadow: 2px 2px ">You have booked <?php echo $seat ; ?> seat 
         <h2 style="text-shadow: 2px 2px ">Your total amount is <?php echo$charge; ?></h2>
         <h2 style="text-shadow: 2px 2px ">Your booked date is <?php echo$date; ?></h2>
         <h3 style=" color : red">Please screenshot the info and show it in booking department at the time of your visit</h3>
     <?php  }}
     ?>



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
    }
    $remaining_seat = $seat_available - $total_choosen_seat;
    $update_seats_result = mysqli_query($conn, "UPDATE tbl_showtime a  SET seats = $remaining_seat INNER JOIN tbl_show on a.st_id = b.st_id 
    INNER JOIN tbl_booking c  where c.ticket_date='$date' and b.status  = 1 ");
    if($update_seats_result){
        echo "seat updated";
    }
    if($total_choosen_seat == $k){
      echo "Houseful";
    }elseif($k < $total_choosen_seat){
        $remaining_seats = $total_choosen_seat - $k;
        echo  $k, $j, $remaining_seats, $total_choosen_seat , $seat, $seat_available;

      
        $remaining_seat = $seat_available - $total_choosen_seat;
        $k =  $remaining_seat;
        $booked_seat = "SELECT sum(no_seat) from tbl_booking where ticket_date='$date' AND [status] = 1";
        $update_seats_result = mysqli_query($conn, "UPDATE tbl_showtime a  SET seats = $remaining_seat INNER JOIN tbl_show on a.st_id = b.st_id 
        INNER JOIN tbl_booking c  where c.ticket_date='$date' and b.status  = 1 ");
        if($update_seats_result){
            echo "seat updated";
        }
        if($total_choosen_seat == $booked_seat){
          echo "Houseful";
        }elseif($k < $total_choosen_seat){
            $remaining_seats = $total_choosen_seat - $k;
            echo  $k, $j, $remaining_seats, $total_choosen_seat , $seat, $seat_available;

          


            $remaining_seat = $seat_available - $total_choosen_seat;
       
            $booked_seat_result =  "SELECT count(no_seat) from tbl_booking where ticket_date='$date' AND [status] = 1";
            // $fetch_booked_seat_result = mysqli_fetch_assoc($booked_seat_result);
            $update_seats_result = mysqli_query($conn, "UPDATE tbl_showtime a  SET seats = $remaining_seat INNER JOIN tbl_show on a.st_id = b.st_id 
            INNER JOIN tbl_booking c  where c.ticket_date='$date' and b.status  = 1 ");
            if($update_seats_result){
                echo "seat updated";
            }
            if($total_choosen_seat ==  $booked_seat_result ){
                echo "Houseful";
              }elseif( $remaining_seat <= $total_choosen_seat){
                  $remaining_seats = $remaining_seat-$total_choosen_seat ;
                echo      $booked_seat_result, $k, $j, $remaining_seats, $total_choosen_seat , $seat, $seat_available;
    
              
    
               
            mysqli_query($conn,"INSERT into tbl_booking values(NULL,'$bookid','".$theatre."','".	$use ."','".$shw."','".$seat."','".$charge."','".$date."',CURDATE(),'1')");
       
            $_SESSION['success']="Bookings Done!";
            if(isset($_SESSION['success']) && $date > $date){
                "UPDATE tbl_booking SET [status] = 0 where ticket_date='$date' and no_seat = '$seat ' ";
            }
    

            
        if(strtotime("$row[date]") < strtotime(date('Y-m-d')) ){
          
            $sql = "UPDATE tbl_booking SET status = 0 where  ticket_id = '$row[ticket_id]' and status = '1' and ticket_date='$row[date]'";
            $mysqli_result = mysqli_query($conn, $sql);
            // echo $sql;
            // die();
  
          
           if($mysqli_result){
          
          //  while($row = mysqli_fetch_assoc($mysqli_result)){?>
   
               
             
        <?php    }}



        if("$row[date]" < date('Y-m-d') ){
          
            $sql = "UPDATE tbl_booking SET status = 0 where  ticket_id = '$row[ticket_id]' and status = '1' and ticket_date='$row[date]'";
            $mysqli_result = mysqli_query($conn, $sql);
            // echo $sql;
            // die();
  
          
           if($mysqli_result){
          
          //  while($row = mysqli_fetch_assoc($mysqli_result)){?>
   
               
             
        <?php    }}