<?php

namespace App\Livewire;

use App\Models\Invoice;
use App\Models\Reservation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class InvoicesCrud extends Component
{
    use AuthorizesRequests;

    public $reservationId;

    public function mount($reservationId = null)
    {
        $this->authorize('manage_payments');
        $this->reservationId = $reservationId;
    }

    public function save()
    {
        $data = $this->validate([
            'status' => 'required|in:paid,unpaid',
        ]);

        // Si el checkbox no estaba marcado, forzamos unpaid
        if ($this->status !== 'paid') {
            $this->status = 'unpaid';
        }

        $reservation = new Reservation();
        $reservation->status = $this->status;
        $reservation->save();

        session()->flash('message', 'Reserva actualizada');
    }

    public function generate(Reservation $reservation)
    {
        $this->authorize('create', Invoice::class);

        Invoice::create([
            'reservation_id' => $reservation->id,
            'total' => $reservation->total_price,
            'status' => 'pending',
        ]);
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $query = Invoice::query();

        if ($this->reservationId) {
            $query->where('reservation_id', $this->reservationId);
        }

        return view('livewire.invoices-crud', [
            'invoices' => $query->latest()->paginate(10)
        ]);
    }
}
