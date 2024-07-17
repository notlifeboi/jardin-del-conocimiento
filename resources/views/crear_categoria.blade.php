@role('administrador')
@extends ('plantilla')
@section('contenido')
<h1 style="font-family: 'italic';">Crear una Categoria</h1>
<div class="container" style="font-family: 'italic';">
    <div class="row">
      <div class="col col-6 offset-3">
        <form class="form" action="/categorias" method="POST">
            @csrf
          <div class="mb-3">
            <label class="form-label">Nombre de la Categoria</label>
            <input type="text" class="form-control" name="NombreC">
          </div>
          <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="text" class="form-control" name="imgC">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
</div>
@endsection
@endrole