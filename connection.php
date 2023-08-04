<?php
$host = "localhost"; 
$username = "root"; 
$password = "Admin@123"; 
$database = "cr"; 


$connection = mysqli_connect($host, $username, $password, $database);


if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
