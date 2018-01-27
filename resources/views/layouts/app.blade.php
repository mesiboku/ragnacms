<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="RO-PROGAMES">
        <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/magnific-popup.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/themify-icons.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/style.css')}}"/>
        <title>{{config('app.name', 'RagnaProviderPH')}}</title>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
            <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Pre-loader -->
        <div class="preloader">
            <div class="status">&nbsp;</div>
        </div>
        <div class="tagline hidden-xs"> 
            <div class="container"> 
                <div class="pull-left"> 
                <div class="phone">
                    <i class=" ti-mobile"></i> +1 800 123 45 67
                </div>
                <div class="email">
                    <a href="mailto:#">
                    <i class=" ti-email"></i> support@mail.com
                    </a>
                </div>
                </div>
                <div class="pull-right"> 
                <ul class="top_socials"> 
                    <li><a href="javascript:void(0);"><i class=" ti-facebook"></i></a></li>
                    <li><a href="javascript:void(0);"><i class=" ti-skype"></i></a></li>
                    <li><a href="javascript:void(0);"><i class=" ti-twitter-alt"></i></a></li>
                    <li><a href="javascript:void(0);"><i class=" ti-github"></i></a></li>
                </ul> 
                </div>
                <div class="clear"></div>
            </div>
        </div>
        @include('inc.menu')
              <div class="clearfix"></div>          
        @yield('content')
        @include('inc.footer')
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{asset('js/landing/jquery.js')}}"></script>
        <script src="{{asset('js/landing/bootstrap.min.js')}}"></script>
        <!-- Jquery easing -->                                                      
        <script type="text/javascript" src="{{asset('js/landing/jquery.easing.1.3.min.js')}}"></script>
        <script src="{{asset('js/landing/SmoothScroll.js')}}"></script>
        <script src="{{asset('js/landing/wow.min.js')}}"></script>
        <!-- Jquery stellar for Parallax -->                                                      
        <script type="text/javascript" src="{{asset('js/landing/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/landing/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/landing/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('js/landing/jquery.magnific-popup.min.js')}}"></script>
        <!--sticky header-->
        <script type="text/javascript" src="{{asset('js/landing/jquery.sticky.js')}}"></script>
            
        <!--common script for all pages-->
        <script src="{{asset('js/landing/jquery.app.js')}}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    </body>
</html>
