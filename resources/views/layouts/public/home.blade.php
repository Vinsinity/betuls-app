<!doctype html>
<html lang="{{config('app.locale')}}">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $seo_settings->site_description }}">
    <meta name="keywords" content="{{ $seo_settings->site_keywords }}">
    @stack('meta')
    <title>{{ $title }} - {{ $seo_settings->site_title }}</title>

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
    @stack('dependencies')

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/app.css') }}" type="text/css">
    @stack('styles')



</head>

<body id="home-version-1" class="home-version-1" data-style="default">

<div class="site-content">


@include('layouts.public.header')

@yield('content')

@include('layouts.public.footer')


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
{{--    <!--Google map api -->--}}
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
