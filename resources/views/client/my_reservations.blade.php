<x-app-layout>
    <table>
        <thead>
        <tr>
            <th>Cliente</th>
            <th>Mascota</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Status</th>
            <th>Total</th>
            <th>Servicios</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->pet->name }}</td>
                <td>{{ $reservation->start_date }}</td>
                <td>{{ $reservation->end_date }}</td>
                <td>{{ ucfirst($reservation->status) }}</td>
                <td>{{ $reservation->total_price }} €</td>
                <td>
                    @foreach($reservation->services as $service)
                        {{ $service->name }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $reservations->links() }}
    
</x-app-layout>
