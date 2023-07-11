<!-- header start -->
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
                                <li class="breadcrumb-item active">Inspections</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- Count Product start -->
                        <?php
                        $select_appoinments = "select * from preliminary_information";
                        $run_select_appoinments = mysqli_query($conn, $select_appoinments);
                        $check_appoinments_auth = mysqli_num_rows($run_select_appoinments);
                        if ($check_appoinments_auth > 0) {
                        ?>
                            <!-- Count Product end -->

                            <!-- NotificATION DIV start -->
                            <?php if (isset($_REQUEST['inspection_deleted'])) { ?>
                                <div class="row justify-center">
                                    <div class="col-lg-6">
                                        <div class="success-message mb-2 mt-4" id="hide_div">Inspection Deleted Successfully</div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- NotificATION DIV end -->
                            <div class="card-header border-0">
                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h4 class="card-title mb-0">Inspection List</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <a href="add_inspection.php" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add
                                                Inspection</a>
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="myInput" onkeyup="Search_Product()" placeholder="Search Inspection...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                                            $select_products = "select * from preliminary_information";
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
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="error-message">
                                        Inspection List is Empty
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="col-sm-auto mt-4">
                                        <a href="add_inspection.php" class="btn btn-success">
                                            <i class="ri-add-line align-bottom me-1"></i>
                                            Add Inspection
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Delete Product Start -->
            <?php
            if (isset($_REQUEST['delete_inspection_id'])) {
                $delete_inspection_id = $_REQUEST['delete_inspection_id'];
                $delete_inspection = "DELETE from preliminary_information WHERE id='" . $delete_inspection_id . "'";
                $run_delete_inspection = mysqli_query($conn, $delete_inspection);

                echo '<script>window.location.href="inspection.php?inspection_deleted";</script>';
            }
            ?>
            <!-- Delete Product End -->


        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


<!-- Footer Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

<!-- Serach category in table start  -->
<script>
    function Search_Product() {
        // Retrieve the search query
        var searchQuery = $('#myInput').val().toLowerCase();
        var foundResults = false; // Flag to track if any matching results are found

        // Filter the table rows
        $('#ProductTableBody tr').each(function() {
            var ProductName = $(this).find('td:nth-child(5)').text().toLowerCase();
            if (ProductName.includes(searchQuery)) {
                $(this).show();
                foundResults = true; // Set flag to true if a match is found
            } else {
                $(this).hide();
            }
        });

        // Show or hide the "no results found" message
        if (foundResults) {
            $('#noResults').hide();
        } else {
            $('#noResults').show();
        }
    }
</script>
<!-- Serach category in table end  -->

<?php include('footer.php'); ?>
<!-- Footer end -->