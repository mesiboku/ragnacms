
<html lang="{{ app()->getLocale() }}">
<head>
        <title>@yield('pageTitle')</title> 
        @include('includes.head')
</head>
    <body>
        @include('includes.front_nav')
        <section class="home" data-stellar-background-ratio="0.5">
        {{--  <div class="bg-overlay"></div>  --}}
            <div class="container">
                <div class="row">
        @yield('content')
                </div>
            </div>
        </section>
        @include('includes.footer')
        @include('includes.script')
    </body>
</html>
