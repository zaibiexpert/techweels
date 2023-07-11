<!-- Header start  -->
<?php include('header.php'); ?>
<!-- Header End  -->

<!-- Left Sidebar Start -->
<?php include('sidebar.php'); ?>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>



<!-- Restriction for login start -->

<?php if (isset($_SESSION['active_user_id']) == '') {
    echo '<script>window.location.href="login.php";</script>';
}
?>

<!-- Restriction for login end -->

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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1 pt-2 pb-2">
                                        <h4 class="fs-16 mb-1">Good Morning, <?php echo $_SESSION['active_username']; ?>!</h4>
                                        <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                                    </div>
                                    <div class="mt-5 mt-lg-0">
                                        <form action="javascript:void(0);">

                                            <!--end row-->
                                        </form>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-4 col-md-4">
                                <!-- INSPECTIONS card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Recent Inspections</p>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <?php
                                                if (!empty($_SESSION['active_user_id'])) {
                                                    $select_appoinments = "select * from preliminary_information ORDER BY id DESC";
                                                    $run_select_appoinments = mysqli_query($conn, $select_appoinments);
                                                    $count_appoinments = mysqli_num_rows($run_select_appoinments);
                                                ?>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class=""><?php echo $count_appoinments; ?></span> </h4>
                                                <?php } ?>
                                                <a href="inspection.php" class="text-decoration-underline">View inspections</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-success rounded fs-3">
                                                    <i class="fas fa-search text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-4 col-md-4">
                                <!-- USERS card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Users</p>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <?php
                                                if (!empty($_SESSION['active_user_id'])) {
                                                    $select_appoinments = "select * from preliminary_information";
                                                    $run_select_appoinments = mysqli_query($conn, $select_appoinments);
                                                    $count_appoinments = mysqli_num_rows($run_select_appoinments);
                                                ?>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class=""><?php echo $count_appoinments; ?></span> </h4>
                                                <?php } ?> <a href="inspection.php" class="text-decoration-underline">View all Users</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-info rounded fs-3">
                                                    <i class="bx bx-user-circle text-warning"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- USERS end card -->
                            </div>
                            <!-- Add USERS card -->
                            <div class="col-xl-4 col-md-4">
                                <div class="card card-animate">
                                    <div class="card-body">

                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div class="text-center w-100">
                                                <div class="mb-4 mt-4 pt-1">
                                                    <a href="add_inspection.php" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add
                                                        New Inspection</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- Add USERS end card -->
                            </div>
                        </div><!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end .h-100-->

            </div> <!-- end col -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="p-3 pb-0">Recent Inspection Request</h3>

                        <div class="card-body">
                            <!--  Table Start -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col" class="text-center">Email</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ProductTableBody">
                                        <!-- Get All Inspection -->
                                        <?php
                                        $select_products = "select * from preliminary_information ORDER BY id ASC LIMIT 3";
                                        $run_select_products = mysqli_query($conn, $select_products);
                                        $i = 0;
                                        while ($get_product = mysqli_fetch_array($run_select_products)) {
                                            $inspection_id = $get_product['id'];
                                            $username = $get_product['username'];
                                            $vehicle_name = $get_product['vehicle_name'];
                                            $phone = $get_product['phone'];
                                            $email = $get_product['email'];
                                            $city = $get_product['city'];
                                            $date = $get_product['date'];
                                            $message = $get_product['message'];

                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $i++; ?></th>
                                                <td><?php echo $username; ?></td>
                                                <td><?php echo $vehicle_name; ?></td>
                                                <td class="text-center"><?php echo $phone; ?></td>
                                                <td class="text-center"><?php echo $email; ?></td>
                                                <td class="text-center"><?php echo $city; ?></td>
                                                <td class="text-center"><?php echo $date; ?></td>
                                                <td class="text-center"><?php echo $message; ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item" href="update_inspection.php?update_inspection_id=<?php echo $inspection_id; ?>">Continue</a></li>
                                                            <li><a class="dropdown-item" href="inspection.php?delete_inspection_id=<?php echo $inspection_id; ?>">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>


                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- "No results found" message with image start -->
                                <div id="noResults" style="display: none;" class="no-record-section mx-auto text-center">
                                    <img src="assets/images/flags/error.svg" alt="No results found" width="250" height="250">
                                    <p class="fw-bold fs-4 text-black-50">No Record Found..</p>
                                </div>
                                <!-- "No results found" message with image end -->
                            </div>
                            <!--  Table End -->
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
<?php include('footer.php'); ?>
<!-- Footer end -->