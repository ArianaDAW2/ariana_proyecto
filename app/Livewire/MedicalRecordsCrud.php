<?php

namespace App\Livewire;

use App\Http\Requests\MedicalRecordRequest;
use App\Models\MedicalRecord;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class MedicalRecordsCrud extends Component
{
    use AuthorizesRequests;

    public MedicalRecord $record;

    protected function rules()
    {
        return (new MedicalRecordRequest())->rules();
    }

    public function save()
    {
        $this->authorize($this->record->exists ? 'update' : 'create', $this->record);

        $this->record->veterinarian_id = auth()->id();
        $this->record->save();
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.medical-records-crud');
    }
}
