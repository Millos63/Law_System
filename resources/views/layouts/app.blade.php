<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('pap.name', 'MEEC') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background-color: #f5ebdc;
        }

        .navbar {
            background: linear-gradient(45deg, #B8860B, #ffeb8b) !important; /* Golden gradient for header */
            border-bottom: 2px solid #ffeb8b;
        }

        .navbar .navbar-brand, .navbar .nav-link, .navbar .dropdown-item {
            color: #fff !important;
        }

        .navbar .navbar-brand:hover, .navbar .nav-link:hover, .navbar .dropdown-item:hover {
            color: #f5ebdc !important;
        }

        .navbar-toggler {
            border-color: #f5ebdc;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28245, 235, 220, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .dropdown-menu {
            background: linear-gradient(45deg, #B8860B, #ffeb8b);
        }

        .dropdown-item {
            color: #f5ebdc !important;
        }

        .dropdown-item:hover {
            background-color: #ffeb8b;
            color: #fff !important;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/expedients') }}">
                    MEEC
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    @if(Auth::check())
                    <!--NAVLINK CON MIS RUTAS-->
                        <ul class="navbar-nav me-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('expedients.index') }}">{{__('Expedientes')}}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tasks.index') }}">{{__('Tareas')}}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('clients.index') }}">{{__('Clientes')}}</a>
                            </li>
                            <!--ESTE ES UNA COPIA DE NUESTRO EXPEDIENTES PRINCIPAL-->
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('expedients-all.index') }}">{{__('ExpedientesAll')}}</a>
                            </li>
                            -->
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('judgeds.index') }}">{{__('Juzgados')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('matters.index') }}">{{__('Materias')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('judments.index') }}">{{__('Juicios')}}</a>
                            </li>

                            <!--Menus ocultos-->
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('observations.index') }}">{{__('Observaciones')}}</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pieces.index') }}">{{__('Piezas')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pieces-files.index') }}">{{__('ArchivosPieza')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pieces-promotions-accords.index') }}">{{__('PromocionesAcuerdosPieza')}}</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('expedient-files.index') }}">{{__('ArchivosExpediente')}}</a>
                            </li>
                            -->



                        </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item" style="padding-top: 8px; padding-left:10px">
                                <a>Usuario: </a>
                            </li>   
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #000000 !important;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
