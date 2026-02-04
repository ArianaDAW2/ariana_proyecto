<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contrato de Hospedaje</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 12px;
            line-height: 1.6;
            color: #2d3748;
            background-color: #f0fdf4;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #166534 0%, #22c55e 100%);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .header::before {
            font-size: 40px;
            display: block;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .header .fecha {
            font-size: 14px;
            opacity: 0.9;
        }

        /* Contenido principal */
        .content {
            padding: 30px;
        }

        /* Bloques */
        .bloque {
            margin-bottom: 25px;
            border: 2px solid #dcfce7;
            border-radius: 10px;
            overflow: hidden;
        }

        .bloque-header {
            background: linear-gradient(90deg, #166534, #15803d);
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .bloque-content {
            padding: 20px;
            background-color: #f0fdf4;
        }

        /* Grid para datos */
        .datos-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .dato-item {
            background-color: white;
            padding: 12px 15px;
            border-radius: 8px;
            border-left: 4px solid #22c55e;
        }

        .dato-item.full-width {
            grid-column: span 2;
        }

        .dato-label {
            font-size: 10px;
            text-transform: uppercase;
            color: #166534;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 3px;
        }

        .dato-valor {
            font-size: 14px;
            color: #1f2937;
            font-weight: 500;
        }

        /* Tabla de servicios */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background-color: #166534;
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #dcfce7;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #f0fdf4;
        }

        .precio {
            font-weight: 600;
            color: #166534;
        }

        /* Términos */
        .terminos-lista {
            list-style: none;
        }

        .terminos-lista li {
            background-color: white;
            padding: 12px 15px;
            margin-bottom: 8px;
            border-radius: 8px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .terminos-lista li:last-child {
            margin-bottom: 0;
        }

        .termino-numero {
            background-color: #22c55e;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            flex-shrink: 0;
        }

        .termino-texto {
            flex: 1;
            padding-top: 2px;
        }

        /* Firmas */
        .firmas {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            padding: 0 20px;
        }

        .firma-box {
            text-align: center;
        }

        .firma-linea {
            border-top: 2px solid #166534;
            margin-top: 60px;
            padding-top: 10px;
        }

        .firma-label {
            color: #166534;
            font-weight: 600;
            font-size: 13px;
        }

        /* Footer */
        .footer {
            background-color: #166534;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 11px;
            margin-top: 30px;
        }

        .footer a {
            color: #86efac;
            text-decoration: none;
        }

        /* Total destacado */
        .total-box {
            background: linear-gradient(135deg, #166534, #22c55e);
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .total-label {
            font-size: 14px;
            font-weight: 500;
        }

        .total-valor {
            font-size: 24px;
            font-weight: 700;
        }
    </style>
</head>

<body>
<div class="container">
    <!-- HEADER -->
    <div class="header">
        <h1>HotelForPets</h1>
        <h1>Contrato de Hospedaje</h1>
        <p class="fecha">Fecha: {{ now()->format('d/m/Y') }}</p>
    </div>

    <div class="content">
        <!-- BLOQUE 1: DATOS DEL CLIENTE Y MASCOTA -->
        <div class="bloque">
            <div class="bloque-header">
                Datos del Cliente y Mascota
            </div>
            <div class="bloque-content">
                <div class="datos-grid">
                    <div class="dato-item">
                        <div class="dato-label">Nombre del Cliente</div>
                        <div class="dato-valor">{{ $reservation->user->name }}</div>
                    </div>
                    <div class="dato-item">
                        <div class="dato-label">Email</div>
                        <div class="dato-valor">{{ $reservation->user->email }}</div>
                    </div>
                    <div class="dato-item">
                        <div class="dato-label">Nombre de la Mascota</div>
                        <div class="dato-valor">{{ $reservation->pet->name }}</div>
                    </div>
                    <div class="dato-item">
                        <div class="dato-label">Especie</div>
                        <div class="dato-valor">{{ $reservation->pet->species }}</div>
                    </div>
                    <div class="dato-item full-width">
                        <div class="dato-label">Raza</div>
                        <div class="dato-valor">{{ $reservation->pet->breed }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BLOQUE 2: DETALLES DE LA RESERVA -->
        <div class="bloque">
            <div class="bloque-header">
                Detalles de la Reserva
            </div>
            <div class="bloque-content">
                <div class="datos-grid">
                    <div class="dato-item">
                        <div class="dato-label">Fecha de Entrada</div>
                        <div class="dato-valor">{{ $reservation->start_date->format('d/m/Y') }}</div>
                    </div>
                    <div class="dato-item">
                        <div class="dato-label">Fecha de Salida</div>
                        <div class="dato-valor">{{ $reservation->end_date->format('d/m/Y') }}</div>
                    </div>
                </div>
                <div class="total-box">
                    <span class="total-label">Precio Total</span>
                    <span class="total-valor">{{ number_format($reservation->total_price, 2) }} €</span>
                </div>
            </div>
        </div>

        <!-- BLOQUE 3: SERVICIOS CONTRATADOS -->
        <div class="bloque">
            <div class="bloque-header">
                Servicios Contratados
            </div>
            <div class="bloque-content">
                <table>
                    <thead>
                    <tr>
                        <th>Servicio</th>
                        <th style="text-align: right;">Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reservation->services as $service)
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td class="precio" style="text-align: right;">{{ number_format($service->price, 2) }} €
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- BLOQUE 4: TÉRMINOS Y CONDICIONES -->
        <div class="bloque">
            <div class="bloque-header">
                Términos y Condiciones
            </div>
            <div class="bloque-content">
                <ul class="terminos-lista">
                    <li>
                        <span class="termino-numero">1</span>
                        <span class="termino-texto">El cliente se compromete a recoger a su mascota en la fecha
                                acordada.</span>
                    </li>
                    <li>
                        <span class="termino-numero">2</span>
                        <span class="termino-texto">El hotel no se hace responsable de enfermedades previas no
                                comunicadas.</span>
                    </li>
                    <li>
                        <span class="termino-numero">3</span>
                        <span class="termino-texto">Es obligatorio presentar cartilla de vacunación
                                actualizada.</span>
                    </li>
                    <li>
                        <span class="termino-numero">4</span>
                        <span class="termino-texto">El pago debe realizarse antes del inicio de la estancia.</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- FIRMAS -->
        <div class="firmas">
            <div class="firma-box">
                <div class="firma-linea">
                    <p class="firma-label">Firma del Cliente</p>
                </div>
            </div>
            <div class="firma-box">
                <div class="firma-linea">
                    <p class="firma-label">Firma del Hotel</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <p> Hotel de Mascotas — Cuidamos a tu mejor amigo como si fuera nuestro </p>
    </div>
</div>
</body>

</html>
