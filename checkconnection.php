<?php

$db_name =  "cdtp";
$user_name = "root";
$password = "";

$conn = mysqli_connect("localhost", $user_name, $password, $db_name);

if($conn)
{
	
	echo "Connected";

}
else
{
	echo "could not";
}

?>