@extends('app-views.layout.plantilla')
@section('content')

<form method="post" action ="{{route('peliculas.store')}}" id="movieForm">
 @csrf
        <label for="name">Nombre de la Película:</label>
        <input type="text" id="name" name="name" required>

        <label for="elenco">Actores:</label>
        <input type="text" id="elenco" name="elenco" required>

        <label for="productor">Productor:</label>
        <input type="text" id="productor" name="productor" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

        <label for="calificacion">Calificacion:</label>
        <select id="calificacion" name="calificacion" required>
            <option value="1">1/10</option>
            <option value="2">2/10</option>
            <option value="3">3/10</option>
            <option value="4">4/10</option>
            <option value="5">5/10</option>
            <option value="6">6/10</option>
            <option value="7">7/10</option>
            <option value="8">8/10</option>
            <option value="9">9/10</option>
            <option value="10">10/10</option>
        </select>

        <label for="clasificacion">Clasificación:</label>
        <select id="clasificacion" name="clasificacion" required>
            <option value="G">G</option>
            <option value="PG">PG</option>
            <option value="PG-13">PG-13</option>
            <option value="R">R</option>
        </select>

        <label for="imagen">Imagen de la Película (URL):</label>
        <input type="text" id="imagen" name="imagen" required>

        <label for="Genero">Género:</label>
        <input type="text" id="Genero" name="Genero" required>
        <button type="submit" >Publicar</button>
</form>

@endsection