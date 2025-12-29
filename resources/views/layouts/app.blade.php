<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title',$title ?? 'Aplicación')</title> <!-- Ejemplo de título dinámico CAMBIAR -->
</head>
<body>
@include('layouts.nav')
<main class=" md:px-[110px] px-[10px]">
    @yield('content-1')
    <div class="my-10 text-center">
        <a class="bg-indigo-600 p-5 m-40 rounded-4xl font-bold text-white " href="/">
            Pide tu cita </a>
    </div>
    @yield('content-2')
</main>

@include('layouts.footer')
</body>
</html>
