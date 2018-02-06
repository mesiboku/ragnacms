@extends('layouts.app')
@section('pageTitle', Config::get('application.WebsiteName'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Posts</h1>
            </div>
        </div>
        @if(count($posts) > 0) 
            @foreach($posts as $post)
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small class="panel-sub-title font-13 text-muted"> Wrttien on {{$post->created_at}}</small>
                    </div>
                    <div class="panel-body">
                        <p>{{$post->body}}</p>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else 
        <div class="row">
                <div class="col-lg-12">
                    <h1>No Post found</h1>
                </div>
            </div>
        @endif
    </div>
@endsection