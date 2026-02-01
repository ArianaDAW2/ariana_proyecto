<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>Recordatorio de pago pendiente</h1>

<p>Hola {{ $invoice->reservation->user->name }},</p>

<p>Te recordamos que tienes una factura pendiente de pago:</p>

<ul>
    <li><strong>Nº Factura:</strong> {{ $invoice->invoice_number }}</li>
    <li><strong>Fecha:</strong> {{ $invoice->issued_at }}</li>
    <li><strong>Total:</strong> {{ number_format($invoice->total, 2) }} €</li>
</ul>

<p>Por favor, realiza el pago a la mayor brevedad posible.</p>

<p>Gracias,<br>Clínica Veterinaria</p>
</body>
</html>
