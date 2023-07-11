<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "websquad";


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
