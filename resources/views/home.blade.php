@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-3xl font-bold underline bg-black-600 p-4">
        Primer Pet: {{ $testPets }}
    </h1>
@endsection
