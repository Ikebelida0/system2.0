<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
@include('layouts.auth.loginmodal')
@include('layouts.auth.registermodal')

<body class="body">
    <nav class="navbar navbar-expand-md navbar-light shadow ">
        <div class="container">
            <a class="navbar-brand" href="">SYSTEM1.0</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ">
                        @auth
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('/home') }}"> Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="modal"
                                        data-bs-target="#registerModal">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </div>
            @endif
        </div>
    </nav>
</body>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<style>
    .body {
        background-image: linear-gradient(rgba(245, 246, 252, 0.363), rgba(117, 19, 93, 0.555)), url('{{ asset('image/bg.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    .nav-link, .navbar-brand{
        color: white !important;
    }
</style>

</html>
