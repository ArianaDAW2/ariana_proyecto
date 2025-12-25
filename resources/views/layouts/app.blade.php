<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{-- Incluye los assets de Vite tanto en desarrollo (servidor Vite) como en producción (build) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Aplicación')</title>
</head>
<body>
<header>
    @include('layouts.nav')
</header>

<main>
    @yield('content')
</main>

@include('layouts.footer')
{{-- Footer agregado al layout principal --}}

</body>
</html>
