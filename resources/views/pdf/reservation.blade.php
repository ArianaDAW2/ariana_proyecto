<!-- resources/views/pdf/reservation.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reservación #{{ $reservation->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #4CAF50;
            padding-bottom: 20px;
        }

        .header h1 {
            color: #4CAF50;
            margin: 0;
            font-size: 32px;
        }

        .header h2 {
            color: #666;
            margin: 10px 0 0 0;
            font-weight: normal;
        }

        .info-box {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .info-box h3 {
            margin-top: 0;
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }

        .info-row {
            margin-bottom: 12px;
            line-height: 1.6;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 180px;
            color: #555;
        }

        .value {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .total-row {
            background-color: #4CAF50 !important;
            color: white;
            font-weight: bold;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #666;
            border-top: 2px solid #ddd;
            padding-top: 20px;
        }

        .footer p {
            margin: 5px 0;
        }

        .confirmation-number {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="header">
    <h1> HotelForPets</h1>
    <h2>Confirmación de Reservación</h2>
    <div class="confirmation-number">
        #{{ str_pad($reservation->id, 6, '0', STR_PAD_LEFT) }}
    </div>
</div>

<div class="info-box">
    <h3>Detalles de la Reservación</h3>
    <div class="info-row">
        <span class="label">Fecha de Reservación:</span>
        <span class="value">{{ $reservation->created_at->format('d/m/Y H:i') }}</span>
    </div>
    <div class="info-row">
        <span class="label">Estado:</span>
        <span class="value">{{ ucfirst($reservation->status) }}</span>
    </div>
</div>

<div class="info-box">
    <h3>Información del Cliente</h3>
    <div class="info-row">
        <span class="label">Nombre:</span>
        <span class="value">{{ $reservation->user->name }}</span>
    </div>
    <div class="info-row">
        <span class="label">Email:</span>
        <span class="value">{{ $reservation->user->email }}</span>
    </div>
</div>

<div class="info-box">
    <h3>Información de la Mascota</h3>
    <div class="info-row">
        <span class="label">Nombre:</span>
        <span class="value">{{ $reservation->pet->name }}</span>
    </div>
    <div class="info-row">
        <span class="label">Especie:</span>
        <span class="value">{{ $reservation->pet->species }}</span>
    </div>
    @if($reservation->pet->breed)
        <div class="info-row">
            <span class="label">Raza:</span>
            <span class="value">{{ $reservation->pet->breed }}</span>
        </div>
    @endif
    @if($reservation->pet->age)
        <div class="info-row">
            <span class="label">Edad:</span>
            <span class="value">{{ $reservation->pet->age }} años</span>
        </div>
    @endif
    <div class="info-row">
        <span class="label">Peso:</span>
        <span class="value">{{ $reservation->pet->weight }} kg</span>
    </div>
    @if($reservation->pet->notes)
        <div class="info-row">
            <span class="label">Notas sobre la mascota:</span>
            <span class="value">{{ $reservation->pet->notes }}</span>
        </div>
    @endif
</div>

<div class="info-box">
    <h3>Fechas de Hospedaje</h3>
    <div class="info-row">
        <span class="label">Check-in:</span>
        <span class="value">{{ \Carbon\Carbon::parse($reservation->start_date)->format('d/m/Y') }}</span>
    </div>
    <div class="info-row">
        <span class="label">Check-out:</span>
        <span class="value">{{ \Carbon\Carbon::parse($reservation->end_date)->format('d/m/Y') }}</span>
    </div>
    <div class="info-row">
        <span class="label">Total de días:</span>
        <span class="value">{{ \Carbon\Carbon::parse($reservation->start_date)->diffInDays(\Carbon\Carbon::parse($reservation->end_date)) }} día(s)</span>
    </div>
</div>

<div class="info-box">
    <h3>Resumen de Pago</h3>
    <table>
        <thead>
        <tr>
            <th>Concepto</th>
            <th>Descripción</th>
            <th style="text-align: right;">Precio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservation->services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td style="text-align: right;">${{ number_format($service->base_price, 2) }}</td>
            </tr>
        @endforeach

        <tr class="total-row">
            <td colspan="2"><strong>TOTAL</strong></td>
            <td style="text-align: right;"><strong>${{ number_format($reservation->total_price, 2) }}</strong></td>
        </tr>
        </tbody>
    </table>
</div>

<div class="footer">
    <p><strong>¡Gracias por confiar en HotelForPets!</strong></p>
    <p>Para cualquier consulta o modificación, contáctanos:</p>
    <p>info@hotelforpets.com | Tlf: +34 123 456 789</p>
    <p style="margin-top: 15px; font-size: 10px;">
        Este documento es una confirmación de su reservación.<br>
        Por favor, consérvelo para presentarlo el día de check-in.
    </p>
</div>
</body>
</html>
