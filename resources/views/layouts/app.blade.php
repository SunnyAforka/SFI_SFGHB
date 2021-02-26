<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SFGHB</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--Login style-->
    <link href="{{ url('assets/css/Login-Form-Dark.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fonts/ionicons.min.css') }}" rel="stylesheet">

    <!--SLider slick-->
    <link href="{{ url('slick/slick.css') }}" rel="stylesheet">
    <link href="{{ url('slick/slick-theme.css') }}" rel="stylesheet">
    
    <!--Comments-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('assets/img/sfghblogo.png') }}" alt="" style="height: 34px; width: 34px;"> Sisters' Fellowship Int'l
                </a>
                <button class="navbar-toggler" id="toggleNavBar" style="padding: 0;">
                <i class="ion ion-navicon-round toggle-icon"></i>
                </button>

                <div class="collapse navbar-collapse navigation-bar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="ion ion-ios-unlocked-outline navbar-ion"></i> {{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="ion ion-android-person navbar-ion"></i> {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Live</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Recommendations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"> Sign Out</a>
                        </li>
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>
        <div class="shadow" id="sidebar">
            <div class="container">
                <div style="width: 250px;">
                    @include('snippets.sidebar')
                </div>

            </div>
        </div>
        <main class="main-event">
            @yield('content')
        </main>

        @if(Auth()->user())
            <footer class="footer">
                <div class="container">
                    <section class="icon-select-section d-flex flex-row p-2">
                        <div class="col text-center">
                           <a href="/"><i class="icon ion-ios-home-outline"></i></a>
                        </div>
                        <div class="col text-center">
                            <a href="/search"><i class="icon ion-ios-search"></i></a>
                        </div>
                        <div class="col text-center">
                            <a href="#"><i class="icon ion-mic-a"></i></a>
                        </div>
                    </section>
                </div>

        </footer>
        @endif

    </div>
    <div id="fb-root"></div>
</body>

<!--Slack Js-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".variable").slick({
        dots: false,
        infinite: true,
        variableWidth: true
      });
    });
</script>
<!--Below code will toggle sidebar-->
<script>
    $(document).ready(function(){
        $("#toggleNavBar").click(function(){
            $("#sidebar").animate({
                width: "toggle"
            });
        });
    });
</script>


<script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</html>
