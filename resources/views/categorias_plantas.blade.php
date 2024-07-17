@extends('plantilla')
@section('estilo')
<link rel="stylesheet" href="{{ asset('css/plantas.css') }}">
@endsection
@section('contenido')
  <h1 style="font-family: 'italic';"  >{{$categoriasinfo->nombre}}</h1>
  <div class="container">
  @role('administrador')
    <a href="/categorias/crear/{{$categoriasinfo->id}}"><button style="font-family: 'italic';"class="btn btn-warning my-3">Crear planta</button></a>
  @endrole
    <div class="row">
        <?php $counter = 1; ?>
    @foreach($plantasinfo as $info)
      <div class="col col-12 col-sm-12 col-lg-3 col-md-6 my-2">
        <div class="subcategoria">
          <img src="{{ asset('img/plantas/' . $info->img) ?? 'placeholder.jpg' }}" alt="{{ $info->img }}">

          <div class="texto">
            <h3 style="font-family: 'italic';Font-size:20px;"><a href="/plantas/{{$info->id}}">{{$info->nombre}}</a></h3>
          </div>
        </div>
      </div>
      <div class="linear"></div>
      <?php if ($counter % 4 === 0) { ?> </div> <div class="linea"></div><div class="row"> <?php } ?>
      <?php $counter++; ?>
    @endforeach

    @if ($counter % 4 !== 0)
    </div>
    @endif
    </div>
  </div>
@endsection
