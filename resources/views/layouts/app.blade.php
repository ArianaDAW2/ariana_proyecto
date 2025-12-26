<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Aplicación')</title>
</head>
<body>
<header class="pb-3 md:pb-10">
    @include('layouts.nav')
</header>

<main>
    @yield('content')
</main>

@include('layouts.footer')
</body>
</html>
