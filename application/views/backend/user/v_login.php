
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin - PhucKhangFeed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="<?= base_url(); ?>">
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.ico">

    <!-- App css -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="public/assets/images/logo-sm-dark.png" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Chương Trình Quản Trị</h4>   
                                    <p class="text-muted  mb-0">Đăng nhập để quản trị hệ thống của bạn.</p>  
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav-border nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#LogIn_Tab" role="tab">Đăng nhập</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                                        <form class="form-horizontal auth-form" action="" method="post">
                                            <?php $this->load->view('backend/layout/v_noti'); ?>
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="username">Username</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="email" id="username" placeholder="Enter username">
                                                </div>                                    
                                            </div><!--end form-group--> 

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="userpassword">Password</label>                                            
                                                <div class="input-group">                                  
                                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                </div>                               
                                            </div><!--end form-group--> 

                                            <div class="form-group row my-3">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                        <label class="form-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                    </div>
                                                </div><!--end col--> 
                                            </div><!--end form-group--> 

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" name="login">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div><!--end col--> 
                                            </div> <!--end form-group-->                           
                                        </form><!--end form-->
                                        <div class="m-3 text-center text-muted">
                                            <p class="mb-0">Bạn chưa có tài khoản ?  Hãy liên hệ quản trị viên.</p>
                                        </div>
                                        <div class="account-social">
                                            <h6 class="mb-3">Or Login With</h6>
                                        </div>
                                        <div class="btn-group w-100">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Facebook</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Twitter</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Google</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">Admin © <script>
                                    document.write(new Date().getFullYear())
                                </script></span>                                            
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->




    <!-- jQuery  -->
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/waves.js"></script>
    <script src="public/assets/js/feather.min.js"></script>
    <script src="public/assets/js/simplebar.min.js"></script>


</body>

</html>