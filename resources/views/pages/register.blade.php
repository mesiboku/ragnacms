@extends('layouts.app')

<!-- Title -->
@section('pageTitle', Config::get('application.WebsiteName'))

<!-- Top Nav -->
@section('nav')
  @include('inc.front_nav')
@endsection

@section('content')
        <div class="wrapper-page">

            <div class="text-center">
                <a href="/" class="logo-lg"><i class="md md-equalizer"></i> <span>{{Lang::get('registration.CreateAccount')}}</span> </a>
            </div>

            <form class="form-horizontal m-t-20" action="index.html">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="{{Lang::get('registration.Username')}}">
                        <i class="md md-assignment-ind form-control-feedback l-h-34"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <input class="form-control" type="password" required="" placeholder="{{Lang::get('registration.Password')}}">
                        <i class="md md-security form-control-feedback l-h-34"></i>
                    </div>
                    <div class="col-xs-6">
                        <input class="form-control" type="password" required="" placeholder="{{Lang::get('registration.ConfirmPassword')}}">
                        <i class="md md-security form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="{{Lang::get('registration.DateOfBirth')}}" id="datepicker">
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
                            <input class="form-control" type="number" required="" placeholder="{{Lang::get('registration.PhoneNumber')}}">
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
                        <a href="/login" class="text-muted">{{Lang::get('registration.AlreadyHaveAccount')}}</a>
                    </div>
                </div>
            </form>

        </div>
@endsection

@section('scripts')    
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
@endsection