<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Listado de Morosos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .fecha {
            text-align: right;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Listado de Clientes Morosos</h1>
<p class="fecha">Fecha: {{ now()->format('d/m/Y') }}</p>

<table>
    <thead>
    <tr>
        <th>Nº Factura</th>
        <th>Cliente</th>
        <th>Email</th>
        <th>Fecha Emisión</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{{ $invoice->invoice_number }}</td>
            <td>{{ $invoice->reservation->user->name }}</td>
            <td>{{ $invoice->reservation->user->email }}</td>
            <td>{{ $invoice->issued_at }}</td>
            <td>{{ number_format($invoice->total, 2) }} €</td>
        </tr>
    @endforeach
    </tbody>
</table>

<p class="total">Total pendiente: {{ number_format($invoices->sum('total'), 2) }} €</p>
</body>
</html>
