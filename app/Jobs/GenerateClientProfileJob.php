<?php

namespace App\Jobs;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;

class GenerateClientProfileJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public User $client)
    {
    }

    public function handle(): void
    {
        $client = $this->client->load(['pets', 'reservations.services', 'reservations.pet']);

        $totalGastado = $client->reservations
            ->where('status', '!=', 'cancelled')
            ->sum('total_price');
        $pdf = Pdf::loadView('pdf.clients', [
            'client' => $client,
            'totalGastado' => $totalGastado
        ]);

        $filename = "cliente-{$client->id}-{$client->name}.pdf";

        Storage::put("profiles/{$filename}", $pdf->output());
    }
}
