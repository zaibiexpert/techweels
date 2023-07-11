<?php include('header.php') ?>
<style>
    .spartan_item_wrapper {
        width: 100%;
        padding: 0px;
    }
</style>
<div class="container-fluid ">
    <div class="row ">
        <div class="col-lg-12">
            <section class="about-hero-section " style="background-image: url(images/appointment-banner.jpg);">
                <div class="heading align-items-center d-flex justify-content-center">
                    <h1 class="text-white text-center fw-bolder hero-heading">Appointment</h1>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- end -->
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3 shadow">

                    <div class="card-body p-4 p-md-5">
                        <div class="row justify-center">
                            <div class="col-lg-12">
                                <div id="hide_div" class="mt-0 success-message"> </div>
                            </div>
                        </div>
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-4 px-md-2">Schelude Inspection</h3>
                        <form id="inspection_form" class="px-md-2">
                            <input type="hidden" name="create_pdf" value="0" id="create_pdf">
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1q" name="username" class="form-control" required />
                                <label class="form-label" for="form3Example1q">User Name</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1q" name="vehicle_name" class="form-control" required />
                                <label class="form-label" for="form3Example1q">Vehicle Name</label>
                            </div>


                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example1q" name="email" class="form-control" required />
                                <label class="form-label" for="form3Example1q">Email *</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1q" name="phone" class="form-control" required />
                                <label class="form-label" for="form3Example1q">Phone Number *</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1q" name="city" class="form-control" required />
                                <label class="form-label" for="form3Example1q">City *</label>
                            </div>


                            <div class="form-outline mb-4">
                                <input type="date" id="form3Example1q" name="date" class="form-control" required />
                                <label class="form-label" for="form3Example1q">Date *</label>
                            </div>
                           
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1q" name="message" class="form-control" required />
                                <label class="form-label" for="form3Example1q">Additional Notes *</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer start-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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



<!-- message hide code start-->
<script>
    setTimeout(function() {
        var hideDiv = document.getElementById('hide_div');
        hideDiv.style.display = 'none';
    }, 4000);
</script>
<!-- message hide code end-->

<?php include('footer.php') ?>
<!-- Footer end-->