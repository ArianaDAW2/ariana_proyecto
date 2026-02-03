<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $paidInvoices = Invoice::with('reservation')
            ->where('status', 'paid')->get();

        foreach ($paidInvoices as $invoice) {
            Payment::create([
                'invoice_id' => $invoice->id,
                'user_id' => $invoice->reservation->user_id,
                'amount' => $invoice->total,
                'payment_method' => 'credit_card',
                'status' => 'completed',
                'transaction_id' => 'TRX-' . $invoice->id,
                'paid_at' => $invoice->issued_at,
            ]);
        }
    }
}
