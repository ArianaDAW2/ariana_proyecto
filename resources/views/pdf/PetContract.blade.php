<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contrato de Hospedaje</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.6;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .fecha {
            text-align: right;
            margin-bottom: 20px;
        }

        .seccion {
            margin-bottom: 20px;
        }

        .seccion h3 {
            background-color: #f0f0f0;
            padding: 5px 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        .firmas {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }

        .firma {
            width: 45%;
            text-align: center;
        }

        .linea {
            border-top: 1px solid #333;
            margin-top: 50px;
            padding-top: 5px;
        }
    </style>
</head>
<body>
<h1>Contrato de Hospedaje</h1>
<p class="fecha">Fecha: {{ now()->format('d/m/Y') }}</p>

<div class="seccion">
    <h3>Datos del Cliente</h3>
    <p><strong>Nombre:</strong> {{ $reservation->user->name }}</p>
    <p><strong>Email:</strong> {{ $reservation->user->email }}</p>
</div>

<div class="seccion">
    <h3>Datos de la Mascota</h3>
    <p><strong>Nombre:</strong> {{ $reservation->pet->name }}</p>
    <p><strong>Especie:</strong> {{ $reservation->pet->species }}</p>
    <p><strong>Raza:</strong> {{ $reservation->pet->breed }}</p>
</div>

<div class="seccion">
    <h3>Detalles de la Reserva</h3>
    <p><strong>Fecha de entrada:</strong> {{ $reservation->start_date->format('d/m/Y') }}</p>
    <p><strong>Fecha de salida:</strong> {{ $reservation->end_date->format('d/m/Y') }}</p>
    <p><strong>Precio total:</strong> {{ number_format($reservation->total_price, 2) }} €</p>
</div>

@if($reservation->services->count() > 0)
    <div class="seccion">
        <h3>Servicios Contratados</h3>
        <table>
            <thead>
            <tr>
                <th>Servicio</th>
                <th>Precio</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservation->services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ number_format($service->price, 2) }} €</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif

<div class="seccion">
    <h3>Términos y Condiciones</h3>
    <p>1. El cliente se compromete a recoger a su mascota en la fecha acordada.</p>
    <p>2. El hotel no se hace responsable de enfermedades previas no comunicadas.</p>
    <p>3. Es obligatorio presentar cartilla de vacunación actualizada.</p>
    <p>4. El pago debe realizarse antes del inicio de la estancia.</p>
</div>

<table>
    <tr>
        <td style="width: 50%; border: none;">
            <p class="linea">Firma del Cliente</p>
        </td>
        <td style="width: 50%; border: none;">
            <p class="linea">Firma del Hotel</p>
        </td>
    </tr>
</table>
</body>
</html>
