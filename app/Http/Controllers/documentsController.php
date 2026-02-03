<?php

namespace App\Http\Controllers;

use App\Events\AdminMessageEvent;
use App\Events\ContactFormEvent;
use App\Jobs\GeneratePetContractJob;
use App\Models\Invoice;
use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'title' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'message' => 'required|string|max:255',
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
            'title' => 'required|string|max:100',
            'message' => 'required|string|max:3000',
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

        return $pdf->download('Facturas-trimestre-' . $startDate->format('Y-m') . '.pdf');
    }

//Morosos ===========================================================================================
    public function print_morosos()
    {
        $invoices = Invoice::morosos()->get();

        $pdf = Pdf::loadView('pdf.morosos', compact('invoices'));

        return $pdf->download('morosos.pdf');
    }

//Contratos ===========================================================================================

    public function print_reservations()
    {
        $reservations = Reservation::with(['user', 'pet', 'services'])->get();

        foreach ($reservations as $reservation) {
            GeneratePetContractJob::dispatch($reservation);
        }

        return back();
    }

    public function download_reservations($filename)
    {
        return Storage::download("contracts/{$filename}");

    }

}
