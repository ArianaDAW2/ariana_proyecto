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
    //filtrar por especie y nombre de mascota ordenando estos
    public function scopeFilter($query, $species = null, $sortByName = false)
    {
        if ($species != null) {
            $query->where('species', $species);
        }
        if ($sortByName == true) {
            $query->orderBy('name');
        }
        return $query;
    }

    //Filtra mascotas por rango de peso
    public function scopeByWeight($query, $minWeight = null, $maxWeight = null)
    {
        if ($minWeight != null) {
            $query->where('weight', '>=', $minWeight);
        }
        if ($maxWeight != null) {
            $query->where('weight', '<=', $maxWeight);
        }
        return $query;
    }
}
