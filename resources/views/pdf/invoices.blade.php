<!-- resources/views/pdf/quarterly-invoices.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Facturas del Trimestre - HotelForPets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 10px;
        }

        .period {
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .total-row {
            font-weight: bold;
            background-color: #f9f9f9;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="logo">HotelForPets</div>
</div>

<h1>Informe de Facturas</h1>
<p class="period">
    Período: {{ $startDate->format('d/m/Y') }} - {{ $endDate->format('d/m/Y') }}
</p>

@if($invoices->isEmpty())
    <p>No hay facturas en este período.</p>
@else
    <table>
        <thead>
        <tr>
            <th>Nº Factura</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th class="text-right">Base</th>
            <th class="text-right">IVA (21%)</th>
            <th class="text-right">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            @php
                $base = $invoice->total / 1.21;
                $iva = $invoice->total - $base;
            @endphp
            <tr>
                <td>{{ $invoice->invoice_number }}</td>
                <td>{{ $invoice->created_at->format('d/m/Y') }}</td>
                <td>{{ $invoice->reservation->user->name }}</td>
                <td class="text-right">{{ number_format($base, 2) }} €</td>
                <td class="text-right">{{ number_format($iva, 2) }} €</td>
                <td class="text-right">{{ number_format($invoice->total, 2) }} €</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr class="total-row">
            <td colspan="3" class="text-right">Totales:</td>
            <td class="text-right">{{ number_format($total / 1.21, 2) }} €</td>
            <td class="text-right">{{ number_format($total - ($total / 1.21), 2) }} €</td>
            <td class="text-right">{{ number_format($total, 2) }} €</td>
        </tr>
        </tfoot>
    </table>

    <p style="margin-top: 20px;">Total de facturas: {{ $invoices->count() }}</p>
@endif
</body>
</html>
