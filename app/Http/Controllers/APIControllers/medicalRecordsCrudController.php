<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MedicalRecordRequest;
use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class medicalRecordsCrudController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('view', MedicalRecord::class);

        $records = MedicalRecord::with(['pet', 'veterinarian'])->paginate(10);
        $pets = Pet::all();
        $veterinarians = User::role('Veterinario')->get();

        return response()->json([
            'records' => $records,
            'pets' => $pets,
            'veterinarians' => $veterinarians,
        ]);

    }

    public function store(MedicalRecordRequest $request)
    {
        $this->authorize('create', MedicalRecord::class);
        $record = MedicalRecord::create($request->validated());
        return response()->json($record, 201);
    }

    public function show(MedicalRecord $record)
    {
        $this->authorize('view', $record);
        return response()->json($record->load(['pet', 'veterinarian']));
    }

    public function update(MedicalRecordRequest $request, MedicalRecord $record)
    {
        $this->authorize('update', $record);
        $record->update($request->validated());
        return response()->json($record->load(['pet', 'veterinarian']));
    }

    public function destroy(MedicalRecord $record)
    {
        $this->authorize('delete', $record);
        $record->delete();
        return response()->json(null, 204);
    }
}
