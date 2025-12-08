<?php

use App\Models\Pet;

it('Home working', function () {
        $response = $this->get('/');
        $response->assertStatus(200);
});

it('Database test', function () {
    $firstPet = Pet::first()->name;
    $response = $this->get(route('home'));
    $response->assertViewHas('testPets', $firstPet);
});

