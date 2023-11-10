@extends('app-views.layout.plantilla')
@section('content')

<section class="inicio-sesion-form">
              <body class="text-center">
                  <main class="form-signin">
                  <img class="mb-4" src="./imagenes/9DWJoPh5xQb-wSZ1.jpg_large" alt="" width="300" height="300">
                <h1 class="h3 mb-3 fw-normal">Bienvenido</h1>
                        <h1>PARAFRUCTUS</h1>              
                <form action="cartelera.html" method="get">
                    <label for="nombre">Correo Electronico:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">Iniciar Sesión</button>
                    
                </form>
                <p>No tienes una cuenta aún? <a href="/Tarea-main/GitHub/registro.html" id="registro-link">Regístrate aquí</a></p>
                <p><a href="/Tarea-main/GitHub/registro.html" id="registro-link">¿Olvidaste tu contraseña?</a></p>
            </section>
        </main>
        <footer>
        </footer>
        <script src="script.js"></script>
      </main>

@endsection