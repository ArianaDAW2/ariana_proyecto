<!-- resources/views/emails/reservation-cancelled.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
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

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="logo">🐾 HotelForPets</div>
    </div>

    <p>Hola, {{ $reservation->user->name }}.</p>

    <div class="alert">
        <p>Tu reserva ha sido cancelada por falta de confirmación.</p>
    </div>

    <p><strong>Detalles de la reserva:</strong></p>
    <ul>
        <li>Mascota: {{ $reservation->pet->name }}</li>
        <li>Fecha entrada: {{ $reservation->start_date->format('d/m/Y') }}</li>
        <li>Fecha salida: {{ $reservation->end_date->format('d/m/Y') }}</li>
    </ul>

    <p>Si deseas hacer una nueva reserva, visita nuestra web.</p>

    <div class="footer">
        <p>HotelForPets - Tu clínica veterinaria y hotel de confianza</p>
    </div>
</div>
</body>
</html>
