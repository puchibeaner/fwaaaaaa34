@extends('app-views.layout.plantilla')
@section('content')

<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <img src="/imagenes/Logo.jpg" class="card-img-top" alt="10px" style="width: 90px; height: 90px;">
            <a class="navbar-brand text-white" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item"> 
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Inicio de sesión
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
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
        <img src="/imagenes/inceptcion.jpg" class="card-img-top" alt="Inception">
        <div class="card-body">
            <h5 class="card-title">Inception</h5>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">Actores: Leonardo DiCaprio, Joseph Gordon-Levitt</li>
            <li class="list-group-item">Clasificación del contenido: PG-13</li>
            <li class="list-group-item">Director: Christopher Nolan</li>
        </ul>
        <div class="card-body">
            <a href="Desktop\GitHub\fwaaaaaa34\public\resources\views\app-views\vista-de-pelicula"
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