<?php

namespace Database\Seeders;

use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Seeder;

class MedicalRecordSeeder extends Seeder
{
    public function run(): void
    {
        $vet = User::hasRole('Veterinario')->first();
        $pets = Pet::all();
        
        foreach ($pets as $pet) {
            MedicalRecord::create([
                'pet_id' => $pet->id,
                'veterinarian_id' => $vet->id,
                'diagnosis' => 'Revisión rutinaria',
                'treatment' => 'Ninguno necesario. Todo en orden.',
                'notes' => 'La mascota se comporta bien durante la revisión.',
            ]);
        }
    }
}
