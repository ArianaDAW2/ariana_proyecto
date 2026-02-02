<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class queueWorkCommand extends Command
{
    protected $signature = 'admin:queue';
    protected $description = 'php artisan queue:work';

    public function handle(): void
    {
        $this->info('Procesando colas');

        $this->call('queue:work', [
            '--stop-when-empty' => true,
        ]);

        $this->info('Completado');
    }
}
