<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'species',
        'breed',
        'age',
        'weight',
        'notes',
    ];

    //Relaciones
    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function medicalRecords(): \Illuminate\Database\Eloquent\Relations\HasMany|Pet
    {
        return $this->hasMany(MedicalRecord::class);
    }
    //Scopes
    // En App\Models\Pet
    public function scopeWithRecentMedicalHistory($query, int $days = 30)
    {
        return $query->whereHas('medicalRecords', function ($q) use ($days) {
            $q->where('created_at', '>=', now()->subDays($days));
        })->with(['medicalRecords' => function ($q) use ($days) {
            $q->where('created_at', '>=', now()->subDays($days))
                ->latest();
        }]);
    }

// Uso
//Pet::withRecentMedicalHistory()->get();       // últimos 30 días
//Pet::withRecentMedicalHistory(7)->get();      // última semana
}
