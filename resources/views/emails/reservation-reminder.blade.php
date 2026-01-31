<!-- resources/views/emails/reservation-reminder.blade.php -->

<h1>¡Hola, {{ $reservation->user->name }}!</h1>

<p>Te recordamos que tu reserva es <strong>mañana</strong>.</p>

<ul>
    <li>Mascota: {{ $reservation->pet->name }}</li>
    <li>Fecha entrada: {{ $reservation->start_date }}</li>
    <li>Fecha salida: {{ $reservation->end_date }}</li>
</ul>

<p>¡Te esperamos!</p>
