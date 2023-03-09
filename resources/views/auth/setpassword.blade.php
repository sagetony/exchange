<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/tivo/template/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 01:04:11 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expert financial advice and resources for managing your money. Trading tips, budgeting tools, and market analysis for achieving financial success">
    <meta name="keywords" content="crytocurrency, wallet, dashboard, Turmbo, web app">
    <meta name="author" content="Turmbo">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Password Recovery | Turmbo</title>
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
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">     
            <div class="login-card">
              <div>
                <div><a class="logo text-center" href="{{ route('home') }}"><img class="img-fluid for-light" src="" alt="Turmbo"></a></div>
                <div class="login-main"> 
                  <form class="theme-form"  action="{{ route('passwordrecovery') }}" method="POST">
                    @csrf
                    <h4>Reset Your Password</h4>
                    <div class="form-group">
                      <label class="col-form-label">Email Address</label>
                      <div class="form-input position-relative">
                            <input type="email" class="form-control " required value="{{ $data->email }}" name="email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <div class="form-input position-relative">
                            <input type="password" class="form-control " required placeholder="Password" name="password" />                                        </div><!--end form-group--> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Confirm Password</label>
                        <div class="form-input position-relative">
                            <input type="password" class="form-control "required placeholder="Retype Password" name="password_confirmation" />
                        </div>
                    </div>
                    <div class="form-group mb-0">
                     
                      <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Submit                          </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- page-wrapper Ends-->
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

  </body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 01:04:11 GMT -->
</html>