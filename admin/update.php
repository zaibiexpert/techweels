<?php include('conn.php') ?>


<?php

// preliminary_information start
$update_inspection_id = $_POST['update_inspection_id'];
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

$update_preliminary_information = "UPDATE `preliminary_information` SET 
    `username` = '$username',
    `vehicle_name` = '$vehicle_name',
    `email` = '$email',
    `phone` = '$phone',
    `city` = '$city',
    `date` = '$date',
    `vehicle_model` = '$vehicle_model',
    `vehicle_variant` = '$vehicle_variant',
    `model_year` = '$model_year',
    `transmission` = '$transmission',
    `engine_capacity` = '$engine_capacity',
    `fuel_type` = '$fuel_type',
    `body_color` = '$body_color',
    `mileage` = '$mileage',
    `registration_number` = '$registration_number',
    `registered_city` = '$registered_city',
    `chassis_number` = '$chassis_number',
    `engine_number` = '$engine_number',
    `message` = '$message'
WHERE `id` = $update_inspection_id";

mysqli_query($conn, $update_preliminary_information);

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

$update_accidental_checklist = "UPDATE `accidental_checklist` SET 
    `engineRoom` = '$engineRoom',
    `rightStrutTower` = '$rightStrutTower',
    `leftStrutTower` = '$leftStrutTower',
    `rightFrontRail` = '$rightFrontRail',
    `leftFrontRail` = '$leftFrontRail',
    `radiatorCoreSupport` = '$radiatorCoreSupport',
    `rightApillar` = '$rightApillar',
    `leftApillar` = '$leftApillar',
    `leftBpillar` = '$leftBpillar',
    `rightCpillar` = '$rightCpillar',
    `leftCpillar` = '$leftCpillar',
    `rightDpillar` = '$rightDpillar',
    `leftDpillar` = '$leftDpillar',
    `bootFloor` = '$bootFloor',
    `frontUnderbody` = '$frontUnderbody',
    `rearUnderbody` = '$rearUnderbody',
    `rightBpillar` = '$rightBpillar'
WHERE `preliminary_information_id` = $update_inspection_id";

mysqli_query($conn, $update_accidental_checklist);


$accidental_checklist_id = mysqli_insert_id($conn);

if (isset($_FILES['accidental_images'])) {
    $accidentalImages = $_FILES['accidental_images']['name'];

    // Loop through uploaded images and update the corresponding records
    foreach ($_FILES['accidental_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['accidental_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['accidental_images']['name'][$key];
            $image_data = file_get_contents($_FILES['accidental_images']['tmp_name'][$key]);

            // Perform the update query
            $stmt = $conn->prepare("UPDATE `accidental_images` SET `image` = ? WHERE `id` = ? AND `accidental_checklist_id` = ?");
            $checklist_id = $accidental_checklist_id; // Create a separate variable for passing by reference
            $image_id = $key + 1; // Assign the expression $key + 1 to a separate variable
            $stmt->bind_param("sii", $image_data, $image_id, $checklist_id);
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
$engine_oil_leakage = $_POST['engine_oil_leakage'];

$update_mechanical_function = "UPDATE `mechanical_function` SET `engine_oil_leakage` = '$engine_oil_leakage', `engineNoisy` = '$engineNoisy', `engineVibration` = '$engineVibration', `engineSmoke` = '$engineSmoke', `engineSmokeColor` = '$engineSmokeColor', `engineBlow` = '$engineBlow', `coolantLeakage` = '$coolantLeakage', `brakeOilLeakage` = '$brakeOilLeakage', `transmissionOilLeakage` = '$transmissionOilLeakage', `exhaustSound` = '$exhaustSound', `radiator` = '$radiator', `suctionFan` = '$suctionFan', `gearTransmission` = '$gearTransmission' WHERE `preliminary_information_id` = '$update_inspection_id'";
mysqli_query($conn, $update_mechanical_function);

$mechanical_function_id = mysqli_insert_id($conn);

if (isset($_FILES['mechanical_images'])) {
    $mechanicalImages = $_FILES['mechanical_images']['name'];

    // Loop through uploaded images and update the corresponding records
    foreach ($_FILES['mechanical_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['mechanical_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['mechanical_images']['name'][$key];
            $image_data = file_get_contents($_FILES['mechanical_images']['tmp_name'][$key]);
            // Perform the update query
            $imageId = $key + 1; // Assign the value to a separate variable
            $stmt = $conn->prepare("UPDATE `mechanical_images` SET `image` = ? WHERE `id` = ?");
            $stmt->bind_param("si", $image_data, $imageId);
            $stmt->execute();

            // ...

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

$update_ac_heater_operation = "UPDATE `ac_heater_operation` SET `acInstalled` = '$acInstalled', `acFan` = '$acFan', `blowerThrow` = '$blowerThrow', `acCooling` = '$acCooling', `heater` = '$heater' WHERE `preliminary_information_id` = '$preliminary_information_id'";
mysqli_query($conn, $update_ac_heater_operation);

$ac_heater_operation_id = $preliminary_information_id; // Assuming the ID is already set

if (isset($_FILES['ac_heater_images'])) {
    $acHeaterImages = $_FILES['ac_heater_images']['name'];

    $stmt = $conn->prepare("UPDATE `ac_heater_images` SET `image` = ? WHERE `ac_heater_operation_id` = ?");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['ac_heater_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['ac_heater_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
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
$front_right_seat_belt = $_POST['front_right_seat_belt'];
$rear_right_seat_belt = $_POST['rear_right_seat_belt'];
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

$update_interior = "UPDATE `interior` SET
    `steeringWheelwearTear` = '$steeringWheelwearTear',
    `steeringWheelbutton` = '$steeringWheelbutton',
    `lightLeverswitch` = '$lightLeverswitch',
    `dashboard` = '$dashboard',
    `dashControlbuttons` = '$dashControlbuttons',
    `interiorLights` = '$interiorLights',
    `deFogger` = '$deFogger',
    `hazardLights` = '$hazardLights',
    `multimedia` = '$multimedia',
    `rearCamera` = '$rearCamera',
    `frontViewcamera` = '$frontViewcamera',
    `trunkReleaselever` = '$trunkReleaselever',
    `fuelcapReleaseLever` = '$fuelcapReleaseLever',
    `bonnetReleaselever` = '$bonnetReleaselever',
    `sideViewmirrorAdjustment` = '$sideViewmirrorAdjustment',
    `leftSideviewMirror` = '$leftSideviewMirror',
    `rightSideviewMirror` = '$rightSideviewMirror',
    `retractingSideviewMirrors` = '$retractingSideviewMirrors',
    `acGrills` = '$acGrills',
    `acceleratorPedal` = '$acceleratorPedal',
    `breakPedal` = '$breakPedal',
    `clutchPedal` = '$clutchPedal',
    `seatsType` = '$seatsType',
    `seatsCondition` = '$seatsCondition',
    `driverSeatbelt` = '$driverSeatbelt',
    `passengerSeatbelt` = '$passengerSeatbelt',
    `windowsType` = '$windowsType',
    `frontDriverwindow` = '$frontDriverwindow',
    `frontPassengerwindow` = '$frontPassengerwindow',
    `rearDriversideWindow` = '$rearDriversideWindow',
    `rearPassengersideWindow` = '$rearPassengersideWindow',
    `windowSafetylockButton` = '$windowSafetylockButton',
    `centralLocking` = '$centralLocking',
    `keyButtons` = '$keyButtons',
    `floorMats` = '$floorMats',
    `frontDriverdoorSeal` = '$frontDriverdoorSeal',
    `frontPassengerDoorSeal` = '$frontPassengerDoorSeal',
    `rearDriversideDoorSeal` = '$rearDriversideDoorSeal',
    `rearPassengersideDoorSeal` = '$rearPassengersideDoorSeal',
    `bonnetSeal` = '$bonnetSeal',
    `trunkSeal` = '$trunkSeal'
WHERE `preliminary_information_id` = '$update_inspection_id'";

mysqli_query($conn, $update_interior);
$interior_id = mysqli_insert_id($conn);

if (isset($_FILES['interior_images'])) {
    $interiorImages = $_FILES['interior_images']['name'];

    $stmt = $conn->prepare("UPDATE `interior_images` SET `image` = ? WHERE `interior_id` = ?");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES['interior_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['interior_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['interior_images']['name'][$key];
            $image_data = file_get_contents($_FILES['interior_images']['tmp_name'][$key]);
            // Get the interior_id for the current image

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


$update_electronic_function = "UPDATE `electronic_function` SET 
    `horn` = '$horn',
    `rightHeadlightOperation` = '$rightHeadlightOperation',
    `rightHeadlightCondition` = '$rightHeadlightCondition',
    `rightHeadlight` = '$rightHeadlight',
    `leftHeadlightOperation` = '$leftHeadlightOperation',
    `leftHeadlightCondition` = '$leftHeadlightCondition',
    `leftHeadlight` = '$leftHeadlight',
    `foglightsOperation` = '$foglightsOperation',
    `leftTaillightsOperation` = '$leftTaillightsOperation',
    `leftTaillightsCondition` = '$leftTaillightsCondition',
    `leftTaillights` = '$leftTaillights',
    `rightTaillightsOperation` = '$rightTaillightsOperation',
    `rightTaillightsCondition` = '$rightTaillightsCondition',
    `rightTaillights` = '$rightTaillights',
    `windshieldWipers` = '$windshieldWipers',
    `airbags` = '$airbags',
    `checkLights` = '$checkLights',
    `battery` = '$battery'
WHERE `preliminary_information_id` = $update_inspection_id";

mysqli_query($conn, $update_electronic_function);

$electronic_function_id = mysqli_insert_id($conn);

if (isset($_FILES['electronic_images'])) {
    $electronicImages = $_FILES['electronic_images']['name'];

    $stmt = $conn->prepare("UPDATE `electronic_images` SET `image` = ? WHERE `id` = ?");

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


$update_suspension_function = "UPDATE `suspension_function` SET
    `steeringAssemblyplay` = '$steeringAssemblyplay',
    `axleBoots` = '$axleBoots',
    `rightBalljoint` = '$rightBalljoint',
    `leftBalljoint` = '$leftBalljoint',
    `tieRodend` = '$tieRodend',
    `rightBoot` = '$rightBoot',
    `leftBoot` = '$leftBoot',
    `rightBush` = '$rightBush',
    `leftBush` = '$leftBush',
    `rearRightshockAbsorder` = '$rearRightshockAbsorder',
    `rearLeftshockAbsorder` = '$rearLeftshockAbsorder',
    `frontRightshockAbsorder` = '$frontRightshockAbsorder',
    `frontLeftShockAbsorder` = '$frontLeftShockAbsorder'
    WHERE `preliminary_information_id` = '$update_inspection_id'";

mysqli_query($conn, $update_suspension_function);

$suspension_function_id = mysqli_insert_id($conn);

if (isset($_FILES['suspension_images'])) {
    $suspensionImages = $_FILES['suspension_images']['name'];

    $stmt = $conn->prepare("UPDATE `suspension_images` SET `image` = ? WHERE `id` = ?");

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

$update_exterior_body = "UPDATE `exterior_body` SET
    `trunkLock` = '$trunkLock',
    `bonnet` = '$bonnet',
    `frontWindshield` = '$frontWindshield',
    `frontPassengerfender` = '$frontPassengerfender',
    `rearPassengerdoor` = '$rearPassengerdoor',
    `rearPassengerfender` = '$rearPassengerfender',
    `trunk` = '$trunk',
    `rearWinshield` = '$rearWinshield',
    `rearDriverfender` = '$rearDriverfender',
    `rearDriverdoor` = '$rearDriverdoor',
    `frontDriverdoor` = '$frontDriverdoor',
    `roof` = '$roof',
    `panels` = '$panels',
    `driverApillar` = '$driverApillar',
    `driverBpillar` = '$driverBpillar',
    `driverCpillar` = '$driverCpillar',
    `driverDpillar` = '$driverDpillar',
    `passengerApillar` = '$passengerApillar',
    `passengerBpillar` = '$passengerBpillar',
    `passengerCpillar` = '$passengerCpillar',
    `passengerDpillar` = '$passengerDpillar',
    `frontDriverfender` = '$frontDriverfender',
    `frontPassengerdoor` = '$frontPassengerdoor'
WHERE `preliminary_information_id` = $update_inspection_id";

mysqli_query($conn, $update_exterior_body);

$exterior_body_id = mysqli_insert_id($conn);

function updateExteriorInDB($img_name, $conn, $exterior_body_id)
{
    $stmt = $conn->prepare("UPDATE `exterior_images` SET `image` = ? WHERE `id` = ?");

    // Loop through uploaded images and execute the prepared statement for each image
    foreach ($_FILES[$img_name]['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES[$img_name]['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES[$img_name]['name'][$key];
            $image_data = file_get_contents($_FILES[$img_name]['tmp_name'][$key]);

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
        updateExteriorInDB($input, $conn, $exterior_body_id);
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

$update_tyre = "UPDATE `tyres` SET 
                    `frontPassengertyreBrand` = '$frontPassengertyreBrand',
                    `frontPassengertyreSize` = '$frontPassengertyreSize',
                    `frontPassengertyreCondition` = '$frontPassengertyreCondition',
                    `frontDrivertyreBrand` = '$frontDrivertyreBrand',
                    `frontDrivertyreSize` = '$frontDrivertyreSize',
                    `frontDrivertyreCondition` = '$frontDrivertyreCondition',
                    `rearPassengertyreBrand` = '$rearPassengertyreBrand',
                    `rearPassengerTyresize` = '$rearPassengerTyresize',
                    `rearPassengertyreCondition` = '$rearPassengertyreCondition',
                    `rearDriverTyrebrand` = '$rearDriverTyrebrand',
                    `rearDrivertyreSize` = '$rearDrivertyreSize',
                    `rearDrivertyreCondition` = '$rearDrivertyreCondition',
                    `alloyRims` = '$alloyRims'
                WHERE `preliminary_information_id` = '$update_inspection_id'";

mysqli_query($conn, $update_tyre);


$tyre_id = mysqli_insert_id($conn);

if (isset($_FILES['tyre_images'])) {
    $tyres_id = mysqli_insert_id($conn);
    $img_name = $_FILES['tyre_images']['name'];

    // Loop through uploaded images and execute the update query for each image
    foreach ($_FILES['tyre_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['tyre_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['tyre_images']['name'][$key];
            $image_data = file_get_contents($_FILES['tyre_images']['tmp_name'][$key]);

            // Get the tyre image ID from the uploaded file index
            $tyre_image_id = $tyre_id + $key;

            // Update the existing record in the tyre_images table
            $update_tyre_image = "UPDATE `tyre_images` SET `image` = ? WHERE `id` = ?";

            // Prepare and execute the update statement
            $stmt = $conn->prepare($update_tyre_image);
            $stmt->bind_param("si", $image_data, $tyre_image_id);
            $stmt->execute();

            // Close the prepared statement
            $stmt->close();
        }
    }
}



// Tyres start 


// Accessories start

$punctureRepairkit = $_POST['punctureRepairkit'];
$jack = $_POST['jack'];
$toolKit = $_POST['toolKit'];
$spareWheel = $_POST['spareWheel'];

$update_accessories = "UPDATE `accessories` SET `spareWheel` = '$spareWheel', `toolKit` = '$toolKit', `jack` = '$jack', `punctureRepairkit` = '$punctureRepairkit' WHERE `preliminary_information_id` = $update_inspection_id";
mysqli_query($conn, $update_accessories);

$accessories_id = mysqli_insert_id($conn);
if (isset($_FILES['accessories_images'])) {
    $accessories_id = mysqli_insert_id($conn);
    $img_name = $_FILES['accessories_images']['name'];

    // Loop through uploaded images and execute the update query for each image
    foreach ($_FILES['accessories_images']['tmp_name'] as $key => $tmp_name) {
        // Check if the uploaded file has no errors and has a non-empty temporary name
        if ($_FILES['accessories_images']['error'][$key] == UPLOAD_ERR_OK && !empty($tmp_name)) {
            // Get uploaded image data
            $image_name = $_FILES['accessories_images']['name'][$key];
            $image_data = file_get_contents($_FILES['accessories_images']['tmp_name'][$key]);

            // Get the tyre image ID from the uploaded file index
            $accessories_id = $tyre_id + $key;

            // Update the existing record in the accessories_images table
            $update_tyre_image = "UPDATE `accessories_images` SET `image` = ? WHERE `id` = ?";

            // Prepare and execute the update statement
            $stmt = $conn->prepare($update_tyre_image);
            $stmt->bind_param("si", $image_data, $accessories_id);
            $stmt->execute();

            // Close the prepared statement
            $stmt->close();
        }
    }
}

// Accessories end


// Test Drive start

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

$update_test_drive = "UPDATE `test_drive` SET `enginePick` = '$enginePick', `gearShifting` = '$gearShifting', `differentialNoise` = '$differentialNoise', `driveShaftnoise` = '$driveShaftnoise', `absActuation` = '$absActuation', `brakePedaloperation` = '$brakePedaloperation', `frontSuspensionNoise` = '$frontSuspensionNoise', `rearSuspensionNoise` = '$rearSuspensionNoise', `steeringFunction` = '$steeringFunction', `steeringWheelalignment` = '$steeringWheelalignment', `speedmeterInformation` = '$speedmeterInformation', `testDrivedoneBy` = '', `adminMessage` = '$admin_message' WHERE `preliminary_information_id` = $update_inspection_id";
mysqli_query($conn, $update_test_drive);


$test_drive_id = mysqli_insert_id($conn);

// Function to update car images in the database
function updateCarImages($img_name, $conn, $test_drive_id)
{
    // Prepare the update statement
    $update_car_images = "UPDATE `car_images` SET `image` = ? WHERE `test_drive_id` = ?";
    $stmt = $conn->prepare($update_car_images);

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
    updateCarImages('car_front_images', $conn, $test_drive_id);
}



// // Car Front Headlight Image //
if (isset($_FILES['front_headlights_images'])) {
    updateCarImages('front_headlights_images', $conn, $test_drive_id);
}

// // back light Image //
if (isset($_FILES['back_lights_images'])) {
    updateCarImages('back_lights_images', $conn, $test_drive_id);
}


// Engine Room Image
if (isset($_FILES['engine_room_images'])) {
    updateCarImages('engine_room_images', $conn, $test_drive_id);
}

// Stud Tower Right Image
if (isset($_FILES['stud_tower_right_images'])) {
    updateCarImages('stud_tower_right_images', $conn, $test_drive_id);
}

// Stud Tower Left Image
if (isset($_FILES['stud_tower_left_images'])) {
    updateCarImages('stud_tower_left_images', $conn, $test_drive_id);
}

// Front Right Image
if (isset($_FILES['front_right_images'])) {
    updateCarImages('front_right_images', $conn, $test_drive_id);
}

// Front Left Image
if (isset($_FILES['front_left_images'])) {
    updateCarImages('front_left_images', $conn, $test_drive_id);
}

// Right Image
if (isset($_FILES['right_images'])) {
    updateCarImages('right_images', $conn, $test_drive_id);
}

// Left Image
if (isset($_FILES['left_images'])) {
    updateCarImages('left_images', $conn, $test_drive_id);
}

// Back Right Image
if (isset($_FILES['back_right_images'])) {
    updateCarImages('back_right_images', $conn, $test_drive_id);
}

// Back Image
if (isset($_FILES['back_images'])) {
    updateCarImages('back_images', $conn, $test_drive_id);
}

// Back Left Image
if (isset($_FILES['back_left_images'])) {
    updateCarImages('back_left_images', $conn, $test_drive_id);
}

// Interior Back Image
if (isset($_FILES['interior_back_images'])) {
    updateCarImages('interior_back_images', $conn, $test_drive_id);
}

// UnderCarriage Back Image
if (isset($_FILES['back_undercarriage_images'])) {
    updateCarImages('back_undercarriage_images', $conn, $test_drive_id);
}

// UnderCarriage Front Image
if (isset($_FILES['front_undercarriage_images'])) {
    updateCarImages('front_undercarriage_images', $conn, $test_drive_id);
}


// Test Drive end

// Return success response
$response = array('success' => true, 'message' => 'Inspection Updated successfully.');

echo json_encode($response);

?>
