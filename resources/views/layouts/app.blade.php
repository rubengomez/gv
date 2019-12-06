<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Garro') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <img src="http://127.0.0.1:8000/img/garro.png" style="width: 3%; margin-right: 1%" alt="">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Garro', 'Garro') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                            <!--
                            @ if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @ endif
                            -->
                        @else

                        <li class="nav-item">
                            <a class="nav-link" href="/agenda">{{ __('Agenda') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users">{{ __('Clientes') }}</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="/verify">{{ __('Formularios') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Reportes <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a style="margin-left: 5%;font-weight: 600;">{{ __('Fisico Mecanica') }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/fisico">{{ __('Reporte Mensual') }}</a>
                                <a style="margin-left: 5%;font-weight: 600;">{{ __('Emisiones') }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/emissions">{{ __('Reporte Semestral') }}</a>
                                <a class="dropdown-item" href="/emissions">{{ __('Desgloce') }}</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Configuraciones <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/axes">{{ __('Ejes') }}</a>
                                <a class="dropdown-item" href="/engines">{{ __('Motores') }}</a>
                                <a class="dropdown-item" href="/tests">{{ __('Pruebas') }}</a>
                                <a class="dropdown-item" href="/rejects">{{ __('Rechazos') }}</a>
                                <a class="dropdown-item" href="/roles">{{ __('Roles') }}</a>
                                <a class="dropdown-item" href="/services">{{ __('Servicios') }}</a>
                            </div>
                        </li>
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<style media="screen">
.navbar-light .navbar-nav .nav-link {
color: #00349a;
}
.navbar-light .navbar-brand {
    color: rgb(1, 51, 152);
}
</style>
