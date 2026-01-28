<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MedicalRecordRequest;
use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class medicalRecordsAPICrud extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $token = request()->bearerToken();

        if ($token) {
            $accessToken = \Laravel\Sanctum\PersonalAccessToken::findToken($token);
            if ($accessToken) {
                auth()->setUser($accessToken->tokenable);
            }
        }
    }

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
        $medicalRecord = MedicalRecord::create($request->validated());
        return response()->json($medicalRecord, 201);
    }

    public function show(MedicalRecord $medicalRecord)
    {
        $this->authorize('view', $medicalRecord);
        return response()->json($medicalRecord->load('pet', 'veterinarian'));
    }

    public function update(MedicalRecordRequest $request, MedicalRecord $medicalRecord)
    {
        $this->authorize('update', $medicalRecord);
        $medicalRecord->update($request->validated());
        return response()->json($medicalRecord->load(['pet', 'veterinarian']));
    }

    public function destroy(MedicalRecord $medicalRecord)
    {
        $this->authorize('delete', $medicalRecord);
        $medicalRecord->delete();
        return response()->json(null, 204);
    }
}
