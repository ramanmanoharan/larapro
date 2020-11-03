
<body>
<div class="preloader"> <img src="{{ URL::asset('images/preloader.gif')}}" alt="Image"> </div>
<!-- end preloader -->
<div class="page-transition"></div>
<!-- end page-transition -->
<div class="search-box">
  <div class="inner">
    <form>
      <input type="search" placeholder="Type here to search">
      <input type="submit" value="SEARCH">
    </form>
  </div>
</div>
<!-- end search-box -->
<aside class="side-widget">
  <div class="inner">
    <div class="logo"> <a href="index"><img src="{{ URL::asset('images/logoone.png') }}" alt="Image"></a> </div>
    <!-- end logo -->
    <div class="hide-mobile">
      <p>Extremity direction existence as dashwoods do up. Securing <u>marianne led</u> welcomed offended but offering six raptures. </p>
      <figure class="gallery"><a href="{{ URL::asset('images/slide02.jpg') }}" data-fancybox><img src="{{ URL::asset('images/slide02.jpg') }}" alt="Image"></a><a href="{{ URL::asset('images/slide03.jpg') }}" data-fancybox><img src="{{ URL::asset('images/slide03.jpg') }}" alt="Image"></a></figure>
      <h6 class="widget-title">ADDRESS</h6>
      <address class="address">
      <p>249 Oxford Str, Paddington NSW 2021<br>
        Sidney Avustralya</p>
      <p>+ 850 244 0 666</p>
      </address>
      <h6 class="widget-title">FOLLOW US</h6>
      <ul class="social-media">
        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
        <li><a href="#"><i class="lni lni-instagram"></i></a></li>
        <li><a href="#"><i class="lni lni-youtube"></i></a></li>
        <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
      </ul>
    </div>
    <!-- end hide-mobile -->
    <div class="show-mobile">
      <div class="languages">
          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </div>
      <!-- end languages -->
      <div class="site-menu">
        <ul>
          <li><a href="services">Services</a></li>
          <li><a href="case-studies">Case Studies</a></li>
          <li><a href="articles">Articles</a></li>
          <li><a href="about">About</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </div>
      <!-- end site-menu --> 
    </div>
    <!-- end show-mobile --> 
    <small>© <?php echo date('Y'); ?> iKings | New Age Digital Marketing Agency</small> </div>
  <!-- end inner --> 
</aside>
<!-- end side-widget -->
<nav class="navbar">
  <div class="container">
    <div class="logo"> <a href="/"><img src="{{ URL::asset('images/logoone.png')}}" srcset="images/logoone.png" alt="Image"></a> </div>
    <!-- end logo -->
    <div class="site-menu">
      <ul>
        <li><a href="services">Services</a></li>
        <li><a href="case-studies">Case Studies</a></li>
        <li><a href="articles">Articles</a></li>
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact</a></li>
      </ul>
    </div>
    <!-- end site-menu -->
    <div class="custom-menu">
      <!-- <ul>
        <li><a href="#">en</a></li>
        <li><a href="#">ru</a></li>
      </ul> -->
        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                              </li>
                              <li class="nav-item">

                               
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
    </div>
    <!-- end site-menu -->
    <div class="search-button"> <i class="lni lni-search-alt"></i> </div>
    <!-- end search-button -->
    <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
    <!-- end hamburger-menu -->
    <div class="navbar-button"> <a href="#"><span>+ 850 244 0 666</span> <img src="{{ URL::asset('images/icon-phone.png')}}" alt="Image"> </a> </div>
    <!-- end navbar-button --> 
  </div>
  <!-- end container --> 
</nav>