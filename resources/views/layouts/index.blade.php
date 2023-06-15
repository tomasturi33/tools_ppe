<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Programa Primer Empleo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>


    </head>
    <body style="font-family: Lato;">
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
       <div class="header-area" style="background-image: linear-gradient(to right, #00a1b8 , #333c4e); padding-top: 8px;">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo p-1">
                                <a href="{{ url('/') }}"><img height="78px" src="{{ url('/') }}/index/assets/img/logo/logo_unl.png" alt=""></a>
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
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ url('/admin/encuestas') }}" class="genric-btn success circle">Dashboard</a>
                                        @else
                                            <a href="{{ url('/user/encuestas') }}" class="genric-btn success circle">Dashboard</a>
                                        @endif
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

        <script>

        var $modal = $('#modal');
        var image = document.getElementById('image');
        var photo = document.getElementById('photo');

        var cropper;

        $("body").on("change", ".image", function(e){
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            console.log(files)
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                reader.readAsDataURL(file);
                }
            }
        });

        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        $("#crop").click(function(){

            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob); 
                
                reader.onloadend = function() {
                    var base64data = reader.result; 

                    image = base64data;
                    //photo = base64data;
                    var photo = document.getElementById('photo');
                    photo.val(btoa(base64data))
                    
                    $modal.modal('hide');

                    // $.ajax({
                    //     type: "POST",
                    //     dataType: "json",
                    //     url: "crop-image-upload",
                    //     data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                    //     success: function(data){
                    //     console.log(data);
                    //     $modal.modal('hide');
                    //     alert("Crop image successfully uploaded");
                    //     }
                    // });
                }
            });
        })
        </script>
    </body>
</html>
</html>