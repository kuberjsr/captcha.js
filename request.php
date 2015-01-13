<?php

$Name=$_REQUEST['name'];
$Email=$_REQUEST['email'];

$Phone=$_REQUEST['contact'];
$Message="I m intersted inyour project plz callme";
echo $_SERVER['REMOTE_ADDR'];




$dt=date("Y-m-d");

$headers = "From: info@yourdomain.com\r\n";
$headers .= 'Bcc: mymail@mydomain.com' . "\r\n";
$f_email = "other@otherdomain.com";
$body_message =" Name : $Name \n\n Email : $Email \n\n Phone:$Phone \n\n Message:$Message \n\n Date:$dt";
$subject="Mail from Web Site (Aditya World City) : Request By $Name for Some Query";
mail($f_email,$subject,$body_message,$headers);

//header("Location:http://www.yourdomain.com"); 
?>
             
