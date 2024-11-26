<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
    <head>
        <meta charset="utf-8" />
        <title>List Group | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
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

            <!-- ========== Left Sidebar ========== -->
            <?php include 'side_nav.php';?>
      
            <!-- Start Page Content here -->
            <div class="page-content">

                <!-- ========== Topbar Start ========== -->
                <?php include 'top_bar.php';?>
                <!-- ========== Topbar End ========== -->

                <div class="px-3">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="py-3 py-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="page-title mb-0">Claim Message Tab</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"> Message Update</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                            
                        
                        <div class="row">
                            <div class="col-xl-1">
                            </div> 

                            <div class="col-xl-10">
                                <div class="card">
                                    
                                    <div class="card-body" >
                                        <h4 class="header-title">Last Message Used</h4>
                                        <p class="sub-header">We can edit message used in Luckydraw.</p>
                                        <ul class="list-group">
                                            <li class="list-group-item"><i class="mdi mdi-message-outline me-1"></i> Claim page Messenger</li>
                                        </ul> 
                                        <br>
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light" onclick="myFunction()"><i class="mdi mdi-rotate-45 mdi-account" ></i>  Edit </button>
                                    </div> <!-- end card-body -->

                                    <div class="row" style="display: none;" Id="form" style="text-align:center;"> 
                                        
                                                <div class="col-lg-3">
                                                    <div class="grid-container">
                                                        
                                                    </div>
                                                </div>
                                                        <div class="col-lg-6" >
                                                            <div class="grid-container">
                                                            <h4 class="header-title">Add New Message</h4>
                                                            <br>
                                                        <form class="needs-validation" novalidate>
                                                                    
                                                                    <div class="form-floating mb-2">
                        
                                                                    <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea" style="height: 100px">123, Main st</textarea>
                                                                    <label for="floatingTextarea">New Message</label>
                                                                    </div>
                                                                        
                                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                        </form>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="grid-container">
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                    </div>  
                                </div>    

                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-xl-1"></div> 
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
        <script>


        function myFunction() {
            var x = document.getElementById("form");
            if (x.style.display === "none") {
                x.style.display = "block flex";
                
            } else {
                x.style.display = "none";
            }
            }
         </script>
        
    </body>
</html>