
<html lang="{{ app()->getLocale() }}">
<head>
        <title>@yield('pageTitle')</title> 
        @include('includes.head')
</head>
    <body>
        @yield('nav')
        @yield('content')
        @yield('scripts')
        @include('includes.footer')
    </body>
</html>
