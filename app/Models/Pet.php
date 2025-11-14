<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = [
        'id_owner',
        'name',
        'breed',
        'sex',
        'info',
        'photo',
        'id_booking',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class, 'id_owner');
    }

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'id_booking');
    }
}
