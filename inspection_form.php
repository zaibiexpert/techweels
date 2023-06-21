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


$insert_preliminary_information = "INSERT INTO `preliminary_information` (`id`, `username`, `vehicle_name`, `email`, `phone`, `city`, `date`, `vehicle_model`, `vehicle_variant`, `model_year`, `transmission`, `engine_capacity`, `fuel_type`, `body_color`, `mileage`, `registration_number`, `registered_city`, `chassis_number`, `engine_number`, `message`) VALUES (NULL, '$username', '$vehicle_name', '$email', '$phone', '$city', '$date', '', '', '', '', '', '', '', '', '', '', '', '', '$message')";
mysqli_query($conn, $insert_preliminary_information);

$preliminary_information_id = mysqli_insert_id($conn);


$insert_accidental_checklist = "INSERT INTO `accidental_checklist` (`id`, `engineRoom`, `rightStrutTower`, `leftStrutTower`, `rightFrontRail`, `leftFrontRail`, `radiatorCoreSupport`, `rightApillar`, `leftApillar`, `leftBpillar`, `rightCpillar`, `leftCpillar`, `rightDpillar`, `leftDpillar`, `bootFloor`, `frontUnderbody`, `rearUnderbody`, `rightBpillar`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_accidental_checklist);


$insert_accessories = "INSERT INTO `accessories` (`id`, `spareWheel`, `toolKit`, `jack`, `punctureRepairkit`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_accessories);



$insert_ac_heater_operation = "INSERT INTO `ac_heater_operation` (`id`, `acInstalled`, `acFan`, `blowerThrow`, `acCooling`, `heater`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_ac_heater_operation);



$insert_electronic_function = "INSERT INTO `electronic_function` (`id`, `horn`, `rightHeadlightOperation`, `rightHeadlightCondition`, `rightHeadlight`, `leftHeadlightOperation`, `leftHeadlightCondition`, `leftHeadlight`, `foglightsOperation`, `leftTaillightsOperation`, `leftTaillightsCondition`, `leftTaillights`, `rightTaillightsOperation`, `rightTaillightsCondition`, `rightTaillights`, `windshieldWipers`, `airbags`, `checkLights`, `battery`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_electronic_function);


$insert_exterior_body = "INSERT INTO `exterior_body` (`id`, `trunkLock`, `bonnet`, `frontWindshield`, `frontPassengerfender`, `rearPassengerdoor`, `rearPassengerfender`, `trunk`, `rearWinshield`, `rearDriverfender`, `rearDriverdoor`, `frontDriverdoor`, `roof`, `pabbels`, `driverApillar`, `driverBpillar`, `driverCpillar`, `driverDpillar`, `passengerApillar`, `passengerBpillar`, `passengerCpillar`, `passengerDpillar`, `frontDriverfender`, `frontPassengerdoor`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_exterior_body);


$insert_interior = "INSERT INTO `interior` (`id`, `steeringWheelwearTear`, `steeringWheelbutton`, `lightLeverswitch`, `dashboard`, `dashControlbuttons`, `interiorLights`, `deFogger`, `hazardLights`, `multimedia`, `rearCamera`, `frontViewcamera`, `trunkReleaselever`, `fuelcapReleaseLever`, `bonnetReleaselever`, `sideViewmirrorAdjustment`, `leftSideviewMirror`, `rightSideviewMirror`, `retractingSideviewMirrors`, `acGrills`, `acceleratorPedal`, `breakPedal`, `clutchPedal`, `seatsType`, `seatsCondition`, `driverSeatbelt`, `passengerSeatbelt`, `windowsType`, `frontDriverwindow`, `frontPassengerwindow`, `rearDriversideWindow`, `rearPassengersideWindow`, `windowSafetylockButton`, `centralLocking`, `keyButtons`, `floorMats`, `frontDriverdoorSeal`, `frontPassengerDoorSeal`, `rearDriversideDoorSeal`, `rearPassengersideDoorSeal`, `bonnetSeal`, `trunkSeal`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_interior);



$insert_mechanical_function = "INSERT INTO `mechanical_function` (`id`, `engineNoisy`, `engineVibration`, `engineSmoke`, `engineSmokeColor`, `engineBlow`, `coolantLeakage`, `brakeOilLeakage`, `transmissionOilLeakage`, `exhaustSound`, `radiator`, `suctionFan`, `gearTransmission`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_mechanical_function);


$insert_suspension_function = "INSERT INTO `suspension_function` (`id`, `steeringAssemblyplay`, `axleBoots`, `rightBalljoint`, `leftBalljoint`, `tieRodend`, `rightBoot`, `leftBoot`, `rightBush`, `leftBush`, `rearRightshockAbsorder`, `rearLeftshockAbsorder`, `frontRightshockAbsorder`, `frontLeftShockAbsorder`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_suspension_function);


$insert_test_drive = "INSERT INTO `test_drive` (`id`, `enginePick`, `gearShifting`, `differentialNoise`, `driveShaftnoise`, `absActuation`, `brakePedaloperation`, `frontSuspensionNoise`, `rearSuspensionNoise`, `steeringFunction`, `steeringWheelalignment`, `speedmeterInformation`, `testDrivedoneBy`, `adminMessage`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_test_drive);



$insert_tyres = "INSERT INTO `tyres` (`id`, `frontPassengertyreBrand`, `frontPassengertyreSize`, `frontPassengertyreCondition`, `frontDrivertyreBrand`, `frontDrivertyreSize`, `frontDrivertyreCondition`, `rearPassengertyreBrand`, `rearPassengerTyresize`, `rearPassengertyreCondition`, `rearDriverTyrebrand`, `rearDrivertyreSize`, `rearDrivertyreCondition`, `alloyRims`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_tyres);


// Return success response
$response = array('success' => true, 'message' => 'Inspection registered successfully.');
echo json_encode($response);

?>
