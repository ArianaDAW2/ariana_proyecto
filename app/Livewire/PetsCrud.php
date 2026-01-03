<?php

namespace App\Livewire;

use App\Http\Requests\PetRequest;
use App\Models\Pet;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PetsCrud extends Component
{
    public Pet $pet;
    public bool $editing = false;

    protected function rules()
    {
        return (new PetRequest())->rules();
    }

    public function mount()
    {
        $this->pet = new Pet();
        $this->authorize('viewAny', Pet::class);
    }

    public function create()
    {
        $this->authorize('create', Pet::class);
        $this->pet = new Pet();
        $this->editing = true;
    }

    public function edit(Pet $pet)
    {
        $this->authorize('update', $pet);
        $this->pet = $pet;
        $this->editing = true;
    }

    public function save()
    {
        $this->authorize($this->pet->exists ? 'update' : 'create', $this->pet);

        $this->validate();

        $this->pet->user_id = auth()->id();
        $this->pet->save();

        session()->flash('success', 'Mascota guardada correctamente');

        $this->reset(['editing']);
        $this->pet = new Pet();
    }

    public function delete(Pet $pet)
    {
        $this->authorize('delete', $pet);
        $pet->delete();

        session()->flash('success', 'Mascota eliminada');
    }

    public function render()
    {
        return view('livewire.pets-crud', [
            'pets' => Pet::where('user_id', auth()->id())->latest()->get(),
        ]);
    }
}
