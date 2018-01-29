@extends('layouts.app')

  <!-- Website Tittle -->
  <title><?php echo Config::get('application.WelcomeMessage'); ?></title>

@section('content')
<!-- HOME -->
<section class="home bg-img-1 parallax" data-stellar-background-ratio="0.5">
    <div class="bg-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-wrapper text-center">
            <h1 class="animated fadeInDown wow" data-wow-delay=".1s">Welcome to WeDevGames</h1>
            <p class="animated fadeInDown wow" data-wow-delay=".2s">An private organization who develop online games.</p>
            <a href="" class="btn btn-primary btn-rounded w-lg animated fadeInDown wow" data-wow-delay=".4s">Register Now</a>
            <div class="clearfix"></div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END HOME -->

  
  
@endsection