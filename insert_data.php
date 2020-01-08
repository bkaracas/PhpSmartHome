<?php
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
 require 'checkconnection.php';
 create();
}
 
 
function create()
{
 global $conn; 
 $username= $_POST["u"]; 
 $pass= $_POST["p"];
 $watt= $_POST["w"];
  
 $query = "UPDATE cdtp.user SET w= '$watt' where u='$username' ";
  
 mysqli_query($conn, $query) or die (mysqli_error($conn));
 mysqli_close($conn);
  
}
 
 
 
 
 
 
 
 
?>;