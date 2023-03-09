<!--Start footer area -->
<footer class="footer-area footer-area--style3">

    <!--Start Footer Top-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 single-widget">
                    <div class="single-footer-widget single-footer-widget--link-box">
                        <div class="title">
                            <h3>Services</h3>
                        </div>
                        <div class="footer-widget-links">
                            <ul>
                                <li><a href="#">Savings Account</a></li>
                                <li><a href="#">Current Account</a></li>
                                <li><a href="#">Deposits</a></li>
                                <li><a href="#">Cards</a></li>
                                <li><a href="#">Trading & Demat a/c</a></li>
                                <li><a href="#">Insurance</a></li>
                                <li><a href="#">Locker Facility</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 single-widget">
                    <div class="single-footer-widget single-footer-widget--link-box">
                        <div class="our-company-info">
                            <div class="footer-logo-style1">
                                <a href="{{ route('home') }}">
                                    <img src="asset/images/footer/footer-logo-3.png" alt="Awesome Logo"
                                        title="">
                                </a>
                            </div>
                            <div class="bottom-text">
                                <p>We deliver world-class investment services, institutional asset management and financial advisory services under one distinguished banner. We operate thoughtful innovation across asset classes and global markets.
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->

                <!--Start single footer widget-->
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 single-widget">
                    <div class="single-footer-widget single-footer-widget--link-box">
                        <div class="title">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="footer-widget-links">
                            <ul>
                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="#plan">Plan</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->

                

                

            </div>
        </div>
    </div>
    <!--End Footer Top-->


    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-inner">
                <div class="footer-menu">
                    <p class="mb-0">Copyright © 2023 Stemvestfinance. All rights reserved.</p>
                </div>
                {{-- <div class="footer-social-link">
                    <ul class="clearfix">
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>

</footer>
<!--End footer area-->


</div>
<!-- /.page-wrapper -->



<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler">
        <i class="fas fa-plus"></i>
    </span>
    <div class="logo-box">
        <a href="{{ route('home') }}" aria-label="logo image">
            <img src="asset/images/resources/mobile-nav-logo.png" alt="" />
        </a>
    </div>
    <div class="mobile-nav__container"></div>
    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:support@example.com">support@stemvestfinance.com</a>
        </li>
      
    </ul>
  
</div>
</div>


<div class="search-popup">
<div class="search-popup__overlay search-toggler"></div>
<div class="search-popup__content">
    <form action="#">
        <label for="search" class="sr-only">search here</label>
        <input type="text" id="search" placeholder="Search Here..." />
        <button type="submit" aria-label="search submit" class="thm-btn">
            <i class="icon-search"></i>
        </button>
    </form>
</div>
</div>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
<i class="icon-chevron"></i>
</a>





<script src="asset/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="asset/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="asset/vendors/circleType/jquery.circleType.js"></script>
<script src="asset/vendors/circleType/jquery.lettering.min.js"></script>
<script src="asset/vendors/isotope/isotope.js"></script>
<script src="asset/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="asset/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="asset/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="asset/vendors/jquery-migrate/jquery-migrate.min.js"></script>
<script src="asset/vendors/jquery-ui/jquery-ui.js"></script>
<script src="asset/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="asset/vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="asset/vendors/odometer/odometer.min.js"></script>
<script src="asset/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="asset/vendors/swiper/swiper.min.js"></script>
<script src="asset/vendors/vegas/vegas.min.js"></script>
<script src="asset/vendors/wnumb/wNumb.min.js"></script>
<script src="asset/vendors/wow/wow.js"></script>
<script src="asset/vendors/extra-scripts/jquery.paroller.min.js"></script>
<script src="asset/vendors/language-switcher/jquery.polyglot.language.switcher.js"></script>
<script src="asset/vendors/aos/aos.js"></script>
<script src="assets/js/vendors/uikit.min.js"></script>
<script src="assets/js/vendors/indonez.min.js"></script>

<!-- Template js -->
<script src="asset/js/custom.js"></script>


</body>


<!-- Mirrored from st.ourhtmldemo.com/new/finbank-demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Jan 2023 14:24:41 GMT -->
</html>