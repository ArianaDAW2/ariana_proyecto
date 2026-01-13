<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'reservation_id', 'invoice_number', 'total', 'status', 'issued_at'
    ];

    public function reservation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
