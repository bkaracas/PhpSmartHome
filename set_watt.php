<?php

$db_name = "cdtp";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", $username, $password, $db_name);

if(!$conn){
	
	echo"failed to connect";

}

$user_name = $_GET["u"];
$user_watt = $_GET["w"];


$sql = "Update cdtp.user Set w='$user_watt' where u='$user_name'";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);



?>