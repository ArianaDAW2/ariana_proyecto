<!-- resources/views/emails/check-out.blade.php -->

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

        .summary {
            background-color: #f9f9f9;
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

    <p>¡Hola, {{ $reservation->user->name }}!</p>

    <p>Esperamos que <strong>{{ $reservation->pet->name }}</strong> haya disfrutado de su estancia con nosotros.</p>

    <div class="summary">
        <p><strong>Resumen de la estancia:</strong></p>
        <ul>
            <li>Entrada: {{ $reservation->start_date->format('d/m/Y') }}</li>
            <li>Salida: {{ $reservation->end_date->format('d/m/Y') }}</li>
            <li>Total: {{ number_format($reservation->total_price, 2) }} €</li>
        </ul>
    </div>

    <p>¡Gracias por confiar en nosotros! Esperamos verte pronto.</p>

    <div class="footer">
        <p>HotelForPets - Tu clínica veterinaria y hotel de confianza</p>
    </div>
</div>
</body>
</html>
