<?php

$db_name = "cdtp";
$username = "root";
$password = "";


$conn = mysqli_connect("localhost", $username, $password, $db_name);

if(!$conn){
	
	echo"failed to connect";

}

$sql = "SELECT * FROM cdtp.cihaz where u='a'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "* ";
        echo $row["buzdolabi"];
        echo "* ";
        echo $row["firin"];
        echo "* ";
        echo $row["camasir"];
        echo "* ";
        echo $row["bulasik"];
        echo "* ";
        echo $row["tv"];
        echo "* ";
        echo $row["pc"];
        echo "* "; 
        
    }
} else {
    echo "0 results";
}
mysqli_close($conn);



?>