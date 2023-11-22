@extends('app-views.layout.plantilla')
@section('content')
<section class="inicio-sesion-form">
    <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal">Bienvenido</h1>
        <img class="mb-4" src="./imagenes/9DWJoPh5xQb-wSZ1.jpg_large" alt="" width="300" height="300">
                        <h1>PARAFRUCTUS</h1>                                    
                        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        < div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recordar esta cuenta.') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Iniciar sesion') }}
            </x-primary-button>
        </div>
    </form>
                <p>¿No tienes una cuenta aún? <a href="/Tarea-main/GitHub/registro.html" id="registro-link">Regístrate aquí</a></p>
                <p><a href="/Tarea-main/GitHub/registro.html" id="registro-link">¿Olvidaste tu contraseña?</a></p>
            </section>
        </main>
        <footer>
        </footer>
        <script src="script.js"></script>
      </main>

@endsection