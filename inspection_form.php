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



<?php
$username = $_POST['username'];
$vehicle_name = $_POST['vehicle_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$date = $_POST['date'];
$message = mysqli_real_escape_string($conn, $_POST['message']);


$insert = "INSERT INTO `preliminary_information` (`id`, `username`, `vehicle_name`, `email`, `phone`, `city`, `date`, `vehicle_model`, `vehicle_variant`, `model_year`, `transmission`, `engine_capacity`, `fuel_type`, `body_color`, `mileage`, `registration_number`, `registered_city`, `chassis_number`, `engine_number`, `message`) VALUES (NULL, '$username', '$vehicle_name', '$email', '$phone', '$city', '$date', '', '', '', '', '', '', '', '', '', '', '', '', '$message')";
mysqli_query($conn, $insert);
// Return success response
$response = array('success' => true, 'message' => 'Inspection registered successfully.');
echo json_encode($response);

?>
