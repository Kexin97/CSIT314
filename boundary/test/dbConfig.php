<?php
// Database configuration

$servername="localhost";
$username="root";
$password="";
$database_name="314_project";
//Initialize connection to database in PhpMyAdmin
$conn = @new mysqli($servername, $username, $password, $database_name);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>