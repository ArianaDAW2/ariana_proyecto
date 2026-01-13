<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class ServicesCrud extends Component
{
    use AuthorizesRequests;

    public Service $service;
    public bool $editing = false;

    protected $rules = [
        'service.name' => 'required|string|max:255',
        'service.description' => 'nullable|string',
        'service.base_price' => 'required|numeric|min:0',
        'service.is_active' => 'boolean',
    ];

    public function mount()
    {
        $this->service = new Service(['is_active' => true]);
    }

    public function create()
    {
        // Solo administradores pueden crear servicios
        if (auth()->user()->hasRole('Admin')) {
            $this->service = new Service(['is_active' => true]);
            $this->editing = true;
        }
    }

    public function edit(Service $service)
    {
        // Solo administradores pueden editar servicios
        if (auth()->user()->hasRole('Admin')) {
            $this->service = $service;
            $this->editing = true;
        }
    }

    public function save()
    {
        if (auth()->user()->hasRole('Admin')) {
            $this->validate();
            $this->service->save();
            $this->editing = false;
            $this->service = new Service(['is_active' => true]);
            session()->flash('message', 'Servicio guardado correctamente.');
        }
    }

    public function delete(Service $service)
    {
        if (auth()->user()->hasRole('Admin')) {
            $service->delete();
            session()->flash('message', 'Servicio eliminado correctamente.');
        }
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.services-crud', [
            'services' => Service::all(),
        ]);
    }
}
