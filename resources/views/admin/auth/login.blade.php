{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('admin.auth.login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
    <!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/css/custom.css">

    <!-- Head Libs -->
    <script src="{{ asset('admin/assets') }}/vendor/modernizr/modernizr.js"></script>

</head>
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a class="logo float-left">
            <img src="{{ asset('admin/assets') }}/img/logo.png" height="70" alt="Porto Admin" />
        </a>

        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-end">
                <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign In</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.auth.login') }}" method="post">
                    @csrf
                    @if(Session::has('errors'))
                        <div class="validation-message">
                            <ul style="display: block">
                                @foreach ($errors->all() as $error)
                                    <label class="error">{{ $error }}</label>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group mb-3">
                        <label for="email">E-mail</label>
                        <div class="input-group">
                            <input name="email" id="email" type="text" class="form-control form-control-lg @error('email') error @enderror" />
                            <span class="input-group-text">
										<i class="bx bx-user text-4"></i>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="clearfix">
                            <label class="float-left" for="password">Password</label>
                            <a href="pages-recover-password.html" class="float-end">Lost Password?</a>
                        </div>
                        <div class="input-group">
                            <input name="password" id="password" type="password" class="form-control form-control-lg @error('password') error @enderror" />
                            <span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox"/>
                                <label for="RememberMe">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-4 text-end">
                            <button type="submit" class="btn btn-primary mt-2">Sign In</button>
                        </div>
                    </div>

{{--                    <span class="mt-3 mb-3 line-thru text-center text-uppercase">--}}
{{--								<span>or</span>--}}
{{--							</span>--}}

{{--                    <div class="mb-1 text-center">--}}
{{--                        <a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>--}}
{{--                        <a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>--}}
{{--                    </div>--}}

{{--                    <p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a></p>--}}

                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
    </div>
</section>
<!-- end: page -->

<!-- Vendor -->
<script src="{{ asset('admin/assets') }}/vendor/jquery/jquery.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/popper/umd/popper.min.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/common/common.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/nanoscroller/nanoscroller.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="{{ asset('admin/assets') }}/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('admin/assets') }}/js/theme.js"></script>

<!-- Theme Custom -->
<script src="{{ asset('admin/assets') }}/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('admin/assets') }}/js/theme.init.js"></script>

</body>
</html>
