<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class AdminMessageCommand extends Command
{
    protected $signature = 'admin:message';
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
