<?php

$db_name = "cdtp";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", $username, $password, $db_name);

if(!$conn){
	
	echo"failed to connect";

}
$sql = "SELECT * FROM cdtp.message";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["m"];
        echo ",";
        echo $row["s"];
        echo ",";
        echo $row["time"];
        echo ",";
        echo $row["u"];
        echo ",";
        
    }
} else {
    echo "0 results";
}

mysqli_close($conn);



?>