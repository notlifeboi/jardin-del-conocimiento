<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jardin del conocimiento</title>
    @yield ('estilo')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
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
            height: 100vh;
            background-color: #ffff;
            color: black;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            transition: left 0.3s;
            z-index: 999;
            border-right: 5px solid #356047;
            border-bottom: 5px solid #356047;
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
                width: 513px;
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

            #mostrarBtn {
              border: none;
              background-color: transparent;
              color: white;
              padding: 0;
              cursor: pointer;
            }

            li {
              list-style-type: none;
            }

            .dropdown-usuario{
              display: flex;
            }

            .btn-search {
                background-color: #1C622D;
                border-color: #1C622D;
                color: #fff;
            }

            .btn-search:hover {
              background-color: #6A994E;
              border-color: #6A994E;
              color: #fff;
            }   
        </style>
  </head>
  <body>
    <!--<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" style="background-color: #A7C957 !important">
        <div class="container-fluid" style="background-color: #A7C957"  >
          <a class="navbar-brand" style="font-family:'Geneva'" href="/home">Jardin del conocimiento</a>
          <span class="nav-separator"></span> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav"style="font-family:'verdana';">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" style="color:#ffff !important"aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link"style="color:#ffff !important" href="/categorias">Categorias</a>
            </ul>
          </div>
        </div>
      </nav>-->
      <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
          <li>
          <a class="navbar-brand" href="/"><img style="width: 60px;height: 60px;" src={{ asset('img/logo.png') }} alt="logo"></a>
          </li>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fa-solid fa-bars fa-xl" style="color: #ffffff;"></i></span> 
          </button>
          <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
          <div class="me-auto mt-0 mt-md-4">
            <form action="{{ route('buscar') }}" method="GET" class="d-flex col-lg-12 col-md-12" role="search">
              <input class="form-control me-2" type="search" name="buscar" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-search" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </form>
            </div>
            <ul class="navbar-nav mt-3 ms-auto mb-3 mb-lg-3">
              <li class="nav-item me-3">
                <a class="nav-link" href="/categorias" id="text1">Categorias</a>
              </li>
              <li>
              @auth
    <button class="mt-3 mb-3 me-5" id="mostrarBtn">Conversación</button>
    <div id="contenedorLateral">
      <div style="background-color: #356047; height: 7vh; width: 100%">
        <button style="margin-right:10px; margin-top:5px; color: white; border: none; font-weight: bold; background: transparent;" id="cerrarBtn">X</button>
      </div>
        <div id="listaComentarios" style="height: 80vh; overflow-y: auto">
        @foreach($comments as $comment)
            <div>
                @if($comment->type=='comentario')
                <div class="comentario">
                    <div style="display: flex; align-items: center; align-content: center; margin-right: 12px">
                        <img style="width: 80px; height: 80px; object-fit: cover; border-radius: 100%;" src="{{$comment->user->picture}}" alt="foto">
                        </div>
                        <div>
                        <div style="display: flex; width: 100%; height: 20px;">
                            <p style="font-weight: bold;">{{ $comment->user->name }}</p>
                            <p class="ms-1" >dice:</p>
                        </div>
                        <div>
                        <p class="mt-2">{{ $comment->content }}</p>
                        @if(Auth::id() == $comment->user_id)
                        <div style="display:flex">
                        <button onclick="mostrarTextarea({{ $comment->id }})"><i class="fa-solid fa-pen-to-square" style="margin-right:7px;"></i></button>
                        <form action="{{ route('comments.delete', $comment) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                        </div>
                        @else
                            <button onclick="mostrarTextareaC({{ $comment->id }})"><i class="fa-solid fa-reply"></i></button>
                        @endif
                    </div>
                    </div>
                    </div>
                    @if(Auth::id() == $comment->user_id)
                    <div class="comentario">
                        <form id="commentForm{{$comment->id}}" action="{{ route('comments.update', $comment) }}" method="POST" style="display: none;">
                            @csrf
                            @method('PUT')
                            <div style="margin-left: 102px; display: flex; align-items: center;">
                            <textarea id="textocomentario" style="width: 350px; border-radius: 10px; padding-left: 25px; border: 2px solid #356047;" name="content" required>{{ $comment->content }}</textarea>
                            <button id="botoncomentario" type="submit" style="border-radius: 100%; margin-left:20px; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fa-solid fa-pencil"></i></button>
                            </div>
                        </form>
                    </div>
                    @else
                    <div class="comentario">
                        <form id="commentFormC{{$comment->id}}" action="{{ route('comments.reply', $comment) }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <div style="margin-left: 102px; display: flex; align-items: center;">
                                <textarea name="content" style="width: 350px; border-radius: 10px; padding-left: 25px; border: 2px solid #356047" required></textarea>
                                <button name="type" value='respuesta' type="submit" style="border-radius: 100%; margin-left:20px; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fa-solid fa-pencil"></i></button>
                            </div>
                        </form>
                    </div>
                    @endif
                @endif
                @foreach($comment->respuestasOrdenadas() as $respuesta)
                <div>
                  @if($respuesta->type=='respuesta')
                <div class="respuesta">
                    <div style="display: flex; align-items: center; align-content: center; margin-right: 12px">
                    <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%;" src="{{$respuesta->user->picture}}" alt="foto">
                    </div>
                    <div>
                    <div style="display: flex; width: 100%; height: 20px;">
                            <p style="font-weight: bold;">{{ $respuesta->user->name }}</p>
                            <p class="ms-1" >respondió:</p>
                        </div>
                        <div>
                        <p class="mt-2">{{ $respuesta->content }}</p>
                        @if(Auth::id() == $respuesta->user_id)
                        <div style="display:flex">
                        <button onclick="mostrarTextareaR({{ $respuesta->id }})"><i class="fa-solid fa-pen-to-square" style="margin-right:7px;"></i></button>
                        <form action="{{ route('comments.delete', $respuesta) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>
                    @else
                    <button onclick="mostrarTextareaRC({{ $respuesta->id }})"><i class="fa-solid fa-reply"></i></button>
                    @endif
                    </div>
                    </div>
                </div>
                @if(Auth::id() == $respuesta->user_id)
                <div class="respuesta">
                <form id="commentFormR{{$respuesta->id}}" action="{{ route('comments.update', $respuesta) }}" method="POST" style="display: none;">
                            @csrf
                            @method('PUT')
                            <div style="margin-left: 82px; display: flex; align-items: center;">
                            <textarea id="textorespuesta" style="width: 350px; border-radius: 10px; padding-left:25px; border: 2px solid #356047;" name="content" required>{{ $respuesta->content }}</textarea>
                            <button id="botonrespuesta" type="submit" style="border-radius: 100%; margin-left:20px; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fa-solid fa-pencil"></i></button>
                            </div>
                        </form>    
                    </div>
                    @else
                    <div class="respuesta">
                        <form id="commentFormRC{{$respuesta->id}}" action="{{ route('comments.reply', $respuesta) }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $respuesta->id }}">
                            <div style="margin-left: 82px; display: flex; align-items: center;">
                            <textarea style="width: 350px; border-radius: 10px; padding-left:25px; border: 2px solid #356047;" name="content" required></textarea>
                            <button name="type" value='respuesta' type="submit"style="border-radius: 100%; margin-left:20px; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fa-solid fa-pencil"></i></button>
                        </div>
                        </form>
                    </div>
                    @endif
                    @endif
                    </div>
            @endforeach
                </div>
        @endforeach
        </div>
        <div id="cajaComentario" style="height: 12vh; display: flex; align-items: center;">
            <form style="width: 100%" id="formularioComentario" action="{{ route('comments.store') }}" method="POST">
                @csrf
                <div style="display: flex; align-items: center;">
                    <textarea id="contenidoComentario" name="content" style="width: 85%; margin-left: 20px; padding-left: 25px; border-radius: 10px; border: 2px solid #356047" placeholder="Escribe tu comentario aquí"></textarea>
                    <button type="submit" name="type" value='comentario' style="border: none; margin-left: 10px; border-radius: 100%; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
@endauth
</li>
<li>
@guest
  @if (Route::has('login'))
    <li class="nav-item me-3">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
  @endif

  @if (Route::has('register'))
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
  @endif
  @else
  @auth 
    <div class="dropdown-usuario">
      
      <div>
        <p id="navbarDropdown" style="color:white;"class="dropdown-toggle ms-lg-5 mt-3 mb-3" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>{{ Auth::user()->name }}</p>
                                    <div class="dropdown">
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a style="color: black;" class="dropdown-item" href="/profile/{{ Auth::user()->id }}/edit">Editar perfil</a></li>
                                        <li><a style="color: black;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                          {{ __('Cerrar sesión') }}
                                        </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                      </li>
                                    </ul>
                                    </div>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
            
                                    @endif
                                    </div>
                                    
                                @endauth
              </li>
</li>
            </ul>
            <img class="dropdown-toggle d-none d-lg-block ms-3 mt-2 mb-2" style="border: solid 2px; border-color: #1C622D; width: 40px; height: 40px; object-fit: cover; border-radius: 50%;" src="{{Auth::user()->picture}}" alt="foto">
            @endguest
        </div>
      </nav>
      <div>
        @yield ('contenido')
      </div>
        <footer class="text-center text-lg-start text-white mt-3  " style="background-color: rgba(27,67,50,1);margin-top:auto !important;">
          <div class="container p-2 pb-0">
            <section class="mb-4 text-center">
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 href="#!"
                 role="button"
                 ><i class="fab fa-facebook-f"></i>
                </a>
                <a
                 class="btn btn-outline-light btn-floating m-1"
                 href="#!"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 href="#!"
                 role="button"
                 ><i class="fab fa-whatsapp"></i
                ></a>
            </section>
          </div>  
          <div
               class="text-center p-3"
               style="background-color: rgba(0, 0, 0, 0.2)"
               > © 2024 Jardin de Conocimiento
          </div>
        </footer>
    @yield ('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <script>
    var mostrarBtn = document.getElementById('mostrarBtn');
    var cerrarBtn = document.getElementById('cerrarBtn');
    var contenedorLateral = document.getElementById('contenedorLateral');
    var textocomentario = document.getElementById('textocomentario');
    var botoncomentario = document.getElementById('botoncomentario');

    mostrarBtn.addEventListener('click', function() {
        contenedorLateral.classList.add('abierto');
    });

    cerrarBtn.addEventListener('click', function() {
        contenedorLateral.classList.remove('abierto');
    });

    function mostrarTextarea(commentId) {
        const form = document.getElementById('commentForm' + commentId);
        form.style.display = (form.style.display === 'none') ? 'block' : 'none';
    }

    function mostrarTextareaR(respuestaId) {
        const form = document.getElementById('commentFormR' + respuestaId);
        form.style.display = (form.style.display === 'none') ? 'block' : 'none';
    }

    function mostrarTextareaC(commentId) {
        const form = document.getElementById('commentFormC' + commentId);
        form.style.display = (form.style.display === 'none') ? 'block' : 'none';
    }

    function mostrarTextareaRC(commentId) {
        const form = document.getElementById('commentFormRC' + commentId);
        form.style.display = (form.style.display === 'none') ? 'block' : 'none';
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>