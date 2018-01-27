<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">

        <title>{{config('app.name', 'RagnaProviderPH')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/landing/style.css')}}"/>
        <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('js/modernizr.min.js')}}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class="wrapper-page">

            <div class="text-center">
                <a href="/" class="logo-lg"><i class="md md-equalizer"></i> <span>{{config('app.name', 'RagnaProviderPH')}}</span> </a>
            </div>

            <form class="form-horizontal m-t-20" action="index.html">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username">
                        <i class="md md-assignment-ind form-control-feedback l-h-34"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <input class="form-control" type="password" required="" placeholder="Password">
                        <i class="md md-security form-control-feedback l-h-34"></i>
                    </div>
                    <div class="col-xs-6">
                        <input class="form-control" type="password" required="" placeholder="Confirm Password">
                        <i class="md md-security form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="Date Of Birth(MM/DD/YYYY)" id="datepicker">
                        <i class="md md-today form-control-feedback l-h-34"></i>
                        
                    </div>
                </div>

                <div class="form-group">
                        <div class="col-xs-6">
                            <select class="form-control" required="">
                                <option value=""  disabled selected>Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            <i class="md md-security form-control-feedback l-h-34"></i>
                        </div>
                        <div class="col-xs-6">
                                <select class="form-control" required="">
                                    <option value=""  disabled selected>Country</option>
                                    <option value="PH">Philippines</option>
                                </select>
                            <i class="md md-security form-control-feedback l-h-34"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="number" required="" placeholder="Phone number">
                            <i class="md md-assignment-ind form-control-feedback l-h-34"></i>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox" checked="checked">
                            <label for="checkbox-signup">
                                I accept <a href="#">Terms and Conditions</a>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom waves-effect waves-light w-md" type="submit">Register</button>
                    </div>
                </div>

                <div class="form-group m-t-30">
                    <div class="col-sm-12 text-center">
                        <a href="/login" class="text-muted">Already have account?</a>
                    </div>
                </div>
            </form>

        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/detect.js')}}"></script>
        <script src="{{asset('js/fastclick.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <!-- Custom main Js -->
        <script src="{{asset('js/jquery.core.js')}}"></script>
        <script src="{{asset('js/jquery.app.js')}}"></script>
        <script>
            $(function(){
                $('#datepicker').datepicker({
                	autoclose: true,
                	todayHighlight: true
                });
            });
        </script>
	</body>
</html>