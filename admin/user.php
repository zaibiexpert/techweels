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
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row justify-center">
                <div class="col-lg-10">
                    <div class="card">
                        <!-- check auth start -->
                        <?php
                        $select_customer = "select * from users where user_role='customer'";
                        $run_select_customer = mysqli_query($conn, $select_customer);
                        $check_customer_auth = mysqli_num_rows($run_select_customer);
                        if ($check_customer_auth > 0) {
                        ?>
                            <!-- check auth end -->

                            <!-- Notification div start -->
                            <?php if (isset($_REQUEST['user_deleted'])) { ?>
                                <div class="row justify-center">
                                    <div class="col-lg-6">
                                        <div class="success-message mb-2" id="hide_div">User deleted Successfully</div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if (isset($_REQUEST['status_updated'])) { ?>
                                <div class="row justify-center">
                                    <div class="col-lg-6">
                                        <div class="success-message mb-2" id="hide_div">Status Updated Successfully</div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- Notification div end -->

                            <div class="card-header">
                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h4 class="card-title mb-0">Users List</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="myInput" onkeyup="Search_user()" placeholder="Search User...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <!-- Bordered Tables -->
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">User Role</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Update Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody id="userTableBody">
                                        <!-- Get Colors from database start -->
                                        <?php
                                        $select_Users = "select * from users where user_role='customer'";
                                        $run_select_Users = mysqli_query($conn, $select_Users);
                                        $check_auth = mysqli_num_rows($run_select_Users);
                                        $i = 0;
                                        while ($get_user = mysqli_fetch_array($run_select_Users)) {
                                            $user_id = $get_user['user_id'];
                                            $username = $get_user['username'];
                                            $email = $get_user['email'];
                                            $image = $get_user['image'];
                                            $user_role = $get_user['user_role'];
                                            $status = $get_user['status'];


                                        ?>
                                            <!-- Get Colors from database end-->


                                            <tr>
                                                <th scope="row"><?php echo $i++; ?></th>
                                                <td><?php echo $username; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td><img src="assets/images/profile-images/<?php echo $image; ?>" class="product_img" /></td>
                                                <td><?php echo $user_role; ?></td>
                                                <td> <?php if ($status == 'active') { ?>
                                                        <span class="badge badge-soft-success"><?php echo $status; ?></span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-soft-primary"><?php echo $status; ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <form method="post" action="user.php" id="myForm">
                                                        <input type="hidden" value="<?php echo $user_id; ?>" name="user_status_id" />
                                                        <select class="form-select" name="status" onchange="submitForm()">
                                                            <option>Select Status </option>
                                                            <option value="active">Active</option>
                                                            <option value="block">Block</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item" href="user.php?delete_user=<?php echo $user_id; ?>">Delete</a></li>
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
                        <?php } else { ?>
                            <div class="error-message">
                                Users List is Empty
                            </div>
                        <?php } ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- Delete User Start -->
<?php
if (isset($_REQUEST['delete_user'])) {

    $delete_user = $_REQUEST['delete_user'];
    $derun_delete_user = "DELETE from Users WHERE user_id ='" . $delete_user . "'";
    mysqli_query($conn, $derun_delete_user);
    echo '<script>window.location.href="user.php?user_deleted";</script>';
}
?>
<!-- Delete User End -->

<!-- Update User Status Start -->
<?php
if (isset($_REQUEST['status'])) {
    $status = $_REQUEST['status'];
    $user_status_id = $_REQUEST['user_status_id'];
    $update_status = "UPDATE `users` SET `status` = '" . $status . "' WHERE `user_id` = '" . $user_status_id . "'";
    $run_update_status = mysqli_query($conn, $update_status);

    echo '<script>window.location.href="user.php?status_updated";</script>';
}
?>
<!-- Update User Status End -->

<!-- Footer Start -->

<!-- onchange form submit start -->
<script>
    function submitForm() {
        document.getElementById("myForm").submit();
    }
</script>
<!-- onchange form submit end -->

<!-- Serach User in table start  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function Search_user() {
        // Retrieve the search query
        var searchQuery = $('#myInput').val().toLowerCase();

        var foundResults = false; // Flag to track if any matching results are found

        // Filter the table rows
        $('#userTableBody tr').each(function() {
            var userrName = $(this).find('td:nth-child(2)').text().toLowerCase();
            if (userrName.includes(searchQuery)) {
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
<!-- Serach User in table end  -->

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
        var hide_div = document.getElementById('hide_div');
        hide_div.style.display = 'none';
    }, 4000);
</script>
<!-- message hide and url clear code end-->

<?php include('footer.php'); ?>
<!-- Footer end -->