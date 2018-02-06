<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Arjel Angelo Ramos">
            <title>@yield('pageTitle')</title> 
            @include('includes.main.head')
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper slimscrollleft">
            @include('includes.main.top_bar')
            @include('includes.main.left_menu')
            @yield('content')
        </div>
        <!-- END wrapper -->
        <script>
                var resizefunc = [];
            </script>
        @include('includes.main.script')
    </body>
</html>