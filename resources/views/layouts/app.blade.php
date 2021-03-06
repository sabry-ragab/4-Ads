<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{!! csrf_token() !!}">
  <title>@yield('title')</title>

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
  <link href="{{asset('css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  <link href="{{asset('css/search.css')}}" rel="stylesheet">

  <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
  <header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="{{url('/')}}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">

                @if (Auth::guest())
                  <li><a href="{{ url('/register') }}"><i class="fa fa-user"></i> Register</a></li>
                  <li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                  <li><a href="{{ url('/search') }}"><i class="fa fa-search"></i> Search</a></li>
                @else
                  <li><a href="{{url('/home')}}"><i class="fa fa-user"></i>{{ Auth::user()->name }} </a></li>
                  <li><a href="{{ url('/create/advertisement') }}"><i class="fa fa-plus"></i> Place a free Ad</a></li>
                  <li><a href="{{ url('/search') }}"><i class="fa fa-search"></i> Search</a></li>
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                @endif

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->

    @if(!Auth::guest())
      <div class="header-bottom"><!--header-bottom-->
        <div class="container">
          <div class="row">
            <div class="col-sm-9">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="mainmenu pull-left">
                <ul class="nav navbar-nav collapse navbar-collapse">
                  <li><a href="{{url('/home')}}" class="active">Home</a></li>
                  <li><a href="#">Account</a></li>
                  <li class="dropdown"><a href="#">Ads<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="#">Active</a></li>
                      <li><a href="">Pending</a></li>
                      <li><a href="#">Rejected</a></li>
                      <li><a href="#">Wishlist <i class="fa fa-star"></i> </a></li>


                    </ul>
                  </li>
                  <li class="dropdown"><a href="#">Messages<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="#">Inbox</a></li>
                      <li><a href="#">sent</a></li>
                    </ul>
                  </li>

                  @if(Auth::user()->admin)
                    <li class="dropdown"><a href="#">Admin Panel<i class="fa fa-angle-down"></i></a>
                      <ul role="menu" class="sub-menu">
                        <li><a href="#">Review Ads</a></li>
                        <li><a href="{{ url('/add/category') }}"> Add Category</a></li>
                      </ul>
                    </li>
                  @endif

                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="search_box pull-right">
                <input type="text" placeholder="Search"/>
              </div>
            </div>
          </div>
        </div>
      </div><!--/header-bottom-->
    @endif
  </header><!--/header-->

  <br><br>

  @yield('content')

  <br><br>

  <footer id="footer"><!--Footer-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="companyinfo">
              <h2><span>E</span>-shopper</h2>
              <p>
                Ad-shop is the best local classifieds in Egypt to buy and sell
                anything you can think of your old mobile phone, your used sofa,
                your car, or even your flat. It might even help you find a new job!
              </p>
              <br>
              <p>Looking to sell something? OLX is the easiest and fastest way to post a free Ad.</p>
            </div>
          </div>
          <div class="col-sm-offset-1 col-sm-2">
            <br><br>
            <div class="single-widget">
              <h2>Service</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Online Help</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Change Location</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-2">
            <br><br>
            <div class="single-widget">
              <h2>Quock Shop</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">T-Shirt</a></li>
                <li><a href="#">Mens</a></li>
                <li><a href="#">Womens</a></li>
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Shoes</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-3 col-sm-offset-1">
            <br><br>
            <div class="single-widget">
              <h2>About Shopper</h2>
              <form action="#" class="searchform">
                <input type="text" placeholder="Your email address" />
                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                <p>Get the most recent updates from <br />our site and be updated your self...</p>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
          <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
        </div>
      </div>
    </div>

  </footer><!--/Footer-->


  <!-- Layouts and designs js code -->
  <script src="{{url('js/jquery.js')}}"></script>
  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <script src="{{url('js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{url('js/price-range.js')}}"></script>
  <script src="{{url('js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{url('js/main.js')}}"></script>

  <!-- Application js code -->
  <script src="{{url('js/ads/showSubCategories.js')}}"></script>

</body>
</html>
