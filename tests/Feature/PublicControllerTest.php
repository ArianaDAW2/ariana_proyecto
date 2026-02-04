// tests/Feature/Http/PublicControllerTest.php

<?php

use App\Models\Service;

/*
|--------------------------------------------------------------------------
| Guest (Público)
|--------------------------------------------------------------------------
*/

it('guest can access home', function () {
    $this->get(route('public.home'))
        ->assertStatus(200);
});

it('guest can access contact', function () {
    $this->get(route('document.contact'))
        ->assertStatus(200);
});

it('guest can access gallery', function () {
    $this->get(route('public.gallery'))
        ->assertStatus(200);
});

it('guest can access services', function () {
    Service::factory()->count(3)->create();

    $this->get(route('public.services'))
        ->assertStatus(200);
});

it('guest can access inactive services', function () {
    Service::factory()->count(2)->create();

    $this->get(route('public.services', ['status' => 'inactive']))
        ->assertStatus(200);
});
