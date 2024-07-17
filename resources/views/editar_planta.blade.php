@role('administrador')
@extends ('plantilla')
@section('contenido')
  <div class="container my-5 " style="font-family: 'italic';">
    <div class="row">
      <div class="col col-6 offset-3">
        <h1>Editar {{$infoEditarP->nombre}} </h1>
        <form class="form" action="/plantas/{{$infoEditarP->id}}" method="POST">
            @csrf
            @method('put')
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" value="{{$infoEditarP->nombre}}" class="form-control" name="nombreEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre Cientifico</label>
            <input type="text" value="{{$infoEditarP->nombre_cientifico}}" class="form-control" name="nombrecEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Caracteristicas</label>
            <input type="text" value="{{$infoEditarP->caracteristicas1}}" class="form-control" name="caracteristicasEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Caracteristicas (Opcional)</label>
            <input type="text" value="{{$infoEditarP->caracteristicas2}}" class="form-control" name="caracteristicasEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" value="{{$infoEditarP->descripcion1}}" class="form-control" name="descripcionEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Descripcion (Opcional)</label>
            <input type="text" value="{{$infoEditarP->descripcion2}}" class="form-control" name="descripcionEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Datos Claves</label>
            <input type="text" value="{{$infoEditarP->datos_claves1}}" class="form-control" name="datos_clavesEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Datos Claves (Opcional)</label>
            <input type="text" value="{{$infoEditarP->datos_claves2}}" class="form-control" name="datos_clavesEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="text" value="{{$infoEditarP->img}}" class="form-control" name="imgE">
          </div>
          <div class="mb-3">
            <label class="form-label">Categorias</label>
            <input type="number" value="{{$infoEditarP->id_categoria}}" class="form-control" name="categoriaEditp">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
{{-- <h1>Editar {{$infoEditarP->nombre}} </h1>
        <form class="form" action="/plantas/{{$infoEditarP->id}}" method="POST">
            @csrf
            @method('put')
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" value="{{$infoEditarP->nombre}}" class="form-control" name="nombreEditp">
          <div class="mb-3">
            <label class="form-label">Nombre Cientifico</label>
            <input type="text" value="{{$infoEditarP->nombre_cientifico}}" class="form-control" name="nombrecEditp">
          </div>
          <div class="mb-3">
            <label class="form-label">Caracteristicas</label>
            <input type="text" value="{{$infoEditarP->caracteristicas}}" class="form-control" name="caracteristicasEditp">
          <div class="mb-3">
            <div class="mb-3">
              <label class="form-label">Datos Claves</label>
              <input type="text" value="{{$infoEditarP->datos_claves}}" class="form-control" name="datos_clavesEditp">
            <div class="mb-3">
              <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" value="{{$infoEditarP->descripcion}}" class="form-control" name="descripcionEditp">
              <div class="mb-3">
          <div class="mb-3">
            <label class="form-label">Categorias</label>
            <input type="number" value="{{$infoEditarP->id_categoria}}" class="form-control" name="categoriaEditp">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form> --}}
@endrole