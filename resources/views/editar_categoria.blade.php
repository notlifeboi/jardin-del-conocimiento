@role('administrador')
@extends ('plantilla')
@section('contenido')
<h1 style="font-family: 'italic';">Editar Categoria</h1>
<div class="container" style="font-family: 'italic';">
    <div class="row">
        <form class="form" action="/categorias/{{$infoEditar->id}}" method="POST">
            @csrf
            @method('put')
          <div class="mb-3">
            <label class="form-label">Nombre Categoria</label>
            <input type="text" value="{{$infoEditar->nombre}}" class="form-control" name="nombreE">
          </div>
          <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="text" value="{{$infoEditar->img}}" class="form-control" name="imgE">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
@endsection
@endrole