<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

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

    public function scopemorosos($query)
    {
        return $query->where('status', 'unpaid')
            ->with('reservation.user');
    }
}
