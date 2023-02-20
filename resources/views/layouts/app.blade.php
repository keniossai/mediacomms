<!DOCTYPE html>
<html>

<!-- sawmall/index-3.html  26 Nov 2019 04:20:15 GMT -->
<head>
<meta charset="utf-8">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Media Comms</title>

<!--Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes -->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
@livewireStyles

</head>

<body class="hidden-bar-wrapper">
    <div class="page-wrapper">


        <!-- Main Header-->
       <header class="main-header header-style-three">

           <!--Header Lower-->
           <div class="header-lower">
               <div class="auto-container">
                   <div class="inner-container clearfix">
                       <div class="nav-outer clearfix">
                           <!--Mobile Navigation Toggler-->
                           <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                           <!-- Main Menu -->
                           <nav class="main-menu navbar-expand-md">
                               <div class="navbar-header">
                                   <!-- Toggle Button -->
                                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                   </button>
                               </div>

                               <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                   <ul class="navigation clearfix">
                                       <li class="current dropdown"><a href="{{ route('home.index') }}">Home</a></li>
                                       <li class="dropdown"><a href="{{ route('about.index') }}">About</a></li>
                                       <li class="dropdown"><a href="our-approach">Our Approach</a></li>
                                       <li class="dropdown"><a href="#">Projects</a></li>
                                       <li class="dropdown"><a href="#">Shop</a></li>
                                       <li class="dropdown"><a href="#">Blog</a></li>
                                       <li><a href="contact">Contact us</a></li>
                                   </ul>
                               </div>
                           </nav>

                       </div>
                   </div>
               </div>
           </div>
           <!--End Header Lower-->

           <!-- Sticky Header  -->
           <div class="sticky-header">
               <div class="auto-container clearfix">
                   <!--Logo-->
                   <div class="logo pull-left">
                       <a href="index-2.html" title=""><img src="{{ asset('assets') }}/images/mc-logo.png" alt="" title=""></a>
                   </div>
                   <!--Right Col-->
                   <div class="pull-right">
                       <!-- Main Menu -->
                       <nav class="main-menu">
                           <!--Keep This Empty / Menu will come through Javascript-->
                       </nav><!-- Main Menu End-->
                       <!-- Main Menu End-->

                   </div>
               </div>
           </div><!-- End Sticky Menu -->

           <!-- Mobile Menu  -->
           <div class="mobile-menu">
               <div class="menu-backdrop"></div>
               <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

               <nav class="menu-box">
                   <div class="nav-logo"><a href="index-2.html"><img src="{{ asset('assets') }}/images/logo-2.png" alt="" title=""></a></div>
                   <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
               </nav>
           </div><!-- End Mobile Menu -->

       </header>
       <!--End Main Header -->
<!-- Preloader -->
        <div class="preloader"></div>


        {{ $slot }}
        <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url({{ asset('assets') }}/images/background/map-pattern.png)">
        <div class="footer-social-box">
            <div class="auto-container">
                <ul class="social-nav">
                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-vk"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="copyright"><a href="/" style="color: white">MediaComms Africa Copyright &copy; 2023</a></div>
                    </div>
                    <div class="pull-right">
                        <ul class="contact-link" style="display: flex; padding: 17px 0px;">
                            <li class="ml-2"><span>Call:</span> +2348032262350</li>
                            <li class="ml-2"><span>Write:</span> support@mediacomms.africa</li>
                            <li class="ml-2"><span>Find Us:</span>  Maryland Lagos, Nigeria</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    </div>

    <script src="{{ asset('assets') }}/js/jquery.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('assets') }}/js/appear.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.js"></script>
    <script src="{{ asset('assets') }}/js/owl.js"></script>
    <script src="{{ asset('assets') }}/js/wow.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('assets') }}/js/color-settings.js"></script>
    @livewireScripts

</body>

</html>
