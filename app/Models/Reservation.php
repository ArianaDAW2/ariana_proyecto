<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'pet_id',
        'start_date',
        'end_date',
        'status',
        'total_price',
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
            ->using(ReservationService::class)
            ->withPivot(
                'price',
                'duration',
                'notes'
            )
            ->withTimestamps();
    }

    public function invoice(): \Illuminate\Database\Eloquent\Relations\HasOne|Reservation
    {
        return $this->hasOne(Invoice::class);
    }
    //Scopes
    // En App\Models\Reservation
    public function scopeStatus($query, string $status)
    {
        return $query->where('status', $status);
    }


//Reservation::status('confirmed')->get();
//Reservation::status('pending')->get();
// En App\Models\Reservation
    public function scopeOverlapping($query, $startDate, $endDate)
    {
        return $query->where('status', '!=', 'cancelled')
            ->where(function ($q) use ($startDate, $endDate) {
                $q->whereBetween('start_date', [$startDate, $endDate])
                    ->orWhereBetween('end_date', [$startDate, $endDate])
                    ->orWhere(function ($q2) use ($startDate, $endDate) {
                        $q2->where('start_date', '<=', $startDate)
                            ->where('end_date', '>=', $endDate);
                    });
            });
    }

// Uso: verificar si hay reservas que chocan con una fecha
//Reservation::overlapping('2026-02-01', '2026-02-05')->get();

// Para una mascota específica
//Reservation::where('pet_id', $petId)
//->overlapping($startDate, $endDate)
//->exists();

// En App\Models\Reservation
    public function scopeCompletedBetween($query, $startDate, $endDate)
    {
        return $query->where('status', 'completed')
            ->whereBetween('end_date', [$startDate, $endDate]);
    }

    public function scopeWithRevenueStats($query)
    {
        return $query->selectRaw('
        COUNT(*) as total_reservations,
        SUM(total_price) as total_revenue,
        AVG(total_price) as avg_revenue,
        MIN(total_price) as min_revenue,
        MAX(total_price) as max_revenue
    ');
    }

// Uso
//$stats = Reservation::completedBetween('2026-01-01', '2026-01-31')
//->withRevenueStats()
//->first();

// $stats->total_reservations
// $stats->total_revenue
// $stats->avg_revenue
}
