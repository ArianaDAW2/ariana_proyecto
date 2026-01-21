<?php

namespace App\Models;

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

    public function payments(): Invoice|\Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Payment::class);
    }
    //Scopes
    // En App\Models\Invoice
    public function scopeOverdue($query, int $days = 30)
    {
        return $query->where('status', 'unpaid')
            ->whereNotNull('issued_at')
            ->where('issued_at', '<=', now()->subDays($days));
    }

    public function scopeWithTotalPaid($query)
    {
        return $query->addSelect([
            'total_paid' => Payment::selectRaw('COALESCE(SUM(amount), 0)')
                ->whereColumn('invoice_id', 'invoices.id')
                ->where('status', 'completed')
        ]);
    }

// Uso
//Invoice::overdue()->get();                    // vencidas hace 30+ días
//Invoice::overdue(15)->get();                  // vencidas hace 15+ días
//Invoice::overdue()->withTotalPaid()->get();   // con cuánto han pagado
}
