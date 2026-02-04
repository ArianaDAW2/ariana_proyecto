<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>HotelForPets</title>
</head>

<body
    style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f0fdf4; margin: 0; padding: 20px;">
<div
    style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

    <!-- Header -->
    <div style="background-color: #16a34a; padding: 24px; text-align: center;">
        <h1 style="color: #ffffff; margin: 0; font-size: 24px;">🐾 HotelForPets</h1>
    </div>

    <!-- Content -->
    <div style="padding: 32px;">
        <h2 style="color: #15803d; margin: 0 0 16px 0; font-size: 20px;">¡Hola, {{ $reservation->user->name }}!</h2>

        <div style="background-color: #f0fdf4; padding: 20px; border-radius: 8px; border-left: 4px solid #16a34a;">
            <p style="margin: 0;  color: #374151;">Te recordamos que tu reserva es
                <strong>mañana</strong>.
            </p>
            <ul>
                <li>Mascota: {{ $reservation->pet->name }}</li>
                <li>Fecha entrada: {{ $reservation->start_date }}</li>
                <li>Fecha salida: {{ $reservation->end_date }}</li>
            </ul>

            <p>¡Te esperamos!</p>
        </div>
    </div>

    <!-- Footer -->
    <div style="background-color: #dcfce7; padding: 20px; text-align: center;">
        <p style="margin: 0; color: #166534; font-size: 14px;">
            HotelForPets - Cuidamos a tu mascota como familia 🐕
        </p>
        <p style="margin: 8px 0 0 0; color: #6b7280; font-size: 12px;">
            Este mensaje fue enviado a todos los usuarios registrados.
        </p>
    </div>
</div>
</body>

</html>
