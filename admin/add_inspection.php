<!-- header start -->
<style>
    .navbar-brand-box {
        padding: 2rem 1.3rem !important;
    }
</style>
<?php include('header.php'); ?>
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
                                <form id="inspection_form">
                                    <div class="mb-4 row">
                                        <h3 class="mb-5">PRELIMINARY INFORMATION</h3>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Client Name</label>
                                                <input type="text" id="" name="username" class="form-control" placeholder="Enter Fisrt Name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Vehicle Make</label>
                                                <input type="text" id="" name="vehicle_name" placeholder="Enter Last Name" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Email</label>
                                                <input type="text" id="" placeholder="Enter Email" name="email" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Phone</label>
                                                <input type="text" id="" placeholder="Enter Phone" name="phone" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Inspection Location</label>
                                                <input type="text" id="" placeholder="Enter City" name="city" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Inspection Date</label>
                                                <input type="date" id="form3Example1q" name="date" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>



                                    <div class="mb-4 row">
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Vehicle Model</label>
                                                <input type="text" id="" placeholder="Enter Vehicle Model" name="vehicle_model" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Vehicle Variant</label>
                                                <input type="text" id="" placeholder="Enter Vehicle Variant" name="vehicle_variant" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q"> Model Year</label>
                                                <input type="text" id="" placeholder="Enter Model Year" name="model_year" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Transmission</label>
                                                <input type="text" id="" placeholder="Enter Transmission" name="transmission" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q"> Engine Capacity</label>
                                                <input type="text" id="" placeholder="Enter Engine Capacity" name="engine_capacity" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Fuel Type</label>
                                                <input type="text" id="" placeholder="Enter Fuel Type" name="fuel_type" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>



                                    <div class="mb-4 row">
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q"> Body Color</label>
                                                <input type="text" id="" placeholder="Enter Body Color" name="body_color" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Mileage</label>
                                                <input type="text" id="" placeholder="Enter Mileage" name="mileage" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q"> Registration Number</label>
                                                <input type="text" id="" placeholder="Enter Registration Number" name="registration_number" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Registered City</label>
                                                <input type="text" id="" placeholder="Enter Registered City" name="registered_city" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q"> Chassis Number</label>
                                                <input type="text" id="" placeholder="Enter Chassis Number" name="chassis_number" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 md-6">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Engine Number</label>
                                                <input type="text" id="" placeholder="Enter Engine Number" name="engine_number" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class='row mb-4 mt-5'>
                                        <div class='col-lg-12 col-sm-12'>
                                            <h3 class='text-uppercase'>Accidental Checklist</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Engine Room Firewall</label> <br />
                                            <select class="form-control" name="engineRoom">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right Strut Tower</label> <br />
                                            <select class="form-control" name="rightStrutTower">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left Strut Tower</label> <br />
                                            <select class="form-control" name="leftStrutTower">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right Front Rail</label> <br />
                                            <select class="form-control" name="rightFrontRail">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left Front Rail</label> <br />
                                            <select class="form-control" name="leftFrontRail">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Radiator Core Support</label> <br />
                                            <select class="form-control" name="radiatorCoreSupport">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right A Pillar</label> <br />
                                            <select class="form-control" name="rightApillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left A Pillar</label> <br />
                                            <select class="form-control" name="leftApillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right B Pillar</label> <br />
                                            <select class="form-control" name="rightBpillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left B Pillar</label> <br />
                                            <select class="form-control" name="leftBpillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right C Pillar</label> <br />
                                            <select class="form-control" name="rightCpillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left C Pillar</label> <br />
                                            <select class="form-control" name="leftCpillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right D Pillar</label> <br />
                                            <select class="form-control" name="rightDpillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left D Pillar</label> <br />
                                            <select class="form-control" name="leftDpillar">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Boot Floor</label> <br />
                                            <select class="form-control" name="bootFloor">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front Underbody</label> <br />
                                            <select class="form-control" name="frontUnderbody">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Rear Underbody</label> <br />
                                            <select class="form-control" name="rearUnderbody">
                                                <option value="Non Accidented">Non Accidented</option>
                                                <option value="Accidented">Accidented</option>
                                            </select>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="mb-3">
                                                <label class="fs-14">Select Images</label>
                                                <div class="card-body">
                                                    <div id="accidental_images_picker" class="row"></div>
                                                    <div id="preview-container"></div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Mechanical Functions</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Engine Noisy</label> <br />
                                            <select class="form-control" name="engineNoisy">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                <option value="Not Present">Not Present</option>
                                                <option value="Normal Sound">Normal Sound</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Engine Vibrations</label> <br />
                                            <select class="form-control" name="engineVibration">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                <option value="Normal Sound">Normal Sound</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Engine Smoke</label> <br />
                                            <select class="form-control" name="engineSmoke">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Engine Smoke Color</label> <br />
                                            <select class="form-control" name="engineSmokeColor">
                                                <option value="N/A">N/A</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Engine Blow</label> <br />
                                            <select class="form-control" name="engineBlow">
                                                <option value="Not Present">Not Present</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Coolant Leakage</label> <br />
                                            <select class="form-control" name="coolantLeakage">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Brake Oil Leakage</label> <br />
                                            <select class="form-control" name="brakeOilLeakage">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Transmission Oil Leakage</label> <br />
                                            <select class="form-control" name="transmissionOilLeakage">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Exhaust Sound</label> <br />
                                            <select class="form-control" name="exhaustSound">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Good">Not Good</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Radiator</label> <br />
                                            <select class="form-control" name="radiator">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Good">Not Good</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Suction Fan</label> <br />
                                            <select class="form-control" name="suctionFan">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Good">Not Good</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Gear Transmission</label> <br />
                                            <select class="form-control" name="gearTransmission">
                                                <option value="Smooth">Smooth</option>
                                                <option value="Not Good">Not Good</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Select Images</label>
                                            <div class="card-body">
                                                <div id="mechanical_img_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>A/C & Heater Operation</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>A/C Installed</label> <br />
                                            <select class="form-control" name="acInstalled">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>A/C Fan</label> <br />
                                            <select class="form-control" name="acFan">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Blower Throw</label> <br />
                                            <select class="form-control" name="blowerThrow">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>A/C Cooling</label> <br />
                                            <select class="form-control" name="acCooling">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Heater</label> <br />
                                            <select class="form-control" name="heater">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Select Images</label>
                                            <div class="card-body">
                                                <div id="ac_heater_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Interior</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Steering Wheel Wear And Tear</label> <br />
                                            <select class="form-control" name="steeringWheelwearTear">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Steering Wheel Buttons</label> <br />
                                            <select class="form-control" name="steeringWheelbutton">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Lights Lever/ Switch</label> <br />
                                            <select class="form-control" name="lightLeverswitch">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Dashboard</label> <br />
                                            <select class="form-control" name="dashboard">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Dash Control Buttons</label> <br />
                                            <select class="form-control" name="dashControlbuttons">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Interior Lights</label> <br />
                                            <select class="form-control" name="interiorLights">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>De-fogger</label> <br />
                                            <select class="form-control" name="deFogger">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Hazard Lights</label> <br />
                                            <select class="form-control" name="hazardLights">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Multimedia</label> <br />
                                            <select class="form-control" name="multimedia">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Rear Camera</label> <br />
                                            <select class="form-control" name="rearCamera">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front View Camera</label> <br />
                                            <select class="form-control" name="frontViewcamera">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Trunk Release Lever</label> <br />
                                            <select class="form-control" name="trunkReleaselever">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Fuel Cap Release Lever</label> <br />
                                            <select class="form-control" name="fuelcapReleaseLever">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Bonnet Release Lever</label> <br />
                                            <select class="form-control" name="bonnetReleaselever">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Side-view Mirror Adjustment</label> <br />
                                            <select class="form-control" name="sideViewmirrorAdjustment">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Side-view Mirror</label> <br />
                                            <select class="form-control" name="leftSideviewMirror">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Right Side-view Mirror</label> <br />
                                            <select class="form-control" name="rightSideviewMirror">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Retracting Side-view Mirrors</label> <br />
                                            <select class="form-control" name="retractingSideviewMirrors">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>A/C Grills</label> <br />
                                            <select class="form-control" name="acGrills">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Accelerator Pedal</label> <br />
                                            <select class="form-control" name="acceleratorPedal">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Brake Pedal</label> <br />
                                            <select class="form-control" name="breakPedal">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Clutch Pedal</label> <br />
                                            <select class="form-control" name="clutchPedal">
                                                <option value="Normal">Normal</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Seats Type</label> <br />
                                            <select class="form-control" name="seatsType">
                                                <option value="Fabric">Fabric</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Seats Condition</label> <br />
                                            <select class="form-control" name="seatsCondition">
                                                <option value="Clean">Clean</option>
                                                <option value="Bad">Bad</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Driver Seatbelt</label> <br />
                                            <select class="form-control" name="driverSeatbelt">
                                                <option value="Working">Working</option>
                                                <option value="not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Passenger Seatbelt</label> <br />
                                            <select class="form-control" name="passengerSeatbelt">
                                                <option value="Working">Working</option>
                                                <option value="not Working">Not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Windows Type</label> <br />
                                            <select class="form-control" name="windowsType">
                                                <option value="Manual">Manual</option>
                                                <option value="Automatic">Automatic</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Driver Window</label> <br />
                                            <select class="form-control" name="frontDriverwindow">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>


                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Passenger Window</label> <br />
                                            <select class="form-control" name="frontPassengerwindow">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Driver Side Window</label> <br />
                                            <select class="form-control" name="rearDriversideWindow">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Rear Passenger Side Window</label> <br />
                                            <select class="form-control" name="rearPassengersideWindow">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Window Safety Lock Button</label> <br />
                                            <select class="form-control" name="windowSafetylockButton">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Central Locking</label> <br />
                                            <select class="form-control" name="centralLocking">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Key Buttons</label> <br />
                                            <select class="form-control" name="keyButtons">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Floor Mats</label> <br />
                                            <select class="form-control" name="floorMats">
                                                <option value="Working">Working</option>
                                                <option value="not Working">not Working</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Driver Door Seal</label> <br />
                                            <select class="form-control" name="frontDriverdoorSeal">
                                                <option value="Original">Original</option>
                                                <option value="not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Passenger Door Seal</label> <br />
                                            <select class="form-control" name="frontPassengerDoorSeal">
                                                <option value="Original">Original</option>
                                                <option value="not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Driver Side Door Seal</label> <br />
                                            <select class="form-control" name="rearDriversideDoorSeal">
                                                <option value="Original">Original</option>
                                                <option value="not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Rear Passenger Side Door Seal</label> <br />
                                            <select class="form-control" name="rearPassengersideDoorSeal">
                                                <option value="Original">Original</option>
                                                <option value="not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Bonnet Seal</label> <br />
                                            <select class="form-control" name="bonnetSeal">
                                                <option value="Original">Original</option>
                                                <option value="not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Trunk Seal Original</label> <br />
                                            <select class="form-control" name="trunkSeal">
                                                <option value="Original">Original</option>
                                                <option value="not Original">Not Original</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Select Images</label>
                                            <div class="card-body">
                                                <div id="interior_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Electronic Function</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Battery</label> <br />
                                            <select class="form-control" name="battery">
                                                <option value="Strong">Strong</option>
                                                <option value="Weak">Weak</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Horn</label> <br />
                                            <select class="form-control" name="horn">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right Headlight Operation</label> <br />
                                            <select class="form-control" name="rightHeadlightOperation">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right Headlight Condition</label> <br />
                                            <select class="form-control" name="rightHeadlightCondition">
                                                <option value="Normal">Normal</option>
                                                <option value="Fadded & Scratched">Fadded & Scratched</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right Headlight</label> <br />
                                            <select class="form-control" name="rightHeadlight">
                                                <option value="Original">Original</option>
                                                <option value="Not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left Headlight Operation</label> <br />
                                            <select class="form-control" name="leftHeadlightOperation">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Headlight Condition</label> <br />
                                            <select class="form-control" name="leftHeadlightCondition">
                                                <option value="Normal">Normal</option>
                                                <option value="Fadded & Scratched">Fadded & Scratched</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Headlight</label> <br />
                                            <select class="form-control" name="leftHeadlight">
                                                <option value="Original">Original</option>
                                                <option value="Not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Foglights Operation</label> <br />
                                            <select class="form-control" name="foglightsOperation">
                                                <option value="Normal">Normal</option>
                                                <option value="Fadded & Scratched">Fadded & Scratched</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Tail Lights Operation</label> <br />
                                            <select class="form-control" name="leftTaillightsOperation">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Tail Lights Condition</label> <br />
                                            <select class="form-control" name="leftTaillightsCondition">
                                                <option value="Normal">Normal</option>
                                                <option value="Fadded & Scratched">Fadded & Scratched</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Tail Lights</label> <br />
                                            <select class="form-control" name="leftTaillights">
                                                <option value="Original">Original</option>
                                                <option value="Not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Right Tail Lights Operation</label> <br />
                                            <select class="form-control" name="rightTaillightsOperation">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Right Tail Lights Condition</label> <br />
                                            <select class="form-control" name="rightTaillightsCondition">
                                                <option value="Normal">Normal</option>
                                                <option value="Fadded & Scratched">Fadded & Scratched</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Right Tail Lights</label> <br />
                                            <select class="form-control" name="rightTaillights">
                                                <option value="Original">Original</option>
                                                <option value="Not Original">Not Original</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Windshield Wipers</label> <br />
                                            <select class="form-control" name="windshieldWipers">
                                                <option value="Working">Working</option>
                                                <option value="Not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Airbags</label> <br />
                                            <select class="form-control" name="airbags">
                                                <option value="Not Present">Not Present</option>
                                                <option value="Present">Present</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Check Lights</label> <br />
                                            <select class="form-control" name="checkLights">
                                                <option value="Off">Off</option>
                                                <option value="On">On</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Select Images</label>
                                            <div class="card-body">
                                                <div id="electronic_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Suspension Function</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Steering Assembly Play</label> <br />
                                            <select class="form-control" name="steeringAssemblyplay">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Axle Boots</label> <br />
                                            <select class="form-control" name="axleBoots">
                                                <option value="Normal">Normal</option>
                                                <option value="Damaged">Damaged</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right Ball Joint</label> <br />
                                            <select class="form-control" name="rightBalljoint">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Left Ball Joint</label> <br />
                                            <select class="form-control" name="leftBalljoint">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Tie Rod End</label> <br />
                                            <select class="form-control" name="tieRodend">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Right Boot</label> <br />
                                            <select class="form-control" name="rightBoot">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Boot</label> <br />
                                            <select class="form-control" name="leftBoot">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Right Bush</label> <br />
                                            <select class="form-control" name="rightBush">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Left Bush</label> <br />
                                            <select class="form-control" name="leftBush">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Right Shock Absorber</label> <br />
                                            <select class="form-control" name="rearRightshockAbsorder">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Left Shock Absorber </label> <br />
                                            <select class="form-control" name="rearLeftshockAbsorder">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front Right Shock Absorber</label> <br />
                                            <select class="form-control" name="frontRightshockAbsorder">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front Left Shock Absorber</label> <br />
                                            <select class="form-control" name="frontLeftShockAbsorder">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Require">Service Require</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Select Images</label>
                                            <div class="card-body">
                                                <div id="suspension_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Exterior Body</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Trunk Lock</label> <br />
                                            <select class="form-control" name="trunkLock">
                                                <option value="Working">Working</option>
                                                <option value="not Working">Not Working</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Trunk Lock Images</label>
                                            <div class="card-body">
                                                <div id="trunkLock_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Driver Fender</label> <br />
                                            <select class="form-control" name="frontDriverfender">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Front Driver Fender Images</label>
                                            <div class="card-body">
                                                <div id="frontDriverfender_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Bonnet</label> <br />
                                            <select class="form-control" name="bonnet">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Bonnet Images</label>
                                            <div class="card-body">
                                                <div id="bonnet_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Windshield</label> <br />
                                            <select class="form-control" name="frontWindshield">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Front Windshield</label>
                                            <div class="card-body">
                                                <div id="frontWindshield_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Passenger Fender</label> <br />
                                            <select class="form-control" name="frontPassengerfender">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Front Passenger Fender Images</label>
                                            <div class="card-body">
                                                <div id="frontPassengerfender_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Passenger Door</label> <br />
                                            <select class="form-control" name="frontPassengerdoor">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Front Passenger Door Images</label>
                                            <div class="card-body">
                                                <div id="frontPassengerdoor_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Passenger Door</label> <br />
                                            <select class="form-control" name="rearPassengerdoor">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Rear Passenger Door images</label>
                                            <div class="card-body">
                                                <div id="rearPassengerdoor_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Passenger Fender</label> <br />
                                            <select class="form-control" name="rearPassengerfender">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Rear Passenger Fender images</label>
                                            <div class="card-body">
                                                <div id="rearPassengerfender_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Trunk</label> <br />
                                            <select class="form-control" name="trunk">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Trunk images</label>
                                            <div class="card-body">
                                                <div id="trunk_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Windshield</label> <br />
                                            <select class="form-control" name="rearWinshield">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Rear Windshield images</label>
                                            <div class="card-body">
                                                <div id="rearWinshield_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Driver Fender</label> <br />
                                            <select class="form-control" name="rearDriverfender">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Rear Driver Fender images</label>
                                            <div class="card-body">
                                                <div id="rearDriverfender_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Driver Door</label> <br />
                                            <select class="form-control" name="rearDriverdoor">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Rear Driver Door images</label>
                                            <div class="card-body">
                                                <div id="rearDriverdoor_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front Driver Door</label> <br />
                                            <select class="form-control" name="frontDriverdoor">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Front Driver Door images</label>
                                            <div class="card-body">
                                                <div id="frontDriverdoor_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Roof</label> <br />
                                            <select class="form-control" name="roof">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Roof images</label>
                                            <div class="card-body">
                                                <div id="roof_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Pannels</label> <br />
                                            <select class="form-control" name="pabbels">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Pannels images</label>
                                            <div class="card-body">
                                                <div id="pabbels_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Driver A Pillar</label> <br />
                                            <select class="form-control" name="driverApillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Driver A Pillar images</label>
                                            <div class="card-body">
                                                <div id="driverApillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Driver B Pillar </label> <br />
                                            <select class="form-control" name="driverBpillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Driver B Pillar images</label>
                                            <div class="card-body">
                                                <div id="driverBpillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Driver C Pillar</label> <br />
                                            <select class="form-control" name="driverCpillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Driver C Pillar images</label>
                                            <div class="card-body">
                                                <div id="driverCpillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Driver D Pillar</label> <br />
                                            <select class="form-control" name="driverDpillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Driver D Pillar images</label>
                                            <div class="card-body">
                                                <div id="driverDpillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Passenger A Pillar</label> <br />
                                            <select class="form-control" name="passengerApillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Passenger A Pillar images</label>
                                            <div class="card-body">
                                                <div id="passengerApillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Passenger B Pillar</label> <br />
                                            <select class="form-control" name="passengerBpillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Passenger B Pillar images</label>
                                            <div class="card-body">
                                                <div id="passengerBpillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Passenger C Pillar</label> <br />
                                            <select class="form-control" name="passengerCpillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Passenger C Pillar images</label>
                                            <div class="card-body">
                                                <div id="passengerCpillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Passenger D Pillar</label> <br />
                                            <select class="form-control" name="passengerDpillar">
                                                <option value="T">T</option>
                                                <option value="P">P</option>
                                                <option value="A1">A1</option>
                                                <option value="A2">A2</option>
                                                <option value="E1">E1</option>
                                                <option value="E2">E2</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                            <label class="fs-14 mb-0 mt-3">Passenger D Pillar images</label>
                                            <div class="card-body">
                                                <div id="passengerDpillar_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Tyres</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front Passenger Tyre Brand </label> <br />
                                            <input type="text" class="form-control" name="frontPassengertyreBrand" required />
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Passenger Tyre Size</label> <br />
                                            <input type="text" class="form-control" name="frontPassengertyreSize" required />
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front Passenger Tyre Condition</label> <br />
                                            <select class="form-control" name="frontPassengertyreCondition">
                                                <option value="Good">Good</option>
                                                <option value="Normal">Normal</option>
                                                <option value="not Good">Not Good</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Driver Tyre Brand</label> <br />
                                            <input type="text" class="form-control" name="frontDrivertyreBrand" required />
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Driver Tyre Size</label> <br />
                                            <input type="text" class="form-control" name="frontDrivertyreSize" required />
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Front Driver Tyre Condition</label> <br />
                                            <select class="form-control" name="frontDrivertyreCondition">
                                                <option value="Good">Good</option>
                                                <option value="Normal">Normal</option>
                                                <option value="not Good">Not Good</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Rear Passenger Tyre Brand</label> <br />
                                            <input type="text" name="rearPassengertyreBrand" class="form-control" />
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Passenger Tyre Size</label> <br />
                                            <input type="text" class="form-control" name="rearPassengerTyresize" required />
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Rear Passenger Tyre Condition</label> <br />
                                            <select name="rearPassengertyreCondition" class="form-control">
                                                <option value="Good">Good</option>
                                                <option value="Normal">Normal</option>
                                                <option value="not Good">Not Good</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Driver Tyre Brand</label> <br />
                                            <input type="text" class="form-control" name="rearDriverTyrebrand" required />
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Driver Tyre Size</label> <br />
                                            <input type="text" class="form-control" name="rearDrivertyreSize" required />
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Driver Tyre Condition</label> <br />
                                            <select class="form-control" name="rearDrivertyreCondition">
                                                <option value="Good">Good</option>
                                                <option value="Normal">Normal</option>
                                                <option value="not Good">Not Good</option>
                                            </select>
                                        </div>

                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Alloy Rims</label> <br />
                                            <select class="form-control" name="alloyRims">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Select Images</label>
                                            <div class="card-body">
                                                <div id="tyre_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Accessories</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Spare Wheel</label> <br />
                                            <select class="form-control" name="spareWheel">
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Tool Kit</label> <br />
                                            <select class="form-control" name="toolKit">
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Jack</label> <br />
                                            <select class="form-control" name="jack">
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Puncture Repair Kit</label> <br />
                                            <select class="form-control" name="punctureRepairkit">
                                                <option value="Present">Present</option>
                                                <option value="Not Present">Not Present</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Select Images</label>
                                            <div class="card-body">
                                                <div id="accessories_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='col-lg-12 col-sm-12 my-4'>
                                            <h3 class='text-uppercase'>Test Drive</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Engine Pick</label> <br />
                                            <select class="form-control" name="enginePick">
                                                <option value="Normal">Normal</option>
                                                <option value="Service Required">Service Required</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Gear Shifting</label> <br />
                                            <select class="form-control" name="gearShifting">
                                                <option value="Smooth">Smooth</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Service Required">Service Required</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Differential Noise</label> <br />
                                            <select class="form-control" name="differentialNoise">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Drive Shaft Noise</label> <br />
                                            <select class="form-control" name="driveShaftnoise">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>ABS Actuation</label> <br />
                                            <select class="form-control" name="absActuation">
                                                <option value="Timely Response">Timely Response</option>
                                                <option value="Service Required">Service Required</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Brake Pedal Operation</label> <br />
                                            <select class="form-control" name="brakePedaloperation">
                                                <option value="Timely Response">Timely Response</option>
                                                <option value="Service Required">Service Required</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Front Suspension Noise</label> <br />
                                            <select class="form-control" name="frontSuspensionNoise">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Rear Suspension Noise </label> <br />
                                            <select class="form-control" name="rearSuspensionNoise">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Steering Function</label> <br />
                                            <select class="form-control" name="steeringFunction">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Steering Wheel Alignment</label> <br />
                                            <select name="steeringWheelalignment" class="form-control">
                                                <option value="Center">Center</option>
                                                <option value="not Center">Not Center</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label>Speedometer/ Information Cluster </label> <br />
                                            <select class="form-control" name="speedmeterInformation">
                                                <option value="Working">Working</option>
                                                <option value="not Working">Not Working</option>
                                            </select>
                                        </div>
                                        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
                                            <label class="mb-4 pb-1">Test Drive Done By</label> <br />
                                            <input type="text" class="form-control" name="testDrivedoneBy" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="mb-3">
                                            <label class="fs-14">Car Images</label>
                                            <div class="card-body">
                                                <div id="car_images_picker" class="row"></div>
                                                <div id="preview-container"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 mt-4 row">
                                        <div class="col-lg-6 md-12">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Additional Notes from Client*</label>
                                                <textarea id="editor" placeholder="Enter description" name="message">
                                    </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 md-12">
                                            <div class="">
                                                <label class="form-label" for="form3Example1q">Additional Notes from Admin*</label>
                                                <textarea id="editorAdmin" placeholder="Enter description" name="admin_message">
                                    </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 row">
                                        <div class="col-lg-12 md-12">
                                            <div class="text-center">
                                                <input type="submit" name="" class="btn btn-primary" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- inspection code start-->
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
<!-- inspection code end-->

<!-- ckeditor start -->
<script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log('');
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editorAdmin'))
        .then(editorAdmin => {
            console.log('');
        })
        .catch(error => {
            console.error(error);
        });
</script>
<!-- ckeditor end -->

<!-- Check if the URL has parameters start -->
<script>
    if (window.location.search) {
        // Get the current URL without parameters
        var urlWithoutParams = window.location.href.split('?')[0];

        // Replace the current URL with the URL without parameters
        window.history.replaceState({}, document.title, urlWithoutParams);
    }
</script>
<!-- Check if the URL has parameters end -->

<!-- message hide and url clear code start-->
<script>
    setTimeout(function() {
        var hideDiv = document.getElementById('hide_div');
        hideDiv.style.display = 'none';
    }, 4000);
</script>
<!-- message hide and url clear code end-->

<!-- Accidental Checklist preview Images start-->
<script src="assets/js/multi_image.js"></script>
<script type="text/javascript" src="assets/js/multi-image-picker.js"></script>

<script type="text/javascript">
    $(function() {
        $("#accidental_images_picker").spartanMultiImagePicker({
            fieldName: 'accidental_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Accidental Checklist preview Images end-->

<!-- Mechanical Function preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#mechanical_img_picker").spartanMultiImagePicker({
            fieldName: 'mechanical_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Mechanical Function preview Images end-->

<!-- Ac/Heater Operation preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#ac_heater_images_picker").spartanMultiImagePicker({
            fieldName: 'ac_heater_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Ac/Heater Operation preview Images end-->

<!-- Interior preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#interior_images_picker").spartanMultiImagePicker({
            fieldName: 'interior_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Interior preview Images end-->


<!-- Electronic Function preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#electronic_images_picker").spartanMultiImagePicker({
            fieldName: 'electronic_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Electronic Function preview Images end-->

<!-- Suspension Function preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#suspension_images_picker").spartanMultiImagePicker({
            fieldName: 'suspension_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Suspension Function preview Images end-->

<!-- Exterior Body preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#trunkLock_images_picker").spartanMultiImagePicker({
            fieldName: 'trunkLock_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#frontDriverfender_images_picker").spartanMultiImagePicker({
            fieldName: 'frontDriverfender_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#frontPassengerdoor_images_picker").spartanMultiImagePicker({
            fieldName: 'frontPassengerdoor_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#frontWindshield_images_picker").spartanMultiImagePicker({
            fieldName: 'frontWindshield_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#rearPassengerfender_images_picker").spartanMultiImagePicker({
            fieldName: 'frontWindshield_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#trunk_images_picker").spartanMultiImagePicker({
            fieldName: 'trunk_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#rearWinshield_images_picker").spartanMultiImagePicker({
            fieldName: 'rearWinshield_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#rearDriverfender_images_picker").spartanMultiImagePicker({
            fieldName: 'rearDriverfender_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#rearDriverdoor_images_picker").spartanMultiImagePicker({
            fieldName: 'rearDriverdoor_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#roof_images_picker").spartanMultiImagePicker({
            fieldName: 'roof_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#pabbels_images_picker").spartanMultiImagePicker({
            fieldName: 'pabbels_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#driverApillar_images_picker").spartanMultiImagePicker({
            fieldName: 'driverApillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#driverCpillar_images_picker").spartanMultiImagePicker({
            fieldName: 'driverCpillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#driverBpillar_images_picker").spartanMultiImagePicker({
            fieldName: 'driverBpillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#driverDpillar_images_picker").spartanMultiImagePicker({
            fieldName: 'driverDpillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#passengerApillar_images_picker").spartanMultiImagePicker({
            fieldName: 'passengerApillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#passengerCpillar_images_picker").spartanMultiImagePicker({
            fieldName: 'passengerCpillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#passengerBpillar_images_picker").spartanMultiImagePicker({
            fieldName: 'passengerBpillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#bonnet_images_picker").spartanMultiImagePicker({
            fieldName: 'bonnet_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#frontPassengerfender_images_picker").spartanMultiImagePicker({
            fieldName: 'frontPassengerfender_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#rearPassengerdoor_images_picker").spartanMultiImagePicker({
            fieldName: 'rearPassengerdoor_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#passengerDpillar_images_picker").spartanMultiImagePicker({
            fieldName: 'passengerDpillar_images[]',
            maxCount: 10, 
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#frontDriverdoor_images_picker").spartanMultiImagePicker({
            fieldName: 'frontDriverdoor_images[]',
            maxCount: 10, 
        });
    });
</script>
<!-- Exterior Body preview Images end-->

<!-- Tyres preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#tyre_images_picker").spartanMultiImagePicker({
            fieldName: 'tyre_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Tyres preview Images end-->

<!-- Accessories preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#accessories_images_picker").spartanMultiImagePicker({
            fieldName: 'accessories_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Accessories preview Images end-->


<!-- Car Pictures preview Images start-->
<script type="text/javascript">
    $(function() {
        $("#car_images_picker").spartanMultiImagePicker({
            fieldName: 'car_images[]', // this configuration will send your images named "multiple_images[]" to the server
            maxCount: 10, // set the maximum image count here
        });
    });
</script>
<!-- Car Pictures preview Images end-->



<?php include('footer.php'); ?>
<!-- Footer end -->