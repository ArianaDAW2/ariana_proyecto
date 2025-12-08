<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'id_room',
        'date_start',
        'date_end',
        'status',
    ];

    public function room(): HasOne
    {
        return $this->hasOne(Room::class, 'id_room');
    }
    public function Pet(): HasMany
    {
        return $this->hasMany(Pet::class, 'id_booking');
    }
}
