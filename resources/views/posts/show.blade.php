@extends('layouts.app')

@section('pageTitle', Config::get('application.WebsiteName'))
@section('content')
    <div class="container">
        <div class="panel panel-color panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{$post->title}}</h3>
                <small class="panel-sub-title font-13 text-muted"> Wrttien on {{$post->created_at}}</small>
            </div>
            <div class="panel-body">
                <p>{{$post->body}}</p>
            </div>
        </div>
    </div>
    <div class="container">
    </div>
@endsection