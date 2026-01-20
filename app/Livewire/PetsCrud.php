<?php

namespace App\Livewire;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\PetRequest;

class PetsCrud extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $petId;
    public $user_id;
    public $name;
    public $species;
    public $breed;
    public $age;
    public $weight;
    public $notes;

    public $isEdit = false;

    protected function rules()
    {
        return (new PetRequest())->rules($this->petId);
    }


    public function render(Request $request)
    {
        $this->authorize('view', Pet::class);

        $pets = Pet::with('owner')->paginate(10);

        return view('livewire.pets-crud', [
            'pets' => $pets,
            'owners' => User::all(),
        ]);
    }

    public function save()
    {
        $this->authorize('create', Pet::class);

        $validated = $this->validate();

        Pet::create($validated);

        $this->resetForm();
    }

    public function edit(Pet $pet)
    {
        $this->authorize('update', $pet);

        $this->petId = $pet->id;
        $this->user_id = $pet->user_id;
        $this->name = $pet->name;
        $this->species = $pet->species;
        $this->breed = $pet->breed;
        $this->age = $pet->age;
        $this->weight = $pet->weight;
        $this->notes = $pet->notes;
        $this->isEdit = true;
    }

    public function update()
    {
        $pet = Pet::findOrFail($this->petId);
        $this->authorize('update', $pet);

        $validated = $this->validate();

        $pet->update($validated);

        $this->resetForm();
    }

    public function delete(Pet $pet)
    {
        $this->authorize('delete', $pet);

        $pet->delete();
    }

    private function resetForm()
    {
        $this->reset([
            'petId',
            'user_id',
            'name',
            'species',
            'breed',
            'age',
            'weight',
            'notes',
            'isEdit'
        ]);
    }
}
