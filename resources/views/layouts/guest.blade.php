{{-- resources/views/layouts/guest.blade.php --}}
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

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">

{{-- Jetstream navigation --}}
@if (Route::has('login'))
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ route('client.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

{{-- Navbar --}}
@include('layouts.nav')

{{-- Main Content --}}
<main class="md:px-[110px] px-[10px] py-10">
    @yield('content-1')
    {{ $slot }}
    <div class="my-10 text-center">
        <a href="{{ route('client.dashboard') }}"
           class="bg-indigo-600 p-5 rounded-lg font-bold text-white hover:bg-indigo-700 transition">
            Pide tu cita
        </a>
    </div>

    @yield('content-2')
</main>

{{-- Footer --}}
@include('layouts.footer')

{{-- Livewire Scripts --}}
@livewireScripts
</body>
</html>
