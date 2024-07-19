@extends ('plantilla')
@section('estilo')
<link rel="stylesheet" href="{{ asset('css/planta.css') }}">
<style>

    #botonEditar{
        background-color: #6A994E;
        color: white;
    }

    #botonEditar:hover{
        background-color: #A7C957;
    }

    #botonEliminar{
        background-color: #1B4332;
        color: white;
    }

    #botonEliminar:hover{
        background-color: #356047;
    }

    #contenidoComentario::placeholder {
        color: black;
        font-size: 17px;
    }
</style>
@endsection
@section('contenido')
<div class="container" style="font-family: 'italic';">
  <div class="row">
    <div class="col col-12 col-md-12 planta-info">
      <div class="row">
        <div class="col col-12 col-sm-12 col-md-4 col-lg-3 " style=" display: flex;justify-content: center;align-items: center;">
          <img src="{{ asset('img/plantas/' . $plantasinfo->img) ?? 'placeholder.jpg' }}" alt="{{ $plantasinfo->img }}" class="img-fluid my-1">
        </div>
        <div class="col col-12 col-lg-7 col-md-8 mt-5"style>
          <h3 style="font-weight: bold;">{{$plantasinfo->nombre}}</h3>
          <h3 style="color: dimgray;font-size: 15px;">{{$plantasinfo->nombre_cientifico}}</h3>
          <h2 style="font-size: 15px;">{{$plantasinfo->descripcion1}}</h2>
          <h2 style="font-size: 15px;">{{$plantasinfo->descripcion2}}</h2>
        </div>
        
      </div>
      <div class="infoD">
        <h3>Descripción de la Planta</h3>
        <p>{{$plantasinfo->descripcion1}}</p>
        <p>{{$plantasinfo->descripcion2}}</p>
      </div>
      <div class="info">
        <h3>Caracteristicas de la Planta</h3>
        <p>{{$plantasinfo->caracteristicas1}}</p>
        <p>{{$plantasinfo->caracteristicas2}}</p>
      </div>
      <div class="info">
        <h3>Curiosidades de la Planta</h3>
        <p>{{$plantasinfo->datos_claves1}}</p>
        <p>{{$plantasinfo->datos_claves2}}</p>
      </div>
    </div>
    @role('administrador')
    <div>
    <a id="botonEditar" href="/plantas/{{$plantasinfo->id}}/edit" class="btn col-12 my-1">Editar</a>
    <form action="/plantas/{{$plantasinfo->id}}" method="post">
      @csrf
      @method('DELETE')
      <button id="botonEliminar" type="submit" class="btn col-12 my-1">Eliminar</button>
    </form>
    </div>
    @endrole
  </div>
  <div style="border-top: 1px solid grey; margin-top: 4vh; margin-bottom: 10vh;">
  </div>
  <p style="font-weight: 500; font-size: 21px;">Comentarios</p>
  <div style="margin-bottom: 30px">
            <form style="width: 100%" id="formularioComentario" action="{{ route('comments.store') }}" method="POST">
                @csrf
                <div style="display: flex; align-items: center;">
                    <input name="plantaid" value="{{$plantasinfo->id}}" type="hidden">
                    @if(auth()->check())
                        <textarea id="contenidoComentario" name="content" style="padding-left: 25px; width: 100%; border-radius: 10px; border: 2px solid #356047" placeholder="Escribe tu comentario aquí"></textarea>
                        <button type="submit" name="type" value='comentarioP' style="border: none; margin-left: 10px; border-radius: 100%; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fas fa-paper-plane"></i></button>
                        @else
                        <textarea id="contenidoComentario" disabled name="content" style="padding-left: 25px; width: 100%; border: none" placeholder="Inicia sesión para escribir y compartir tus comentarios con la comunidad"></textarea>
                    @endif
                </div>
            </form>
        </div>
        <div id="listaComentarios" style="max-height: 100vh; margin-bottom: 40px; overflow-y: auto">
        @foreach($comments as $comment)
            <div>
                @if($comment->type=='comentarioP' and $comment->plantas_id==$plantasinfo->id)
                <div class="comentario">
                    <div style="display: flex; align-items: center; align-content: center; margin-right: 12px">
                        <img style="width: 80px; height: 80px; object-fit: cover; border-radius: 100%;" src="{{$comment->user->picture}}" alt="foto">
                        </div>
                        <div>
                        <div style="display: flex; width: 100%; height: 20px;">
                            <p style="font-weight: bold;">{{ $comment->user->name }}</p>
                        </div>
                        <div>
                        <p class="mt-2">{{ $comment->content }}</p>
                        @if(auth()->check())
                            @if(Auth::id() == $comment->user_id)
                        <div style="display:flex">
                        <button onclick="mostrarTextArea({{ $comment->id }})"><i class="fa-solid fa-pen-to-square" style="margin-right:7px;"></i></button>
                        <form action="{{ route('comments.delete', $comment) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                        </div>
                        @else
                            <button onclick="mostrarTextAreaC({{ $comment->id }})"><i class="fa-solid fa-reply"></i></button>
                        @endif
                    @endif
                    </div>
                    </div>
                    </div>
                    @if(auth()->check())
                    @if(Auth::id() == $comment->user_id)
                    <!--EDITAR COMENTARIO-->
                    <div class="comentarioEditarP">
                        <form id="commentForm{{$comment->id}}" action="{{ route('comments.update', $comment) }}" method="POST" style="display: flex; align-items: center; width: 100%;" hidden>
                            @csrf
                            @method('PUT')
                            <input name="plantaid" value="{{$plantasinfo->id}}" type="hidden">
                            <textarea id="textocomentario" style="width: 100%; border-radius: 10px; padding-left: 25px; border: 2px solid #356047;" name="content" required>{{ $comment->content }}</textarea>
                            <button id="botoncomentario" type="submit" style="border: none; border-radius: 100%; margin-left:10px; height: 40px; width: 40px; background-color: #356047; color: white;">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </form>
                    </div>
                    @else
                    <div class="comentarioEditarPC">
                        <form id="commentFormC{{$comment->id}}" action="{{ route('comments.reply', $comment) }}" method="POST"  style="display: flex; align-items: center; width: 100%;" hidden>
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <input name="plantaid" value="{{$plantasinfo->id}}" type="hidden">
                                <textarea name="content" style="width: 100%; border-radius: 10px; padding-left: 25px; border: 2px solid #356047" required></textarea>
                                <button name="type" value='respuestaP' type="submit" style="border: none; border-radius: 100%; margin-left:20px; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fa-solid fa-pencil"></i></button>
                        </form>
                    </div>
                    @endif
                    @endif
                @endif
                @foreach($comment->respuestasOrdenadasP() as $respuesta)
                <div>
                @if($respuesta->type=='respuestaP' and $respuesta->plantas_id==$plantasinfo->id)
                <div class="respuesta">
                    <div style="display: flex; align-items: center; align-content: center; margin-right: 12px">
                    <img style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%;" src="{{$respuesta->user->picture}}" alt="foto">
                    </div>
                    <div>
                    <div style="display: flex; width: 100%; height: 20px;">
                            <p style="font-weight: bold;">{{ $respuesta->user->name }}</p>
                        </div>
                        <div>
                        <p class="mt-2">{{ $respuesta->content }}</p>
                        @if(auth()->check())
                        @if(Auth::id() == $respuesta->user_id)
                        <div style="display:flex">
                        <button onclick="mostrarTextAreaR({{ $respuesta->id }})"><i class="fa-solid fa-pen-to-square" style="margin-right:7px;"></i></button>
                        <form action="{{ route('comments.delete', $respuesta) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>
                    @else
                    <button onclick="mostrarTextAreaRC({{ $respuesta->id }})"><i class="fa-solid fa-reply"></i></button>
                    @endif
                    @endif
                    </div>
                    </div>
                </div>
                @if(auth()->check())
                <!--EDITAR RESPUESTA-->
                @if(Auth::id() == $respuesta->user_id)
                <div class="respuestaEditarP">
                <form id="commentFormR{{$respuesta->id}}" action="{{ route('comments.update', $respuesta) }}" method="POST" style="display: flex; align-items: center; width: 100%;" hidden>
                            @csrf
                            @method('PUT')
                            <textarea id="textorespuesta" style="width: 100%; border-radius: 10px; padding-left:25px; border: 2px solid #356047;" name="content" required>{{ $respuesta->content }}</textarea>
                            <button id="botonrespuesta" type="submit" style="border: none; border-radius: 100%; margin-left:20px; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fa-solid fa-pencil"></i></button>
                        </form>    
                    </div>
                    @else
                    <div class="respuestaEditarPC">
                        <form id="commentFormRC{{$respuesta->id}}" action="{{ route('comments.reply', $respuesta) }}" method="POST" style="display: flex; align-items: center; width: 100%;" hidden>
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $respuesta->id }}">
                            <input name="plantaid" value="{{$plantasinfo->id}}" type="hidden">
                            <textarea style="width: 100%; border-radius: 10px; padding-left:25px; border: 2px solid #356047;" name="content" required></textarea>
                            <button name="type" value='respuestaP' type="submit"style="border: none; border-radius: 100%; margin-left:20px; height: 40px; width: 40px; background-color: #356047; color: white;"><i class="fa-solid fa-pencil"></i></button>
                        </form>
                    </div>
                    @endif
                    @endif
                    @endif
                    </div>
            @endforeach
                </div>
        @endforeach
        </div>
</div>
@endsection