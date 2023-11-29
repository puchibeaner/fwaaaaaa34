@extends('app-views.layout.plantilla')
@section('content')
 

    <form>
        <div class="pelicula">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/imagenes/descarga.jpg" alt="Título de la Película" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="card-title">{{$pelicula->name}}</h2>
                                    <p><strong>Director:</strong> <a href="URL_DEL_DIRECTOR">{{$pelicula->name}}</a></p>
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