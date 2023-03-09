<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/tivo/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 01:00:52 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title> Login to your Account | Admin Stemvestfinance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card">
            <div>
              <div><a class="logo" href="{{ route('home') }}"><img class="img-fluid for-light" src="../assets/images/logo/logo2.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" action="{{ route('adminregister') }}" method="POST">
                    @csrf
                  <h4 class="text-center">Sign in to account</h4>
                  <p class="text-center">Stemvestfinance Admin Panel</p>
                  <div class="form-group mb-2">
                    <label class="form-label" for="username">Email Address</label>
                    <input type="email" class="form-control " required placeholder="Enter Address" name="email" />
                </div><!--end form-group--> 

                <div class="form-group mb-2">
                    <label class="form-label" for="userpassword">Password</label>                                            
                    <input type="password" class="form-control " required placeholder="Password" name="password" />                                        </div><!--end form-group--> 
                
                <div class="form-group mb-2">
                    <label class="form-label" for="Confirmpassword">Confirm Password</label>                                            
                    <input type="password" class="form-control "required placeholder="Retype Password" name="password_confirmation" />
                </div><!--end form-group--> 
                  <div class="form-group mb-0">
                    
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign up </button>
                    </div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ route('adminregister') }}">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/js/jquery-3.6.0.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Template js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
      @include('sweetalert::alert')

    </div>
  </body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 01:00:52 GMT -->
</html>