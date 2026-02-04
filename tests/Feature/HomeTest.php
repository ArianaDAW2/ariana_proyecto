<?php

use App\Models\Pet;

it('Home working', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});


