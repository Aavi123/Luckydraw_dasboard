<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

    <head>
        <meta charset="utf-8" />
        <title>FAQs | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
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
            <div class="main-menu">
                <!-- Brand Logo -->
                <div class="logo-box">
                    <!-- Brand Logo Light -->
                    <a href="index.html" class="logo-light">
                        <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="28">
                        <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
                    </a>

                    <!-- Brand Logo Dark -->
                    <a href="index.html" class="logo-dark">
                        <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="28">
                        <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
                    </a>
                </div>

                <!--- Menu -->
                <div data-simplebar>
                    <ul class="app-menu">

                        <li class="menu-title">Menu</li>

                        <li class="menu-item">
                            <a href="index.html" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                                <span class="menu-text"> Dashboards </span>
                                <span class="badge bg-primary rounded ms-auto">01</span>
                            </a>
                        </li>

                        <li class="menu-title">Custom</li>

                        <li class="menu-item">
                            <a href="apps-calendar.html" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                                <span class="menu-text"> Calendar </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-file"></i></span>
                                <span class="menu-text"> Extra Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuExpages">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="pages-starter.html" class="menu-link">
                                            <span class="menu-text">Starter</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-invoice.html" class="menu-link">
                                            <span class="menu-text">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-login.html" class="menu-link">
                                            <span class="menu-text">Log In</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-register.html" class="menu-link">
                                            <span class="menu-text">Register</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-recoverpw.html" class="menu-link">
                                            <span class="menu-text">Recover Password</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-lock-screen.html" class="menu-link">
                                            <span class="menu-text">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-404.html" class="menu-link">
                                            <span class="menu-text">Error 404</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-500.html" class="menu-link">
                                            <span class="menu-text">Error 500</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-layout"></i></span>
                                <span class="menu-text"> Layouts </span>
                                <span class="badge bg-blue ms-auto">New</span>
                            </a>
                            <div class="collapse" id="menuLayouts">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="layout-horizontal.html" class="menu-link">
                                            <span class="menu-text">Horizontal</span>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="layout-sidenav-light.html" class="menu-link">
                                            <span class="menu-text">Sidenav Light</span>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="layout-sidenav-dark.html" class="menu-link">
                                            <span class="menu-text">Sidenav Dark</span>
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="layout-topbar-dark.html" class="menu-link">
                                            <span class="menu-text">Topbar Dark</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title">Components</li>

                        <li class="menu-item">
                            <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-cookie"></i></span>
                                <span class="menu-text"> UI Elements </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuComponentsui">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="ui-alerts.html" class="menu-link">
                                            <span class="menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-buttons.html" class="menu-link">
                                            <span class="menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-cards.html" class="menu-link">
                                            <span class="menu-text">Cards</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-carousel.html" class="menu-link">
                                            <span class="menu-text">Carousel</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-dropdowns.html" class="menu-link">
                                            <span class="menu-text">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-video.html" class="menu-link">
                                            <span class="menu-text">Embed Video</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-general.html" class="menu-link">
                                            <span class="menu-text">General UI</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-grid.html" class="menu-link">
                                            <span class="menu-text">Grid</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-images.html" class="menu-link">
                                            <span class="menu-text">Images</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-list-group.html" class="menu-link">
                                            <span class="menu-text">List Group</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-modals.html" class="menu-link">
                                            <span class="menu-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-offcanvas.html" class="menu-link">
                                            <span class="menu-text">Offcanvas</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-placeholders.html" class="menu-link">
                                            <span class="menu-text">Placeholders</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-progress.html" class="menu-link">
                                            <span class="menu-text">Progress</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-spinners.html" class="menu-link">
                                            <span class="menu-text">Spinners</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-tabs-accordions.html" class="menu-link">
                                            <span class="menu-text">Tabs & Accordions</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-tooltips-popovers.html" class="menu-link">
                                            <span class="menu-text">Tooltips & Popovers</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ui-typography.html" class="menu-link">
                                            <span class="menu-text">Typography</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-briefcase-alt-2"></i></span>
                                <span class="menu-text"> Components </span>
                                <span class="badge bg-info ms-auto">Hot</span>
                            </a>
                            <div class="collapse" id="menuExtendedui">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="components-range-slider.html" class="menu-link">
                                            <span class="menu-text">Range Slider</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="components-sweet-alert.html" class="menu-link">
                                            <span class="menu-text">Sweet Alert</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="components-loading-buttons.html" class="menu-link">
                                            <span class="menu-text">Loading Buttons</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-aperture"></i></span>
                                <span class="menu-text"> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuIcons">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="icons-feather.html" class="menu-link">
                                            <span class="menu-text">Feather Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-mdi.html" class="menu-link">
                                            <span class="menu-text">Material Design Icons</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="icons-dripicons.html" class="menu-link">
                                            <span class="menu-text">Dripicons</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuForms" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bxs-eraser"></i></span>
                                <span class="menu-text"> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuForms">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="forms-elements.html" class="menu-link">
                                            <span class="menu-text">General Elements</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-advanced.html" class="menu-link">
                                            <span class="menu-text">Advanced</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-validation.html" class="menu-link">
                                            <span class="menu-text">Validation</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-quilljs.html" class="menu-link">
                                            <span class="menu-text">Editor</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-file-uploads.html" class="menu-link">
                                            <span class="menu-text">File Uploads</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-table"></i></span>
                                <span class="menu-text"> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuTables">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="tables-basic.html" class="menu-link">
                                            <span class="menu-text">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="tables-datatables.html" class="menu-link">
                                            <span class="menu-text">Data Tables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-doughnut-chart"></i></span>
                                <span class="menu-text"> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuCharts">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="charts-apex.html" class="menu-link">
                                            <span class="menu-text">Apex Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-morris.html" class="menu-link">
                                            <span class="menu-text">Morris Charts</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charts-chartjs.html" class="menu-link">
                                            <span class="menu-text">Chartjs Charts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                                <span class="menu-text"> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMaps">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="maps-google.html" class="menu-link">
                                            <span class="menu-text">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="maps-vector.html" class="menu-link">
                                            <span class="menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                                <span class="menu-icon"><i class="bx bx-share-alt"></i></span>
                                <span class="menu-text"> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuMultilevel">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="#menuMultilevel2" data-bs-toggle="collapse"
                                            class="menu-link waves-effect waves-light">
                                            <span class="menu-text"> Second Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="menuMultilevel2">
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#menuMultilevel3" data-bs-toggle="collapse"
                                            class="menu-link waves-effect waves-light">
                                            <span class="menu-text">Third Level</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="menuMultilevel3">
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="javascript: void(0);" class="menu-link">
                                                        <span class="menu-text">Item 1</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#menuMultilevel4" data-bs-toggle="collapse"
                                                        class="menu-link waves-effect waves-light">
                                                        <span class="menu-text">Item 2</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="menuMultilevel4">
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="javascript: void(0);" class="menu-link">
                                                                    <span class="menu-text">Item 1</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="javascript: void(0);" class="menu-link">
                                                                    <span class="menu-text">Item 2</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            

            <!-- Start Page Content here -->
            <div class="page-content">

                <!-- ========== Topbar Start ========== -->
                <div class="navbar-custom">
                    <div class="topbar">
                        <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                            <!-- Brand Logo -->
                            <div class="logo-box">
                                <!-- Brand Logo Light -->
                                <a href="index.html" class="logo-light">
                                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="22">
                                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                                </a>

                                <!-- Brand Logo Dark -->
                                <a href="index.html" class="logo-dark">
                                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="22">
                                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                                </a>
                            </div>

                            <!-- Sidebar Menu Toggle Button -->
                            <button class="button-toggle-menu">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </div>

                        <ul class="topbar-menu d-flex align-items-center gap-4">

                            <li class="d-none d-md-inline-block">
                                <a class="nav-link" href="" data-bs-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen font-size-24"></i>
                                </a>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-magnify font-size-24"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>


                            <li class="dropdown d-none d-md-inline-block">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell font-size-24"></i>
                                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                    <small>Clear All</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-1" style="max-height: 300px;" data-simplebar>

                                        <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                                        <!-- item-->

                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-size-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-info">
                                                            <i class="mdi mdi-account-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-size-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-size-13 fw-normal mt-0">Yesterday</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-size-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-size-13 fw-normal mt-0">30 Dec 2021</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-size-14">Datacorp</h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-size-14">Karen Robinson</h5>
                                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="text-center">
                                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="nav-link" id="theme-mode">
                                <i class="bx bx-moon font-size-24"></i>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                                    <span class="ms-1 d-none d-md-inline-block">
                                        Jamie D. <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="pages-login.html" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>
          
                        </ul>
                    </div>
                </div>
                <!-- ========== Topbar End ========== -->

                <div class="px-3">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="py-3 py-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="page-title mb-0">FAQs</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a></li>
                                        <li class="breadcrumb-item active">FAQs</li>
                                    </ol>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- end page title -->
                        
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <i class="h1 mdi mdi-comment-multiple-outline text-muted"></i>
                                    <h3 class="mb-3">Frequently Asked Questions</h3>
                                    <p class="text-muted"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                                        dignissimos rem temporibus ea inventore alias!<br/> Beatae animi nemo ea
                                        tempora, temporibus laborum facilis ut!</p>

                                    <button type="button" class="btn btn-success waves-effect waves-light mt-2 me-1"><i class="mdi mdi-email-outline me-1"></i> Email us your question</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-twitter me-1"></i> Send us a tweet</button>

                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->


                        <div class="row pt-5">
                            <div class="col-lg-5 offset-lg-1">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Why use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">How many variations exist?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                            </div>
                            <!--/col-md-5 -->
        
                            <div class="col-lg-5">
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">When can be used?</h4>
                                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">License &amp; Copyright</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                                <!-- Question/Answer -->
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
        
                            </div>
                            <!--/col-md-5-->
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
                                    <p class="mb-0">Design & Develop by <a href="https://myrathemes.com/" target="_blank">MyraStudio</a> </p>
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