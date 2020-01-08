<?php

$db_name = "cdtp";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", $username, $password, $db_name);

if(!$conn){
	
	echo"failed to connect";

}

$time = $_GET["t"];


$sql = "Update cdtp.time Set t='$time'";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);



?>