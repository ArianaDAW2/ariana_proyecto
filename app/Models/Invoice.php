<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'reservation_id',
        'invoice_number',
        'total',
        'status',
        'issued_at'
    ];

    //Relaciones
    public function reservation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }

    public function payments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Payment::class);
    }

    //Scopes

    public function scopetrimestral($query)
    {
        $startDate = Carbon::now()->subQuarter()->startOfQuarter();
        $endDate = Carbon::now()->subQuarter()->endOfQuarter();

        return $query->whereBetween('issued_at', [$startDate, $endDate])
            ->where('status', 'paid');
    }
}
