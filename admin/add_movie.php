<link rel="stylesheet" href="sss.css">
<div class="container">
<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Movie</title>
  <link rel = 'stylesheet' href = 'style.css'>
  <!-- <script src="movies.js"></script>   -->
    <style> .formerror {
            color: red;
        }</style>
  
</head>
<body>
<div class="container">
<div class="head">
     <h1 >Add  Movie</h1>
  <p >Add Movie and  please mention their Theater ID, Category ID and Genre ID</p>
  <hr>
  <form action="add_movie.php" name="myForm" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" >
  <div class = 'myform' id="name">
     
  <input type="text" name="mname" placeholder=" Enter Movie Name">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="cast">
  <input type="text" name="cast" placeholder="Enter Movie Cast ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="desc">
  <input type="text" name="description" placeholder="Enter Movie Description ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="date">
  <input type="date" name="releasedate" placeholder="Enter Movie Release Date "> 
  <b><span class="formerror"> </span></b>
  <input type="file" name="image" class="custom-file-input" id="customFile">
 
        </div>
  <div class = 'myform' id="url">
  <input type="text" name="url" placeholder="Enter Movie url ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="stat">
  <input type="text" name="status" placeholder="Enter status ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="cat">
  <input type="text" name="cat_id" placeholder="Enter Category Id ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="gen">
  <input type="text" name="genre_id" placeholder="Enter Genre id ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="tid">
  <input type="text" name="t_id" placeholder="Enter Theater Id ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="lan">
  <input type="text" name="language" placeholder="Enter Movie Language ">
  <b><span class="formerror"> </span></b>
        </div>
  <div class = 'myform' id="dir">
  <input type="text" name="director" placeholder="Enter Movie Director">
  <b><span class="formerror"> </span></b>
  <button type="submit" name = 'submit'>Add movie</button>

        </div>
</form>
</div>


</div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
$mname = $_POST['mname'];
$cast = $_POST['cast'];
$description = addslashes($_POST['description']);
$releasedate = $_POST['releasedate'];
$url = $_POST['url'];
$status = $_POST['status'];
$cat_id = $_POST['cat_id'];
$genre = $_POST['genre_id']; 
$t_id = $_POST['t_id']; 
$language = $_POST['language']; 
$director = $_POST['director']; 
$target = "../img/".basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];
if( $mname != "" && $cast!= "" && $description != "" && $releasedate != "" && $url != "" && $status != "" && $cat_id != ""  && $genre != ""  && $t_id != ""  && $language != ""  && $director != ""  && $image != "" )
{
if ( ctype_alpha( $mname) ||ctype_alpha( $cast)||ctype_alpha( $description)||ctype_alpha($language)||ctype_alpha($director))// check for alphabet
 {
       if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
      
            ?>
            <script>
                 
            alert("Enter correct url")
            </script>
             <?php
       

              
    }else{

$query = "INSERT INTO `tbl_movie`( `t_id`, `movie_name`, `cast`, `description`, `release_date`, 
`image`, `video_url`, `language`, `director`, `cat_id`, `genre_id`, `status`) VALUES ('$t_id',
 '$mname', '$cast', '$description', '$releasedate','$image', '$url', '$language', '$director' ,
 '$cat_id', ' $genre', '$status')";
//  echo $query;
//  die();
$run = mysqli_query($conn,$query);

    
if ($run) {
echo "<script>alert('Movie Successfully Added.. :)');window.location.href='movielist.php';</script>";
}
elseif (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	echo "<script>alert('Movie Successfully Added.. :)');window.location.href='movielist.php';</script>";

}
else{
	echo "<script>alert('Something Went Wrong!!.. :(');window.location.href='add_movie.php';</script>";

}
    }
}
else {
      ?>
      <script>
           
      alert("Enter alphabet only for movie name, cast, description, language  and  director")
      </script>
       <?php
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

<script>
function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
    }
    function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
    
    }
    function validateForm(){
    var returnval = true;
    clearErrors();
    var name = document.forms['myForm']["mname"].value; 
    if (name.length == 0){
        seterror("name", "*Length of movie name cannot be zero!");
        returnval = false;
    }
   
     if (name.length<=2){
        seterror("name", "*Length of movie name is too short");
        returnval = false;
    }
    var name = document.forms['myForm']["cast"].value; 
    if (name.length == 0){
        seterror("cast", "*Length of cast cannot be zero!");
        returnval = false;
    }
 
     if (name.length<=5){
        seterror("cast", "*Length of cast is too short");
        returnval = false;
    }
    var name = document.forms['myForm']["description"].value; 
    if (name.length == 0){
        seterror("desc", "*Length of description cannot be zero!");
        returnval = false;
    }
  
     if (name.length<=5){
        seterror("desc", "*Length of description is too short");
        returnval = false;
    }
    
    // release date
    // var date = document.forms['myForm']["releasedate"].value;
    // var date_regex = /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/(0[1-9]|1[1-9]|2[1-9])$/;
    
    // if (date_regex.test(date)) {
    //     return returnval;
    // }
  
    var phone = document.forms['myForm']["status"].value;
    if (isNaN(phone) && phone != 0 && phone != 1){
        seterror("stat", "*Enter 0 for active or 1 for unactive!");  
         
        return false;  
      }

    var id = document.forms['myForm']["cat_id"].value;
    if (isNaN(id) || id < 1 || id >= 100){
        seterror("cat", "*Enter Numeric value from 1 to 99");  
         
        return false;  
       
      }
      var id = document.forms['myForm']["genre_id"].value;
      if (isNaN(id) || id < 1 || id >= 100){
        seterror("gen", "*Enter Numeric value from 1 to 99");  
         
        return false;  
       
      }
        var id = document.forms['myForm']["t_id"].value;
        if (isNaN(id) || id < 1 || id >= 100){
            seterror("tid", "*Enter Numeric value from 1 to 99");  
             
            return false;  
           
          }

    var nam = document.forms['myForm']["language"].value; 
    if (nam.length == 0){
        seterror("lan", "*Length of language cannot be zero!");
        returnval = false;
    }

     if (nam.length<=2){
        seterror("lan", "*Length of language is too short");
        returnval = false;
    }
    var nme = document.forms['myForm']["director"].value; 
    if (nme.length == 0){
        seterror("dir", "*Length of director cannot be zero!");
        returnval = false;
    }
 
     if (nme.length<=5){
        seterror("dir", "*Length of director is too short");
        returnval = false;
    }
   
    
  
    
    return returnval;
    }
    
   
  
  
      </script>

