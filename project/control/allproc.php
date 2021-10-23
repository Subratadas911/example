<?php

$validatefname="";
$validatelname="";
$validatemobile="";
$validatepass="";
$fname=$mobile="";
$lname="";
$age=0;
$password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$mobile=$_REQUEST["mobile"];
$password=$_REQUEST["password"];

if(empty($fname) || (strlen($fname)<5))
{
    $validatefname= "You have to enter First name";

}
else
{
    $validatefname=$fname;
}

if(empty($lname) || (strlen($lname)<2))
{
    $validatelname= "You have to enter Last name";

}
else
{
    $validatelname=$lname;
}



if(empty($password) || (strlen($password)<8))
{
    $validatepass="You have to enter valid password";
}
else
{
    $validatepass= "Your password is ".$password;
}


if(empty($mobile))
{
    $validatemobile="You have to enter mobile no.";
}

else
{
    $validatemobile= "Your mobile is ".$mobile;
}

$target_dir = "files/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];
if($_FILES["filetoupload"]["type"]=="image/jpeg")
{



	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo "You have uploaded ". $_FILES["filetoupload"]["name"];
       //echo "< img src=' ".$target_file." ' >";
    }
     else 
    {
        echo "Sorry, there was an error uploading your file.";
    }
}
else
{
   echo "File type does not match";
}


}

?>

   	
      
    
