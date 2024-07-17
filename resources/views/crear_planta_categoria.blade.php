@role('administrador')
@extends ('plantilla')
@section('contenido')
  <div class="container my-5" style="font-family: 'italic';">
    <div class="row">
      <div class="col col-6 offset-3">
        <h1>Crear una planta en {{$categoriasinfo->nombre}}: </h1>
        <form class="form" action="/plantas" method="POST">
            @csrf
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombrep">
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre Cientifico</label>
            <input type="text" class="form-control" name="nombre_cientificop">
          </div>
          <div class="mb-3">
            <label class="form-label">Caracteristicas</label>
            <input type="text" class="form-control" name="caracteristicasp">
          </div>
          <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcionp">
          </div>
          <div class="mb-3">
            <label class="form-label">Datos Claves</label>
            <input type="text" class="form-control" name="datos_clavesp">
          </div>
          <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="text" class="form-control" name="imgC">
          </div>
          <div class="mb-3">
            <input type="hidden" value="{{$categoriasinfo->id}}" class="form-control" name="id_categoria">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@endrole