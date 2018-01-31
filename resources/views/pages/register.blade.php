@extends('layouts.app')

<!-- Title -->
@section('pageTitle', Config::get('application.WebsiteName'))

<!-- Top Nav -->
{{--  @section('nav')
    @include('includes.front_nav')
@endsection

@section('overlay')
@endsection  --}}

@section('content')
        <div class="wrapper-page">
            <div class="reg-container">
                <div class="text-center logo-lg">
                    {{Lang::get('registration.CreateAccount')}}
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
                            <input class="form-control" type="email" required="" placeholder="{{Lang::get('registration.Email')}}" id="email">
                            <i class="md md-security form-control-feedback l-h-34"></i>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="date" required="" placeholder="{{Lang::get('registration.DateOfBirth')}}" id="datepicker">
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
        </div>
@endsection

@section('scripts')    
    	
@endsection