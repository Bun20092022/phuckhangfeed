
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Chương trình quản trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.ico">
    <base href="<?= base_url(); ?>"></base>
    <!-- jvectormap -->
    <link href="public/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- DataTables -->
    <link href="public/plugins/datatables/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="public/plugins/datatables/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="public/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="public/plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
    <link href="public/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="public/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <!-- App css -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="public/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <script src="public/backend/ckeditor/ckeditor.js"></script>
    <script src="public/backend/ckfinder/ckfinder.js"></script>
    <?php $this->load->view('backend/layout/v_loadimg');?>
</head>

<body class="dark-sidenav">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="public/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="public/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="public/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <?php $this->load->view('backend/layout/v_menu'); ?>
        </div>
    </div>
    <!-- end left-sidenav-->
    

    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">            
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-end mb-0">     
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="public/assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="backend/user/login/logout"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Đăng xuất</a>
                    </div>
                </li>
            </ul><!--end topbar-nav-->
            
            <ul class="list-unstyled topbar-nav mb-0">                        
                <li>
                    <button class="nav-link button-menu-mobile">
                        <i data-feather="menu" class="align-self-center topbar-icon"></i>
                    </button>
                </li> 
                <?php if(isset($link_add) && isset($title_add)){ ?>
                    <li class="creat-btn">
                        <div class="nav-link">
                            <a class=" btn btn-sm btn-soft-primary" href="<?= $link_add; ?>" role="button"><i class="fas fa-plus me-2"></i><?= $title_add; ?></a>
                        </div>                                
                    </li>
                <?php } ?>                           
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title"><?= $title; ?></h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Trang chủ</a></li>
                                    <li class="breadcrumb-item active"><?= $title; ?></li>
                                </ol>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Ngôn ngữ: <?= $this->view_language['name']; ?> <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <?php foreach ($this->language as $value): ?>
                                        <a class="dropdown-item" href="backend/home/change_language/<?= $value['name_des']; ?>"><?= $value['name']; ?></a>
                                    <?php endforeach ?>
                                    
                                </div>
                            </div>
                            
                        </div><!--end row-->                                                              
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->
            <?php $this->load->view('backend/layout/v_noti');?>
            <?php $this->load->view($template); ?>

        </div><!-- container -->

    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->




<!-- jQuery  -->
<script src="public/assets/js/jquery.min.js"></script>
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="public/assets/js/metismenu.min.js"></script>
<script src="public/assets/js/waves.js"></script>
<script src="public/assets/js/feather.min.js"></script>
<script src="public/assets/js/simplebar.min.js"></script>
<script src="public/assets/js/moment.js"></script>
<script src="public/plugins/daterangepicker/daterangepicker.js"></script>

<script src="public/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="public/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="public/assets/pages/jquery.analytics_dashboard.init.js"></script>

<!-- Required datatable js -->
<script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/plugins/datatables/dataTables.bootstrap5.min.js"></script>
<!-- Buttons examples -->
<script src="public/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="public/plugins/datatables/buttons.bootstrap5.min.js"></script>
<script src="public/plugins/datatables/jszip.min.js"></script>
<script src="public/plugins/datatables/pdfmake.min.js"></script>
<script src="public/plugins/datatables/vfs_fonts.js"></script>
<script src="public/plugins/datatables/buttons.html5.min.js"></script>
<script src="public/plugins/datatables/buttons.print.min.js"></script>
<script src="public/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="public/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="public/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="public/assets/pages/jquery.datatable.init.js"></script>
<!-- Plugins js -->

<script src="public/plugins/select2/select2.min.js"></script>
<script src="public/plugins/huebee/huebee.pkgd.min.js"></script>
<script src="public/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
<script src="public/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="public/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

<script src="public/assets/pages/jquery.forms-advanced.js"></script>

<!-- App js -->
<script src="public/assets/js/app.js"></script>

</body>

</html>