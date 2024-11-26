<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
    <head>
        <meta charset="utf-8" />
        <title>Form Elements | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Myra Studio" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- App css -->
		<link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
		<script src="assets/js/config.js"></script>

    </head>

    <body>

           <!-- Begin page -->
    <div class="layout-wrapper">
     
     <?php include 'side_nav.php';?>
         <!-- ========== Left Sidebar ========== -->
 
 <!-- ============================================================== -->
 <!-- Start Page Content here -->
 <!-- ============================================================== -->
 
         <div class="page-content">
 
             <!-- ========== Topbar Start ========== -->
             <?php include 'top_bar.php';?>

                <div class="px-3">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="py-3 py-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="page-title mb-0">Search Form</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Check IMEI form</h4>
                                        <p class="sub-header">
                                            User can check is IMEI available in Database.
                                        </p>
                                        <form class="row row-cols-lg-auto g-8 align-items-center">
                                            <div class="col-12">
                                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Enter Your IMEI">
                                            </div>
                                            <div class="col-12">
                                                <label for="IMEI" class="visually-hidden">Password</label>
                                                <input type="number" class="form-control" id="IMEI" placeholder="Please Enter IMEI">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Check IMEI</button>
                                        </form>
                                        <br>
                                        <br>
                                    <div id="dataview"><p> IMEI data will show here</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div><script>document.write(new Date().getFullYear())</script> © Dashtrap</div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                    <p class="mb-0">Design & Develop by <a href="#" target="_blank">BUBUGAO</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- End Page content -->


        </div>
        <!-- END wrapper -->

        <!-- App js -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.js"></script>
        
    </body>
</html>