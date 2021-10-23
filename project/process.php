<?php
   	
       $formdata = array(
        'fname'=> $_POST["fname"],
        'lname'=> $_POST["lname"],
        'age'=> $_POST["age"],
        'mobile'=>$_POST["mobile"],
        'password'=> $_POST["password"]
     );
     $existingdata = file_get_contents('mydata.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
    
     if(file_put_contents("mydata.json", $jsondata)) {

         //<a href="login.php"> Data Saved successfully </a>;
         echo " data saved";
        
         
      }
     else 
          echo "no data saved";

   $data = file_get_contents("mydata.json");
   $mydata = json_decode($data);
   
    
    
?>
 