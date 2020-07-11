<header class="header navbar-dark bg-primary">
    <div class="container">
        <nav class="nav navbar">
            <div class="col">
                @guest
                    <div></div>
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