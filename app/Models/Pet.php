<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',

        'name',
        'species',
        'breed',
        'age',
        'weight',
        'notes',

    ];

    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function medicalRecords(): \Illuminate\Database\Eloquent\Relations\HasMany|Pet
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
