<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half" lang="{{config('app.locale')}}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Basic -->
    <meta charset="UTF-8">
    @stack('basics')

    <title>{{ ucfirst(trans($title)) }} | Betuls Admin Panel</title>
    <meta name="keywords" content="Betuls Admin Panel" />
    <meta name="description" content="Betuls Admin Panel">
    <meta name="author" content="betuls.com.tr">
    @stack('metas')

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    @stack('mobileMetas')

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">
    @stack('webFonts')

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
@stack('stylesheet')

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/theme.css') }}" />
    @stack('themeCss')

    <!-- Theme Layout -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/layouts/modern.css') }}" />
    @stack('themeLayout')

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/skins/default.css') }}" />
    @stack('skinCss')

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
    @stack('themeCustomCss')

    <!-- Head Libs -->
    <script src="{{ asset('admin/assets/vendor/modernizr/modernizr.js') }}"></script>
    @stack('headLibs')
</head>
<body>
<section class="body">

    @include('layouts.admin.header')

    <div class="inner-wrapper">
        @include('layouts.admin.sidebar')
        <section role="main" class="content-body content-body-modern">
{{--            @include('layouts.admin.breadcrumb')--}}
            @yield('content')
        </section>
    </div>

    @include('layouts.admin.rightbar')

</section>

<!-- Vendor -->
<script src="{{ asset('admin/assets/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/common/common.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
@stack('vendorJs')

<!-- Specific Page Vendor -->
@stack('specificJs')

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('admin/assets/js/theme.js') }}"></script>
@stack('baseComponentJs')

<!-- Theme Custom -->
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
@stack('themeCustomJs')

<!-- Theme Initialization Files -->
<script src="{{ asset('admin/assets/js/theme.init.js') }}"></script>
@stack('themeInitializationJs')

<!-- Examples -->
@stack('examplesJs')

</body>
</html>
