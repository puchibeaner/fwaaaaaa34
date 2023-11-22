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
    <div class="card1" style="width: 21rem;">
        <img src="/imagenes/spider.jpg" class="card-img-top" alt="Spider-Man: No Way Home">
        <div class="card-body">
            <h5 class="card-title">Spider-Man: No Way Home</h5>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">Actores: Tom Holland, Zendaya</li>
            <li class="list-group-item">Clasificación del contenido: PG-13</li>
            <li class="list-group-item">Director: Jon Watts</li>
        </ul>
        <div class="card-body">
            <a href="/vista-de.pelicula.html" class="card-link">Ver película</a>
        </div>
    </div>
    <!-- Repite el patrón para las demás tarjetas -->
    <div class="card1" style="width: 21rem;">
        <img src="/imagenes/iception.jpg" class="card-img-top" alt="Inception">
        <div class="card-body">
            <h5 class="card-title">Inception</h5>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">Actores: Leonardo DiCaprio, Joseph Gordon-Levitt</li>
            <li class="list-group-item">Clasificación del contenido: PG-13</li>
            <li class="list-group-item">Director: Christopher Nolan</li>
        </ul>
        <div class="card-body">
            <a href="/imagenes/iception.jpg"
                class="card-link">Ver película</a>
        </div>
    </div>

    <!-- Repite el patrón para las demás tarjetas -->
    <div class="card1" style="width: 21rem;">
        <img src="/imagenes/La La Land.jpg" class="card-img-top" alt="La La Land">
        <div class="card-body">
            <h5 class="card-title">La La Land</h5>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">Actores: Ryan Gosling, Emma Stone</li>
            <li class="list-group-item">Clasificación del contenido: PG-13</li>
            <li class="list-group-item">Director: Damien Chazelle</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Ver película</a>
        </div>
    </div>

    <div class="card-group d-flex flex-row flex-wrap">
        <div class="card1" style="width: 21rem;">
            <img src="/imagenes/El padrino.jpg" class="card-img-top" alt="Spider-Man: No Way Home">
            <div class="card-body">
                <h5 class="card-title">El Padrino</h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Actores: Marlon Brando, Al Pacino, James Caan.</li>
                <li class="list-group-item">Clasificación del contenido: R</li>
                <li class="list-group-item">Director: Francis Ford Coppola</li>
            </ul>
            <div class="card-body">
                <a href="/vista-de.pelicula.html" class="card-link">Ver película</a>
            </div>
        </div>
        <!-- Repite el patrón para las demás tarjetas -->
        <div class="card1" style="width: 21rem;">
            <img src="/imagenes/Matrix.jpg" class="card-img-top" alt="Inception">
            <div class="card-body">
                <h5 class="card-title">Matrix</h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Actores: Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss.</li>
                <li class="list-group-item">Clasificación del contenido: R</li>
                <li class="list-group-item">Director: The Wachowskis (Lana y Lilly Wachowski).</li>
            </ul>
            <div class="card-body">
                <a href="/vista-de.pelicula.html" class="card-link">Ver película</a>
            </div>
        </div>

        <!-- Repite el patrón para las demás tarjetas -->
        <div class="card1" style="width: 21rem;">
            <img src="/imagenes/Titanic.jpg" class="card-img-top" alt="La La Land">
            <div class="card-body">
                <h5 class="card-title">Titanic</h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Actores: Leonardo DiCaprio, Kate Winslet, Billy Zane.</li>
                <li class="list-group-item">Clasificación del contenido: PG-13</li>
                <li class="list-group-item">Director: James Cameron</li>
            </ul>
            <div class="card-body">
                <a href="/vista-de.pelicula.html" class="card-link">Ver película</a>
            </div>
        </div>
    </div>
</div>

@endsection