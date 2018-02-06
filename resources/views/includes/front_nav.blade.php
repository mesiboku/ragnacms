<!-- Pre-loader -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>

<div class="tagline hidden-xs"> 
  <div class="container">
    <div class="row">
            <div class="pull-left"> 
                <div class="email">
                  <a href="mailto:#">
                    <i class=" ti-email"></i> support@wedevgames.net
                  </a>
                </div>
            </div>
            <div class="pull-right"> 
              <ul class="top_socials"> 
                <li><a href={{Config::get('application.SocialFacebook')}}><i class="  ti-facebook"></i></a></li>
                <li><a href={{Config::get('application.SocialTwitter')}}><i class=" ti-twitter-alt"></i></a></li>
              </ul> 
            </div>
            <div class="clear"></div>
    </div>
  </div>
</div>


<div class="navbar-custom" role="navigation">   
  <div class="container">
    <!-- LOGO -->
    <div class="col-md-12">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="ti-menu"></i>
            </button>
            <a href="/">
              <div class="logo"> {{Config::get('application.WebsiteName')}}</div>
            </a>
        </div>
            <!-- menu -->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#how-it-work">Games</a>
                </li>
                <li>
                  <a href="#pricing">TOP-UP</a>
                </li>
                <li>
                  <a href="#faq">About</a>
                </li>
                <li>
                  <a href="/posts">Media</a>
                </li>
                <li>
                  <a href="#partners">Partners</a>
                </li>
                <li>
                  <a href="#community">Community</a>
                </li>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                        <li><a href="#">Forgot Password?</a></li>
                      </ul>
                </li>
              </ul>
            </div>
    </div>
  </div>     
  <!-- end container -->
</div>