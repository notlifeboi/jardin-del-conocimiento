<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
            body {
            margin: 0;
            padding: 0;
            }
            
            #contenedorLateral {
            position: fixed;
            top: 0;
            left: -600px;
            width: 600px;
            height: 100%;
            background-color: #f0f0f0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            transition: left 0.3s;
            z-index: 999;
            }

            #contenedorLateral.abierto {
            left: 0px;
            }

            #cerrarBtn {
            position: relative;
            margin-top: 10px;
            margin-right: 10px;
            margin-left: 560px;
            }

            #cerrarBtn:hover {
            cursor: pointer;
            }

            .comentario{
                display: flex;
                margin-left:20px;
                margin-right: 30px;
                margin-bottom: 15px;
                font-size:18px;
                width: 523px;
            }

            .comentario p{
                word-wrap: break-word;
                overflow-wrap: break-word;
                white-space: pre-wrap;
                word-break: break-word;
            }

            .comentario img{
                margin: 5px;
                width: 70px;
                height: 70px;
            }

            .comentario button{
                padding: 0px;
                background: none;
                border: none;
                font-weight: bold;
            }

            .respuesta{
                display: flex;
                margin-left:60px;
                margin-bottom: 15px;
                font-size:18px;
                width: 523px;
            }

            .respuesta p{
                word-wrap: break-word;
                overflow-wrap: break-word;
                white-space: pre-wrap;
                word-break: break-word;
            }

            .respuesta img{
                margin: 5px;
                width: 70px;
                height: 70px;
            }

            .respuesta button{
                padding: 0px;
                background: none;
                border: none;
                font-weight: bold;
            }

            .fa-pen-to-square{
                color: #ed8030;
            }
            
            .fa-pen-to-square:hover{
                color: #ca5e12;
            }

            .fa-trash-can{
                color: #ff3838;
            }
            
            .fa-trash-can:hover{
                color: #FF0000;
            }

            .fa-reply{
                color:#51c332;
            }

            .fa-reply:hover{
                color:#38b715;
            }
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"></a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
