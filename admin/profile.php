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
                                 <li class="breadcrumb-item active">Profile</li>
                             </ol>
                         </div>

                     </div>
                 </div>
             </div>
             <!-- end page title -->

             <div class="position-relative mx-n4 mt-n4">
                 <div class="profile-wid-bg profile-setting-img">
                     <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                 </div>
             </div>

             <div class="row">
                 <div class="col-xxl-3">
                     <div class="card mt-n5">
                         <div class="card-body p-4">
                             <div class="text-center">

                                 <!-- Notifications start -->
                                 <?php
                                    if (isset($_REQUEST['profile-updated'])) { ?>
                                     <div class="row justify-center">
                                         <div class="col-lg-6">
                                             <div class="success-message" id="hide_div"> Profile has been updated </div>
                                         </div>
                                     </div>
                                 <?php } ?>
                                 <?php
                                    if (isset($_REQUEST['password-updated'])) { ?>
                                     <div class="row justify-center">
                                         <div class="col-lg-6">
                                             <div class="success-message" id="hide_div"> Password has been changed </div>
                                         </div>
                                     </div>
                                 <?php } ?>
                                 <?php
                                    if (isset($_REQUEST['new-confirm-incorrect'])) { ?>
                                     <div class="row justify-center">
                                         <div class="col-lg-6">
                                             <div class="error-message" id="hide_div"> New and Confirm Password not matched </div>
                                         </div>
                                     </div>
                                 <?php } ?>
                                 <?php
                                    if (isset($_REQUEST['old-password-incorrect'])) { ?>
                                     <div class="row justify-center">
                                         <div class="col-lg-6">
                                             <div class="error-message" id="hide_div"> Your Old Password is not matched </div>
                                         </div>
                                     </div>
                                 <?php } ?>

                                 <!-- Notifications start -->

                                 <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                     <!-- Get user profile start-->
                                     <?php
                                        $select_active_user = "select * from users where user_id='" . $_SESSION['active_user_id'] . "'";
                                        $run_select_active_user = mysqli_query($conn, $select_active_user);
                                        while ($get_active_user_data = mysqli_fetch_array($run_select_active_user)) {
                                            $profile = $get_active_user_data['image'];

                                        ?>
                                         <!-- Get user profile end-->

                                         <?php if (!empty($profile)) { ?>
                                             <img src="assets/images/profile-images/<?php echo $profile; ?>" class="rounded-circle avatar-sl img-thumbnail user-profile-image" id="img_preview" alt="user-profile-image">
                                         <?php } else { ?>
                                             <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-sl img-thumbnail user-profile-image" alt="user-profile-image">
                                     <?php }  } ?>
                                       
                                     <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                         <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                         <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                         </label>
                                     </div>
                                 </div>
                                 <h5 class="fs-16 mb-1"><?php echo $_SESSION['active_username']; ?></h5>
                                 <p class="text-muted mb-0">Lead Designer / Developer</p>
                             </div>
                         </div>
                     </div>
                     <!--end card-->
                 </div>
                 <!--end col-->
                 <div class="col-xxl-9">
                     <div class="card mt-xxl-n5">
                         <div class="card-header">
                             <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                 <li class="nav-item">
                                     <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                         <i class="fas fa-home"></i> Personal Details
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                         <i class="far fa-user"></i> Change Password
                                     </a>
                                 </li>

                             </ul>
                         </div>
                         <div class="card-body p-4">
                             <div class="tab-content">
                                 <!--Change data tab start-->
                                 <div class="tab-pane active" id="personalDetails" role="tabpanel">

                                     <!-- Get active user data start-->
                                     <?php
                                        $select_active_user = "select * from users where user_id='" . $_SESSION['active_user_id'] . "'";
                                        $run_select_active_user = mysqli_query($conn, $select_active_user);
                                        while ($get_active_user_data = mysqli_fetch_array($run_select_active_user)) {
                                            $username = $get_active_user_data['username'];
                                            $email = $get_active_user_data['email'];
                                        }
                                        ?>
                                     <!-- Get active user data end-->


                                     <!-- Update active user data start-->
                                     <?php
                                        if (isset($_REQUEST['update_profile'])) {
                                            $username = $_REQUEST['username'];
                                            $user_email = $_REQUEST['user_email'];
                                            $user_profile = $_FILES['user_profile']['name'];
                                            $target_image = 'assets/images/profile-images/' . basename($_FILES['user_profile']['name']);

                                            // Move the uploaded file to the target directory
                                            if (move_uploaded_file($_FILES['user_profile']['tmp_name'], $target_image)) {
                                                // Update the image, username, and email fields in the database
                                                $update = "UPDATE `users` SET `username` = '" . $username . "', `email` = '" . $user_email . "', `image` = '" . $user_profile . "' WHERE `user_id` = '" . $_SESSION['active_user_id'] . "'";
                                                mysqli_query($conn, $update);

                                                echo '<script>window.location.href="profile.php?profile-updated";</script>';
                                            }
                                        }
                                        ?>

                                     <!-- Update active user data end-->

                                     <form action="profile.php" method="post" enctype="multipart/form-data">
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="firstnameInput" class="form-label">User Name</label>
                                                     <input type="text" class="form-control" id="firstnameInput" name="username" placeholder="Enter your UserName" value="<?php echo $username; ?>">
                                                 </div>
                                             </div>
                                             <!--end col-->
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="emailInput" class="form-label">Email Address</label>
                                                     <input type="email" class="form-control" id="emailInput" name="user_email" placeholder="Enter your email" value="<?php echo $email; ?>">
                                                 </div>
                                             </div>
                                             <!--end col-->
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label for="profileinput" class="form-label">Profile Image </label>
                                                     <input type="file" class="form-control" id="user_image" name="user_profile" value="<?php echo $image; ?>">
                                                 </div>
                                             </div>
                                             <!--end col-->

                                             <div class="col-lg-12 pt-4">
                                                 <div class="hstack gap-2 justify-content-center">
                                                     <button type="submit" name="update_profile" class="btn btn-primary p-2">Update</button>
                                                 </div>
                                             </div>
                                             <!--end col-->
                                         </div>
                                         <!--end row-->
                                     </form>
                                 </div>
                                 <!--Change data tab end-->


                                 <!-- Change Password tab -->
                                 <div class="tab-pane" id="changePassword" role="tabpanel">
                                     <!-- Get active user Password start-->
                                     <?php
                                        $select_active_user_paswrd = "select * from users where user_id='" . $_SESSION['active_user_id'] . "'";
                                        $run_select_active_user_paswrd = mysqli_query($conn, $select_active_user_paswrd);
                                        while ($get_active_user_paswrd = mysqli_fetch_array($run_select_active_user_paswrd)) {
                                            $user_password = $get_active_user_paswrd['password'];
                                        }
                                        ?>
                                     <!-- Get active user Password end-->


                                     <!-- Update active user Password start-->
                                     <?php if (isset($_REQUEST['change_password'])) {

                                            $old_passsword = $_REQUEST['old_passsword'];
                                            $new_password = $_REQUEST['new_password'];
                                            $confirm_password = $_REQUEST['confirm_password'];
                                            if ($old_passsword == $user_password) {
                                                if ($new_password == $confirm_password) {
                                                    $update_password = "UPDATE `users` SET `password` = '" . $new_password . "' WHERE `user_id` = '" . $_SESSION['active_user_id'] . "' ";
                                                    mysqli_query($conn, $update_password);
                                                    echo '<script>window.location.href="profile.php?password-updated";</script>';
                                                } else {
                                                    echo '<script>window.location.href="profile.php?new-confirm-incorrect";</script>';
                                                }
                                            } else {
                                                echo '<script>window.location.href="profile.php?old-password-incorrect";</script>';
                                            }
                                        }
                                        ?>
                                     <!-- Update active user Password end-->

                                     <form action="profile.php" method="post">
                                         <div class="row g-2">
                                             <div class="col-lg-4">
                                                 <div>
                                                     <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                     <input type="password" class="form-control" name="old_passsword" id="oldpasswordInput" placeholder="Enter current password">
                                                 </div>
                                             </div>
                                             <!--end col-->
                                             <div class="col-lg-4">
                                                 <div>
                                                     <label for="newpasswordInput" class="form-label">New Password*</label>
                                                     <input type="password" class="form-control" name="new_password" id="newpasswordInput" placeholder="Enter new password">
                                                 </div>
                                             </div>
                                             <!--end col-->
                                             <div class="col-lg-4">
                                                 <div>
                                                     <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                     <input type="password" class="form-control" name="confirm_password" id="confirmpasswordInput" placeholder="Confirm password">
                                                 </div>
                                             </div>
                                             <!--end col-->
                                             <div class="col-lg-12">
                                                 <div class="text-center pt-4">
                                                     <button type="submit" name="change_password" class="btn btn-success">Change Password</button>
                                                 </div>
                                             </div>
                                             <!--end col-->
                                         </div>
                                         <!--end row-->
                                     </form>

                                 </div>
                                 <!--Change Password tab end-->

                             </div>
                         </div>
                     </div>
                 </div>
                 <!--end col-->
             </div>
             <!--end row-->

         </div>
         <!-- container-fluid -->
     </div>
     <!-- End Page-content -->


     <!-- Footer Start -->

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

     <!-- Image Preview code start -->
     <script>
         $("#user_image").on("change", function(e) {

             f = Array.prototype.slice.call(e.target.files)[0]
             let reader = new FileReader();
             reader.onload = function(e) {

                 $("#img_preview").html(`<img style="height: 100%; object-fit: contain;" src="${e.target.result}" class="rounded-circle avatar-xl img-thumbnail user-profile-image">`);
             }
             reader.readAsDataURL(f);
         })
     </script>
     <!-- Image Preview code end -->

     <?php include('footer.php'); ?>
     <!-- Footer end -->