<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Basic</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <script src="{{ url('js/app.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/yn2akddzaggsi9tok9i3yngvmmg2d5daq3pen1i8bzkcbrhx/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    {{-- Map --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Supes Tracker</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar"
                            aria-label="Pesquisar">
                    </form>
                </ul>
                <ul class="navbar-nav  my-2 my-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('supes') }}" class="btn btn-primary">Supes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/supes-map') }}" class="btn btn-primary">Supes Map</a>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item ml-3">
                                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item ml-3">
                                <a href="{{ route('login') }}" class="btn btn-light ">Login</a>
                            </li>
                            <li class="nav-item ml-2">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary border-light">Register</a>
                                @endif
                            </li>
                        @endauth
                    @endif

                </ul>
            </div>
        </div>

    </nav>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>

<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3 bg-primary">© 2020 Copyright:
        <a href="https://github.com/PedroPMS" class="text-white"> PedroPMS</a>
    </div>
</footer>