@extends('layouts.app')

<!-- Title -->
@section('pageTitle', Config::get('application.WebsiteName'))

@section('menu')
<li>
    <a href="/register">Register</a>
</li>
@endsection

@section('content')
        <div class="wrapper-page">
            <div class="login-container">
                <div class="text-center font-style-1">
                    {{Lang::get('account.Login')}}
                </div>
                <form class="form-horizontal m-t-20" action="index.html">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="{{Lang::get('account.Username')}}">
                            <i class="md md-assignment-ind form-control-feedback l-h-34"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="{{Lang::get('account.Password')}}">
                            <i class="md md-security form-control-feedback l-h-34"></i>
                        </div>
                    </div>

                    <div class="form-group text-right m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-custom waves-effect waves-light w-md" type="submit">Login</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-left">
                            <a href="/register" class="text-muted">{{Lang::get('account.CreateAccount')}}</a>
                        </div>
                    </div>
                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-left">
                            <a href="/forgotpass" class="text-muted">{{Lang::get('account.ForgotPass')}}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection

@section('scripts')    
    	
@endsection