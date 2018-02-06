@extends('layouts.app')

<!-- Title -->
@section('pageTitle', Config::get('application.WebsiteName'))

@section('menu')
<li>
    <a href="/login">Login</a>
</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-4">
            <div class="container">
                    <div class="panel panel-color panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel Primary</h3>
                                <p class="panel-sub-title font-13 text-muted">Sub title goes here with small font</p>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
            </div>
    </div>
</div>
@endsection

@section('scripts')    
    	
@endsection