<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header class="header navbar-dark bg-primary">
            <div class="container">
                <nav class="nav navbar">
                    <div class="col">
                        @guest

                        @else
                            <div class="btn-group">
                                <button class="btn btn-outline-light bg-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item disabled" href="#">Home</a>
                                    <a class="dropdown-item disabled" href="#">Evaluates</a>
                                    <a class="dropdown-item disabled" href="#">My sciences</a>
                                </div>
                            </div>
                        @endguest
                    </div>
                    <div class="col"></div>
                    <div class="col-2 text-right">
                        @guest
                            <button type="button" onclick="window.location.href='{{ route('login') }}'" class="btn btn-outline-light bg-primary">{{ __('Login') }}</button>
                        @else
                            <button type="submit" form="logout-form" class="btn btn-outline-light bg-primary">{{ __('Logout') }}</button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    {{-- <div id="app"> --}}
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> --}}
            {{-- <div class="container"> --}}

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> --}}
            {{-- </div> --}}
        {{-- </nav> --}}

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    {{-- </div> --}}
</body>
</html>
