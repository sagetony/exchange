<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mannatthemes.com/Netfrox Investment Company/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 16:15:28 GMT -->
<head>
    

    <meta charset="utf-8" />
            <title> Login to your Account | Netfrox Investment Company</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Login to your account on Netfrox Investment Company" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">

       

     <!-- App css -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('assets/images/p-1.png'); background-size: cover; background-position: center center;">
   <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="{{ route('home') }}" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Netfrox Investment Company</h4>   
                                        <p class="text-muted  mb-0">Sign up to continue to Netfrox Investment Company.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" action="{{ route('login') }}" method="POST">            
										@csrf
										<div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
											<input type="text" class="form-control " required placeholder="Username" name="username" />
                                        </div><!--end form-group--> 

										
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="userpassword">Password</label>                                            
											<input type="password" class="form-control " required placeholder="Password" name="password" />                                        </div><!--end form-group--> 
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-muted" style="margin-left:70%;">
                                                        <p class="mb-0"><a href="{{ route('passwordrecovery') }}" class="text-primary ms-2">Forget Password?</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Login <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col--> 
                                            
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}" class="text-primary ms-2">Register</a></p>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    @include('sweetalert::alert')

</body>


<!-- Mirrored from mannatthemes.com/Netfrox Investment Company/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Sep 2022 16:15:28 GMT -->
</html>