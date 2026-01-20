<?php

namespace App\Livewire;

use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\MedicalRecordRequest;

class MedicalRecordsCrud extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $recordId;
    public $pet_id;
    public $veterinarian_id;
    public $diagnosis;
    public $treatment;
    public $notes;

    public $isEdit = false;

    protected function rules()
    {
        return (new MedicalRecordRequest())->rules($this->recordId);
    }

    public function render()
    {
        $this->authorize('view', MedicalRecord::class);

        $records = MedicalRecord::with(['pet', 'veterinarian'])->paginate(10);
        $pets = Pet::all();
        $veterinarians = User::role('Veterinario')->get();

        return view('livewire.medical-records-crud', [
            'records' => $records,
            'pets' => $pets,
            'veterinarians' => $veterinarians,
        ]);
    }

    public function save()
    {
        $this->authorize('create', MedicalRecord::class);

        $validated = $this->validate();

        MedicalRecord::create($validated);

        $this->resetForm();
    }

    public function edit(MedicalRecord $record)
    {
        $this->authorize('update', $record);

        $this->recordId = $record->id;
        $this->pet_id = $record->pet_id;
        $this->veterinarian_id = $record->veterinarian_id;
        $this->diagnosis = $record->diagnosis;
        $this->treatment = $record->treatment;
        $this->notes = $record->notes;
        $this->isEdit = true;
    }

    public function update()
    {
        $record = MedicalRecord::findOrFail($this->recordId);
        $this->authorize('update', $record);

        $validated = $this->validate();

        $record->update($validated);

        $this->resetForm();
    }

    public function delete(MedicalRecord $record)
    {
        $this->authorize('delete', $record);

        $record->delete();
    }

    private function resetForm()
    {
        $this->reset([
            'recordId',
            'pet_id',
            'veterinarian_id',
            'diagnosis',
            'treatment',
            'notes',
            'isEdit'
        ]);
    }
}
