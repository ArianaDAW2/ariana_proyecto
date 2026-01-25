<!-- resources/views/emails/reservation-confirmation.blade.php -->
<h1>¡Gracias por tu reserva!</h1>

<p>Hola {{ $reservation->client_name }},</p>

<p>Tu reserva ha sido confirmada:</p>

<ul>
    <li><strong>Fecha:</strong> {{ $reservation->date }}</li>
    <li><strong>Mascota:</strong> {{ $reservation->pet_name }}</li>
</ul>

<p>¡Te esperamos!</p>
