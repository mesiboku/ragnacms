
<html lang="{{ app()->getLocale() }}">
<head>
        <title>@yield('pageTitle')</title> 
        @include('includes.head')
</head>
    <body>
        @yield('nav')
        <section class="home parallax" data-stellar-background-ratio="0.5">
        @yield('overlay')
            <div class="container">
                <div class="row">
        @yield('content')
                </div>
            </div>
        </section>
        @yield('scripts')
        @include('includes.footer')
    </body>
</html>
