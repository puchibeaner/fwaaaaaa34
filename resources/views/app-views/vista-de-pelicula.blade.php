@extends('app-views.layout.plantilla')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(142, 218, 231);
        }

       .pelicula{
        margin-bottom: 5%;
        max-width: 1500px;
        margin-left: 10%;
        margin-top: 7%;

       }

        .comments {
            max-width: 1500px; /* Ancho máximo aumentado */
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 50px;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 0px;
        }

        .comment-box {
            background-color: #f9f9f9;
            padding: 10px;
        }

        .comment-author {
            font-weight: bold;
        }

        /* Estilos para el formulario */
        form {
            margin-top: 20px; /* Espacio entre la lista de comentarios y el formulario */
        }

        label {
            display: block; /* Hacer que las etiquetas de los campos de entrada ocupen toda la línea */
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%; /* Ancho completo para los campos de entrada y textarea */
            padding: 10px;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        body {
  background-color: rgb(58, 146, 161);
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

    </style>

<nav class="navbar navbar-expand-lg bg-primary"> <!-- Cambiamos el color de fondo a 'bg-primary' -->
        <div class="container-fluid">
             <!-- Cambiamos el color del texto a blanco ('text-white') -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-autjuu9o
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/imagenes/descarga.jpg" alt="Título de la Película" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="card-title">Título de la Película</h2>
                                    <p><strong>Director:</strong> <a href="URL_DEL_DIRECTOR">Director de la Película</a></p>
                                    <p><strong>Año:</strong> Año de lanzamiento</p>
                                    <p><strong>Género:</strong> <a href="URL_DEL_GENERO">Género de la Película</a></p>
                                    <p><strong>Descripción:</strong> Descripción de la Película. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <form>
            <div class="comments">
                <h2>Comentarios</h2>
                <ul>
                    <li>
                        <div class="comment-box">
                            <p class="comment-author">Usuario 1</p>
                            <p>Este es un comentario de prueba.</p>
                        </div>
                    </li>
                    <li>
                        <div class="comment-box">
                            <p class="comment-author">Usuario 2</p>
                            <p>Otro comentario de muestra.</p>
                        </div>
                    </li>
                </ul>
        
                <h2>Agregar un Comentario</h2>
                <form>
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div>
                        <label for="comentario">Comentario:</label>
                        <textarea id="comentario" name="comentario" rows="4" required></textarea>
                    </div>
                    <div>
                        <button type="submit">Enviar Comentario</button>
                    </div>
                </form>
            </div>
        </form>
        
      </form>

      @endsection