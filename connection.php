<?php
//connect to Database

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "departmental_dues";

$conn = new mysqli($serverName, $userName, $userPassword, $dbName);

// if($conn->connect_error){
//     die("connection failed: " . $conn->connect_error);
// }
// else {
//     echo "Successful Connection";
// }
?>