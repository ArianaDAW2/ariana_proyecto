<?php

namespace App\Livewire;

use App\Http\Requests\MedicalRecordRequest;
use App\Models\MedicalRecord;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class MedicalRecordsCrud extends Component
{
    use AuthorizesRequests;

    public $petId;

    public function mount($petId = null)
    {
        $this->authorize('view_medical_records');
        $this->petId = $petId;
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $query = MedicalRecord::with(['pet', 'veterinarian']);

        if ($this->petId) {
            $query->where('pet_id', $this->petId);
        }

        return view('livewire.medical-records-crud', [
            'medicalRecords' => $query->latest()->paginate(10)
        ]);
    }
}
