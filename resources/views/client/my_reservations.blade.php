<x-app-layout>
    @if($reservations[0] == null)
        {

        <h1 class="font-bold text-gray-700 text-[35px] pb-5 text-center">No tienes reservas</h1>
    @else
        {
        <table class="text-center mx-auto">
            <thead>
            <tr class="grid grid-cols-6">
                <th>Mascota</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Status</th>
                <th>Total</th>
                <th>Servicios</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservations as $reservation)
                <tr class="grid grid-cols-6">
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
    @endif
</x-app-layout>
