<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Feria Empleo y Postgrado 2021 </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/index/assets/img/logo/cropped-favicon.png">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/flaticon.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/price_rangs.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/slicknav.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/themify-icons.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/slick.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/nice-select.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/style.css">
        <link rel="stylesheet" href="{{ url('/') }}/index/assets/css/ppe.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ url('/') }}/index/assets/img/logo/cropped-favicon.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo p-1">
                                <a href="{{ url('/') }}"><img height="60px" src="{{ url('/') }}/index/assets/img/logo/unl_logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-block">
                                    @auth
                                        <a href="{{ url('/admin/encuestas') }}" class="genric-btn success circle">Dashboard</a>
                                    @endauth

                                    @guest
                                        <a href="{{ url('/login') }}" class="genric-btn success circle">Iniciar sesión</a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
        @yield('content')        
    </main>

    <footer>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center pt-50">
                        <div class="col-xl-6 col-lg-6 ">
                            <div class="footer-copy-right">
                                <p>
                                    <img src="{{ url('/') }}/index/assets/img/logo/unl_identidad.svg" alt="">
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="">
                                <ul class="social-unl">
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCfeeUho4lzDrXyTKO_Oxz4w" title="Youtube" target="_blank"><img src="{{ url('/') }}/index/assets/img/icon/youtube.svg"></a>
                                    </li>
                                    <li>
                                        <a href="http://t.me/unlitoral" title="Telegram" target="_blank"><img src="{{ url('/') }}/index/assets/img/icon/telegram.svg"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/school/407105/" title="Linkedin" target="_blank"><img src="{{ url('/') }}/index/assets/img/icon/linkedin.svg"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/vinculacionunl/" title="Instagram" target="_blank"><img src="{{ url('/') }}/index/assets/img/icon/instagram.svg"></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/vinculacionunl" title="Twitter" target="_blank"><img src="{{ url('/') }}/index/assets/img/icon/twitter.svg"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/vinculacion.tecnologica.73" title="Facebook" target="_blank"><img src="{{ url('/') }}/index/assets/img/icon/facebook.svg"></a>
                                    </li>   
                                </ul>
                            </div>
                            <hr>
                            <div align="right" style="color: white; font-size: 14px;">
                                <b style="color: white; font-weight: bold;">©2021 UNIVERSIDAD NACIONAL DEL LITORAL</b>
                                <br>
                                informes@unl.edu.ar · Bv. Pellegrini 2750 - (3000) Santa Fe · Tel: +54 (0342) 4571110
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ url('/') }}/index/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{ url('/') }}/index/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/popper.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{ url('/') }}/index/assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ url('/') }}/index/assets/js/owl.carousel.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/slick.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/price_rangs.js"></script>
        
        <!-- One Page, Animated-HeadLin -->
        <script src="{{ url('/') }}/index/assets/js/wow.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/animated.headline.js"></script>
        <script src="{{ url('/') }}/index/assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="{{ url('/') }}/index/assets/js/jquery.scrollUp.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/jquery.nice-select.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="{{ url('/') }}/index/assets/js/contact.js"></script>
        <script src="{{ url('/') }}/index/assets/js/jquery.form.js"></script>
        <script src="{{ url('/') }}/index/assets/js/jquery.validate.min.js"></script>
        <script src="{{ url('/') }}/index/assets/js/mail-script.js"></script>
        <script src="{{ url('/') }}/index/assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="{{ url('/') }}/index/assets/js/plugins.js"></script>
        <script src="{{ url('/') }}/index/assets/js/main.js"></script>

        <!-- ppe js -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="{{ url('/') }}/index/assets/js/ppe.js"></script>
    </body>
</html>
</html>