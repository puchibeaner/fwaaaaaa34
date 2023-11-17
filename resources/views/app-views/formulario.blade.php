@extends('app-views.layout.plantilla')
@section('content')


<form id="movieForm">
        <label for="movieName">Nombre de la Película:</label>
        <input type="text" id="movieName" name="movieName" required>

        <label for="movieActores">Actores:</label>
        <input type="text" id="movieActores" name="movieActores" required>

        <label for="movieDescription">Descripción:</label>
        <textarea id="movieDescription" name="movieDescription" rows="4" required></textarea>

        <label for="movieImage">Imagen de la Película (URL):</label>
        <input type="text" id="movieImage" name="movieImage" required>

        <label for="movieRating">Clasificación:</label>
        <select id="movieRating" name="movieRating" required>
            <option value="G">G</option>
            <option value="PG">PG</option>
            <option value="PG-13">PG-13</option>
            <option value="R">R</option>
        </select>

        <label for="movieGenre">Género:</label>
        <input type="text" id="movieGenre" name="movieGenre" required>

        <button type="button" onclick="resetForm()">Borrar</button>
        <button type="button" onclick="publishMovie()">Publicar</button>
    </form>

    <script>
        function resetForm() {
            document.getElementById("movieForm").reset();
        }

        function publishMovie() {
            // Aquí puedes agregar la lógica para publicar la película
            alert("Película publicada:\nNombre: " + document.getElementById("movieName").value +
                  "\nActores: " + document.getElementById("movieActores").value +  
                  "\nDescripción: " + document.getElementById("movieDescription").value +
                  "\nImagen: " + document.getElementById("movieImage").value +
                  "\nClasificación: " + document.getElementById("movieRating").value +
                  "\nGénero: " + document.getElementById("movieGenre").value);
        }
    </script>

@endsection