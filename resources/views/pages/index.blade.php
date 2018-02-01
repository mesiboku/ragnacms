@extends('layouts.app')

<!-- Title -->
@section('pageTitle', Config::get('application.WebsiteName'))

@section('menu')
<li>
    <a href="/register">Register</a>
</li>
<li>
    <a href="/login">Login</a>
</li>
@endsection
<!-- HOME -->
@section('content')
        <div class="col-sm-12">
          <div class="home-wrapper text-center">
            <h1 class="animated fadeInDown wow" data-wow-delay=".1s">Welcome to WeDevGames</h1>
            <p class="animated fadeInDown wow" data-wow-delay=".2s">An private organization who develop online games.</p>
            <a href="/register" class="btn btn-primary btn-rounded w-lg animated fadeInDown wow" data-wow-delay=".4s">Register Now</a>
            <div class="clearfix"></div>
            
          </div>
        </div>

<!-- END HOME -->
@endsection

@section('scripts')
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
@endsection

