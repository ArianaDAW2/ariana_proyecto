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
                    <td>{{ $reservation->start_date->format('d/m/Y') }}</td>
                    <td>{{ $reservation->end_date->format('d/m/Y') }}</td>
                    <td>{{ ucfirst($reservation->status) }}</td>
                    <td>{{ $reservation->total_price }} €</td>
                    <td>
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">
                                    Ver servicios ({{ $reservation->services->count() }})
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                @foreach($reservation->services as $service)
                                    <x-dropdown-link href="#">
                                        {{ $service->name }}
                                    </x-dropdown-link>
                                @endforeach
                            </x-slot>
                        </x-dropdown>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $reservations->links() }}
    @endif
</x-app-layout>
