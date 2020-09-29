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
              <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
              </a>
            </div>

            <div class="uk-navbar-right">
              <ul class="uk-navbar-nav">
                <!-- Authentication Links -->
                @guest
                  <li>
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>

                  @if (Route::has('register'))
                    <li>
                      <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                  @endif
                @else
                  <li>
                    <a href="#">
                        <span uk-icon="icon: user;" class="uk-margin-small-right"></span>
                        Hi, {{ Auth::user()->name }}
                    </a>
                  </li>

                  <li uk-tooltip="Logout">
                    <a
                    href="{{ route('logout') }}"
                    onclick="
                      event.preventDefault();
                      document.getElementById('logout-form').submit();
                    ">
                      <span uk-icon="icon: sign-out"></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>
                @endguest
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
