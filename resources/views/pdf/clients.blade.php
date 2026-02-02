<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h1, h2 {
            color: #333;
        }

        .fecha {
            text-align: right;
            margin-bottom: 20px;
        }

        .seccion {
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
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
            text-align: right;
            font-weight: bold;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1>Reporte de Cliente</h1>
<p class="fecha">Fecha: {{ now()->format('d/m/Y') }}</p>

<div class="seccion">
    <h2>Datos del Cliente</h2>
    <p><strong>Nombre:</strong> {{ $client->name }}</p>
    <p><strong>Email:</strong> {{ $client->email }}</p>
</div>

<div class="seccion">
    <h2>Mascotas ({{ $client->pets->count() }})</h2>
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad</th>
        </tr>
        </thead>
        <tbody>
        @foreach($client->pets as $pet)
            <tr>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->species }}</td>
                <td>{{ $pet->breed }}</td>
                <td>{{ $pet->age }} años</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="seccion">
    <h2>Reservas ({{ $client->reservations->count() }})</h2>
    <table>
        <thead>
        <tr>
            <th>Mascota</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Estado</th>
            <th>Precio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($client->reservations as $reservation)
            <tr>
                <td>{{ $reservation->pet->name }}</td>
                <td>{{ $reservation->start_date->format('d/m/Y') }}</td>
                <td>{{ $reservation->end_date->format('d/m/Y') }}</td>
                <td>{{ $reservation->status }}</td>
                <td>{{ number_format($reservation->total_price, 2) }} €</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<p class="total">Total gastado: {{ number_format($totalGastado, 2) }} €</p>
</body>
</html>
