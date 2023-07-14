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
            'front_Under_body',
            'radiator_Core_Support',
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
            'Exterior Body', //
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
                id: 'bonnet_images_picker',
                name: 'Bonnet Images'
            },
            {
                id: 'frontDriverfender_images_picker',
                name: 'Front Right Fender Images'
            },
            {
                id: 'frontDriverdoor_images_picker',
                name: 'Front Right Door Images'
            },
            {
                id: 'rearRightdoor_images_picker',
                name: 'Rear Right Images'
            },
            {
                id: 'trunkLock_images_picker',
                name: 'Trunk Lock Images'
            },
            {
                id: 'frontWindshield_images_picker',
                name: 'Front Wind Screen Images'
            },
            {
                id: 'frontPassengerfender_images_picker',
                name: 'Front Passenger Fender Images'
            },
            {
                id: 'frontPassengerdoor_images_picker',
                name: 'Front Passenger Door Images'
            },
            {
                id: 'rearPassengerdoor_images_picker',
                name: 'Rear Passenger Door Images'
            },
            {
                id: 'rearPassengerfender_images_picker',
                name: 'Rear Passenger Fender Images'
            },
            {
                id: 'trunk_images_picker',
                name: 'Trunk Images'
            },
            {
                id: 'rearWindshield_images_picker',
                name: 'Rear Wind Screen Images'
            },
            {
                id: 'rearDriverfender_images_picker',
                name: 'Rear Driver Fender Images'
            },
            {
                id: 'roof_images_picker',
                name: 'Roof Images'
            },
            {
                id: 'panels_images_picker',
                name: 'Panels Images'
            },
            {
                id: 'driverApillar_images_picker',
                name: 'Driver A-pillar Images'
            },
            {
                id: 'driverBpillar_images_picker',
                name: 'Driver B-pillar Images'
            },
            {
                id: 'driverCpillar_images_picker',
                name: 'Driver C-pillar Images'
            },
            {
                id: 'driverDpillar_images_picker',
                name: 'Driver D-pillar Images'
            },
            {
                id: 'passengerApillar_images_picker',
                name: 'Passenger A-pillar Images'
            },
            {
                id: 'passengerBpillar_images_picker',
                name: 'Passenger B-pillar Images'
            },
            {
                id: 'passengerCpillar_images_picker',
                name: 'Passenger C-pillar Images'
            },
            {
                id: 'passengerDpillar_images_picker',
                name: 'Passenger D-pillar Images'
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
                id: 'front_headlight_images_picker',
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

        // Requird fields work start

        var showErrorAlert = function(filePickerId) {
            alert('Please select an image for ' + filePickerId + '.');

            // Scroll to the required field
            var element = $('#' + filePickerId);
            $('html, body').animate({
                scrollTop: element.offset().top
            }, 500);
        };

        for (var i = 0; i < filePickers.length; i++) {
            var filePickerId = filePickers[i].id;
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

        // Requird fields work end


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
                var RedColor = '#ffebeb'; // Color when option is "Yes" red
                var GreenColor = '#ecfeed'; // Color when option is not "Yes" green

                var fieldColorMap = {
                    'engine_Room': [{
                            id: 'engine_Room',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'engine_Room',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'front_Under_body': [{
                            id: 'front_Under_body',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'front_Under_body',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'radiator_Core_Support': [{
                            id: 'radiator_Core_Support',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'radiator_Core_Support',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'left_Front_Rail': [{
                            id: 'left_Front_Rail',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'left_Front_Rail',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'left_Strut_Tower': [{
                            id: 'left_Strut_Tower',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'left_Strut_Tower',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'right_Front_Rail': [{
                            id: 'right_Front_Rail',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'right_Front_Rail',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],

                    'right_Strut_Tower': [{
                            id: 'right_Strut_Tower',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'right_Strut_Tower',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'right_A_pillar': [{
                            id: 'right_A_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'right_A_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'right_B_pillar': [{
                            id: 'right_B_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'right_B_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'right_C_pillar': [{
                            id: 'right_C_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'right_C_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'right_D_pillar': [{
                            id: 'right_D_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'right_D_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'rear_Under_body': [{
                            id: 'rear_Under_body',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'rear_Under_body',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],

                    'boot_Floor': [{
                            id: 'boot_Floor',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'boot_Floor',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'left_B_pillar': [{
                            id: 'left_B_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'left_B_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'left_C_pillar': [{
                            id: 'left_C_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'left_C_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],

                    'left_D_pillar': [{
                            id: 'left_D_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'left_D_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'left_A_pillar': [{
                            id: 'left_A_pillar',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'left_A_pillar',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'engine_oil_leakage': [{
                            id: 'engine_oil_leakage',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'engine_oil_leakage',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'transmission_Oil_Leakage': [{
                            id: 'transmission_Oil_Leakage',
                            value: 'Accidented',
                            color: RedColor
                        },
                        {
                            id: 'transmission_Oil_Leakage',
                            value: 'Non Accidented',
                            color: GreenColor
                        }
                    ],
                    'brake_Oil_Leakage': [{
                            id: 'brake_Oil_Leakage',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'brake_Oil_Leakage',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'radiator': [{
                            id: 'radiator',
                            value: 'Not Good',
                            color: RedColor
                        },
                        {
                            id: 'radiator',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'suction_Fan': [{
                            id: 'suction_Fan',
                            value: 'Not Good',
                            color: RedColor
                        },
                        {
                            id: 'suction_Fan',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'exhaust_Sound': [{
                            id: 'exhaust_Sound',
                            value: 'Not Good',
                            color: RedColor
                        },
                        {
                            id: 'exhaust_Sound',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'engine_Blow': [{
                            id: 'engine_Blow',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'engine_Blow',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'engine_Noisy': [{
                            id: 'engine_Noisy',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'engine_Noisy',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'engine_Vibration': [{
                            id: 'engine_Vibration',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'engine_Vibration',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'engine_Smoke': [{
                            id: 'engine_Smoke',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'engine_Smoke',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'engine_Smoke_Color': [{
                            id: 'engine_Smoke_Color',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'engine_Smoke_Color',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'coolant_Leakage': [{
                            id: 'coolant_Leakage',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'coolant_Leakage',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'gear_Transmission': [{
                            id: 'gear_Transmission',
                            value: 'Not Good',
                            color: RedColor
                        },
                        {
                            id: 'gear_Transmission',
                            value: 'Smooth',
                            color: GreenColor
                        }
                    ],
                    'ac_Installed': [{
                            id: 'ac_Installed',
                            value: 'No',
                            color: RedColor
                        },
                        {
                            id: 'ac_Installed',
                            value: 'Yes',
                            color: GreenColor
                        }
                    ],
                    'ac_Fan': [{
                            id: 'ac_Fan',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'ac_Fan',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'blower_Throw': [{
                            id: 'blower_Throw',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'blower_Throw',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'ac_Cooling': [{
                            id: 'ac_Cooling',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'ac_Cooling',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'heater': [{
                            id: 'heater',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'heater',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'floorMats': [{
                            id: 'floorMats',
                            value: 'Not Good',
                            color: RedColor
                        },
                        {
                            id: 'floorMats',
                            value: 'Good',
                            color: GreenColor
                        }
                    ],
                    'keyButtons': [{
                            id: 'keyButtons',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'keyButtons',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'central_Locking': [{
                            id: 'central_Locking',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'central_Locking',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'windows_Type': [{
                            id: 'windows_Type',
                            value: 'Manual',
                            color: RedColor
                        },
                        {
                            id: 'windows_Type',
                            value: 'Automatic',
                            color: GreenColor
                        }
                    ],
                    'window_Safety_lock_Button': [{
                            id: 'window_Safety_lock_Button',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'window_Safety_lock_Button',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'Driver_side_window': [{
                            id: 'Driver_side_window',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'Driver_side_window',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'front_right_door_Window': [{
                            id: 'front_right_door_Window',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'front_right_door_Window',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'rear_right_door_Window': [{
                            id: 'rear_right_door_Window',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'rear_right_door_Window',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'Front_Right_seat_belt': [{
                            id: 'Front_Right_seat_belt',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'Front_Right_seat_belt',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'rear_right_seat_belt': [{
                            id: 'rear_right_seat_belt',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'rear_right_seat_belt',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'seats_Condition': [{
                            id: 'seats_Condition',
                            value: 'Bad',
                            color: RedColor
                        },
                        {
                            id: 'seats_Condition',
                            value: 'Clean',
                            color: GreenColor
                        }
                    ],
                    'seats_Type': [{
                            id: 'seats_Type',
                            value: 'Other',
                            color: RedColor
                        },
                        {
                            id: 'seats_Type',
                            value: 'Fabric',
                            color: GreenColor
                        }
                    ],
                    'clutch_Pedal': [{
                            id: 'clutch_Pedal',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'clutch_Pedal',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'steering_Wheel_wear_Tear': [{
                            id: 'steering_Wheel_wear_Tear',
                            value: 'Damaged',
                            color: RedColor
                        },
                        {
                            id: 'steering_Wheel_wear_Tear',
                            value: 'good',
                            color: GreenColor
                        },
                        {
                            id: 'steering_Wheel_wear_Tear',
                            value: 'faded',
                            color: RedColor
                        },
                        {
                            id: 'steering_Wheel_wear_Tear',
                            value: 'replaced',
                            color: RedColor
                        }
                    ],
                    'steering_Wheel_button': [{
                            id: 'steering_Wheel_button',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'steering_Wheel_button',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'light_Lever_switch': [{
                            id: 'light_Lever_switch',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'light_Lever_switch',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'dashboard': [{
                            id: 'dashboard',
                            value: 'Damaged',
                            color: RedColor
                        },
                        {
                            id: 'dashboard',
                            value: 'good',
                            color: GreenColor
                        },
                        {
                            id: 'dashboard',
                            value: 'faded',
                            color: RedColor
                        },
                        {
                            id: 'dashboard',
                            value: 'replaced',
                            color: RedColor
                        }
                    ],
                    'dash_Control_buttons': [{
                            id: 'dash_Control_buttons',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'dash_Control_buttons',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'interior_Lights': [{
                            id: 'interior_Lights',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'interior_Lights',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'de_Fogger': [{
                            id: 'de_Fogger',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'de_Fogger',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'hazard_Lights': [{
                            id: 'hazard_Lights',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'hazard_Lights',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'multimedia': [{
                            id: 'multimedia',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'multimedia',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'rear_Camera': [{
                            id: 'rear_Camera',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'rear_Camera',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'front_View_camera': [{
                            id: 'front_View_camera',
                            value: 'Not Good',
                            color: RedColor
                        },
                        {
                            id: 'front_View_camera',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'trunk_Release_lever': [{
                            id: 'trunk_Release_lever',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'trunk_Release_lever',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'fuel_cap_Release_Lever': [{
                            id: 'fuel_cap_Release_Lever',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'fuel_cap_Release_Lever',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'bonnet_Release_lever': [{
                            id: 'bonnet_Release_lever',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'bonnet_Release_lever',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'side_View_mirror_Adjustment': [{
                            id: 'side_View_mirror_Adjustment',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'side_View_mirror_Adjustment',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'left_Side_view_Mirror': [{
                            id: 'left_Side_view_Mirror',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'left_Side_view_Mirror',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'right_Side_view_Mirror': [{
                            id: 'right_Side_view_Mirror',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'right_Side_view_Mirror',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'retracting_Side_view_Mirrors': [{
                            id: 'retracting_Side_view_Mirrors',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'retracting_Side_view_Mirrors',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'ac_Grills': [{
                            id: 'ac_Grills',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'ac_Grills',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'accelerator_Pedal': [{
                            id: 'accelerator_Pedal',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'accelerator_Pedal',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'break_Pedal': [{
                            id: 'break_Pedal',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'break_Pedal',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'driver_Seat_belt': [{
                            id: 'driver_Seat_belt',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'driver_Seat_belt',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'passenger_Seat_belt': [{
                            id: 'passenger_Seat_belt',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'passenger_Seat_belt',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'front_Passenger_window': [{
                            id: 'front_Passenger_window',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'front_Passenger_window',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'trunk_Seal': [{
                            id: 'trunk_Seal',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'trunk_Seal',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'battery': [{
                            id: 'battery',
                            value: 'Weak',
                            color: RedColor
                        },
                        {
                            id: 'battery',
                            value: 'Strong',
                            color: GreenColor
                        }
                    ],
                    'horn': [{
                            id: 'horn',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'horn',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'right_Head_light_Operation': [{
                            id: 'right_Head_light_Operation',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'right_Head_light_Operation',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'right_Head_light_Condition': [{
                            id: 'right_Head_light_Condition',
                            value: 'Faded & Scratched',
                            color: RedColor
                        },
                        {
                            id: 'right_Head_light_Condition',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'right_Head_light': [{
                            id: 'right_Head_light',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'right_Head_light',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'left_Head_light_Operation': [{
                            id: 'left_Head_light_Operation',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'left_Head_light_Operation',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'left_Head_light_Condition': [{
                            id: 'left_Head_light_Condition',
                            value: 'Faded & Scratched',
                            color: RedColor
                        },
                        {
                            id: 'left_Head_light_Condition',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'left_Head_light': [{
                            id: 'left_Head_light',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'left_Head_light',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'fog_lights_Operation': [{
                            id: 'fog_lights_Operation',
                            value: 'Faded & Scratched',
                            color: RedColor
                        },
                        {
                            id: 'fog_lights_Operation',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'left_Tail_lights_Operation': [{
                            id: 'left_Tail_lights_Operation',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'left_Tail_lights_Operation',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'left_Tail_lights_Condition': [{
                            id: 'left_Tail_lights_Condition',
                            value: 'Faded & Scratched',
                            color: RedColor
                        },
                        {
                            id: 'left_Tail_lights_Condition',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'left_Tail_lights': [{
                            id: 'left_Tail_lights',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'left_Tail_lights',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'right_Tail_lights_Operation': [{
                            id: 'right_Tail_lights_Operation',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'right_Tail_lights_Operation',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'right_Tail_lights_Condition': [{
                            id: 'right_Tail_lights_Condition',
                            value: 'Faded & Scratched',
                            color: RedColor
                        },
                        {
                            id: 'right_Tail_lights_Condition',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'right_Tail_lights': [{
                            id: 'right_Tail_lights',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'right_Tail_lights',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'wind_shield_Wipers': [{
                            id: 'wind_shield_Wipers',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'wind_shield_Wipers',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'air_bags': [{
                            id: 'air_bags',
                            value: 'Not Present',
                            color: RedColor
                        },
                        {
                            id: 'air_bags',
                            value: 'Present',
                            color: GreenColor
                        }
                    ],
                    'check_Lights': [{
                            id: 'check_Lights',
                            value: 'Off',
                            color: RedColor
                        },
                        {
                            id: 'check_Lights',
                            value: 'On',
                            color: GreenColor
                        }
                    ],
                    'steering_Assembly_play': [{
                            id: 'steering_Assembly_play',
                            value: 'no',
                            color: RedColor
                        },
                        {
                            id: 'steering_Assembly_play',
                            value: 'Yes',
                            color: GreenColor
                        }
                    ],
                    'axle_Boots': [{
                            id: 'axle_Boots',
                            value: 'Damaged',
                            color: RedColor
                        },
                        {
                            id: 'axle_Boots',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'right_Ball_joint': [{
                            id: 'right_Ball_joint',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'right_Ball_joint',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'left_Ball_joint': [{
                            id: 'left_Ball_joint',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'left_Ball_joint',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'tie_Rod_end': [{
                            id: 'tie_Rod_end',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'tie_Rod_end',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'right_Boot': [{
                            id: 'right_Boot',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'right_Boot',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'left_Boot': [{
                            id: 'left_Boot',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'left_Boot',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'right_Bush': [{
                            id: 'right_Bush',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'right_Bush',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'left_Bush': [{
                            id: 'left_Bush',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'left_Bush',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'rear_Right_shock_Absorder': [{
                            id: 'rear_Right_shock_Absorder',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'rear_Right_shock_Absorder',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'rear_Left_shock_Absorder': [{
                            id: 'rear_Left_shock_Absorder',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'rear_Left_shock_Absorder',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'front_Right_shock_Absorder': [{
                            id: 'front_Right_shock_Absorder',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'front_Right_shock_Absorder',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'front_Left_Shock_Absorder': [{
                            id: 'front_Left_Shock_Absorder',
                            value: 'Service Require',
                            color: RedColor
                        },
                        {
                            id: 'front_Left_Shock_Absorder',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'bonnet_Seal': [{
                            id: 'bonnet_Seal',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'bonnet_Seal',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'bonnet': [{
                            id: 'bonnet',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'bonnet',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'front_right_fender': [{
                            id: 'front_right_fender',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'front_right_fender',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'front_right_door': [{
                            id: 'front_right_door',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'front_right_door',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'front_Driver_door_Seal': [{
                            id: 'front_Driver_door_Seal',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'front_Driver_door_Seal',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'rear_right_door': [{
                            id: 'rear_right_door',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'rear_right_door',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'rear_right_Door_Seal': [{
                            id: 'rear_right_Door_Seal',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'rear_right_Door_Seal',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'front_Passenger_Door_Seal': [{
                            id: 'front_Passenger_Door_Seal',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'front_Passenger_Door_Seal',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'rear_Passenger_side_Door_Seal': [{
                            id: 'rear_Passenger_side_Door_Seal',
                            value: 'Not Original',
                            color: RedColor
                        },
                        {
                            id: 'rear_Passenger_side_Door_Seal',
                            value: 'Original',
                            color: GreenColor
                        }
                    ],
                    'trunk_Lock': [{
                            id: 'trunk_Lock',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'trunk_Lock',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'front_Wind_shield': [{
                            id: 'front_Wind_shield',
                            value: 'R',
                            color: RedColor
                        },
                        {
                            id: 'front_Wind_shield',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'front_Passenger_fender': [{
                            id: 'front_Passenger_fender',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'front_Passenger_fender',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'front_Passenger_door': [{
                            id: 'front_Passenger_door',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'front_Passenger_door',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'rear_Passenger_door': [{
                            id: 'rear_Passenger_door',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'rear_Passenger_door',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'rear_Passenger_fender': [{
                            id: 'rear_Passenger_fender',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'rear_Passenger_fender',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'trunk': [{
                            id: 'trunk',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'trunk',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'rear_screen': [{
                            id: 'rear_screen',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'rear_screen',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'rear_Driver_fender': [{
                            id: 'rear_Driver_fender',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'rear_Driver_fender',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'roof': [{
                            id: 'roof',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'roof',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'panels': [{
                            id: 'panels',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'panels',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'driver_A_pillar': [{
                            id: 'driver_A_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'driver_A_pillar',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'driver_B_pillar': [{
                            id: 'driver_B_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'driver_B_pillar',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'driver_C_pillar': [{
                            id: 'driver_C_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'driver_C_pillar',
                            value: 'C',
                            color: GreenColor
                        }
                    ],
                    'driver_D_pillar': [{
                            id: 'driver_D_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'driver_D_pillar',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'passenger_A_pillar': [{
                            id: 'passenger_A_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'passenger_A_pillar',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'passenger_B_pillar': [{
                            id: 'passenger_B_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'passenger_B_pillar',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'passenger_C_pillar': [{
                            id: 'passenger_C_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'passenger_C_pillar',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'passenger_D_pillar': [{
                            id: 'passenger_D_pillar',
                            value: 'P',
                            color: RedColor
                        },
                        {
                            id: 'passenger_D_pillar',
                            value: 'T',
                            color: GreenColor
                        }
                    ],
                    'front_Driver_tyre_Condition': [{
                            id: 'front_Driver_tyre_Condition',
                            value: 'not Good',
                            color: RedColor
                        },
                        {
                            id: 'front_Driver_tyre_Condition',
                            value: 'Good',
                            color: GreenColor
                        },
                        {
                            id: 'front_Driver_tyre_Condition',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'rear_Passenger_tyre_Condition': [{
                            id: 'rear_Passenger_tyre_Condition',
                            value: 'not Good',
                            color: RedColor
                        },
                        {
                            id: 'rear_Passenger_tyre_Condition',
                            value: 'Good',
                            color: GreenColor
                        }
                    ],
                    'front_Passenger_tyre_Condition': [{
                            id: 'front_Passenger_tyre_Condition',
                            value: 'Not Working',
                            color: RedColor
                        },
                        {
                            id: 'front_Passenger_tyre_Condition',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'alloy_Rims': [{
                            id: 'alloy_Rims',
                            value: 'no',
                            color: RedColor
                        },
                        {
                            id: 'alloy_Rims',
                            value: 'Yes',
                            color: GreenColor
                        }
                    ],
                    'spare_Wheel': [{
                            id: 'spare_Wheel',
                            value: 'Not Present',
                            color: RedColor
                        },
                        {
                            id: 'spare_Wheel',
                            value: 'Present',
                            color: GreenColor
                        }
                    ],
                    'tool_Kit': [{
                            id: 'tool_Kit',
                            value: 'Not Present',
                            color: RedColor
                        },
                        {
                            id: 'tool_Kit',
                            value: 'Present',
                            color: GreenColor
                        }
                    ],
                    'jack': [{
                            id: 'jack',
                            value: 'Not Present',
                            color: RedColor
                        },
                        {
                            id: 'jack',
                            value: 'Present',
                            color: GreenColor
                        }
                    ],
                    'puncture_Repair_kit': [{
                            id: 'puncture_Repair_kit',
                            value: 'Not Present',
                            color: RedColor
                        },
                        {
                            id: 'puncture_Repair_kit',
                            value: 'Present',
                            color: GreenColor
                        }
                    ],
                    'speedometer': [{
                            id: 'speedometer',
                            value: 'not Working',
                            color: RedColor
                        },
                        {
                            id: 'speedometer',
                            value: 'Working',
                            color: GreenColor
                        }
                    ],
                    'front_Suspension_Noise': [{
                            id: 'front_Suspension_Noise',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'front_Suspension_Noise',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'rear_Suspension_Noise': [{
                            id: 'rear_Suspension_Noise',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'rear_Suspension_Noise',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'engine_Pick': [{
                            id: 'engine_Pick',
                            value: 'Service Required',
                            color: RedColor
                        },
                        {
                            id: 'engine_Pick',
                            value: 'Normal',
                            color: GreenColor
                        }
                    ],
                    'gear_Shifting': [{
                            id: 'gear_Shifting',
                            value: 'Service Required',
                            color: RedColor
                        },
                        {
                            id: 'gear_Shifting',
                            value: 'Smooth',
                            color: GreenColor
                        }
                    ],
                    'differential_Noise': [{
                            id: 'differential_Noise',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'differential_Noise',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'drive_Shaft_noise': [{
                            id: 'drive_Shaft_noise',
                            value: 'Yes',
                            color: RedColor
                        },
                        {
                            id: 'drive_Shaft_noise',
                            value: 'No',
                            color: GreenColor
                        }
                    ],
                    'abs_Actuation': [{
                            id: 'abs_Actuation',
                            value: 'Service Required',
                            color: RedColor
                        },
                        {
                            id: 'abs_Actuation',
                            value: 'Timely Response',
                            color: GreenColor
                        }
                    ],
                    'brake_Pedal_operation': [{
                            id: 'brake_Pedal_operation',
                            value: 'Service Required',
                            color: RedColor
                        },
                        {
                            id: 'brake_Pedal_operation',
                            value: 'Timely Response',
                            color: GreenColor
                        }
                    ],
                    'steering_Function': [{
                            id: 'steering_Function',
                            value: 'No',
                            color: RedColor
                        },
                        {
                            id: 'steering_Function',
                            value: 'Yes',
                            color: GreenColor
                        }
                    ],
                    'steering_Wheel_alignment': [{
                            id: 'steering_Wheel_alignment',
                            value: 'not Center',
                            color: RedColor
                        },
                        {
                            id: 'steering_Wheel_alignment',
                            value: 'Center',
                            color: GreenColor
                        }
                    ],
                };

                // Create the content array with fields and image columns
                var content = fieldNames.map(function(fieldName) {
                    var backgroundColor = GreenColor; // Default color for fields not in the fieldColorMap
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

                    if (fieldColorMap.hasOwnProperty(fieldName)) {
                        var fieldMappings = fieldColorMap[fieldName];

                        fieldMappings.forEach(function(mapping) {
                            var fieldID = mapping.id;
                            var fieldValue = formData[fieldID];
                            var fieldColor = mapping.color;

                            if (fieldValue === mapping.value) {
                                backgroundColor = fieldColor; // Assign the specified color for the field
                            }
                        });
                    }

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



                const engineNumberIndex = 18;
                const engineRoomIndex = 36;
                const engineNoiseIndex = 52;
                const acInstalledIndex = 59;
                const wearandtearIndex = 98;
                const batteryIndex = 118;
                const assemblyPlayIndex = 133;


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
                    if (engineNumberIndex >= 0 && imageColumns.length > 1) {
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
                        content.splice(engineNumberIndex + 1, 0, firstImageTitleContent);
                    }

                    if (engineRoomIndex >= 0 && imageColumns.length > 1) {
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
                        content.splice(engineRoomIndex + 2, 0, secondImageTitleContent);
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


                var x = 0;

                if (x == 0) {
                    loadImageAsDataURL('assets/images/' + filen)
                        .then(function(staticImageData3) {
                            var staticImageColumn3 = {
                                image: staticImageData3,
                                width: 800,
                                alignment: 'center',
                                margin: [0, 20, 0, 20]
                            };

                            // Insert the first static image column after the 'engine_number' field
                            var engineNumberIndex1 = fieldNames.indexOf('engine_number');
                            if (engineNumberIndex1 >= 0) {
                                content.splice(engineNumberIndex1 + 2, 0, staticImageColumn3);
                            }
                        })
                        .catch(function(error) {
                            console.log('Error loading Table image:', error);
                        });

                    x = 1;
                }

                if (x == 1) {
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
                            var engineNumberIndex2 = fieldNames.indexOf('engine_number');
                            if (engineNumberIndex2 >= 0) {
                                content.splice(engineNumberIndex2 + 2, 0, staticImageColumn);
                            }
                        })
                        .catch(function(error) {
                            console.log('Error loading graph image:', error);
                        });

                    x = 2;

                }


                if (x == 2) {
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
                                    var engineNumberIndex3 = fieldNames.indexOf('engine_number');
                                    if (engineNumberIndex3 >= 0) {
                                        content.splice(engineNumberIndex3 + 4, 0, imageRow);
                                    }
                                })
                                .catch(function(error) {
                                    console.log('Error loading second image:', error);
                                });
                        })
                        .catch(function(error) {
                            console.log('Error loading first image:', error);
                        });
                }












                // Load header image as data URL
                loadImageAsDataURL('assets/images/header_image.jpeg')
                    .then(function(headerImageDataURL) {
                        // Load footer image as data URL
                        loadImageAsDataURL('assets/images/footer_img.png')
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

            // Select graph the div to capture
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