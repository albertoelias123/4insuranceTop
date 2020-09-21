

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a premium responsive admin dashboard template with great features.">
    <meta name="keywords" content="responsive, admin template, dashboard template, bootstrap 4, laravel, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @lang('auth.title_register')</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->
</head>
<body class="vertical-layout">
<!-- Start Containerbar -->
<div id="containerbar" class="containerbar authenticate-bg">
    <!-- Start Container -->
    <div class="container">
        <div class="auth-box register-box">
            <!-- Start row -->
            <div class="row no-gutters align-items-center justify-content-center">
                <!-- Start col -->
                <div class="col-md-6 col-lg-5">
                    <div class="auth-box-left">
                        <div class="card">
                            <div class="card-body">
                                <h4>@lang('auth.reg_initialMessage')</h4>
                                <div class="auth-box-icon">
                                    <img src="assets/images/authentication/auth-box-icon.svg" class="img-fluid" alt="auth-box-icon">
                                </div>
                                <div class="auth-box-logo">
                                    <img src="https://4training.com.br/images/logotipia.png" class="img-fluid " alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start end -->
                <!-- Start col -->
                <div class="col-md-6 col-lg-5">
                    <!-- Start Auth Box -->
                    <div class="auth-box-right">
                        <div class="card">
                            <div class="card-body">
                                <x-jet-validation-errors class="mb-4 text-danger" />
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <h4 class="text-primary mb-4">@lang('auth.reg_sign')</h4>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="username" placeholder="{{__('auth.reg_nameplaceholder')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="{{__('auth.login_emailplaceholder')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="{{__('auth.login_pwdplaceholder')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control" id="re-password" placeholder="{{__('auth.reg_repwdplaceholder')}}"  required>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                <input required type="checkbox" class="custom-control-input" id="terms">
                                                <label class="custom-control-label font-14" for="terms">@lang('auth.reg_terms') 4Insurance</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg btn-block font-18">@lang('auth.button_reg_sign')</button>
                                </form>
                                <p class="mb-0 mt-3">@lang('auth.reg_account') <a href="{{route('login')}}"> @lang('auth.reg_entrar')</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Auth Box -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Container -->
</div>
<!-- End Containerbar -->
<!-- Start JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<!-- End js -->
</body>
</html>

