<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;


class PetController extends Controller
{
    public function edit(Pet $pet)
    {
        $this->authorize('update', $pet);

        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $this->authorize('update', $pet);

        $pet->update($request->validated());

        return redirect()->route('pets.index');
    }
}
