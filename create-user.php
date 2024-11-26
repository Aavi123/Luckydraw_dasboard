<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
    <head>
        <meta charset="utf-8" />
        <title>Form Validation | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                <div class="col-lg-12">
                                    <h4 class="page-title mb-0">Create User Page</h4>
                                </div>
                               
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add New User</h4>
                                        <p class="sub-header">"Create New User" form allows adding a new user with options to set view and update permissions.</p>

                                        <form class="needs-validation" novalidate>
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustomUsername" class="form-label">Username</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend"
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom03" class="form-label">Password</label>
                                                <input type="text" class="form-control" id="validationCustom03" value="Passwaord@1234" placeholder="Permission" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Password.
                                                </div>
                                            </div>
                                           
                                                <div class="mb-3">
                                                <div>
                                                    <label class="form-label" for="select-code-language">Permissions</label>
                                                    <select id="select-code-language" class="form-control" placeholder="Select a permissions...">
                                                        <option value="User">Editable User</option>
                                                        <option value="HO_Viewer">HO viewer</option>
                                                        <option value="Zone_Viewer">Zone viewer</option>
                                                    </select>
                                                </div>
                                                </div>

                                                <div class="mb-3">
                                                <div>
                                                    <label class="form-label" for="select-code-language">Zone</label>
                                                    <select id="select-code-language" class="form-control" placeholder="Select a Zone...">
                                                        <option value="HO">HO</option>
                                                        <option value="Zone1">Zone1</option>
                                                        <option value="Zone2">Zone2</option>
                                                        <option value="Zone3">Zone3</option>
                                                        <option value="Zone4">Zone4</option>
                                                        <option value="Zone5">Zone5</option>
                                                        <option value="Zone6">Zone6</option>
                                                        <option value="Zone7">Zone7</option>
                                                        <option value="Zone8">Zone8</option>
                                                        <option value="Zone9">Zone9</option>

                                                    </select>
                                                </div>
                                                </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Agree to terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
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

        <!-- Vendor js -->
        <!-- App js -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Validation Demo js-->
        <script src="assets/js/pages/form-validation.js"></script>
      
    </body>
</html>