
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
    if (phone != 0 && phone != 1){
        seterror("stat", "*Enter 0 for active or 1 for unactive!");
        returnval = false;
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
    
   
  
  
      