<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservations extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'pet_id', 'start_date', 'end_date', 'status', 'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function services(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Service::class)
            ->withPivot('price', 'duration', 'notes')
            ->withTimestamps();
    }

    public function invoice(): \Illuminate\Database\Eloquent\Relations\HasOne|Reservations
    {
        return $this->hasOne(Invoice::class);
    }
}
