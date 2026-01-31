<?php

namespace App\Http\Controllers;

use App\Events\AdminMessageEvent;
use App\Events\ContactFormEvent;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class documentsController extends Controller
{
    //ContactEmail ===========================================================================
    public function show_contact()
    {
        return view('public.contact');
    }

    public function send_contact(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        ContactFormEvent::dispatch(
            $validated['title'],
            $validated['email'],
            $validated['message']
        );

        return back()->with('status', __('public.message_sent'));
    }

    //AdminMessage ===========================================================================
    public function show_adminMessage()
    {
        return view('admin.extra.create');
    }

    public function send_adminMessage(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        AdminMessageEvent::dispatch(
            $validated['title'],
            $validated['message']
        );

        return redirect()->back()
            ->with('success', 'Mensaje enviado a todos los usuarios.');
    }

    //Facturas ========================================================================


    public function print_invoices()
    {
        $startDate = Carbon::now()->subQuarter()->startOfQuarter();
        $endDate = Carbon::now()->subQuarter()->endOfQuarter();

        $invoices = Invoice::trimestral()
            ->with('reservation.user')
            ->get();

        $pdf = Pdf::loadView('pdf.invoices', [
            'invoices' => $invoices,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'total' => $invoices->sum('total'),
        ]);

        return $pdf->download('facturas-trimestre-' . $startDate->format('Y-m') . '.pdf');
    }
}
