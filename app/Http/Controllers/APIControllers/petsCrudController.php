<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetRequest;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class petsCrudController extends Controller
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

        $this->authorize('view', Pet::class);
        $pets = Pet::with('owner')->paginate(10);
        return response()->json([
            'pets' => $pets,
            'owner' => User::all(),
        ]);
    }

    public function store(PetRequest $request)
    {
        $this->authorize('create', Pet::class);
        $pet = Pet::create($request->validated());
        return response()->json($pet, 201);
    }

    public function show(Pet $pet)
    {
        $this->authorize('view', $pet);
        return response()->json($pet->load('owner'));
    }

    public function update(PetRequest $request, Pet $pet)
    {
        $this->authorize('update', $pet);
        $pet->update($request->validated());
        return response()->json($pet->load('owner'));
    }

    public function destroy(Pet $pet)
    {
        $this->authorize('delete', $pet);
        $pet->delete();
        return response()->json(null, 204);
    }

}
