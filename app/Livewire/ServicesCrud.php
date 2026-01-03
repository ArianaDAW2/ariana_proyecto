<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class ServicesCrud extends Component
{
    use AuthorizesRequests;

    public Service $service;

    public function save()
    {
        $this->authorize('manage', Service::class);
        $this->validate();
        $this->service->save();
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.services-crud');
    }
}
