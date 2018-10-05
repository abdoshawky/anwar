<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Anwar</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Anwar
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @if(auth()->check())
                            <div class="dropdown">
                              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Normal
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="nav-link" href="{{ url('/categories/normal') }}">Categories</a></li>
                                <li><a class="nav-link" href="{{ url('/titles/normal') }}">Titles</a></li>
                                <li><a class="nav-link" href="{{ url('/sections/normal') }}">Sections</a></li>
                                <li><a class="nav-link" href="{{ url('/data/normal') }}">Data</a></li>
                              </div>
                            </div>

                            <div class="dropdown" style="margin: 0 10px;">
                              <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Up-Normal
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="nav-link" href="{{ url('/categories/upnormal') }}">Categories</a></li>
                                <li><a class="nav-link" href="{{ url('/titles/upnormal') }}">Titles</a></li>
                                <li><a class="nav-link" href="{{ url('/sections/upnormal') }}">Sections</a></li>
                                <li><a class="nav-link" href="{{ url('/data/upnormal') }}">Data</a></li>
                              </div>
                            </div>
                            <!-- Authentication Links -->
                            
                            <li><a class="nav-link" href="{{ url('/password/change') }}">Change password</a></li>
                            <li><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
                        @else
                            <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                        @endif
                    </ul>
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if(session()->has('success'))
                <div class="alert alert-success text-center">
                    {!! session()->get('success') !!}
                    {!! session()->forget(['success']) !!}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger text-center">
                    {!! session()->get('error') !!}
                    {!! session()->forget(['error']) !!}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
