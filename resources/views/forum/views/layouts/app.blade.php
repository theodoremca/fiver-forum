<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Tourism Naija') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href="{{ asset('uiFix/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/css/meanmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/lib/nivo-slider/css/preview.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/style.css') }}" rel="stylesheet">
    <link href="{{ asset('uiFix/css/responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('uiFix/js/vendor/modernizr-2.8.3.min.js') }}" defer></script>
</head>
<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12 floatright">
                    <div class="header-top-right">
                        @guest
                            <div class="login ">
                                <a href="{{route('sign-in')}}"><i class="fa fa-pencil-square-o"></i>Register / SignIn</a>
                            </div>
                        @else
                            <div class="login ">
                                <a href="{{route('logout')}}"

                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"

                                ><i class="fa fa-pencil-square-o"></i>Log Out </a>
                            </div>
                            <div class="login ">
                                <a href="{{route('userProfile')}}"><i class="fa fa-user-circle-o"></i>Hi! {{ Auth::user()->first_name }} </a>                                </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-menu-bg">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img src="{{asset ('uiFix/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <div class="mainmenu">
                                    <nav class="floatright" style="margin-right:44px;">
                                        <ul id="nav">
                                            <li class="drop-down"><a href="{{ route('home') }}">HOME</a>
                                            </li>
                                            @if(Route::current()->getName() === 'home')
                                                <li><a href="#about">About</a></li>
                                            @else
                                                <li><a href="{{ route('home') }}#about">About</a></li>
                                            @endif
                                            <li class="drop-down"><a href="{{ route('blog') }}">BLOG</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Logo Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{ route('home') }}">HOME</a></li>
                                @if(Route::current()->getName() === 'home')
                                    <li><a href="#about">About</a></li>
                                @else
                                    <li><a href="{{ route('home') }}#about">About</a></li>
                                @endif
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('contact') }}">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
@yield('content')
@include('layouts.footer')

<script src="{{ asset('uiFix/js/vendor/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('uiFix/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('uiFix/lib/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('uiFix/lib/nivo-slider/home.js') }}"></script>
<script src="{{ asset('uiFix/js/wow.min.js') }}"></script>
<script src="{{ asset('uiFix/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('uiFix/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('uiFix/js/jquery-price-slider.js') }}"></script>
<script src="{{ asset('uiFix/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('uiFix/js/waypoints.min.js') }}"></script>
<script src="{{ asset('uiFix/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('uiFix/js/plugins.js') }}"></script>
<script src="{{ asset('uiFix/js/main.js') }}"></script>
</body>

</html>
