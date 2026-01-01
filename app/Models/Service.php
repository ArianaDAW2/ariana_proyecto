<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'description', 'base_price', 'is_active'
    ];

    public function reservations(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Reservation::class)
            ->withPivot('price', 'duration', 'notes')
            ->withTimestamps();
    }
}
