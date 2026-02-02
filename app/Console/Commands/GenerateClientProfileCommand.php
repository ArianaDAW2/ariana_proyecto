<?php

namespace App\Console\Commands;

use App\Jobs\GenerateClientProfileJob;
use App\Models\User;
use Illuminate\Console\Command;

class GenerateClientProfileCommand extends Command
{
    protected $signature = 'admin:client-reports';

    protected $description = 'Genera un PDF con un perfil de cliente';

    public function handle(): void
    {
        $clients = User::role('Cliente')
            ->has('reservations')
            ->get();

        foreach ($clients as $client) {
            GenerateClientProfileJob::dispatch($client);
        }

        $this->info("Generando perfiles: {$clients->count()}");
    }
}
