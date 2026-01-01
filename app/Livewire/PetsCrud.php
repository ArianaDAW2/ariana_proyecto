<?php

namespace App\Livewire;

use App\Models\Pet;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PetsCrud extends Component
{
    use AuthorizesRequests;

    public function edit(Pet $pet)
    {
        $this->authorize('update', $pet);
    }
}
