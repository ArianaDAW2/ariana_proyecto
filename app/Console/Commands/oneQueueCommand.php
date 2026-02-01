<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class oneQueueCommand extends Command
{
    protected $signature = 'admin:oneQueue';
    protected $description = 'php artisan queue:work';

    public function handle(): void
    {
        $this->info('Procesando cola de emails...');

        Artisan::call('queue:work', [
            '--once' => true,
        ]);

        $this->info('Completado');
    }
}
