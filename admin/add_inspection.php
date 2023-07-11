<!-- header start -->
<?php include('header.php'); ?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
<style>
    .success-message {
        display: none;
    }

    .spartan_item_wrapper {
        width: 100%;
        padding: 0px;
    }

    .file_upload {
        height: 108px !important;
    }

    /* * {
        font-family: "Poppins", sans-serif;
    } */

    .hidden-div {
        position: absolute;
        left: -9999px;
        top: -9999px;
    }

    .table-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    table {
        border-collapse: collapse;
        border: 1px solid black;
    }

    td,
    th {
        padding: 8px;
        text-align: center;
        font-size: 8px;
    }
</style>


<!-- header End -->

<!-- Left Sidebar start -->
<?php include('sidebar.php'); ?>
<!-- Left Sidebar End -->

<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Add Inspection</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-4 align-items-center">
                                <div class="col-sm">
                                    <div>
                                        <h4 class="card-title mb-0">Add Inspection</h4>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                        <a href="inspection.php" class="btn btn-success">
                                            <i class="fas fa-eye align-center me-1"></i> Show Inspection
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <div class="row justify-center">
                                <div class="col-lg-6">
                                    <div id="hide_div" class="mt-0 success-message"> </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <?php include('add_form.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- Footer Start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pdfmake@0.1.70/build/pdfmake.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pdfmake@0.1.70/build/vfs_fonts.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>


<!-- insert inspection code start-->
<script>
    $(document).ready(function() {
        $("#inspection_form").on('submit', function(e) {
            e.preventDefault();
            var form = $(this)[0];
            var formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "inspection_form.php",
                dataType: "json",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(result) {
                    // Handle success response
                    if (result.success) {
                        // Show success message
                        $(".success-message").text(result.message);
                        $(".success-message").show();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow"); // Scroll to the top

                    } else {
                        // Show error message
                        $(".error-message").text(result.message);
                        $(".error-message").show();
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error response
                }
            });
        });
    });
</script>
<!-- insert inspection code end-->





<!-- create pdf code start-->
<script>
    function fileToDataURL(file) {
        return new Promise(function(resolve, reject) {
            var reader = new FileReader();
            reader.onloadend = function() {
                resolve(reader.result);
            };
            reader.onerror = reject;
            reader.readAsDataURL(file);
        });
    }

    // Function to generate and download PDF
    function generatePDF(filen, table_path) {
        // Define the field names array


        var fieldNames = [
            'PRELIMINARY INFORMATION',
            'client_name',
            'vehicle_name',
            'email',
            'phone',
            'city',
            'date',
            'vehicle_model',
            'vehicle_variant',
            'model_year',
            'transmission',
            'engine_capacity',
            'fuel_type',
            'body_color',
            'mileage',
            'registration_number',
            'registered_city',
            'chassis_number',
            'engine_number',
            'Accidental Checklist',
            'engine_Room',
            'front_under_body',
            'radiator_core_support',
            'left_Front_Rail',
            'left_Strut_Tower',
            'right_Front_Rail',
            'right_Strut_Tower',
            'right_a_pillar',
            'right_b_pillar',
            'right_c_pillar',
            'right_d_pillar',
            'rear_under_body',
            'boot_floor',
            'left_b_pillar',
            'left_c_pillar',
            'left_d_pillar',
            'left_a_pillar',
            'Mechanical Function',
            'engine_oil_leakage',
            'transmission_Oil_Leakage',
            'brake_Oil_Leakage',
            'radiator',
            'exhaust_Sound',
            'engine_Blow',
            'suction_Fan',
            'coolant_Leakage',
            'engine_Smoke_Color',
            'engine_Smoke',
            'engine_Vibration',
            'engine_Noisy',
            'gear_Transmission',
            'AC and Heater Operation',
            'heater',
            'ac_Cooling',
            'blower_Throw',
            'ac_Fan',
            'ac_Installed',
            'Interior',
            'floor_Mats',
            'panel_Buttons',
            'central_Locking',
            'windows_Type',
            'window_Safety_lock_Button',
            'Driver_side_window',
            'front_right_door_Window',
            'rear_right_door_Window',
            'Front_Right_seat_belt',
            'rear_right_seat_belt',
            'seats_Condition',
            'seats_Type',
            'clutch_Pedal',
            'front_Passenger_window',
            'passenger_Seat_belt',
            'driver_Seat_belt',
            'break_Pedal',
            'accelerator_Pedal',
            'ac_Grills',
            'retracting_Side_view_Mirrors',
            'right_Side_view_Mirror',
            'left_Side_view_Mirror',
            'side_View_mirror_Adjustment',
            'bonnet_Release_lever',
            'fuel_cap_Release_Lever',
            'trunk_Release_lever',
            'front_View_camera',
            'rear_Camera',
            'multimedia',
            'hazard_Lights',
            'de_Fogger',
            'interior_Lights',
            'dash_Control_buttons',
            'dashboard',
            'light_Lever_switch',
            'steering_Wheel_button',
            'steering_Wheel_wear_Tear',
            'Electronic Function',
            'check_Lights',
            'air_bags',
            'wind_shield_Wipers',
            'right_Tail_lights',
            'right_Tail_lights_Condition',
            'right_Tail_lights_Operation',
            'left_Tail_lights',
            'left_Tail_lights_Condition',
            'left_Tail_lights_Operation',
            'fog_lights_Operation',
            'left_Head_light',
            'left_Head_light_Condition',
            'left_Head_light_Operation',
            'right_Head_light',
            'right_Head_light_Condition',
            'right_Head_light_Operation',
            'horn',
            'battery',
            'Suspension Function',
            'front_Left_Shock_Absorder',
            'front_Right_shock_Absorder',
            'rear_Left_shock_Absorder',
            'rear_Right_shock_Absorder',
            'left_Bush',
            'right_Bush',
            'left_Boot',
            'right_Boot',
            'tie_Rod_end',
            'left_Ball_joint',
            'right_Ball_joint',
            'axle_Boots',
            'steering_Assembly_play',
            'Exterior Body', 
            'bonnet',
            'bonnet_Seal',
            'front_right_fender',
            'front_right_door',
            'front_Driver_door_Seal',
            'rear_right_door',
            'rear_right_Door_Seal',
            'trunk',
            'trunk_Seal',
            'passenger_D_pillar',
            'passenger_C_pillar',
            'passenger_B_pillar',
            'passenger_A_pillar',
            'driver_D_pillar',
            'driver_C_pillar',
            'driver_B_pillar',
            'driver_A_pillar',
            'pabbels',
            'roof',
            'rear_Passenger_side_Door_Seal',
            'front_Passenger_Door_Seal',            
            'rear_Driver_fender',
            'rear_screen',
            'rear_Passenger_fender',
            'rear_Passenger_door',
            'front_Passenger_door',
            'front_Passenger_fender',
            'front_Wind_shield',
            'trunk_Lock',
            'Tyres',
            'front_Driver_tyre_Condition',
            'rear_Passenger_tyre_Condition',
            'rear_Driver_tyre_Condition',
            'front_Passenger_tyre_Condition',
            'alloy_Rims',
            'rear_Driver_tyre_Size',
            'rear_Driver_Tyre_brand',
            'rear_Passenger_Tyre_size',
            'rear_Passenger_tyre_Brand',
            'front_Driver_tyre_Size',
            'front_Driver_tyre_Brand',
            'front_Passenger_tyre_Size',
            'front_Passenger_tyre_Brand',
            'Accessories',
            'puncture_Repair_kit',
            'jack',
            'tool_Kit',
            'spare_Wheel',
            'Test Drive',
            'speedometer',
            'front_Suspension_Noise',
            'rear_Suspension_Noise',
            'steering_Wheel_alignment',
            'steering_Function',
            'brake_Pedal_operation',
            'abs_Actuation',
            'drive_Shaft_noise',
            'differential_Noise',
            'gear_Shifting',
            'engine_Pick',
            'client_msg',
            'admin_msg'
        ];

        // Define the file picker IDs and their respective names array
        var filePickers = [{
                id: 'car_front_images_picker',
                name: ''
            },
            {
                id: 'accidental_images_picker',
                name: 'Accidental Images'
            },
            {
                id: 'mechanical_img_picker',
                name: 'Mechanical Images'
            },
            {
                id: 'ac_heater_images_picker',
                name: 'AC Heater Images'
            },
            {
                id: 'interior_images_picker',
                name: 'Interior Images'
            },
            {
                id: 'electronic_images_picker',
                name: 'Electronic Images'
            },
            {
                id: 'suspension_images_picker',
                name: 'Suspension Images'
            },
            {
                id: 'trunkLock_images_picker',
                name: 'Trunk Lock Images'
            },
            {
                id: 'frontDriverfender_images_picker',
                name: 'Front Right Fender Images'
            },
            {
                id: 'frontPassengerdoor_images_picker',
                name: 'Front Passenger Door Images'
            },
            {
                id: 'frontWindshield_images_picker',
                name: 'Front Windshield Images'
            },
            {
                id: 'rearPassengerfender_images_picker',
                name: 'Rear Passenger Fender Images'
            },
            {
                id: 'rearWinshield_images_picker',
                name: 'Rear Windshield Images'
            },
            {
                id: 'rearDriverfender_images_picker',
                name: 'Rear Driver Fender Images'
            },
            {
                id: 'rearDriverdoor_images_picker',
                name: 'Rear Right Door Images'
            },
            {
                id: 'roof_images_picker',
                name: 'Roof Images'
            },
            {
                id: 'pabbels_images_picker',
                name: 'Pabbels Images'
            },
            {
                id: 'driverApillar_images_picker',
                name: 'Driver A-pillar Images'
            },
            {
                id: 'driverCpillar_images_picker',
                name: 'Driver C-pillar Images'
            },
            {
                id: 'driverBpillar_images_picker',
                name: 'Driver B-pillar Images'
            },
            {
                id: 'passengerApillar_images_picker',
                name: 'Passenger A-pillar Images'
            },
            {
                id: 'passengerCpillar_images_picker',
                name: 'Passenger C-pillar Images'
            },
            {
                id: 'passengerBpillar_images_picker',
                name: 'Passenger B-pillar Images'
            },
            {
                id: 'bonnet_images_picker',
                name: 'Bonnet Images'
            },
            {
                id: 'frontPassengerfender_images_picker',
                name: 'Front Passenger Fender Images'
            },
            {
                id: 'rearPassengerdoor_images_picker',
                name: 'Rear Passenger Door Images'
            },
            {
                id: 'passengerDpillar_images_picker',
                name: 'Passenger D-pillar Images'
            },
            {
                id: 'frontDriverdoor_images_picker',
                name: 'Front Right Door Images'
            },
            {
                id: 'tyre_images_picker',
                name: 'Tyre Images'
            },
            {
                id: 'accessories_images_picker',
                name: 'Accessories Images'
            },
            {
                id: 'front_headlights_images_picker',
                name: 'Front Headlights Images'
            },
            {
                id: 'back_lights_images_picker',
                name: 'Back Lights Images'
            },
            {
                id: 'engine_room_images_picker',
                name: 'Engine Room Images'
            },
            {
                id: 'stud_tower_right_images_picker',
                name: 'Stud Tower Right Images'
            },
            {
                id: 'stud_tower_left_images_picker',
                name: 'Stud Tower Left Images'
            },
            {
                id: 'front_right_images_picker',
                name: 'Front Right Images'
            },
            {
                id: 'front_left_images_picker',
                name: 'Front Left Images'
            },
            {
                id: 'right_images_picker',
                name: 'Right Images'
            },
            {
                id: 'left_images_picker',
                name: 'Left Images'
            },
            {
                id: 'back_right_images_picker',
                name: 'Back Right Images'
            },
            {
                id: 'back_images_picker',
                name: 'Back Images'
            },
            {
                id: 'back_left_images_picker',
                name: 'Back Left Images'
            },
            {
                id: 'interior_back_images_picker',
                name: 'Interior Back Images'
            },
            {
                id: 'back_undercarriage_images_picker',
                name: 'Back Undercarriage Images'
            },
            {
                id: 'front_undercarriage_images_picker',
                name: 'Front Undercarriage Images'
            }
        ];






        // Get the form data
        var formData = {};
        fieldNames.forEach(function(fieldName) {
            formData[fieldName] = $('#' + fieldName).val();
        });

        var promises = [];
        var imageColumns = [];


        var requiredFilePickers = ['accidental_images_picker', 'mechanical_img_picker', 'ac_heater_images_picker', 'interior_images_picker', 'electronic_images_picker', 'suspension_images_picker'];

        var showErrorAlert = function(filePickerId) {
            alert('Please select an image for ' + filePickerId + '.');
        };

        for (var i = 0; i < requiredFilePickers.length; i++) {
            var filePickerId = requiredFilePickers[i];
            var fileInputs = $('#' + filePickerId).find('input[type="file"]');
            var isAnyFileSelected = false;

            fileInputs.each(function() {
                if (this.files.length > 0) {
                    isAnyFileSelected = true;
                    return false; // exit the loop early if a file is found
                }
            });

            if (!isAnyFileSelected) {
                showErrorAlert(filePickerId);
                return; // stop further execution if a file picker is empty
            }
        }

        // Iterate over the file picker IDs and names array
        filePickers.forEach(function(filePicker) {
            var fileInputs = $('#' + filePicker.id).find('input[type="file"]');

            // Iterate over each file input and create a promise for each image
            fileInputs.each(function(index, fileInput) {
                var files = fileInput.files;

                // Iterate over each file and create a promise for conversion to data URL
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];

                    // Create a promise to convert the file to a data URL
                    var promise = fileToDataURL(file).then(function(dataURL) {
                        // Create an image column object with title and image
                        var imageColumn = {
                            title: filePicker.name,
                            image: dataURL,
                            width: 200,
                            height: 200
                        };

                        // Add the image column object to the array
                        imageColumns.push(imageColumn);
                    });

                    // Add the promise to the array
                    promises.push(promise);
                }
            });
        });

        // Wait for all promises to resolve
        Promise.all(promises)
            .then(function() {
                // Define the color variables
                var YesColor = '#ffebeb'; // Color when option is "Yes"
                var noColor = '#ecfeed'; // Color when option is not "Yes"

                // Create the content array with fields and image columns
                var content = fieldNames.map(function(fieldName) {
                    var backgroundColor = (formData[fieldName] === 'Yes') ? YesColor : noColor;
                    var fontSize = 12; // Default font size
                    var color = '#000000'; // Default color
                    var decoration = '';

                    if (
                        fieldName === 'PRELIMINARY INFORMATION' ||
                        fieldName === 'Accidental Checklist' ||
                        fieldName === 'Mechanical Function' ||
                        fieldName === 'AC and Heater Operation' ||
                        fieldName === 'Interior' ||
                        fieldName === 'Electronic Function' ||
                        fieldName === 'Suspension Function' ||
                        fieldName === 'Exterior Body' ||
                        fieldName === 'TYRES' ||
                        fieldName === 'Accessories' ||
                        fieldName === 'Test Drive'
                    ) {
                        fontSize = 12; // Set the desired font size
                        color = '#2c1ba2'; // Set the desired color
                        decoration = 'underline';
                    }

                    const addSpaceBeforeCapital = (fieldName) => {
                        return fieldName.replace(/([A-Z])/g, ' $1');
                    };

                    return {
                        columns: [{
                                text: addSpaceBeforeCapital(fieldName.replace(/_/g, ' ')).toUpperCase() + ': ',
                                bold: true,
                                fontSize: fontSize,
                                color: color,
                                decoration: decoration
                            },
                            {
                                stack: [{
                                    text: formData[fieldName],
                                    margin: [0, 10, 0, 0],
                                    background: backgroundColor,
                                    color: '#000000'
                                }]
                            }
                        ],
                        margin: [0, 10, 0, 0]
                    };

                });



                // paintExterior Percentage 
                var paintExterior = [
                    'passenger_D_pillar',
                    'passenger_C_pillar',
                    'passenger_B_pillar',
                    'passenger_A_pillar',
                    'driver_D_pillar',
                    'driver_C_pillar',
                    'driver_B_pillar',
                    'driver_A_pillar',
                    'pabbels',
                    'roof',
                    'front_Driver_door',
                    'rear_Driver_door',
                    'rear_Driver_fender',
                    'rear_screen',
                    'trunk',
                    'rear_Passenger_fender',
                    'rear_Passenger_door',
                    'front_Passenger_door',
                    'front_Passenger_fender',
                    'front_Wind_shield',
                    'bonnet',
                    'front_Driver_fender',
                    'trunk_Lock',
                ];

                var paintExteriorCount = 0;
                paintExterior.forEach(function(value) {
                    if (formData[value] === 'P') {
                        paintExteriorCount++;
                    }
                });

                const paintExteriortotal = 20;
                paintExteriorPercentage = (paintExteriorCount / paintExteriortotal) * 100


                // mechanicalFunction Percentage 

                var mechanicalFunction = ['gearTransmission',
                    'suction_Fan',
                    'radiator',
                    'exhaust_Sound',
                    'transmission_Oil_Leakage',
                    'brake_Oil_Leakage',
                    'coolant_Leakage',
                    'engine_Blow',
                    'engine_Smoke_Color',
                    'engine_Smoke',
                    'engine_Vibration',
                    'engine_Noisy',
                ];
                var mechanicalFunctioncount = 0;
                mechanicalFunction.forEach(function(value) {
                    if (formData[value] === 'No' || formData[value] === 'Not Good') {
                        mechanicalFunctioncount++;
                    }
                });
                const mechanicalFunctiontotal = 8;
                mechanicalFunctionPercentage = (mechanicalFunctioncount / mechanicalFunctiontotal) * 100

                // suspensionFunction Percentage 
                var suspensionFunction = [
                    'frontLeftShockAbsorder',
                    'frontRightshockAbsorder',
                    'rearLeftshockAbsorder',
                    'rearRightshockAbsorder',
                    'leftBush',
                    'rightBush',
                    'leftBoot',
                    'rightBoot',
                    'tieRodend',
                    'leftBalljoint',
                    'rightBalljoint',
                    'axleBoots',
                    'steeringAssemblyplay',
                ];

                var suspensionFunctioncount = 0;
                suspensionFunction.forEach(function(value) {
                    if (formData[value] === 'Damaged' || formData[value] === 'Service Require' || formData[
                            value] === 'No') {
                        suspensionFunctioncount++;
                    }
                });

                const suspensionFunctiontotal = 13;
                suspensionFunctionPercentage = (suspensionFunctioncount / suspensionFunctiontotal) * 100;


                //sealsInterior
                var sealsInterior = [
                    'trunk_Seal',
                    'bonnet_Seal',
                    'rear_Passenger_side_Door_Seal',
                    'rear_right_Door_Seal',
                    'front_Passenger_Door_Seal',
                    'front_Driver_door_Seal',
                    'floor_Mats',
                    'panel_Buttons',
                    'central_Locking',
                    'window_Safety_lock_Button',
                    'rear_right_door_Window',
                    'front_right_door_Window',
                    'front_Passenger_window',
                    'Driver_side_window',
                    'windows_Type',
                    'passenger_Seat_belt',
                    'driver_Seat_belt',
                    'seats_Condition',
                    'seats_Type',
                    'clutch_Pedal',
                    'break_Pedal',
                    'accelerator_Pedal',
                    'ac_Grills',
                    'retracting_Side_view_Mirrors',
                    'right_Side_view_Mirror',
                    'left_Side_view_Mirror',
                    'side_View_mirror_Adjustment',
                    'bonnet_Release_lever',
                    'fuel_cap_Release_Lever',
                    'trunk_Release_lever',
                    'front_View_camera',
                    'rear_Camera',
                    'multimedia',
                    'hazard_Lights',
                    'de_Fogger',
                    'interior_Lights',
                    'dash_Control_buttons',
                    'dashboard',
                    'light_Lever_switch',
                    'steering_Wheel_button',
                    'steering_Wheel_wear_Tear'
                ];

                var sealsInteriorCount = 0;
                sealsInterior.forEach(function(value) {
                    if (formData[value] === 'Not Working' || formData[value] === 'Not Original' || formData[
                            value] === 'Bad') {
                        sealsInteriorCount++;
                    }
                });

                const sealsInteriorTotal = 41;
                sealsInteriorPercentage = (sealsInteriorCount / sealsInteriorTotal) * 100;


                // electronicFunction Percentage 
                var electronicFunction = [
                    'check_Lights',
                    'air_bags',
                    'wind_shield_Wipers',
                    'right_Tail_lights',
                    'right_Tail_lights_Condition',
                    'right_Tail_lights_Operation',
                    'left_Tail_lights',
                    'left_Tail_lights_Condition',
                    'left_Tail_lights_Operation',
                    'fog_lights_Operation',
                    'left_Head_light',
                    'left_Headlight_Condition',
                    'left_Head_light_Operation',
                    'right_Head_light',
                    'right_Head_light_Condition',
                    'right_Head_light_Operation',
                    'horn',
                    'battery',
                ];

                var electronicFunctioncount = 0;
                electronicFunction.forEach(function(value) {
                    if (formData[value] === 'Weak' || formData[value] === 'Not Working' || formData[
                            value] === 'Faded & Scratched' || formData[value] === 'Not Original' || formData[
                            value] === 'Not Present') {
                        electronicFunctioncount++;
                    }
                });

                const electronicFunctiontotal = 18;
                electronicFunctionPercentage = (electronicFunctioncount / electronicFunctiontotal) * 100;


                // acHeaterFunction Percentage 
                var acHeaterFunction = [
                    'heater',
                    'ac_Cooling',
                    'blower_Throw',
                    'ac_Fan',
                    'ac_Installed'
                ];

                var acHeaterFunctionCount = 0;
                acHeaterFunction.forEach(function(value) {
                    if (formData[value] === 'No' || formData[value] === 'Not Working') {
                        acHeaterFunctionCount++;
                    }
                });

                const acHeaterFunctionTotal = 5;
                acHeaterFunctionPercentage = (acHeaterFunctionCount / acHeaterFunctionTotal) * 100;



                // testDrivefunction Percentage 
                var testDrivefunction = [
                    'speedometer',
                    'steering_Wheel_alignment',
                    'steering_Function',
                    'rear_Suspension_Noise',
                    'front_Suspension_Noise',
                    'brake_Pedal_operation',
                    'abs_Actuation',
                    'drive_Shaft_noise',
                    'diferential_Noise',
                    'gear_Shifting',
                    'engine_Pick'
                ];

                var testDrivefunctionCount = 0;
                testDrivefunction.forEach(function(value) {
                    if (
                        formData[value] === 'No' ||
                        formData[value] === 'Not Working' ||
                        formData[value] === 'Service Required' ||
                        formData[value] === 'Not Center'
                    ) {
                        testDrivefunctionCount++;
                    }
                });

                const testDrivefunctionTotal = 11;
                testDrivefunctionPercentage = (testDrivefunctionCount / testDrivefunctionTotal) * 100;




                // tyreFunction Percentage 
                var tyreFunction = [
                    'alloy_Rims',
                    'rear_Driver_tyre_Condition',
                    'rear_Driver_tyre_Size',
                    'rear_Driver_Tyre_brand',
                    'rear_Passenger_tyre_Condition',
                    'rear_Passenger_Tyre_size',
                    'rear_Passenger_tyre_Brand',
                    'front_Driver_tyre_Condition',
                    'front_Driver_tyre_Size',
                    'front_Driver_tyre_Brand',
                    'front_Passenger_tyre_Condition',
                    'front_Passenger_tyre_Size',
                    'front_Passenger_tyre_Brand',
                ];

                var tyreFunctionCount = 0;
                tyreFunction.forEach(function(value) {
                    if (formData[value] === 'not Good' || formData[value] === 'no') {
                        tyreFunctionCount++;
                    }
                });

                const tyreFunctionTotal = 13;
                tyreFunctionPercentage = (tyreFunctionCount / tyreFunctionTotal) * 100;

                sessionStorage.setItem('paintExteriorPercentage', paintExteriorPercentage);
                sessionStorage.setItem('suspensionFunctionPercentage', suspensionFunctionPercentage);
                sessionStorage.setItem('sealsInteriorPercentage', sealsInteriorPercentage);
                sessionStorage.setItem('electronicFunctionPercentage', electronicFunctionPercentage);
                sessionStorage.setItem('acHeaterFunctionPercentage', acHeaterFunctionPercentage);
                sessionStorage.setItem('testDrivefunctionPercentage', testDrivefunctionPercentage);
                sessionStorage.setItem('tyreFunctionPercentage', tyreFunctionPercentage);
                sessionStorage.setItem('mechanicalFunctionPercentage', mechanicalFunctionPercentage);



                const chassisNumberIndex = 17;
                const engineNumberIndex = 18;
                const engineNoiseIndex = 49;
                const acInstalledIndex = 55;
                const wearandtearIndex = 97;
                const batteryIndex = 116;
                const assemblyPlayIndex = 130;


                // Insert image columns after the chassis_number field column object
                if (imageColumns.length > 0) {
                    var imageContent = {
                        columns: [{
                                text: 'Images:',
                                bold: true
                            },
                            {
                                table: {
                                    widths: ['auto', '*'],
                                    body: []
                                },
                                layout: 'noBorders'
                            }
                        ],
                        margin: [0, 0, 50, 10]
                    };

                    var tableBody = [];

                    for (var i = 0; i < imageColumns.length; i++) {
                        var imageColumn = imageColumns[i];
                        var imageTitle = imageColumn.title;
                        var imageData = imageColumn.image;

                        tableBody.push([{
                                text: imageTitle,
                                bold: true
                            },
                            {
                                image: imageData,
                                width: 200,
                                height: 200
                            }
                        ]);
                    }

                    imageContent.columns[1].table.body = tableBody;

                    // Insert the first image title and image after the engine_noise field column object
                    if (chassisNumberIndex >= 0 && imageColumns.length > 1) {
                        var firstImageTitleContent = {
                            columns: [{
                                    text: imageColumns[0].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[0].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.splice(chassisNumberIndex + 1, 0, firstImageTitleContent);
                    }

                    if (engineNumberIndex >= 0 && imageColumns.length > 1) {
                        var secondImageTitleContent = {
                            columns: [{
                                    text: imageColumns[1].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[1].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.splice(engineNumberIndex + 1, 0, secondImageTitleContent);
                    }

                    // Insert the second image title and image after the engine_noise field column object
                    if (engineNoiseIndex >= 0 && imageColumns.length > 1) {
                        var secondImageTitleContent = {
                            columns: [{
                                    text: imageColumns[2].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[2].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.splice(engineNoiseIndex + 1, 0, secondImageTitleContent);
                    }

                    // Insert the third image title and image after the engine_noise field column object
                    if (acInstalledIndex >= 0 && imageColumns.length > 1) {
                        var thirdImageTitleContent = {
                            columns: [{
                                    text: imageColumns[3].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[3].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.splice(acInstalledIndex + 1, 0, thirdImageTitleContent);
                    }


                    // Insert the Fourth image title and image after the wearandtear field column object
                    if (wearandtearIndex >= 0 && imageColumns.length > 3) {
                        var imgTitleContent = {
                            columns: [{
                                    text: imageColumns[4].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[4].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.splice(wearandtearIndex + 1, 0, imgTitleContent);
                    }

                    // Insert the Fifth image title and image after the battery field column object
                    if (batteryIndex >= 0 && imageColumns.length > 4) {
                        var thirdImageTitleContent = {
                            columns: [{
                                    text: imageColumns[5].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[5].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.splice(batteryIndex + 1, 0, thirdImageTitleContent);
                    }

                    // Insert the sixth image title and image after the assembly_play field column object
                    if (assemblyPlayIndex >= 0 && imageColumns.length > 5) {
                        var thirdImageTitleContent = {
                            columns: [{
                                    text: imageColumns[6].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[6].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.splice(assemblyPlayIndex + 1, 0, thirdImageTitleContent);
                    }

                    for (var i = 7; i < imageColumns.length; i++) {
                        var img = {
                            columns: [{
                                    text: imageColumns[i].title,
                                    bold: true
                                },
                                {
                                    image: imageColumns[i].image,
                                    width: 200,
                                    height: 200
                                }
                            ],
                            margin: [0, 10, 0, 0]
                        };
                        content.push(img);
                    }

                }


                loadImageAsDataURL('assets/images/' + filen)
                    .then(function(staticImageData3) {
                        var staticImageColumn3 = {
                            image: staticImageData3,
                            width: 800,
                            alignment: 'center',
                            margin: [0, 20, 0, 20]
                        };

                        // Insert the first static image column after the 'engine_number' field
                        var engineNumberIndex = fieldNames.indexOf('engine_number');
                        if (engineNumberIndex >= 0) {
                            content.splice(engineNumberIndex + 1, 0, staticImageColumn3);
                        }
                    })
                    .catch(function(error) {
                        console.log('Error loading Table image:', error);
                    });


                // Load static image as data URL
                loadImageAsDataURL('assets/images/car_inspections.png')
                    .then(function(staticImageData) {
                        var staticImageColumn = {
                            image: staticImageData,
                            width: 400,
                            alignment: 'center',
                            margin: [0, 20, 0, 20]
                        };

                        // Insert the first static image column after the 'engine_number' field
                        var engineNumberIndex = fieldNames.indexOf('engine_number');
                        if (engineNumberIndex >= 0) {
                            content.splice(engineNumberIndex + 2, 0, staticImageColumn);
                        }
                    })
                    .catch(function(error) {
                        console.log('Error loading graph image:', error);
                    });



                // Load the first image
                loadImageAsDataURL('assets/images/table_name.png')
                    .then(function(staticImageData1) {
                        var staticImageColumn1 = {
                            image: staticImageData1,
                            width: 150, // Reduced width to 150
                            alignment: 'center',
                            margin: [40, 40, 40, 0] // Added left margin of 40 pixels
                        };

                        // Load the second image
                        loadImageAsDataURL(table_path)
                            .then(function(staticImageData2) {
                                var staticImageColumn2 = {
                                    image: staticImageData2,
                                    width: 150, // Reduced width to 150
                                    alignment: 'center',
                                    margin: [0, 40, 0, 40] // Added gap of 80 pixels (40 + 40) between the images
                                };

                                // Create a row with two columns for the images
                                var imageRow = {
                                    columns: [
                                        staticImageColumn1,
                                        staticImageColumn2
                                    ],
                                    alignment: 'center' // Align the row center within the PDF
                                };

                                // Insert the image row after the 'engine_number' field
                                var engineNumberIndex = fieldNames.indexOf('engine_number');
                                if (engineNumberIndex >= 0) {
                                    content.splice(engineNumberIndex + 3, 0, imageRow);
                                }
                            })
                            .catch(function(error) {
                                console.log('Error loading second image:', error);
                            });
                    })
                    .catch(function(error) {
                        console.log('Error loading first image:', error);
                    });



                // Load header image as data URL
                loadImageAsDataURL('assets/images/header_image.jpeg')
                    .then(function(headerImageDataURL) {
                        // Load footer image as data URL
                        loadImageAsDataURL('assets/images/footer_image.png')
                            .then(function(footerImageDataURL) {
                                // Create the PDF document definition with header and footer images
                                var docDefinition = {
                                    content: [{
                                            image: headerImageDataURL,
                                            width: 600,
                                            alignment: 'center',
                                            margin: [0, -20, 0,
                                                0
                                            ] // Add top margin to separate the image from text
                                        },
                                        {
                                            stack: content, // Place the text below the header image
                                            margin: [0, 10, 0,
                                                0
                                            ] // Add top margin to separate the text from images
                                        },
                                        {
                                            image: footerImageDataURL,
                                            width: 550,
                                            alignment: 'center',
                                            margin: [0, 20, 0, 0]
                                        }
                                    ],
                                    pageSize: {
                                        width: 595, // Set the width to A4 paper width (595 points)
                                        height: 'auto' // Let the height adjust automatically
                                    },
                                    pageBreakBefore: function(currentNode, followingNodesOnPage,
                                        nodesOnNextPage, previousNodesOnPage) {
                                        return currentNode.headlineLevel === 1 &&
                                            followingNodesOnPage
                                            .length === 0;
                                    }
                                };

                                // Generate the PDF and save it to a file
                                pdfMake.createPdf(docDefinition).download('form_data.pdf');
                            })
                            .catch(function(error) {
                                console.log('Error loading footer image:', error);
                            });
                    })
                    .catch(function(error) {
                        console.log('Error loading header image:', error);
                    });
            })
            .catch(function(error) {
                console.log('Error generating PDF:', error);
            });



    }

    // Function to load an image file as data URL
    function loadImageAsDataURL(imagePath) {
        return new Promise(function(resolve, reject) {
            var image = new Image();
            image.onload = function() {
                var canvas = document.createElement('canvas');
                canvas.width = image.width;
                canvas.height = image.height;
                var context = canvas.getContext('2d');
                context.drawImage(image, 0, 0);
                var dataURL = canvas.toDataURL('image/png');
                resolve(dataURL);
            };
            image.onerror = reject;
            image.src = imagePath;
        });
    }




    $(document).ready(function() {
        $('#download_btn').click(function(event) {
            event.preventDefault();

            // table image path functions andvar //
            let table_path = '';

            function setPath(temp) {
                table_path = temp;
            }

            // Get the selected options from each <select> element
            var frontBumperSelect = document.getElementById("getFrontBumper");
            var selectedFrontBumperOptions = Array.from(frontBumperSelect.selectedOptions).map(option => option.value);

            var bonnetSelect = document.getElementById("getBonnet");
            var selectedBonnetOptions = Array.from(bonnetSelect.selectedOptions).map(option => option.value);

            var rightFenderSelect = document.getElementById("getRightFender");
            var selectedRightFenderOptions = Array.from(rightFenderSelect.selectedOptions).map(option => option.value);

            var frontRightDoorSelect = document.getElementById("getFrontrightDoor");
            var selectedFrontRightDoorOptions = Array.from(frontRightDoorSelect.selectedOptions).map(option => option.value);

            var backRightDoorSelect = document.getElementById("getBackrightDoor");
            var selectedBackRightDoorOptions = Array.from(backRightDoorSelect.selectedOptions).map(option => option.value);

            var rightQuarterPanelSelect = document.getElementById("getRightQuaterpanel");
            var selectedRightQuarterPanelOptions = Array.from(rightQuarterPanelSelect.selectedOptions).map(option => option.value);

            var rightAPillarSelect = document.getElementById("getRightApiller");
            var selectedRightAPillarOptions = Array.from(rightAPillarSelect.selectedOptions).map(option => option.value);

            var rightBPillarSelect = document.getElementById("getRightBpiller");
            var selectedRightBPillarOptions = Array.from(rightBPillarSelect.selectedOptions).map(option => option.value);

            var rightCPillarSelect = document.getElementById("getRightCpiller");
            var selectedRightCPillarOptions = Array.from(rightCPillarSelect.selectedOptions).map(option => option.value);

            var roofSelect = document.getElementById("getRoof");
            var selectedRoofOptions = Array.from(roofSelect.selectedOptions).map(option => option.value);

            var trunkSelect = document.getElementById("getTrunk");
            var selectedTrunkOptions = Array.from(trunkSelect.selectedOptions).map(option => option.value);

            var backBumperSelect = document.getElementById("getBackbumper");
            var selectedBackBumperOptions = Array.from(backBumperSelect.selectedOptions).map(option => option.value);

            var leftQuarterPanelSelect = document.getElementById("getLeftQuaterpanel");
            var selectedLeftQuarterPanelOptions = Array.from(leftQuarterPanelSelect.selectedOptions).map(option => option.value);

            var backLeftDoorSelect = document.getElementById("getBackLeftDoor");
            var selectedBackLeftDoorOptions = Array.from(backLeftDoorSelect.selectedOptions).map(option => option.value);

            var frontLeftDoorSelect = document.getElementById("getFrontLeftDoor");
            var selectedFrontLeftDoorOptions = Array.from(frontLeftDoorSelect.selectedOptions).map(option => option.value);

            var frontLeftFenderSelect = document.getElementById("getFrontLeftFender");
            var selectedFrontLeftFenderOptions = Array.from(frontLeftFenderSelect.selectedOptions).map(option => option.value);

            var leftAPillarSelect = document.getElementById("getLeftApiller");
            var selectedLeftAPillarOptions = Array.from(leftAPillarSelect.selectedOptions).map(option => option.value);

            var leftBPillarSelect = document.getElementById("getLeftBpiller");
            var selectedLeftBPillarOptions = Array.from(leftBPillarSelect.selectedOptions).map(option => option.value);

            var leftCPillarSelect = document.getElementById("getLeftCpiller");
            var selectedLeftCPillarOptions = Array.from(leftCPillarSelect.selectedOptions).map(option => option.value);

            //table code start
            var tableBody = document.getElementById("tableBody");
            tableBody.innerHTML = ""; // Clear existing table rows

            // Generating rows dynamically
            var partNames = [
                "Front Bumper",
                "Bonnet",
                "Right Fender",
                "Front Right Door",
                "Back Right Door",
                "Right Quarter Panel",
                "Right A Pillar",
                "Right B Pillar",
                "Right C Pillar",
                "Roof",
                "Trunk",
                "Back Bumper",
                "Left Quarter Panel",
                "Back Left Door",
                "Front Left Door",
                "Front Left Fender",
                "Left A Pillar",
                "Left B Pillar",
                "Left C Pillar"
            ];

            for (var i = 0; i < partNames.length; i++) {
                var row = document.createElement("tr");

                var srNumberCell = document.createElement("td");
                srNumberCell.textContent = i + 1;
                row.appendChild(srNumberCell);

                var partNameCell = document.createElement("td");
                partNameCell.textContent = partNames[i];
                row.appendChild(partNameCell);

                var conditionCell = document.createElement("td");

                // Assign the selected options based on the part name
                switch (partNames[i]) {
                    case "Front Bumper":
                        conditionCell.textContent = selectedFrontBumperOptions.join(", ");
                        break;
                    case "Bonnet":
                        conditionCell.textContent = selectedBonnetOptions.join(", ");
                        break;
                    case "Right Fender":
                        conditionCell.textContent = selectedRightFenderOptions.join(", ");
                        break;
                    case "Front Right Door":
                        conditionCell.textContent = selectedFrontRightDoorOptions.join(", ");
                        break;
                    case "Back Right Door":
                        conditionCell.textContent = selectedBackRightDoorOptions.join(", ");
                        break;
                    case "Right Quarter Panel":
                        conditionCell.textContent = selectedRightQuarterPanelOptions.join(", ");
                        break;
                    case "Right A Pillar":
                        conditionCell.textContent = selectedRightAPillarOptions.join(", ");
                        break;
                    case "Right B Pillar":
                        conditionCell.textContent = selectedRightBPillarOptions.join(", ");
                        break;
                    case "Right C Pillar":
                        conditionCell.textContent = selectedRightCPillarOptions.join(", ");
                        break;
                    case "Roof":
                        conditionCell.textContent = selectedRoofOptions.join(", ");
                        break;
                    case "Trunk":
                        conditionCell.textContent = selectedTrunkOptions.join(", ");
                        break;
                    case "Back Bumper":
                        conditionCell.textContent = selectedBackBumperOptions.join(", ");
                        break;
                    case "Left Quarter Panel":
                        conditionCell.textContent = selectedLeftQuarterPanelOptions.join(", ");
                        break;
                    case "Back Left Door":
                        conditionCell.textContent = selectedBackLeftDoorOptions.join(", ");
                        break;
                    case "Front Left Door":
                        conditionCell.textContent = selectedFrontLeftDoorOptions.join(", ");
                        break;
                    case "Front Left Fender":
                        conditionCell.textContent = selectedFrontLeftFenderOptions.join(", ");
                        break;
                    case "Left A Pillar":
                        conditionCell.textContent = selectedLeftAPillarOptions.join(", ");
                        break;
                    case "Left B Pillar":
                        conditionCell.textContent = selectedLeftBPillarOptions.join(", ");
                        break;
                    case "Left C Pillar":
                        conditionCell.textContent = selectedLeftCPillarOptions.join(", ");
                        break;
                    default:
                        conditionCell.textContent = "";
                        break;
                }

                row.appendChild(conditionCell);
                tableBody.appendChild(row);
            }

            // Select the div to capture
            var divToCapture = document.getElementById('divToCapture');

            // Create a function to save the image to the server
            function saveImageToServer(imageData) {
                return new Promise(function(resolve, reject) {
                    // Send the image data to the server using AJAX
                    $.ajax({
                        type: 'POST',
                        url: 'save_table_img.php',
                        data: {
                            image: imageData
                        },
                        success: function(data) {
                            response = data;
                            setPath(data);
                        },
                        error: function(xhr, status, error) {
                            reject(error);
                        }
                    });
                });
            }

            // Use html2canvas to capture the div as an image
            html2canvas(divToCapture, {
                scale: 4,
                useCORS: true,
            }).then(function(canvas) {
                var imageData = canvas.toDataURL();

                // Save the image to the server and access the response
                saveImageToServer(imageData)
                    .then(function(response) {
                        // Access the response here
                    })
                    .catch(function(error) {
                        console.error('Error in AJAX call:', error);
                    });
            });






            //table code end


            // Open the graph.php page in a new window/tab
            var graphPage = window.open('graph.php');

            // Wait for the graph.php page to load
            graphPage.onload = function() {
                // Trigger the click event of the #captureScreenshotbtn button in graph.php
                graphPage.document.getElementById('captureScreenshotbtn').click();
            };

            // Wait for the necessary dependencies to load
            setTimeout(function() {
                // Retrieve the value of chaloye from session storage
                var chaloye = graphPage.sessionStorage.getItem('chaloye');

                // var ss = window.open('save_screenshot.php');
                var filen = graphPage.sessionStorage.getItem('fname');

                if (chaloye === '1') {
                    console.log('Download button clicked');

                    generatePDF(filen, table_path);

                }
            }, 3000);

        });


    });
</script>
<!-- create pdf code end-->


<?php include('images_picker.php'); ?>

<?php include('footer.php'); ?>
<!-- Footer end -->