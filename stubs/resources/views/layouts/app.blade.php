<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>

<body>
    <div id="app">
        <nav class="uk-navbar-container uk-margin" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#"><span uk-icon="grid"></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <!-- Authentication Links -->
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <span uk-icon="sign-in" class="uk-margin-small-right"></span>
                                            {{ __('Login') }}
                                        </a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">
                                                <span uk-icon="file-edit" class="uk-margin-small-right"></span>
                                                {{ __('Register') }}
                                            </a>
                                        </li>
                                    @endif
                                @else
                                    <li class="uk-nav-header">
                                        <span uk-icon="user" class="uk-margin-small-right"></span>
                                        Hi, {{ Auth::user()->name }}
                                    </li>

                                    <li class="uk-nav-divider"></li>

                                    <li uk-tooltip="Logout">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span uk-icon="sign-out" class="uk-margin-small-right"></span>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" uk-hidden>
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <!-- App -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
