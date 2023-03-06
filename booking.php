
<?php 
include 'header.php';

// print_r($_SESSION);
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$id = $_GET["id"];
	$mysqli_result = mysqli_query($conn,"select * from tbl_movie where id =$id ");
	$movie = array();
	$qry2=mysqli_query($conn,"select * from  tbl_movie ");
	$m = mysqli_fetch_array($qry2);

	if($mysqli_result){
	$movie=mysqli_fetch_assoc($mysqli_result);
	}
	// echo $qry2;
	// die();
	if(!empty($movie ))
	{
	 ?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3><?php echo $movie['movie_name']; ?></h3>	
							<div class="about-top">	
								<div class="grid images_3_of_2">
									<img src="<?php echo $movie['image']; ?>" alt=""/>
								</div>
								<div class="desc span_3_of_2">
									<p class="p-link" style="font-size:15px"><b>Cast : </b><?php echo $movie['cast']; ?></p>
									<p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
									<p style="font-size:15px"><?php echo $movie['description']; ?></p>
									<a href="<?php echo $movie['video_url']; ?>" target="_blank" class="watch_but">Watch Trailer</a>
								</div>
								<div class="clear"></div>
							</div>
							<?php
								}
								?>
							<table  class="table table-hover table-bordered text-center">
							<?php
								$mysqli_result=mysqli_query($conn,"select * from tbl_shows a inner join tbl_movie b on
								a.movie_id =$id");
								$shw=mysqli_fetch_assoc($mysqli_result);
								
							
								
								$mysqli_result=mysqli_query($conn,"select * from tbl_theaters a inner join tbl_movie b on
									a.t_id =$id ");
									$theatre=mysqli_fetch_assoc($mysqli_result);
								    
		// 		 $mysqli_result=mysqli_query($conn,"SELECT * from tbl_movie where movie_id = $id ");
        // $movie=mysqli_fetch_array($mysqli_result);

		
					 $mysqli_result = mysqli_query($conn,"SELECT * FROM `tbl_registration` where email ='".$_SESSION['user']."'");
					  $user = array();
					  $qry=mysqli_query($conn,"select user_id from  tbl_registration ");
					  $u = mysqli_fetch_array($qry);
					  if($mysqli_result){

	
						$user=mysqli_fetch_assoc($mysqli_result);
						
						}
								?>
									
									<tr>
										<td class="col-md-6">
											Theatre
										</td>
										<td>
										
											<?php echo $theatre['name'].", ".$theatre['place'];?>
										</td>
										</tr>
										<tr>
											<td>
												Show's name
											</td>
										<td>
											<?php 
												$ttm=mysqli_query($conn,"select  * from tbl_showtime where st_id='".$shw['st_id']."'");
												
												$ttme=mysqli_fetch_array($ttm);
												 echo $ttme['name'] ; 
												
												?> Show
										</td>
									</tr>
									<tr>
										<td>
											Date
										</td>
										<td>
											<?php 
											if(isset($_GET['date']))
							{
								$date=$_GET['date'];
							}
							else
							{
								if($shw['start_date']>date('Y-m-d'))
								{
									$date=date('Y-m-d',strtotime($shw['start_date'] . "-1 days"));
								}
								else
								{
									$date=date('Y-m-d');
								}
								$_SESSION['dd']=$date;
							}
							?>
							<div class="col-md-12 text-center" style="padding-bottom:20px">
								<?php 
								$_SESSION['dd']=$date;
								if($date>$_SESSION['dd']){?><a href="booking.php?id=<?php echo $m['movie_id'];?> & date=<?php echo date('Y-m-d',strtotime($date . "-2 days"));?>">
								<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button></a> <?php } ?><span style="cursor:default" 
								class="btn btn-default"><?php echo date('d-M-Y',strtotime($date));?></span>
								
								<?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
								<a href="booking.php?id=<?php echo $m['movie_id'];?> & date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>">
								<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button></a>
								<?php }

								
								//    if($_SESSION['success'] && $date < date('Y-m-d')){
								// 	"UPDATE tbl_booking SET [status] =3 where ticket_date='$date' and no_seat = '$seat ' ";
								// }

								
								$mysqli_result=mysqli_query($conn,"select sum(no_seat) from tbl_booking where
								ticket_date='$date'");
								$avl=mysqli_fetch_assoc($mysqli_result);
								?>
							</div>
										</td>
									</tr>
									<tr>
										<td>
											Show Time
										</td>
										<td>
											<?php echo date('h:i A',strtotime($ttme['start_time']))?>
										</td>
									</tr>
									<tr>
										<td>
											Number of Seats
										</td>
										<td>
											<form  action="process_booking.php" method="post" autocomplete="off">
												<input type="hidden" name="screen" value="<?php echo $shw['st_id'];?>"/>
												<input type="hidden" name="theatre" value="<?php echo $theatre['t_id'];?>"/>
												<input type="hidden" name="user" value="<?php echo $user['user_id'];?>"/>
												
											<input type="number" required tile="Number of Seats" 
											 min="1" name="seats" class="form-control" value="1" style="text-align:center" id="seats" />
											 <input type="hidden" name="movie id" id="id" value="<?php echo $movie['movie_id'];?>"/>
											<input type="hidden" name="amount" id="hm" value="<?php echo $ttme['charge'];?>"/>
											<input type="hidden" name="date" value="<?php echo $date;?>"/>
											<input type="hidden" name="total_seat" value="<?php echo $ttme['seats'];?>"/>
											<!-- <input type="hidden" name="movie" value="<?php echo $movie['movie_name'];?>"/> -->
										</td>
									</tr>
									<tr>
										<td>
											Amount
										</td>
										<td id="amount" style="font-weight:bold;font-size:18px">
											Rs <?php echo $ttme['charge'];?>
										</td>
									</tr>
									<tr>
								

									
									<?php 
								$mysqli_result=mysqli_query($conn,"select sum(no_seat) from tbl_booking where 
								ticket_date='$date'");
								$avl=mysqli_fetch_array($mysqli_result);

							
	
								?>
								
								<td colspan="2"><?php $avl=mysqli_fetch_array($mysqli_result);
 								if($avl['no_seat']>=$ttme['seats'] ){?>
 								<button type="button" class="btn btn-danger" style="width:100%">House Full</button><?php }
										 else { ?>
										   <script>
       										 function checkdelete(){
         									return confirm('Are you sure to to book these tickets?');
												}
											</script>
										 <a href="process_booking.php"> <button class="btn btn-info" name = 'book' style="width:100%" onclick = " return checkdelete()">Book Now</button></a>
										 <br>
								
										<?php } ?>
										</form></td>
										
									</tr>
					
						</table>
					</div>	
						
								
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');
// session_destroy();
?>


<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $ttme['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>