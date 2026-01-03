<?php

namespace App\Livewire;

use App\Models\Invoice;
use App\Models\Reservation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class InvoicesCrud extends Component
{
    use AuthorizesRequests;

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
        return view('livewire.invoices-crud');
    }
}
