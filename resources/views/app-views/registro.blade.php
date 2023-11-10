@extends('app-views.layout.plantilla')
@section('content')


<main>
        <section class="registro-form">
            <h1>PARAFRUCTUS</h1>
            <h2>Registro</h2>
                <form action="cartelera.html" method="get">
            <form action="#" method="post">
                <img class="mb-4" src="./imagenes/9DWJoPh5xQb-wSZ1.jpg_large" alt="" width="300" height="300">
             <label for="email">Correo Electronico:</label>
                <input type="email" id="email" name="email" required>
                <label for="nombre">Numero de telefono:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Registrarse</button>
            </form>
            <p>¿Ya tienes una cuenta? <a href="iniciar-sesion.html">Iniciar Sesión</a></p>
            <p>&copy; 2023 PARAFRUCTUS</p>
        </section>
    </main>

@endsection