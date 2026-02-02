<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>¡Hoy termina la estancia de {{ $reservation->pet->name }}!</h1>

<p>Hola {{ $reservation->user->name }},</p>

<p>Te recordamos que hoy <strong>{{ $reservation->end_date->format('d/m/Y') }}</strong> finaliza la reserva de tu
    mascota.</p>

<h3>Detalles:</h3>
<ul>
    <li><strong>Mascota:</strong> {{ $reservation->pet->name }}</li>
    <li><strong>Fecha de recogida:</strong> {{ $reservation->end_date->format('d/m/Y') }}</li>
</ul>

<p>Te esperamos en nuestra clínica.</p>

<p>Gracias,<br>Clínica Veterinaria</p>
</body>
</html>
