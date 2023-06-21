<!-- header start -->
<style>
    .navbar-brand-box {
        padding: 2rem 1.3rem !important;
    }
</style>
<?php include('header.php'); ?>
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
                                <li class="breadcrumb-item active">Update Inspection</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row g-4 align-items-center">
                                <div class="col-sm">
                                    <div>
                                        <h4 class="card-title mb-0">Inspection List</h4>
                                        <?php if (isset($_REQUEST['inspection_updated'])) { ?>
                                            <div class="row justify-center">
                                                <div class="col-lg-6">
                                                    <div class="success-message" id="hide_div">Inspection Updtaed Successfully</div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                        <a href="inspection.php" class="btn btn-danger"><i class="fas fa-arrow-left me-1"></i>
                                            Back
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body mt-2 mb-2">

                            <?php
                            if (isset($_REQUEST['update_inspection_id'])) {
                                $update_inspection_id = $_REQUEST['update_inspection_id'];
                                $select_appoinment = "select * from appoinments where id='$update_inspection_id'";
                                $run_select_appoinment = mysqli_query($conn, $select_appoinment);
                                while ($get_inspection = mysqli_fetch_array($run_select_appoinment)) {
                                    $previous_username = $get_inspection['username'];
                                    $previous_vehicle_name = $get_inspection['vehicle_name'];
                                    $previous_email = $get_inspection['email'];
                                    $previous_phone = $get_inspection['phone'];
                                    $previous_city = $get_inspection['city'];
                                    $previous_date = $get_inspection['date'];
                                    $previous_message = $get_inspection['message'];
                                    $previous_vehicle_model = $get_inspection['vehicle_model'];
                                    $previous_vehicle_variant = $get_inspection['vehicle_variant'];
                                    $previous_model_year = $get_inspection['model_year'];
                                    $previous_transmission = $get_inspection['transmission'];
                                    $previous_engine_capacity = $get_inspection['engine_capacity'];
                                    $previous_fuel_type = $get_inspection['fuel_type'];
                                    $previous_body_color = $get_inspection['body_color'];
                                    $previous_mileage = $get_inspection['mileage'];
                                    $previous_registration_number = $get_inspection['registration_number'];
                                    $previous_registered_city = $get_inspection['registered_city'];
                                    $previous_chassis_number = $get_inspection['chassis_number'];
                                    $previous_engine_number = $get_inspection['engine_number'];

                                }
                            }
                            ?>
                            <form method="post" action="update_inspection.php">
                                <input type="hidden" name="get_inspection_id" value="<?php echo $update_inspection_id; ?>"/>
                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Client Name</label>
                                            <input type="text" id="" name="username" class="form-control" value="<?php echo $previous_username; ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Vehicle Make</label>
                                            <input type="text" id="" name="vehicle_name" value="<?php echo $previous_vehicle_name; ?>" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Email</label>
                                            <input type="text" id="" value="<?php echo $previous_email; ?>" name="email" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Phone</label>
                                            <input type="text" id="" value="<?php echo $previous_phone; ?>" name="phone" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Inspection Location</label>
                                            <input type="text" id="" value="<?php echo $previous_city; ?>" name="city" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Inspection Date</label>
                                            <input type="date" id="form3Example1q" value="<?php echo $previous_date; ?>" name="date" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Vehicle Model</label>
                                            <input type="text" id="" value="<?php echo $previous_vehicle_model; ?>" name="vehicle_model" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Vehicle Variant</label>
                                            <input type="text" id="" value="<?php echo $previous_vehicle_variant; ?>" name="vehicle_variant" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q"> Model Year</label>
                                            <input type="text" id="" value="<?php echo $previous_model_year; ?>" name="model_year" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Transmission</label>
                                            <input type="text" id="" value="<?php echo $previous_transmission; ?>" name="transmission" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q"> Engine Capacity</label>
                                            <input type="text" id="" value="<?php echo $previous_engine_capacity; ?>" name="engine_capacity" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Fuel Type</label>
                                            <input type="text" id="" value="<?php echo $previous_fuel_type; ?>" name="fuel_type" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q"> Body Color</label>
                                            <input type="text" id="" value="<?php echo $previous_body_color; ?>" name="body_color" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Mileage</label>
                                            <input type="text" id="" value="<?php echo $previous_mileage; ?>" name="mileage" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q"> Registration Number</label>
                                            <input type="text" id="" value="<?php echo $previous_registration_number; ?>" name="registration_number" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Registered City</label>
                                            <input type="text" id="" value="<?php echo $previous_registered_city; ?>" name="registered_city" class="form-control" required />
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q"> Chassis Number</label>
                                            <input type="text" id="" value="<?php echo $previous_chassis_number; ?>" name="chassis_number" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 md-6">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Engine Number</label>
                                            <input type="text" id="" value="<?php echo $previous_engine_number; ?>" name="engine_number" class="form-control" required />
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-4 row">
                                    <div class="col-lg-6 md-12">
                                        <div class="">
                                            <label class="form-label" for="form3Example1q">Additional Notes *</label>
                                            <textarea id="editor" placeholder="Enter description" name="message">
                                            <?php echo $previous_message; ?>
                                    </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <div class="col-lg-12 md-12">
                                        <div class="text-center">
                                            <input type="submit" name="update_inspection" value="Update" class="btn btn-primary" />
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
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- Update Inspection code start -->
<?php
if (isset($_REQUEST['update_inspection'])) {

    $username = $_REQUEST['username'];
    $vehicle_name = $_REQUEST['vehicle_name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $city = $_REQUEST['city'];
    $date = $_REQUEST['date'];
    $vehicle_model = $_REQUEST['vehicle_model'];
    $vehicle_variant = $_REQUEST['vehicle_variant'];
    $model_year = $_REQUEST['model_year'];
    $transmission = $_REQUEST['transmission'];
    $engine_capacity = $_REQUEST['engine_capacity'];
    $fuel_type = $_REQUEST['fuel_type'];
    $body_color = $_REQUEST['body_color'];
    $mileage = $_REQUEST['mileage'];
    $registration_number = $_REQUEST['registration_number'];
    $registered_city = $_REQUEST['registered_city'];
    $chassis_number = $_REQUEST['chassis_number'];
    $engine_number = $_REQUEST['engine_number'];
    $message = mysqli_real_escape_string($conn, $_REQUEST['message']);
    

    $get_inspection_id = $_REQUEST['get_inspection_id'];

    $update_inspection = "UPDATE `appoinments` SET `username` = '$username', `vehicle_name` = '$vehicle_name', `email` = '$email', `phone` = '$phone', `city` = '$city', `date` = '$date', `vehicle_model` = '$vehicle_model', `vehicle_variant` = '$vehicle_variant', `model_year` = '$model_year', `transmission` = '$transmission', `engine_capacity` = '$engine_capacity', `fuel_type` = '$fuel_type', `body_color` = '$body_color', `mileage` = '$mileage', `registration_number` = '$registration_number', `registered_city` = '$registered_city', `chassis_number` = '$chassis_number', `engine_number` = '$engine_number', `message` = '$message' WHERE `id` = '$get_inspection_id'";
    $run_update_inspection = mysqli_query($conn, $update_inspection);
    echo '<script>window.location.href="update_inspection.php?update_inspection_id=' . $get_inspection_id . '&inspection_updated";</script>';
}
?>
<!-- Update Inspection code end -->




<!-- Footer Start -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
<!-- ckeditor end -->

<!-- message hide and url clear code start-->
<script>
    setTimeout(function() {
        var hide_div = document.getElementById('hide_div');
        hide_div.style.display = 'none';
    }, 4000);
</script>
<!-- message hide and url clear code end-->

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

<?php include('footer.php'); ?>
<!-- Footer end -->