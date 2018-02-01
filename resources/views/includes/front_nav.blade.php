<!-- Pre-loader -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>


<div class="tagline hidden-xs"> 
  <div class="container"> 
    <div class="pull-left"> 
        <div class="phone">
          <i class=" ti-mobile"></i> +1 800 123 45 67
        </div>
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

<div class="navbar-custom sticky" role="navigation">
        <div class="container">
          <!-- Navbar-header -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class=" ti-menu"></i>
            </button>
            <!-- LOGO -->
            <a href="/">
              <div class="logo"> <?php echo Config::get('application.WebsiteName'); ?></div>
            </a>
          </div>
          <!-- end navbar-header -->
  
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
                <a href="#media">Media</a>
              </li>
              <li>
                <a href="#partners">Partners</a>
              </li>
              <li>
                <a href="#community">Community</a>
              </li>
              @yield('menu')
            </ul>
          </div>
          <!--/Menu -->
        </div>
        <!-- end container -->
</div>