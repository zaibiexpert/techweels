<?php include('admin/conn.php') ?>



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

$accidentalImages = array();
if (isset($_FILES['accidental_images'])) {
    $accidentalImages = $_FILES['accidental_images']['name'];

    if (is_array($accidentalImages)) {
        $accidentalImagesCount = count($accidentalImages);
        // Proceed with further processing or use of the array
        for ($i = 0; $i < $accidentalImagesCount; $i++) {
            $accidentalImage = $accidentalImages[$i];
            if (!empty($accidentalImage)) {
                $targetDirectory = 'admin/assets/images/car-images/';
                $targetFile = $targetDirectory . basename($accidentalImage);
                if (!is_dir($targetDirectory)) {
                    mkdir($targetDirectory, 0777, true);
                }
                move_uploaded_file($_FILES['accidental_images']['tmp_name'][$i], $targetFile);
                $insertImages = "INSERT INTO `car_images` (`id`, `image`, `test_drive_id`) VALUES (NULL, '" . $accidentalImage . "', '" . $preliminary_information_id . "')";
                mysqli_query($conn, $insertImages);

                // Define the folder path for accidental images
                $accidentalImagesFolder = 'admin/assets/images/car-images/';

                // Create the folder if it doesn't exist
                if (!is_dir($accidentalImagesFolder)) {
                    mkdir($accidentalImagesFolder, 0755, true);
                }

                // Move uploaded image to the folder
                $tempPath = $targetDirectory . $accidentalImage;
                $newPath = $accidentalImagesFolder . $accidentalImage;
                rename($tempPath, $newPath);
            }
        }
    } else {
        // The value is not an array, handle this case accordingly
    }
} else {
    // The array key is not defined, handle this case accordingly
}

// Check if the create_pdf flag is set
if (isset($_POST['create_pdf']) && $_POST['create_pdf'] == '1') {
    // Collect the data for PDF generation
    $pdfData = array(
        'Username' => $username,
        'Vehicle Make' => $vehicle_name,
        'Email' => $email,
        'Phone' => $phone,
        'Inspection Location' => $city,
        'Inspection Date' => $date,
        'Image' => $accidentalImages,
        'Message' => $message
    );

    // Define the folder path for images
    $imageFolder = 'admin/assets/images/car-images/';

    // Generate the PDF with the collected data and image folder path
    generatePDF($pdfData, $imageFolder);
}

// PDF generation function
function generatePDF($data, $imageFolder)
{
    require_once('tcpdf/tcpdf.php');

    // Create a new PDF instance
    $pdf = new TCPDF();
    $pdf->AddPage();

    // Set font and size for the title

    // Output the title
    $pdf->Cell(0, 10, 'Inspection Form Data', 0, 1, 'C');

    // Set font and size for the data

    // Output the data
    foreach ($data as $key => $value) {
        if ($key == 'Image' && is_array($value)) {
            // Output images     
            foreach ($value as $imagePath) {
                $imageFullPath = $imageFolder . $imagePath;
                if (file_exists($imageFullPath)) {
                    $pdf->Image($imageFullPath, 10, 50, 50, 0, '', '', '', false, 300, '', false, false, 0);
                }
            }
        } else {
            $pdf->Cell(50, 10, $key, 1, 0, 'L');
            $pdf->Cell(0, 10, $value, 1, 1, 'L');
        }
    }

    // Output the PDF
    $pdf->Output('inspection_report.pdf', 'D');
}


$insert_accidental_checklist = "INSERT INTO `accidental_checklist` (`id`, `engineRoom`, `rightStrutTower`, `leftStrutTower`, `rightFrontRail`, `leftFrontRail`, `radiatorCoreSupport`, `rightApillar`, `leftApillar`, `leftBpillar`, `rightCpillar`, `leftCpillar`, `rightDpillar`, `leftDpillar`, `bootFloor`, `frontUnderbody`, `rearUnderbody`, `rightBpillar`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_accidental_checklist);


$insert_accessories = "INSERT INTO `accessories` (`id`, `spareWheel`, `toolKit`, `jack`, `punctureRepairkit`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_accessories);



$insert_ac_heater_operation = "INSERT INTO `ac_heater_operation` (`id`, `acInstalled`, `acFan`, `blowerThrow`, `acCooling`, `heater`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_ac_heater_operation);



$insert_electronic_function = "INSERT INTO `electronic_function` (`id`, `horn`, `rightHeadlightOperation`, `rightHeadlightCondition`, `rightHeadlight`, `leftHeadlightOperation`, `leftHeadlightCondition`, `leftHeadlight`, `foglightsOperation`, `leftTaillightsOperation`, `leftTaillightsCondition`, `leftTaillights`, `rightTaillightsOperation`, `rightTaillightsCondition`, `rightTaillights`, `windshieldWipers`, `airbags`, `checkLights`, `battery`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
mysqli_query($conn, $insert_electronic_function);


$insert_exterior_body = "INSERT INTO `exterior_body` (`id`, `trunkLock`, `bonnet`, `frontWindshield`, `frontPassengerfender`, `rearPassengerdoor`, `rearPassengerfender`, `trunk`, `rearWinshield`, `rearDriverfender`, `rearDriverdoor`, `frontDriverdoor`, `roof`, `panels`, `driverApillar`, `driverBpillar`, `driverCpillar`, `driverDpillar`, `passengerApillar`, `passengerBpillar`, `passengerCpillar`, `passengerDpillar`, `frontDriverfender`, `frontPassengerdoor`, `preliminary_information_id`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$preliminary_information_id')";
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