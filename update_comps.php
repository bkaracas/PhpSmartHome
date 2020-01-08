<?php
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
 require 'checkconnection.php';
 create();
}
 
 
function create()
{
 global $conn; 
 $buzdolabi= $_POST["b"]; 
 $bulasik=$_POST["m"];
 $camasir= $_POST["c"];
 $tv= $_POST["t"];
 $firin= $_POST["f"];
 $pc= $_POST["p"];

  
 $query = "UPDATE cdtp.cihaz SET buzdolabi='$buzdolabi', firin='$firin', camasir='$camasir', bulasik=$bulasik, tv='$tv', pc='$pc'"; 
  
 mysqli_query($conn, $query) or die (mysqli_error($conn));
 mysqli_close($conn);
  
}
 
 
 
 
 
 
 
 
?>;