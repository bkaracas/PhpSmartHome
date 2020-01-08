<?php

$db_name = "cdtp";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", $username, $password, $db_name);

if(!$conn){
	
	echo"failed to connect";

}

$user_name = $_GET["u"];
$receiver_name = $_GET["s"];
$user_watt = $_GET["a"];
$receiver_watt = $_GET["b"];

$sql = "Update cdtp.user Set w='$user_watt' where u='$user_name'";
$sql2 = "Update cdtp.user Set w='$receiver_watt' where u='$receiver_name'";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);



mysqli_close($conn);



?>