@extends ('plantilla')
@section('estilo')
<link rel="stylesheet" href="{{ asset('css/categorias.css') }}">
@endsection
@section('contenido')
    <h1>Categorias</h1>
    <div class="container">
        @role('administrador')
        <a href="/categorias/create"><button style="font-family: 'italic';"class="btn btn-warning my-3">Crear Categoria</button></a>
        @endrole
        <!--<a href="/plantas/create"><button style="font-family: 'italic';"class="btn btn-warning my-3">Crear Planta</button></a>-->
        <div class="row">
            @foreach($categoriasinfo as $info)
                <div class="col col-12 col-lg-3 col-md-6 col-ms-6 my-2">
                    <div class="card border-success">
                        <img src="\img\categorias\{{$info->img}}" class="card-img-top" alt="Acuáticas">
                        <div class="card-body">
                            <h5 class="card-title col-12    ">{{$info->nombre}}</h5>
                            <a href="/categorias/{{$info->id}}" class="btn btn-outline-success col-12" style="font-family: 'italic';">ver</a>
                            @role('administrador')
                            <a href="/categorias/{{$info->id}}/edit" class="btn btn-primary col-12 my-1 "style="font-family: 'italic';">Editar</a>
                            <form action="/categorias/{{$info->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger col-12 my-1" style="font-family: 'italic';">Eliminar</button>
                            </form>
                            @endrole
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
@endsection