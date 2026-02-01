<?php

namespace App\Console\Commands;

use App\Jobs\morososWarnJob;
use App\Models\Invoice;
use Illuminate\Console\Command;

class morososWarnCommand extends Command
{
    protected $signature = 'admin:morosos';

    protected $description = 'Un mail a los morosos';

    public function handle(): void
    {
        $invoices = Invoice::morosos()->get();
        foreach ($invoices as $invoice) {
            morososWarnJob::dispatch($invoice);
        }

        $this->info("Recordatorios enviados: {$invoices->count()}");
    }
}
