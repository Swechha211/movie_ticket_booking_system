<?php 

include 'connection.php';
 ?>
<?php 

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
$query = "SELECT * FROM tbl_movie Where movie_id=$id";
$run = mysqli_query($conn,$query);
if ($run) {
  while ($row=mysqli_fetch_assoc($run)) {
    ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Movie List</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
	<div class="jumbotron">
		<form action="#" method="post" autocomplete="off">
  <div class="form-group">
    <input type="text" name="m_name" value="<?php echo$row['movie_name'] ?>" class="form-control" placeholder="Enter Movie Name" >
  </div>
  <div class="form-group">
   
    <input type="text" name="m_desc" value="<?php echo$row['description'] ?>" class="form-control" placeholder="Enter meta description" >
  </div>
   
  <div class="form-group">
   
    <input type="text" name="m_link1" value="<?php echo$row['video_url'] ?>" class="form-control" placeholder="Enter Link 1" >
  </div>
  <div class="form-group">
   
    <input type="text" name="m_cast" value="<?php echo$row['cast'] ?>" class="form-control" placeholder="Enter Link 2" >
  </div>
  <div class="form-group">
   
    <input type="date" name="m_date" value="<?php echo$row['release_date'] ?>" class="form-control" placeholder="Enter Date">
  </div>
  <div class="form-group">
   
    <input type="text" name="m_lang" value="<?php echo$row['language'] ?>" class="form-control" placeholder="Enter Movie Language" >
  </div>
  <div class="form-group">
   
    <input type="text" name="m_director" value="<?php echo$row['director'] ?>" class="form-control" placeholder="Enter Movie Director" >
  </div>
  <div class="form-group">
   
    <input type="number"  max="99" min="1" name="cat_id" class="form-control" value="<?php echo$row['cat_id'] ?>" placeholder="Enter Category ID" >
  </div>
  <div class="form-group">
   
    <input type="number"  max="99" min="1" name="genre_id" class="form-control" value="<?php echo$row['genre_id'] ?>" placeholder="Enter Genre ID" >
  </div>
   
  <br>
  <br>
  <br>



  <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
</form>
	</div>
</div>
  
  <?php 
if (isset($_POST['submit'])) {
  $id = $_GET['id'];
  $mv_name = $_POST['m_name'];
  $mv_m_desc = $_POST['m_desc'];
 
  $mv_link1 = $_POST['m_link1'];
  $mv_link2 = $_POST['m_cast'];
  $mv_lang = $_POST['m_lang'];
  $cat_id = $_POST['cat_id'];
  $genre_id = $_POST['genre_id'];
  $mv_desc = addslashes($_POST['m_desc']);
  $mv_director = $_POST['m_director'];
  $mv_date = date('Y-m-d', strtotime($_POST['m_date']));

  if( $mv_link1 != "" &&  $mv_link2 != "" &&  $mv_lang != "" && $cat_id != "" &&  $genre_id != "" &&  $mv_desc != "" && $mv_name != ""  &&  $mv_director != ""  &&  $mv_date != ""   )
{

    
  
    $query1 = "UPDATE `tbl_movie` SET `movie_name`='$mv_name',`cast`='$mv_link2',`description`='  $mv_desc',`release_date`='$mv_date',`video_url`='  $mv_link1',`language`=' $mv_lang',`director`=' $mv_director',`cat_id`='  $cat_id',`genre_id`='$genre_id' WHERE movie_id = $id";
    // " UPDATE `tbl_movie` SET `cat_id`='$cat_id',`genre_id`='$genre_id',`movie_name`='$mv_name',`descrption`='$mv_desc',`video_url`='$mv_link1',`cast`='$mv_link2',`release_date`='$mv_date',`language`='$mv_lang',`director`='$mv_director' WHERE movie_id = $id ";
  //    	echo $query1;
	// die();
    $qr = mysqli_query($conn,$query1);
    if ($qr) {
    
          echo "<script>alert('Movie Succesfully Updated');window.location.href='movielist.php';</script>";

}
else{
     echo "<script>alert('Something Went Wrong!!.. :(');window.location.href='editmovie.php';</script>";
   }
 


}else{
  ?>
  <script>
       
  alert("Please fill all the fields")
  </script>
   <?php
    
}
} 

?>
</div>



?>


<?php
}
}
}


else{
header('location:movielist.php');
}

?>