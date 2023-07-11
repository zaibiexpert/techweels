<?php include('conn.php') ?>


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

$insert_preliminary_information = "INSERT INTO `preliminary_information` (`id`, `username`, `vehicle_name`, `email`, `phone`, `city`, `date`, `vehicle_model`, `vehicle_variant`, `model_year`, `transmission`, `engine_capacity`, `fuel_type`, `body_color`, `mileage`, `registration_number`, `registered_city`, `chassis_number`, `engine_number`, `message`) VALUES (NULL, '$username', '$vehicle_name', '$email', '$phone', '$city', '$date', '$vehicle_model', '$vehicle_variant', '$model_year', '$transmission', '$engine_capacity', '$fuel_type', '$body_color', '$mileage', '$registration_number', '$registered_city', '$chassis_number', '$engine_number', '$message')";
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

if (isset($_FILES['accidental_images'])) {
    
    $accidentalImages = $_FILES['accidental_images']['name'];
    $stmt = $conn->prepare("INSERT INTO `accidental_images` (`id`, `image`, `accidental_checklist_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['accidental_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['accidental_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['accidental_images']['name'][$key];
            $image_data = file_get_contents($_FILES['accidental_images']['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $accidental_checklist_id );

            // Execute the prepared statement
            $stmt->execute();
        }
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

$insert_mechanical_function = "INSERT INTO `mechanical_function` (`id`, `engine_oil_leakage`, `engineNoisy`, `engineVibration`, `engineSmoke`, `engineSmokeColor`, `engineBlow`, `coolantLeakage`, `brakeOilLeakage`, `transmissionOilLeakage`, `exhaustSound`, `radiator`, `suctionFan`, `gearTransmission`, `preliminary_information_id`) VALUES (NULL, '$engineNoisy', '$engine_oil_leakage', '$engineVibration', '$engineSmoke', '$engineSmokeColor', '$engineBlow', '$coolantLeakage', '$brakeOilLeakage', '$transmissionOilLeakage', '$exhaustSound', '$radiator', '$suctionFan', '$gearTransmission', '$preliminary_information_id')";
mysqli_query($conn, $insert_mechanical_function);


$mechanical_function_id = mysqli_insert_id($conn);

if (isset($_FILES['mechanical_images'])) {

    $mechanicalImages = $_FILES['mechanical_images']['name'];
    $stmt = $conn->prepare("INSERT INTO `mechanical_images` (`id`, `image`, `mechanical_function_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['mechanical_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['mechanical_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['mechanical_images']['name'][$key];
            $image_data = file_get_contents($_FILES['mechanical_images']['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $mechanical_function_id);

            // Execute the prepared statement
            $stmt->execute();
        }
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

if (isset($_FILES['ac_heater_images'])) {
    $acHeaterImages = $_FILES['ac_heater_images']['name'];

    $stmt = $conn->prepare("INSERT INTO `ac_heater_images` (`id`, `image`, `ac_heater_operation_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['ac_heater_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['ac_heater_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['ac_heater_images']['name'][$key];
            $image_data = file_get_contents($_FILES['ac_heater_images']['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $ac_heater_operation_id);

            // Execute the prepared statement
            $stmt->execute();
        }
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
$rear_right_seat_belt = $_POST['rear_right_seat_belt'];
$front_right_seat_belt = $_POST['front_right_seat_belt'];
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

$insert_interior = "INSERT INTO `interior` (`id`, `steeringWheelwearTear`, `steeringWheelbutton`, `lightLeverswitch`, `dashboard`, `dashControlbuttons`, `interiorLights`, `deFogger`, `hazardLights`, `multimedia`, `rearCamera`, `frontViewcamera`, `trunkReleaselever`, `fuelcapReleaseLever`, `bonnetReleaselever`, `sideViewmirrorAdjustment`, `leftSideviewMirror`, `rightSideviewMirror`, `retractingSideviewMirrors`, `acGrills`, `acceleratorPedal`, `breakPedal`, `clutchPedal`, `seatsType`, `seatsCondition`, `driverSeatbelt`, `passengerSeatbelt`, `windowsType`, `frontDriverwindow`, `frontPassengerwindow`, `rearDriversideWindow`, `rearPassengersideWindow`, `front_right_seat_belt`, `rear_right_seat_belt`, `windowSafetylockButton`, `centralLocking`, `keyButtons`, `floorMats`, `frontDriverdoorSeal`, `frontPassengerDoorSeal`, `rearDriversideDoorSeal`, `rearPassengersideDoorSeal`, `bonnetSeal`, `trunkSeal`, `preliminary_information_id`) VALUES (NULL, '$steeringWheelwearTear', '$steeringWheelbutton', '$lightLeverswitch', '$dashboard', '$dashControlbuttons', '$interiorLights', '$deFogger', '$hazardLights', '$multimedia', '$rearCamera', '$frontViewcamera', '$trunkReleaselever', '$fuelcapReleaseLever', '$bonnetReleaselever', '$sideViewmirrorAdjustment', '$leftSideviewMirror', '$rightSideviewMirror', '$retractingSideviewMirrors', '$acGrills', '$acceleratorPedal', '$breakPedal', '$clutchPedal', '$seatsType', '$seatsCondition', '$driverSeatbelt', '$passengerSeatbelt', '$windowsType', '$frontDriverwindow', '$frontPassengerwindow', '$rearDriversideWindow', '$rearPassengersideWindow', '$front_right_seat_belt', '$rear_right_seat_belt', '$windowSafetylockButton', '$centralLocking', '$keyButtons', '$floorMats', '$frontDriverdoorSeal', '$frontPassengerDoorSeal', '$rearDriversideDoorSeal', '$rearPassengersideDoorSeal', '$bonnetSeal', '$trunkSeal', '$preliminary_information_id')";
mysqli_query($conn, $insert_interior);

$interior_id = mysqli_insert_id($conn);

if (isset($_FILES['interior_images'])) {
    $interiorImages = $_FILES['interior_images']['name'];

    $stmt = $conn->prepare("INSERT INTO `interior_images` (`id`, `image`, `interior_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['interior_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['interior_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['interior_images']['name'][$key];
            $image_data = file_get_contents($_FILES['interior_images']['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $interior_id);

            // Execute the prepared statement
            $stmt->execute();
        }
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

if (isset($_FILES['electronic_images'])) {
    $electronicImages = $_FILES['electronic_images']['name'];

    $stmt = $conn->prepare("INSERT INTO `electronic_images` (`id`, `image`, `electronic_function_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['electronic_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['electronic_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['electronic_images']['name'][$key];
            $image_data = file_get_contents($_FILES['electronic_images']['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $electronic_function_id);

            // Execute the prepared statement
            $stmt->execute();
        }
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

if (isset($_FILES['suspension_images'])) {
    $suspensionImages = $_FILES['suspension_images']['name'];

    $stmt = $conn->prepare("INSERT INTO `suspension_images` (`id`, `image`, `suspension_function_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['suspension_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['suspension_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['suspension_images']['name'][$key];
            $image_data = file_get_contents($_FILES['suspension_images']['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $suspension_function_id);

            // Execute the prepared statement
            $stmt->execute();
        }
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
$panels = $_POST['panels'];
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

$insert_exterior_body = "INSERT INTO `exterior_body` (`id`, `trunkLock`, `bonnet`, `frontWindshield`, `frontPassengerfender`, `rearPassengerdoor`, `rearPassengerfender`, `trunk`, `rearWinshield`, `rearDriverfender`, `rearDriverdoor`, `frontDriverdoor`, `roof`, `panels`, `driverApillar`, `driverBpillar`, `driverCpillar`, `driverDpillar`, `passengerApillar`, `passengerBpillar`, `passengerCpillar`, `passengerDpillar`, `frontDriverfender`, `frontPassengerdoor`, `preliminary_information_id`) VALUES (NULL, '$trunkLock', '$bonnet', '$frontWindshield', '$frontPassengerfender', '$rearPassengerdoor', '$rearPassengerfender', '$trunk', '$rearWinshield', '$rearDriverfender', '$rearDriverdoor', '$frontDriverdoor', '$roof', '$panels', '$driverApillar', '$driverBpillar', '$driverCpillar', '$driverDpillar', '$passengerApillar', '$passengerBpillar', '$passengerCpillar', '$passengerDpillar', '$frontDriverfender', '$frontPassengerdoor', '$preliminary_information_id')";
mysqli_query($conn, $insert_exterior_body);

$exterior_body_id = mysqli_insert_id($conn);


function storeExteriorToDB($img_name, $conn, $exterior_body_id) {
    $stmt = $conn->prepare("INSERT INTO `exterior_images` (`id`, `image`, `exterior_body_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES[$img_name]['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES[$img_name]['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES[$img_name]['name'][$key];
            $image_data = file_get_contents($_FILES[$image_name]['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $exterior_body_id);

            // Execute the prepared statement
            $stmt->execute();
        }
    }

    // Close the prepared statement
    $stmt->close();
}
$inputs = array(
    'frontDriverfender_images',
    'frontPassengerdoor_images',
    'frontWindshield_images',
    'rearPassengerfender_images',
    'rearWinshield_images',
    'rearDriverfender_images',
    'rearDriverdoor_images',
    'roof_images',
    'panels_images',
    'driverApillar_images',
    'driverCpillar_images',
    'driverBpillar_images',
    'driverDpillar_images',
    'passengerApillar_images',
    'passengerCpillar_images',
    'passengerBpillar_images',
    'bonnet_images',
    'frontPassengerfender_images',
    'rearPassengerdoor_images',
    'passengerDpillar_images',
    'frontDriverdoor_images',
    'trunkLock_images'
);

// Loop through the image inputs and call the storeExteriorToDB() function for each input
foreach ($inputs as $input) {
    if (isset($_FILES[$input])) {
        storeExteriorToDB($input, $conn, $exterior_body_id);
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



if (isset($_FILES['tyre_images'])) {
    
    $tyres_id = mysqli_insert_id($conn);
    $img_name = $_FILES['tyre_images']['name'];
    $stmt = $conn->prepare("INSERT INTO `tyre_images` (`id`, `image`, `tyres_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['tyre_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['tyre_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['tyre_images']['name'][$key];
            $image_data = file_get_contents($_FILES['tyre_images']['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $tyres_id);

            // Execute the prepared statement
            $stmt->execute();
        }
    }

    // Close the prepared statement
    $stmt->close();
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
if (isset($_FILES['accessories_images'])) {
    $accessoriesImages = $_FILES['accessories_images']['name'];
    $accessoriesImagesCount = count($accessoriesImages);

    for ($i = 0; $i < $accessoriesImagesCount; $i++) {
        $accessoriesImage = $_FILES['accessories_images']['name'][$i];
        if (!empty($accessoriesImage)) {
            $targetDirectory = 'assets/images/car-images/';
            $targetFile = $targetDirectory . basename($accessoriesImage);
            if (!is_dir($targetDirectory)) {
                mkdir($targetDirectory, 0777, true); // Create the target directory if it doesn't exist
            }
            move_uploaded_file($_FILES['accessories_images']['tmp_name'][$i], $targetFile);
            $insertImages = "INSERT INTO `accessories_images` (`id`, `image`, `accessories_id`) VALUES (NULL, '$accessoriesImage', '$accessories_id')";
            mysqli_query($conn, $insertImages);

            // Define the folder path for accessories images
            $accessoriesImagesFolder = 'assets/images/car-images/';

            // Create the folder if it doesn't exist
            if (!is_dir($accessoriesImagesFolder)) {
                mkdir($accessoriesImagesFolder, 0755, true);
            }

            // Move uploaded image to the folder
            $tempPath = $targetDirectory . $accessoriesImage;
            $newPath = $accessoriesImagesFolder . $accessoriesImage;
            rename($tempPath, $newPath);
        }
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


function storeToDB($img_name, $conn, $test_drive_id) {
    $stmt = $conn->prepare("INSERT INTO `car_images` (`id`, `image`, `test_drive_id`) VALUES (NULL, ?, ?)");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES[$img_name]['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES[$img_name]['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES[$img_name]['name'][$key];
            $image_data = file_get_contents($_FILES[$img_name]['tmp_name'][$key]);

            // Bind the values to the prepared statement
            $stmt->bind_param("si", $image_data, $test_drive_id);

            // Execute the prepared statement
            $stmt->execute();
        }
    }

    // Close the prepared statement
    $stmt->close();
}

if (isset($_FILES['car_front_images'])) {
    storeToDB('car_front_images', $conn, $test_drive_id);
}


// // Car Front Headlight Image //
if (isset($_FILES['front_headlights_images'])) {
    storeToDB('front_headlights_images', $conn, $test_drive_id);
}

// // back light Image //
if (isset($_FILES['back_lights_images'])) {
    storeToDB('back_lights_images', $conn, $test_drive_id);
}


// Engine Room Image
if (isset($_FILES['engine_room_images'])) {
    storeToDB('engine_room_images', $conn, $test_drive_id);
}

// Stud Tower Right Image
if (isset($_FILES['stud_tower_right_images'])) {
    storeToDB('stud_tower_right_images', $conn, $test_drive_id);
}

// Stud Tower Left Image
if (isset($_FILES['stud_tower_left_images'])) {
    storeToDB('stud_tower_left_images', $conn, $test_drive_id);
}

// Front Right Image
if (isset($_FILES['front_right_images'])) {
    storeToDB('front_right_images', $conn, $test_drive_id);
}

// Front Left Image
if (isset($_FILES['front_left_images'])) {
    storeToDB('front_left_images', $conn, $test_drive_id);
}

// Right Image
if (isset($_FILES['right_images'])) {
    storeToDB('right_images', $conn, $test_drive_id);
}

// Left Image
if (isset($_FILES['left_images'])) {
    storeToDB('left_images', $conn, $test_drive_id);
}

// Back Right Image
if (isset($_FILES['back_right_images'])) {
    storeToDB('back_right_images', $conn, $test_drive_id);
}

// Back Image
if (isset($_FILES['back_images'])) {
    storeToDB('back_images', $conn, $test_drive_id);
}

// Back Left Image
if (isset($_FILES['back_left_images'])) {
    storeToDB('back_left_images', $conn, $test_drive_id);
}

// Interior Back Image
if (isset($_FILES['interior_back_images'])) {
    storeToDB('interior_back_images', $conn, $test_drive_id);
}

// UnderCarriage Back Image
if (isset($_FILES['back_undercarriage_images'])) {
    storeToDB('back_undercarriage_images', $conn, $test_drive_id);
}

// UnderCarriage Front Image
if (isset($_FILES['front_undercarriage_images'])) {
    storeToDB('front_undercarriage_images', $conn, $test_drive_id);
}


// Test Drive end

// Return success response
$response = array('success' => true, 'message' => 'Inspection registered successfully.');

echo json_encode($response);

?>
