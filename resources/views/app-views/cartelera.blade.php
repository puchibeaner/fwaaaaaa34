@extends('app-views.layout.plantilla')
@section('content')

<div class="category-cartelera">
    <div> 
        <h2>Categorías</h2>
        <button>Películas de Acción</button>
        <button>Comedias Románticas</button>
        <button>Ciencia Ficción</button>
    </div>
</div>

<div class="comment-box1">
    <h2>Comentarios</h2>
    <!-- Contenido de la caja de comentarios -->
</div>

<div class="card-group d-flex flex-row flex-wrap">
    @foreach($registros as $registro)
    
    <div class="card1" style="width: 21rem;">
        <div class="cuadrado">
            <img src="{{ $registro->imagen }}" class="card-img-top" alt="Spider-Man: No Way Home">
            <div class="card-body">
                <h5 class="card-title">{{ $registro->name }}</h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Actores: {{ $registro->elenco }}</li>
                <li class="list-group-item">Clasificación del contenido:{{ $registro->clasificacion }}</li>
                <li class="list-group-item">Calificacion: {{ $registro->calificacion }}</li>
                <li class="list-group-item">Genero:  {{ $registro->genero }}</li>
                <li class="list-group-item">Productor: {{ $registro->productor }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ url('/peliculas', $registro->id) }}" class="card-link">Ver película</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection