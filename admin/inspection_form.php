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

// preliminary_information start
$username = $_POST['username'];
$vehicle_name = $_POST['vehicle_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$date = $_POST['date'];
$vehicle_model = $_POST['vehicle_model'];
$vehicle_variant = $_POST['vehicle_variant'];
$model_year = $_POST['model_year'];
$transmission = $_POST['transmission'];
$engine_capacity = $_POST['engine_capacity'];
$fuel_type = $_POST['fuel_type'];
$body_color = $_POST['body_color'];
$mileage = $_POST['mileage'];
$registration_number = $_POST['registration_number'];
$registered_city = $_POST['registered_city'];
$chassis_number = $_POST['chassis_number'];
$engine_number = $_POST['engine_number'];
$message = mysqli_real_escape_string($conn, $_POST['message']);

$insert_preliminary_information = "INSERT INTO `preliminary_information` (`id`, `username`, `vehicle_name`, `email`, `phone`, `city`, `date`, `vehicle_model`, `vehicle_variant`, `model_year`, `transmission`, `engine_capacity`, `fuel_type`, `body_color`, `mileage`, `registration_number`, `registered_city`, `chassis_number`, `engine_number`, `message`) VALUES (NULL, 'username', '$vehicle_name', '$email', '$phone', '$city', '$date', '$vehicle_model', '$vehicle_variant', '$model_year', '$transmission', '$engine_capacity', '$fuel_type', '$body_color', '$mileage', '$registration_number', '$registered_city', '$chassis_number', '$engine_number', '$message')";
mysqli_query($conn, $insert_preliminary_information);

$preliminary_information_id = mysqli_insert_id($conn);
// preliminary_information end


// Accidental Checklist start
$rearUnderbody = $_POST['rearUnderbody'];
$frontUnderbody = $_POST['frontUnderbody'];
$bootFloor = $_POST['bootFloor'];
$leftDpillar = $_POST['leftDpillar'];
$rightDpillar = $_POST['rightDpillar'];
$leftCpillar = $_POST['leftCpillar'];
$rightCpillar = $_POST['rightCpillar'];
$leftBpillar = $_POST['leftBpillar'];
$rightBpillar = $_POST['rightBpillar'];
$leftApillar = $_POST['leftApillar'];
$rightApillar = $_POST['rightApillar'];
$radiatorCoreSupport = $_POST['radiatorCoreSupport'];
$leftFrontRail = $_POST['leftFrontRail'];
$rightFrontRail = $_POST['rightFrontRail'];
$leftStrutTower = $_POST['leftStrutTower'];
$rightStrutTower = $_POST['rightStrutTower'];
$engineRoom = $_POST['engineRoom'];

$insert_accidental_checklist = "INSERT INTO `accidental_checklist` (`id`, `engineRoom`, `rightStrutTower`, `leftStrutTower`, `rightFrontRail`, `leftFrontRail`, `radiatorCoreSupport`, `rightApillar`, `leftApillar`, `leftBpillar`, `rightCpillar`, `leftCpillar`, `rightDpillar`, `leftDpillar`, `bootFloor`, `frontUnderbody`, `rearUnderbody`, `rightBpillar`, `preliminary_information_id`) VALUES (NULL, '$engineRoom', '$rightStrutTower', '$leftStrutTower', '$rightFrontRail', '$leftFrontRail', '$radiatorCoreSupport', '$rightApillar', '$leftApillar', '$leftBpillar', '$rightCpillar', '$leftCpillar', '$rightDpillar', '$leftDpillar', '$bootFloor', '$frontUnderbody', '$rearUnderbody', '$rightBpillar', '$preliminary_information_id')";
mysqli_query($conn, $insert_accidental_checklist);

$accidental_checklist_id = mysqli_insert_id($conn);

$accidental_images = $_FILES['accidental_images']['name'];
$accidental_images_length = count($accidental_images);

for ($i = 0; $i < $accidental_images_length; $i++) {
    $accidental_images = $_FILES['accidental_images']['name'][$i];
    if (!empty($accidental_images)) {
        $target_directory = 'assets/images/accidental-images/';
        $target_file = $target_directory . basename($accidental_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['accidental_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `accidental_images` (`id`, `image`, `accidental_checklist_id`) VALUES (NULL, '" . $accidental_images . "', '" . $accidental_checklist_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Accidental Checklist end

//Mechanical Function start

$gearTransmission = $_POST['gearTransmission'];
$suctionFan = $_POST['suctionFan'];
$radiator = $_POST['radiator'];
$exhaustSound = $_POST['exhaustSound'];
$transmissionOilLeakage = $_POST['transmissionOilLeakage'];
$brakeOilLeakage = $_POST['brakeOilLeakage'];
$coolantLeakage = $_POST['coolantLeakage'];
$engineBlow = $_POST['engineBlow'];
$engineSmokeColor = $_POST['engineSmokeColor'];
$engineSmoke = $_POST['engineSmoke'];
$engineVibration = $_POST['engineVibration'];
$engineNoisy = $_POST['engineNoisy'];

$insert_mechanical_function = "INSERT INTO `mechanical_function` (`id`, `engineNoisy`, `engineVibration`, `engineSmoke`, `engineSmokeColor`, `engineBlow`, `coolantLeakage`, `brakeOilLeakage`, `transmissionOilLeakage`, `exhaustSound`, `radiator`, `suctionFan`, `gearTransmission`, `preliminary_information_id`) VALUES (NULL, '$engineNoisy', '$engineVibration', '$engineSmoke', '$engineSmokeColor', '$engineBlow', '$coolantLeakage', '$brakeOilLeakage', '$transmissionOilLeakage', '$exhaustSound', '$radiator', '$suctionFan', '$gearTransmission', '$preliminary_information_id')";
mysqli_query($conn, $insert_mechanical_function);

$mechanical_function_id = mysqli_insert_id($conn);

$mechanical_images = $_FILES['mechanical_images']['name'];
$mechanical_images_length = count($mechanical_images);

for ($i = 0; $i < $mechanical_images_length; $i++) {
    $mechanical_images = $_FILES['mechanical_images']['name'][$i];
    if (!empty($mechanical_images)) {
        $target_directory = 'assets/images/mechanical-images/';
        $target_file = $target_directory . basename($mechanical_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['mechanical_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `mechanical_images` (`id`, `image`, `mechanical_function_id`) VALUES (NULL, '" . $mechanical_images . "', '" . $mechanical_function_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

//Mechanical Function end

//Ac/Heater operation start

$heater = $_POST['heater'];
$acCooling = $_POST['acCooling'];
$blowerThrow = $_POST['blowerThrow'];
$acFan = $_POST['acFan'];
$acInstalled = $_POST['acInstalled'];

$insert_ac_heater_operation = "INSERT INTO `ac_heater_operation` (`id`, `acInstalled`, `acFan`, `blowerThrow`, `acCooling`, `heater`, `preliminary_information_id`) VALUES (NULL, '$acInstalled', '$acFan', '$blowerThrow', '$acCooling', '$heater', '$preliminary_information_id');";
mysqli_query($conn, $insert_ac_heater_operation);

$ac_heater_operation_id = mysqli_insert_id($conn);

$ac_heater_images = $_FILES['ac_heater_images']['name'];
$ac_heater_images_length = count($ac_heater_images);

for ($i = 0; $i < $ac_heater_images_length; $i++) {
    $ac_heater_images = $_FILES['ac_heater_images']['name'][$i];
    if (!empty($ac_heater_images)) {
        $target_directory = 'assets/images/ac-heater-images/';
        $target_file = $target_directory . basename($ac_heater_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['ac_heater_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `ac_heater_images` (`id`, `image`, `ac_heater_operation_id`) VALUES (NULL, '" . $ac_heater_images . "', '" . $ac_heater_operation_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Ac/Heater operation end


// Interior start

$trunkSeal = $_POST['trunkSeal'];
$bonnetSeal = $_POST['bonnetSeal'];
$rearPassengersideDoorSeal = $_POST['rearPassengersideDoorSeal'];
$rearDriversideDoorSeal = $_POST['rearDriversideDoorSeal'];
$frontPassengerDoorSeal = $_POST['frontPassengerDoorSeal'];
$frontDriverdoorSeal = $_POST['frontDriverdoorSeal'];
$floorMats = $_POST['floorMats'];
$keyButtons = $_POST['keyButtons'];
$centralLocking = $_POST['centralLocking'];
$windowSafetylockButton = $_POST['windowSafetylockButton'];
$rearPassengersideWindow = $_POST['rearPassengersideWindow'];
$rearDriversideWindow = $_POST['rearDriversideWindow'];
$frontPassengerwindow = $_POST['frontPassengerwindow'];
$frontDriverwindow = $_POST['frontDriverwindow'];
$windowsType = $_POST['windowsType'];
$passengerSeatbelt = $_POST['passengerSeatbelt'];
$driverSeatbelt = $_POST['driverSeatbelt'];
$seatsCondition = $_POST['seatsCondition'];
$seatsType = $_POST['seatsType'];
$clutchPedal = $_POST['clutchPedal'];
$breakPedal = $_POST['breakPedal'];
$acceleratorPedal = $_POST['acceleratorPedal'];
$acGrills = $_POST['acGrills'];
$retractingSideviewMirrors = $_POST['retractingSideviewMirrors'];
$rightSideviewMirror = $_POST['rightSideviewMirror'];
$leftSideviewMirror = $_POST['leftSideviewMirror'];
$sideViewmirrorAdjustment = $_POST['sideViewmirrorAdjustment'];
$bonnetReleaselever = $_POST['bonnetReleaselever'];
$fuelcapReleaseLever = $_POST['fuelcapReleaseLever'];
$trunkReleaselever = $_POST['trunkReleaselever'];
$frontViewcamera = $_POST['frontViewcamera'];
$rearCamera = $_POST['rearCamera'];
$multimedia = $_POST['multimedia'];
$hazardLights = $_POST['hazardLights'];
$deFogger = $_POST['deFogger'];
$interiorLights = $_POST['interiorLights'];
$dashControlbuttons = $_POST['dashControlbuttons'];
$dashboard = $_POST['dashboard'];
$lightLeverswitch = $_POST['lightLeverswitch'];
$steeringWheelbutton = $_POST['steeringWheelbutton'];
$steeringWheelwearTear = $_POST['steeringWheelwearTear'];

$insert_interior = "INSERT INTO `interior` (`id`, `steeringWheelwearTear`, `steeringWheelbutton`, `lightLeverswitch`, `dashboard`, `dashControlbuttons`, `interiorLights`, `deFogger`, `hazardLights`, `multimedia`, `rearCamera`, `frontViewcamera`, `trunkReleaselever`, `fuelcapReleaseLever`, `bonnetReleaselever`, `sideViewmirrorAdjustment`, `leftSideviewMirror`, `rightSideviewMirror`, `retractingSideviewMirrors`, `acGrills`, `acceleratorPedal`, `breakPedal`, `clutchPedal`, `seatsType`, `seatsCondition`, `driverSeatbelt`, `passengerSeatbelt`, `windowsType`, `frontDriverwindow`, `frontPassengerwindow`, `rearDriversideWindow`, `rearPassengersideWindow`, `windowSafetylockButton`, `centralLocking`, `keyButtons`, `floorMats`, `frontDriverdoorSeal`, `frontPassengerDoorSeal`, `rearDriversideDoorSeal`, `rearPassengersideDoorSeal`, `bonnetSeal`, `trunkSeal`, `preliminary_information_id`) VALUES (NULL, '$steeringWheelwearTear', '$steeringWheelbutton', '$lightLeverswitch', '$dashboard', '$dashControlbuttons', '$interiorLights', '$deFogger', '$hazardLights', '$multimedia', '$rearCamera', '$frontViewcamera', '$trunkReleaselever', '$fuelcapReleaseLever', '$bonnetReleaselever', '$sideViewmirrorAdjustment', '$leftSideviewMirror', '$rightSideviewMirror', '$retractingSideviewMirrors', '$acGrills', '$acceleratorPedal', '$breakPedal', '$clutchPedal', '$seatsType', '$seatsCondition', '$driverSeatbelt', '$passengerSeatbelt', '$windowsType', '$frontDriverwindow', '$frontPassengerwindow', '$rearDriversideWindow', '$rearPassengersideWindow', '$windowSafetylockButton', '$centralLocking', '$keyButtons', '$floorMats', '$frontDriverdoorSeal', '$frontPassengerDoorSeal', '$rearDriversideDoorSeal', '$rearPassengersideDoorSeal', '$bonnetSeal', '$trunkSeal', '$preliminary_information_id')";
mysqli_query($conn, $insert_interior);

$interior_id = mysqli_insert_id($conn);

$interior_images = $_FILES['interior_images']['name'];
$interior_images_length = count($interior_images);

for ($i = 0; $i < $interior_images_length; $i++) {
    $interior_images = $_FILES['interior_images']['name'][$i];
    if (!empty($interior_images)) {
        $target_directory = 'assets/images/interior-images/';
        $target_file = $target_directory . basename($interior_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['interior_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `interior_images` (`id`, `image`, `interior_id`) VALUES (NULL, '" . $interior_images . "', '" . $interior_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Interior end


// Electronic Function start

$checkLights = $_POST['checkLights'];
$airbags = $_POST['airbags'];
$windshieldWipers = $_POST['windshieldWipers'];
$rightTaillights = $_POST['rightTaillights'];
$rightTaillightsCondition = $_POST['rightTaillightsCondition'];
$rightTaillightsOperation = $_POST['rightTaillightsOperation'];
$leftTaillights = $_POST['leftTaillights'];
$leftTaillightsCondition = $_POST['leftTaillightsCondition'];
$leftTaillightsOperation = $_POST['leftTaillightsOperation'];
$foglightsOperation = $_POST['foglightsOperation'];
$leftHeadlight = $_POST['leftHeadlight'];
$leftHeadlightCondition = $_POST['leftHeadlightCondition'];
$leftHeadlightOperation = $_POST['leftHeadlightOperation'];
$rightHeadlight = $_POST['rightHeadlight'];
$rightHeadlightCondition = $_POST['rightHeadlightCondition'];
$rightHeadlightOperation = $_POST['rightHeadlightOperation'];
$horn = $_POST['horn'];
$battery = $_POST['battery'];

$insert_electronic_function = "INSERT INTO `electronic_function` (`id`, `horn`, `rightHeadlightOperation`, `rightHeadlightCondition`, `rightHeadlight`, `leftHeadlightOperation`, `leftHeadlightCondition`, `leftHeadlight`, `foglightsOperation`, `leftTaillightsOperation`, `leftTaillightsCondition`, `leftTaillights`, `rightTaillightsOperation`, `rightTaillightsCondition`, `rightTaillights`, `windshieldWipers`, `airbags`, `checkLights`, `battery`, `preliminary_information_id`) VALUES (NULL, '$horn', '$rightHeadlightOperation', '$rightHeadlightCondition', '$rightHeadlight', '$leftHeadlightOperation', '$leftHeadlightCondition', '$leftHeadlight', '$foglightsOperation', '$leftTaillightsOperation', '$leftTaillightsCondition', '$leftTaillights', '$rightTaillightsOperation', '$rightTaillightsCondition', '$rightTaillights', '$windshieldWipers', '$airbags', '$checkLights', '$battery', '$preliminary_information_id')";
mysqli_query($conn, $insert_electronic_function);

$electronic_function_id = mysqli_insert_id($conn);

$electronic_images = $_FILES['electronic_images']['name'];
$electronic_images_length = count($electronic_images);

for ($i = 0; $i < $electronic_images_length; $i++) {
    $electronic_images = $_FILES['electronic_images']['name'][$i];
    if (!empty($electronic_images)) {
        $target_directory = 'assets/images/electronic-images/';
        $target_file = $target_directory . basename($electronic_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['electronic_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `electronic_images` (`id`, `image`, `electronic_function_id`) VALUES (NULL, '" . $electronic_images . "', '" . $electronic_function_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Electronic Function end


//Suspension Function start 

$frontLeftShockAbsorder = $_POST['frontLeftShockAbsorder'];
$frontRightshockAbsorder = $_POST['frontRightshockAbsorder'];
$rearLeftshockAbsorder = $_POST['rearLeftshockAbsorder'];
$rearRightshockAbsorder = $_POST['rearRightshockAbsorder'];
$leftBush = $_POST['leftBush'];
$rightBush = $_POST['rightBush'];
$leftBoot = $_POST['leftBoot'];
$rightBoot = $_POST['rightBoot'];
$tieRodend = $_POST['tieRodend'];
$leftBalljoint = $_POST['leftBalljoint'];
$rightBalljoint = $_POST['rightBalljoint'];
$axleBoots = $_POST['axleBoots'];
$steeringAssemblyplay = $_POST['steeringAssemblyplay'];

$insert_suspension_function = "INSERT INTO `suspension_function` (`id`, `steeringAssemblyplay`, `axleBoots`, `rightBalljoint`, `leftBalljoint`, `tieRodend`, `rightBoot`, `leftBoot`, `rightBush`, `leftBush`, `rearRightshockAbsorder`, `rearLeftshockAbsorder`, `frontRightshockAbsorder`, `frontLeftShockAbsorder`, `preliminary_information_id`) VALUES (NULL, '$steeringAssemblyplay', '$axleBoots', '$rightBalljoint', '$leftBalljoint', '$tieRodend', '$rightBoot', '$leftBoot', '$rightBush', '$leftBush', '$rearRightshockAbsorder', '$rearLeftshockAbsorder', '$frontRightshockAbsorder', '$frontLeftShockAbsorder', '$preliminary_information_id')";
mysqli_query($conn, $insert_suspension_function);

$suspension_function_id = mysqli_insert_id($conn);

$suspension_images = $_FILES['suspension_images']['name'];
$suspension_images_length = count($suspension_images);

for ($i = 0; $i < $suspension_images_length; $i++) {
    $suspension_images = $_FILES['suspension_images']['name'][$i];
    if (!empty($suspension_images)) {
        $target_directory = 'assets/images/suspension-images/';
        $target_file = $target_directory . basename($suspension_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['suspension_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `suspension_images` (`id`, `image`, `suspension_function_id`) VALUES (NULL, '" . $suspension_images . "', '" . $suspension_function_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Suspension Function end 

// Exterior Body start

$passengerDpillar = $_POST['passengerDpillar'];
$passengerCpillar = $_POST['passengerCpillar'];
$passengerBpillar = $_POST['passengerBpillar'];
$passengerApillar = $_POST['passengerApillar'];
$driverDpillar = $_POST['driverDpillar'];
$driverCpillar = $_POST['driverCpillar'];
$driverBpillar = $_POST['driverBpillar'];
$driverApillar = $_POST['driverApillar'];
$pabbels = $_POST['pabbels'];
$roof = $_POST['roof'];
$frontDriverdoor = $_POST['frontDriverdoor'];
$rearDriverdoor = $_POST['rearDriverdoor'];
$rearDriverfender = $_POST['rearDriverfender'];
$rearWinshield = $_POST['rearWinshield'];
$trunk = $_POST['trunk'];
$rearPassengerfender = $_POST['rearPassengerfender'];
$rearPassengerdoor = $_POST['rearPassengerdoor'];
$frontPassengerdoor = $_POST['frontPassengerdoor'];
$frontPassengerfender = $_POST['frontPassengerfender'];
$frontWindshield = $_POST['frontWindshield'];
$bonnet = $_POST['bonnet'];
$frontDriverfender = $_POST['frontDriverfender'];
$trunkLock = $_POST['trunkLock'];

$insert_exterior_body = "INSERT INTO `exterior_body` (`id`, `trunkLock`, `bonnet`, `frontWindshield`, `frontPassengerfender`, `rearPassengerdoor`, `rearPassengerfender`, `trunk`, `rearWinshield`, `rearDriverfender`, `rearDriverdoor`, `frontDriverdoor`, `roof`, `pabbels`, `driverApillar`, `driverBpillar`, `driverCpillar`, `driverDpillar`, `passengerApillar`, `passengerBpillar`, `passengerCpillar`, `passengerDpillar`, `frontDriverfender`, `frontPassengerdoor`, `preliminary_information_id`) VALUES (NULL, '$trunkLock', '$bonnet', '$frontWindshield', '$frontPassengerfender', '$rearPassengerdoor', '$rearPassengerfender', '$trunk', '$rearWinshield', '$rearDriverfender', '$rearDriverdoor', '$frontDriverdoor', '$roof', '$pabbels', '$driverApillar', '$driverBpillar', '$driverCpillar', '$driverDpillar', '$passengerApillar', '$passengerBpillar', '$passengerCpillar', '$passengerDpillar', '$frontDriverfender', '$frontPassengerdoor', '$preliminary_information_id')";
mysqli_query($conn, $insert_exterior_body);

$exterior_body_id = mysqli_insert_id($conn);

$exterior_images = $_FILES['exterior_images']['name'];
$exterior_images_length = count($exterior_images);

for ($i = 0; $i < $exterior_images_length; $i++) {
    $exterior_images = $_FILES['exterior_images']['name'][$i];
    if (!empty($exterior_images)) {
        $target_directory = 'assets/images/exterior-images/';
        $target_file = $target_directory . basename($exterior_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['exterior_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `exterior_images` (`id`, `image`, `exterior_body_id`) VALUES (NULL, '" . $exterior_images . "', '" . $exterior_body_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Exterior Body end


// Tyres start 

$alloyRims = $_POST['alloyRims'];
$rearDrivertyreCondition = $_POST['rearDrivertyreCondition'];
$rearDrivertyreSize = $_POST['rearDrivertyreSize'];
$rearDriverTyrebrand = $_POST['rearDriverTyrebrand'];
$rearPassengertyreCondition = $_POST['rearPassengertyreCondition'];
$rearPassengerTyresize = $_POST['rearPassengerTyresize'];
$rearPassengertyreBrand = $_POST['rearPassengertyreBrand'];
$frontDrivertyreCondition = $_POST['frontDrivertyreCondition'];
$frontDrivertyreSize = $_POST['frontDrivertyreSize'];
$frontDrivertyreBrand = $_POST['frontDrivertyreBrand'];
$frontPassengertyreCondition = $_POST['frontPassengertyreCondition'];
$frontPassengertyreSize = $_POST['frontPassengertyreSize'];
$frontPassengertyreBrand = $_POST['frontPassengertyreBrand'];

$insert_tyre = "INSERT INTO `tyres` (`id`, `frontPassengertyreBrand`, `frontPassengertyreSize`, `frontPassengertyreCondition`, `frontDrivertyreBrand`, `frontDrivertyreSize`, `frontDrivertyreCondition`, `rearPassengertyreBrand`, `rearPassengerTyresize`, `rearPassengertyreCondition`, `rearDriverTyrebrand`, `rearDrivertyreSize`, `rearDrivertyreCondition`, `alloyRims`, `preliminary_information_id`) VALUES (NULL, '$frontPassengertyreBrand	', '$frontPassengertyreSize', '$frontPassengertyreCondition', '$frontDrivertyreBrand', '$frontDrivertyreSize', '$frontDrivertyreCondition', '$rearPassengertyreBrand', '$rearPassengerTyresize', '$rearPassengertyreCondition', '$rearDriverTyrebrand', '$rearDrivertyreSize', '$rearDrivertyreCondition', '$alloyRims', '$preliminary_information_id')";
mysqli_query($conn, $insert_tyre);

$tyres_id = mysqli_insert_id($conn);

$tyre_images = $_FILES['tyre_images']['name'];
$tyre_images_length = count($tyre_images);

for ($i = 0; $i < $tyre_images_length; $i++) {
    $tyre_images = $_FILES['tyre_images']['name'][$i];
    if (!empty($tyre_images)) {
        $target_directory = 'assets/images/tyre-images/';
        $target_file = $target_directory . basename($tyre_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['tyre_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `tyre_images` (`id`, `image`, `tyres_id`) VALUES (NULL, '" . $tyre_images . "', '" . $tyres_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Tyres start 


// Accessories start

$punctureRepairkit = $_POST['punctureRepairkit'];
$jack = $_POST['jack'];
$toolKit = $_POST['toolKit'];
$spareWheel = $_POST['spareWheel'];

$insert_accessories = "INSERT INTO `accessories` (`id`, `spareWheel`, `toolKit`, `jack`, `punctureRepairkit`, `preliminary_information_id`) VALUES (NULL, '$spareWheel', '$toolKit', '$jack', '$punctureRepairkit', '$preliminary_information_id')";
mysqli_query($conn, $insert_accessories);

$accessories_id = mysqli_insert_id($conn);

$accessories_images = $_FILES['accessories_images']['name'];
$accessories_images_length = count($accessories_images);

for ($i = 0; $i < $accessories_images_length; $i++) {
    $accessories_images = $_FILES['accessories_images']['name'][$i];
    if (!empty($accessories_images)) {
        $target_directory = 'assets/images/accessories-images/';
        $target_file = $target_directory . basename($accessories_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['accessories_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `accessories_images` (`id`, `image`, `accessories_id`) VALUES (NULL, '" . $accessories_images . "', '" . $accessories_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Accessories end


// Test Drive start

$testDrivedoneBy = $_POST['testDrivedoneBy'];
$speedmeterInformation = $_POST['speedmeterInformation'];
$steeringWheelalignment = $_POST['steeringWheelalignment'];
$steeringFunction = $_POST['steeringFunction'];
$rearSuspensionNoise = $_POST['rearSuspensionNoise'];
$frontSuspensionNoise = $_POST['frontSuspensionNoise'];
$brakePedaloperation = $_POST['brakePedaloperation'];
$absActuation = $_POST['absActuation'];
$driveShaftnoise = $_POST['driveShaftnoise'];
$differentialNoise = $_POST['differentialNoise'];
$gearShifting = $_POST['gearShifting'];
$enginePick = $_POST['enginePick'];
$admin_message = mysqli_real_escape_string($conn, $_POST['admin_message']);

$insert_test_drive = "INSERT INTO `test_drive` (`id`, `enginePick`, `gearShifting`, `differentialNoise`, `driveShaftnoise`, `absActuation`, `brakePedaloperation`, `frontSuspensionNoise`, `rearSuspensionNoise`, `steeringFunction`, `steeringWheelalignment`, `speedmeterInformation`, `testDrivedoneBy`, `adminMessage`, `preliminary_information_id`) VALUES (NULL, '$enginePick', '$gearShifting', '$differentialNoise', '$driveShaftnoise', '$absActuation', '$brakePedaloperation', '$frontSuspensionNoise', '$rearSuspensionNoise', '$steeringFunction', '$steeringWheelalignment', '$speedmeterInformation', '$testDrivedoneBy', '$admin_message', '$preliminary_information_id')";
mysqli_query($conn, $insert_test_drive);


$test_drive_id = mysqli_insert_id($conn);

$car_images = $_FILES['car_images']['name'];
$car_images_length = count($car_images);

for ($i = 0; $i < $car_images_length; $i++) {
    $car_images = $_FILES['car_images']['name'][$i];
    if (!empty($car_images)) {
        $target_directory = 'assets/images/car-images/';
        $target_file = $target_directory . basename($car_images);
        if (!is_dir($target_directory)) {
            mkdir($target_directory, 0777, true); // Create the target directory if it doesn't exist
        }
        move_uploaded_file($_FILES['car_images']['tmp_name'][$i], $target_file);
         $insert_images = "INSERT INTO `car_images` (`id`, `image`, `test_drive_id`) VALUES (NULL, '" . $car_images . "', '" . $test_drive_id . "')";
        mysqli_query($conn, $insert_images);
    }
}

// Test Drive start



// Return success response
$response = array('success' => true, 'message' => 'Inspection registered successfully.');
echo json_encode($response);

?>
