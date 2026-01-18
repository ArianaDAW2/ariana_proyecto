<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\ServiceRequest;
use Livewire\WithPagination;

class ServicesCrud extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $serviceId;
    public $name;
    public $description;
    public $base_price = 0;
    public $is_active = true;

    public $isEdit = false;

    protected function rules()
    {
        return (new ServiceRequest())->rules($this->serviceId);
    }

    public function render()
    {
        return view('livewire.services-crud', [
            'services' => Service::paginate(10),
        ]);
    }

    public function save()
    {
        $this->authorize('create', Service::class);

        $validated = $this->validate();

        Service::create($validated);

        $this->resetForm();
    }

    public function edit(Service $service)
    {
        $this->authorize('update', $service);

        $this->serviceId = $service->id;
        $this->name = $service->name;
        $this->description = $service->description;
        $this->base_price = $service->base_price;
        $this->is_active = $service->is_active;
        $this->isEdit = true;
    }

    public function update()
    {
        $service = Service::findOrFail($this->serviceId);
        $this->authorize('update', $service);

        $validated = $this->validate();

        $service->update($validated);

        $this->resetForm();
    }

    public function delete(Service $service)
    {
        $this->authorize('delete', $service);

        $service->delete();
    }

    private function resetForm()
    {
        $this->reset([
            'serviceId',
            'name',
            'description',
            'base_price',
            'is_active',
            'isEdit',
        ]);
    }
}
