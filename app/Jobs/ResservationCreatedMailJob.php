<?php

namespace App\Jobs;

use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Job para procesar y generar PDFs de reservaciones
 *
 * Este Job implementa ShouldQueue, lo que significa que puede ejecutarse
 * de forma asíncrona en segundo plano a través del sistema de colas de Laravel
 */
class resservationCreatedMailJob implements ShouldQueue
{
    // Dispatchable: Permite despachar el Job con Job::dispatch()
    // InteractsWithQueue: Permite interactuar con la cola (reintentos, eliminar, etc.)
    // Queueable: Añade métodos para especificar la cola, conexión y delay
    // SerializesModels: Serializa los modelos Eloquent de forma eficiente (solo guarda el ID)
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Constructor del Job
     *
     * @param Reservation $reservation - La reservación para la cual generar el PDF
     *
     * IMPORTANTE: Los datos que el Job necesita para ejecutarse deben
     * pasarse en el constructor. Esto permite que Laravel pueda:
     * 1. Serializar el Job completo (convertirlo a string/JSON)
     * 2. Guardarlo en la cola (database, Redis, etc.)
     * 3. Deserializarlo cuando un worker lo tome para procesarlo
     *
     * Al usar "public Reservation $reservation", PHP crea automáticamente
     * una propiedad pública y la asigna en el constructor (sintaxis PHP 8+)
     * Equivalente a:
     * public Reservation $reservation;
     * public function __construct(Reservation $reservation) {
     *     $this->reservation = $reservation;
     * }
     *
     * Gracias a SerializesModels, Laravel solo guarda el ID de la reservación,
     * no todo el objeto, lo que ahorra espacio y es más eficiente.
     */
    public function __construct(public Reservation $reservation)
    {
    }

    /**
     * Ejecuta el Job
     *
     * Este método se ejecuta cuando el worker de Laravel procesa el Job.
     *
     * @return string - Retorna el contenido binario del PDF generado
     *
     * Flujo de ejecución:
     * 1. Laravel toma el Job de la cola
     * 2. Deserializa la reservación (carga el modelo desde la BD usando el ID guardado)
     * 3. Llama a este método handle()
     * 4. El método genera el PDF y retorna su contenido
     *
     * NOTA: En el contexto de colas asíncronas, el valor de retorno
     * normalmente se pierde. Sin embargo, cuando ejecutamos el Job
     * de forma síncrona (sin cola) como en el listener, sí podemos
     * capturar este valor de retorno.
     */
    public function handle(): string
    {
        // Pdf::loadView() carga una vista Blade y la convierte a PDF
        // Primer parámetro: ruta de la vista ('pdf.reservation' = resources/views/pdf/reservation.blade.php)
        // Segundo parámetro: array con los datos que se pasarán a la vista
        $pdf = Pdf::loadView('pdf.reservation', [
            'reservation' => $this->reservation
        ]);
        // output() retorna el contenido binario del PDF como string
        // Este contenido puede ser:
        // - Guardado en un archivo
        // - Enviado como descarga
        // - Adjuntado a un email (nuestro caso)
        // - Almacenado en storage/S3
        return $pdf->output();
    }
}
