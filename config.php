<?php

$servername = "localhost";
$username = "root";
$password = "";

$db = "iwtp";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("Connection faild: ". $conn->connect_error);
}
echo "Connected successfully";

?>