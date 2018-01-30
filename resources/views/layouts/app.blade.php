
<html lang="{{ app()->getLocale() }}">
<head>
        <title>@yield('pageTitle')</title> 
        
        <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">
        <link rel="stylesheet" href="{{asset('css/landing/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/magnific-popup.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/themify-icons.css')}}"/>
        

        
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css">
        
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('js/modernizr.min.js')}}"></script>
</head>
    <body>
        @yield('nav')
        @yield('content')
        @yield('scripts')
        @include('inc.footer')
    </body>
</html>
