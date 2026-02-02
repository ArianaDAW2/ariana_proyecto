<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class cleanPDFCommand extends Command
{
    protected $signature = 'admin:cleanPDF';

    protected $description = 'Limpia los pdf';

    public function handle(): void
    {
        Storage::delete(Storage::files('contracts'));
        Storage::delete(Storage::files('profiles'));

        $this->info("Pdf Borrados");
    }

}
