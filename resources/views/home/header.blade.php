<body>

    <!-- Start preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="s" class="letters-loading">
                            s
                        </span>
                        <span data-text-preloader="t" class="letters-loading">
                            t
                        </span>
                        <span data-text-preloader="e" class="letters-loading">
                            e
                        </span>
                        <span data-text-preloader="m" class="letters-loading">
                            m
                        </span>
                        <span data-text-preloader="v" class="letters-loading">
                            v
                        </span>
                        <span data-text-preloader="e" class="letters-loading">
                            e
                        </span>
                        <span data-text-preloader="s" class="letters-loading">
                            s
                        </span>
                        <span data-text-preloader="e" class="letters-loading">
                            e
                        </span>
                        <span data-text-preloader="t" class="letters-loading">
                            t
                        </span>
                        <span data-text-preloader="f" class="letters-loading">
                            f
                        </span>
                        <span data-text-preloader="i" class="letters-loading">
                            i
                        </span>
                        <span data-text-preloader="n" class="letters-loading">
                            n
                        </span>
                        <span data-text-preloader="a" class="letters-loading">
                            a
                        </span>
                        <span data-text-preloader="n" class="letters-loading">
                            n
                        </span>
                        <span data-text-preloader="c" class="letters-loading">
                            c
                        </span>
                        <span data-text-preloader="e" class="letters-loading">
                            e
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End preloader -->
    <div id="google_translate_element"></div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div class="page-wrapper">
        <header class="main-header main-header-style3">

            <!--Start Main Header Style3 Top-->
            <div class="main-header-style3__top">
                <div class="auto-container">
                    <div class="outer-box">

                        <!--Start Main Header Style3 Top Left-->
                        <div class="main-header-style3__top-left">
                            <div class="header-btn-one">
                                <a href="{{ route('register') }}">Pay Online</a>
                            </div>
                            
                        </div>
                        <!--End Main Header Style3 Top Left-->

                        <!--Start Main Header Style3 Top Right-->
                        {{-- <div class="main-header-style3__top-right">
                            <div class="header-contact-info-style1">
                                <ul>
                                    <li><span class="icon-map"></span> 12 Red Rose, LA 90010 </li>
                                </ul>
                            </div>
                           
                        </div> --}}
                        <!--End Main Header Style3 Top Right-->

                    </div>
                </div>
            </div>
            <!--End Main Header Style3 Top-->

            <nav class="main-menu main-menu-style3">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">

                            <div class="main-menu-style3-left">
                                <div class="header-logon-box">
                                    <div class="icon">
                                        <span class="icon-home-button"></span>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Login">
                                                Login
                                            </option>
                                            <option value="1">Login</option>
                                            <option value="2">Register</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="logo-box-style3" >
                                    <a href="{{route('home')}}">
                                        <img src="asset/images/resources/logo-3.png" alt="Awesome Logo" title="">
                                    </a>
                                </div>
                            </div>

                            <div class="main-menu-style3-middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="icon-menu"></i>
                                    </a>

                                    <ul class="main-menu__list">
                                        <li class="">
                                            <a href="{{route('home')}}">Home</a>
                                           
                                        </li>

                                        <li >
                                            <a href="{{ route('aboutus') }}">About Us</a>
                                           
                                        </li>
                                        <li >
                                            <a href="#plan">Plans</a>
                                           
                                            
                                        </li>
                                       
                                        <li >
                                            <a href="{{ route('register') }}">Register</a>
                                           
                                        </li>
                                        <li >
                                            <a href="{{ route('login') }}">Login</a>
                                           
                                        </li>

                                       
                                        <li>
                                            <a href="{{ route('contact') }}">Get In Touch</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- <div class="main-menu-style3-right">
                                <div class="phone-number-box-style1">
                                    <div class="icon">
                                        <span class="icon-headphones"></span>
                                    </div>
                                    <h5>Toll Free</h5>
                                    <h3><a href="tel:123456789">+800 123 456 78</a></h3>
                                </div>

                            </div> --}}

                        </div>
                    </div>
                </div>
            </nav>

        </header>


        <div class="stricky-header stricky-header--style3 stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
