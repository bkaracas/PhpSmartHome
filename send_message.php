<?php
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
 require 'checkconnection.php';
 create();
}
 
 
function create()
{
 global $conn; 
 $sender= $_POST["s"]; 
 $receiver= $_POST["r"];
 $message= $_POST["m"];
 $time= $_POST["h"];

  
 $query = "INSERT INTO cdtp.message(u,s,m,time) Values('$sender','$receiver','$message','$time')"; 
  
 mysqli_query($conn, $query) or die (mysqli_error($conn));
 mysqli_close($conn);
  
}
 
 
 
 
 
 
 
 
?>;