<?php

$db_name = "cdtp";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", $username, $password, $db_name);

if(!$conn){
	
	echo"failed to connect";

}

$user_watt1 = $_GET["a1"];
$user_watt2 = $_GET["a2"];
$user_watt3 = $_GET["a3"];
$user_watt4 = $_GET["a4"];



$sql1 = "Update cdtp.user Set w='$user_watt1' where u='a'";
$sql2 = "Update cdtp.user Set w='$user_watt2' where u='b'";
$sql3 = "Update cdtp.user Set w='$user_watt3' where u='c'";
$sql4 = "Update cdtp.user Set w='$user_watt4' where u='d'";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
mysqli_query($conn, $sql3);
mysqli_query($conn, $sql4);
mysqli_close($conn);



?>