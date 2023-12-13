<?php 
   
   if( isset($_POST['name']) && isset($_POST['family']) && $_POST['name'] != '' && $_POST['family']){
       if( $_FILES['myfile']['size'] <= 614400 && $_FILES['myfile']['type']=="image/jpeg"){
         echo  "uploaded successfully !";
       }
       else 
       echo "please upload the file according to the description !";
   }
   else {
      header("location:http://localhost/basic%20php/session10/index.php");
     
   }
   
 ?>