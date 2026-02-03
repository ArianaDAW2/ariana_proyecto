<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{

    protected $fillable = [
        'user_id',
        'pet_id',
        'start_date',
        'end_date',
        'status',
        'total_price',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    //Relaciones
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pet(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function services(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Service::class)
            ->withTimestamps();
    }

    public function invoice(): \Illuminate\Database\Eloquent\Relations\HasOne|Reservation
    {
        return $this->hasOne(Invoice::class);
    }

    //Scopes
    //Muestra las reservas de un usuario for fecha reciente
    public function scopeForUser($query)
    {
        $query->where('user_id', auth()->id())
            ->orderBy('start_date', 'asc');
        return $query;
    }
}
