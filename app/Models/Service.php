<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'base_price',
        'is_active'
    ];

    //Relaciones
    public function reservations(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Reservation::class)
            ->withTimestamps();
    }

    //Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeInActive($query)
    {
        return $query->where('is_active', false);
    }

    public function scopeTopServices($query)
    {
        return $query->active()->withCount('reservations')
            ->orderByDesc('reservations_count');
    }
}
