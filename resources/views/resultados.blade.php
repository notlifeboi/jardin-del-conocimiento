@extends('plantilla')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4">
            <h3>Resultados de la búsqueda para "{{$busqueda}}"</h3>

            <h4 class="mt-5 mb-3">Categorías:</h4>
            @if ($categorias->isEmpty())
                <p>No se encontraron categorías.</p>
            @else
                <ul>
                    @foreach ($categorias as $categoria)
                        <li><a href="/categorias/{{$categoria->id}}">{{ $categoria->nombre }}</a></li>
                    @endforeach
                </ul>
            @endif

            <h4 class="mt-5 mb-3">Plantas:</h4>
            @if ($plantas->isEmpty())
                <p>No se encontraron plantas.</p>
            @else
                <ul>
                    @foreach ($plantas as $planta)
                        <li><a href="/plantas/{{$planta->id}}">{{ $planta->nombre }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection