<?php

namespace App\Jobs;

use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class GeneratePetContractJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Reservation $reservation)
    {
    }

    public function handle(): void
    {
        $pdf = Pdf::loadView('pdf.PetContract', [
            'reservation' => $this->reservation
        ]);

        $filename = "reserva-{$this->reservation->id}-{$this->reservation->user->name}-{$this->reservation->start_date->format('Y-m-d')}.pdf";

        Storage::put("contracts/{$filename}", $pdf->output());
    }
}
