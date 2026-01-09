<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>
@include('layouts.nav')

<main class=" md:px-[110px] px-[10px]">
    @yield('content-1')
    <div class="my-10 text-center">
        <a href="<?= route('dashboard') ?>" class="bg-indigo-600 p-5 m-40 rounded-lg font-bold text-white " href="/">
            Pide tu cita </a>
    </div>
    @yield('content-2')
</main>

@include('layouts.footer')
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

@livewireScripts
</body>
</html>
