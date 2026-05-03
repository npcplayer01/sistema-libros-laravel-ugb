<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Biblioteca - UGB</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-slate-50 selection:bg-blue-700 selection:text-white">
            
            <!-- Menú Superior -->
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-blue-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-blue-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-700">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-blue-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-700">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Contenido Central -->
            <div class="max-w-7xl mx-auto p-6 lg:p-8 text-center">
                <div class="flex justify-center mb-6">
                    <div class="bg-blue-700 p-4 rounded-2xl shadow-xl">
                         <span class="text-6xl text-white">📖</span>
                    </div>
                </div>

                <div class="mt-8">
                    <h2 class="text-indigo-800 font-bold uppercase tracking-widest text-sm mb-2">Proyecto de Ingeniería en Sistemas</h2>
                    <h1 class="text-5xl font-extrabold text-slate-900 tracking-tight">
                        Sistema de Gestión de Biblioteca
                    </h1>
                    <p class="mt-6 text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                        Plataforma digital desarrollada para la organización eficiente de recursos bibliográficos y control de registros académicos.
                    </p>
                </div>

                <div class="mt-10 flex justify-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-8 py-3 bg-blue-700 text-white font-bold rounded-lg shadow-lg hover:bg-blue-800 transition-all transform hover:-translate-y-1">
                            Ingresar al Panel
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="px-8 py-3 bg-blue-700 text-white font-bold rounded-lg shadow-lg hover:bg-blue-800 transition-all transform hover:-translate-y-1">
                            Crear Cuenta
                        </a>
                        <a href="{{ route('login') }}" class="px-8 py-3 bg-white text-blue-700 font-bold rounded-lg shadow-md border border-blue-100 hover:bg-gray-50 transition-all transform hover:-translate-y-1">
                            Acceder
                        </a>
                    @endauth
                </div>

                <!-- Pie de página Institucional -->
                <div class="mt-24 border-t border-gray-200 pt-8">
                    <p class="text-gray-500 font-medium">
                        Universidad Gerardo Barrios
                    </p>
                    <p class="text-sm text-gray-400 mt-1">
                        Facultad de Ciencia y Tecnología &copy; {{ date('Y') }}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>