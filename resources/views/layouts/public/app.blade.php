<!doctype html>
<html lang="{{config('app.locale')}}">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('meta')
    <title>{{ $title }} - {{ config('app.name') }}</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/img/fav-icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/fav-icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/fav-icons/favicon-16x16.png') }}">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('public/dependencies/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/fontawesome/css/fontawesome-all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/owl.carousel/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/owl.carousel/css/owl.theme.default.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/flaticon/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/wow/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/jquery-ui/css/jquery-ui.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/venobox/css/venobox.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/slick-carousel/css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/dependencies/toastr/toastr.min.css') }}" type="text/css">
    @stack('dependencies')

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/app.css') }}" type="text/css">
    @stack('styles')
</head>

<body id="home-version-1" class="home-version-1" data-style="default">
<div class="site-content">


<!--=========================-->
<!--=        Header         =-->
<!--=========================-->



<!-- Top Bar area start
============================================= -->


<header id="header" class="header-area">
    <div class="top-bar">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-bar-left">
                        <p><i class="far fa-flag"></i><a href="">Our Location</a></p>

                        <p><i class="far fa-envelope"></i><a href="mailto:comercio@info.com">comercio@info.com</a></p>
                    </div>
                </div>
                <!-- Col -->
                <div class="col-lg-6">
                    <div class="top-bar-right">
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        @if(Auth::user())
                            <a href="{{ route('account.profile') }}" class="my-account">{{Auth::user()->name}}</a>
                        @else
                            <a href="{{ route('login') }}" class="my-account"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                        @endif
                    </div>
                    <!--top-bar-right end-->
                </div>
                <!-- Col end-->
            </div>
            <!--Row end-->
        </div>
        <!--container end-->
    </div>
    <!--top-bar end-->

    <!-- Main Menu
============================================= -->


    <div class="container-fluid custom-container menu-rel-container">
        <div class="row">
            <!-- Logo
        ============================================= -->
            <div class="col-lg-6 col-xl-3">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('public/media/images/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <!--Col end-->

            <!-- Main menu
        ============================================= -->

            <div class="col-lg-12 col-xl-7 order-lg-3 order-xl-2 menu-container">
                <div class="mainmenu style-two">
                    <ul class="navigation">
                        @foreach($categories as $category)
                            @if(count($category->children) > 0 )
                                <li class="has-child">
                                    <a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                    <ul class="sub-menu">
                                        @foreach($category->children as $children)
                                            <li><a href="{{ route('categories.show', ['slug' => $children->slug]) }}">{{ $children->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Menu container end-->


            <div class="col-lg-6 col-xl-2 order-lg-2 order-xl-3">
                <div class="header-right-menu">
                    <ul>
                        <li class="top-search style-two"><a href="javascript:void(0)"><i class="flaticon-magnifying-glass"></i></a>
                            <label>
                                <input type="text" class="search-input" placeholder="Search">
                            </label>
                        </li>
                        <li><a href="#"><i class="flaticon-like"></i></a></li>
                        @livewire('cart-counter')
                    </ul>
                </div>
            </div>
            <!--Col end-->
        </div>
        <!--Row end-->
    </div>
    <!--container end-->
</header>
<!--Header end-->



<!--=========================-->
<!--=        Mobile Header         =-->
<!--=========================-->



<header class="mobile-header">
    <div class="container-fluid custom-container">
        <div class="row">

            <!-- Mobile menu Opener
            ============================================= -->
            <div class="col-4">
                <div class="accordion-wrapper">
                    <a href="#" class="mobile-open"><i class="flaticon-menu-1"></i></a>
                </div>
            </div>
            <div class="col-4">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('public/media/images/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                @livewire('public.cart.mobile-cart-counter-component')
            </div>
        </div>
        <!-- /.row end -->
    </div>
    <!-- /.container end -->
</header>

<div class="accordion-wrapper">

    <!-- Mobile Menu Navigation
        ============================================= -->
    <div id="mobilemenu" class="accordion">
        <ul>
            <li class="mob-logo"><a href="">
                    <img src="{{ asset('public/media/images/logo.png') }}" alt="">
                </a></li>
            <li><a href="#" class="closeme"><i class="flaticon-close"></i></a></li>
            @foreach($categories as $category)
                @if(count($category->children) > 0 )
                    <li>
                        <a href="{{ route('categories.show', ['slug' => $category->slug]) }}" class="link">{{ $category->name }}<i class="fa fa-chevron-down"></i></a>
                        <ul class="submenu">
                            @foreach($category->children as $children)
                                <li><a href="{{ route('categories.show', ['slug' => $children->slug]) }}">{{ $children->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="out-link"><a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endif
            @endforeach


        </ul>
        <div class="mobile-login">
            @if(Auth::user())
                Welcome, <a href="{{ route('account.profile') }}">{{ Auth::user()->name }}</a>
            @else
                <a href="{{ route('login') }}">Log in</a> |
                <a href="{{ route('register') }}">Create Account</a>
            @endif
        </div>
        <form action="#" id="moble-search">
            <label>
                <input placeholder="Search...." type="text">
            </label>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

@yield('content')

@include('layouts.public.footer')


</div>
    <!-- Dependency Scripts -->
    <script src="{{ asset('public/dependencies/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/wow/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/isotope-layout/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/imagesloaded/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/jquery.countdown/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/gmap3/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/venobox/js/venobox.min.js') }}"></script>
    <script src="{{ asset('public/dependencies/slick-carousel/js/slick.js') }}"></script>
    <script src="{{ asset('public/dependencies/headroom/js/headroom.js') }}"></script>
    <script src="{{ asset('public/dependencies/jquery-ui/js/jquery-ui.min.js') }}"></script>
    @stack('scripts')
    <!--Google map api -->
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>--}}
    <!-- Site Scripts -->
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
    <script src="{{ asset('public/dependencies/toastr/toastr.min.js') }}"></script>
    @stack('js')

    <script>
        $(document).ready(function (){
            toastr.options = {
                "progressBar" : true
            }
        });
        window.addEventListener('cartadd:success', event => {
                console.log(event.detail.message)
                toastr.success(event.detail.message)
            })
    </script>
    @livewireScripts
</body>

</html>
