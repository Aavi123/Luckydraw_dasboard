<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
    <head>
        <meta charset="utf-8" />
        <title>File Uploads | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Myra Studio" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="page-title mb-0">File Uploads</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">File Uploads</li>
                                    </ol>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Banner Image Upload</h4>
                                        <p class="sub-header">
                                           Banner Dropzone is an option that provides drag’n’drop file uploads with image previews.
                                        </p>
            
                                        <form action="/" method="post" class="dropzone" style ="text-align: center;" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-size-13">(This is a dropzone. Select files to uploaded.)</span>

                                                    
                                            </div>
                                            <button class="btn btn-primary"  type="submit">Submit form</button>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>  

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mt-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                            <p class="mb-0" data-dz-size></p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                <i class="fe-x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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

        <!-- Plugins js -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <!-- Demo js-->
        <script src="assets/js/pages/form-fileuploads.js"></script>
      
    </body>
</html>