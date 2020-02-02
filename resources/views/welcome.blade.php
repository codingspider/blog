<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
    @section('css')
    <head>
        <title>@yield('title')</title>
    
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    
        <!-- Stylesheets -->
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/reset.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/portus.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/themify-icons.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/weather-icons.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main-stylesheet.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/ot-lightbox.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/shortcodes.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/responsive.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/dat-menu.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin,latin-ext" />
        <link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,700' />
    
    <!-- END head -->
    </head>
    @show

    <!-- BEGIN body -->
    <body class="ot-menu-will-follow">

        <!-- BEGIN .boxed -->
        <div class="boxed">
            
            @include('includes.head')
            @yield('content')    
            @include('includes.footer')
                       
        <!-- END .boxed -->
        </div>



    @section('js')
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('assets/jscript/jquery-latest.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/theia-sticky-sidebar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/modernizr.custom.50878.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/iscroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/dat-menu.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/theme-scripts.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/jscript/ot-lightbox.min.js') }}"></script>
        <!-- Demo Only -->
      
        <script>
            // Animation time of revieling and hiding menu (defaut = 400)
            var _datMenuAnim = 400;
            // Animation effect for now it is just 1 (defaut = "effect-1")
            var _datMenuEffect = "effect-2";
            // Submenu dropdown animation (defaut = true)
            var _datMenuSublist = true;
            // If fixed header is showing (defaut = true)
            var _datMenuHeader = true;
            // Header Title
            var _datMenuHeaderTitle = 'Portus';
            // If search is showing in header (defaut = true)
            var _datMenuSearch = true;
            // Search icon (FontAwesome) in header (defaut = fa-search)
            var _datMenuCustomS = "fa-search";
            // Menu icon (FontAwesome) in header (defaut = fa-bars)
            var _datMenuCustomM = "fa-bars";
        </script>

        <script>
            jQuery('.portus-article-slider-min').owlCarousel({
                loop: true,
                margin: 22,
                responsiveClass: true,
                responsive:{
                    0:{
                        items: 1,
                        nav: true
                    },
                    600:{
                        items: 3,
                        nav: false
                    },
                    1000:{
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });

            jQuery('.portus-video-slider-min').owlCarousel({
                loop: true,
                margin: 22,
                responsiveClass: true,
                responsive:{
                    0:{
                        items: 1,
                        nav: true
                    },
                    600:{
                        items: 2,
                        nav: false
                    },
                    1000:{
                        items: 4,
                        nav: true,
                        loop: false
                    }
                }
            });

            jQuery('.portus-article-slider-big').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                responsive:{
                    0:{
                        items: 1,
                        nav: false
                    },
                    650:{
                        items: 2,
                        nav: false
                    },
                    1000:{
                        items: 2,
                        nav: true,
                        loop: false
                    }
                }
            });

            jQuery('.article-slider-full-small').owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
                items: 1,
                nav: true,
                loop: false
            });

            jQuery('.w-gallery-slider .item-header').owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
                items: 1,
                nav: true,
                loop: false
            });
        </script>
    @show   

    <!-- END body -->
    </body>
<!-- END html -->

</html>