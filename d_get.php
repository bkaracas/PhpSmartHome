<?php

$db_name = "cdtp";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", $username, $password, $db_name);

if(!$conn){
	
	echo"failed to connect";

}

$sql = "SELECT * FROM cdtp.user where u='d'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["w"];
        echo " ";
        echo $row["p"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);



?>