<x-guest-layout>
    <div>
        {{-- LISTADO --}}
        <table class="border-black border-2">
            <thead>
            <tr class="border-black border-2">
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio Base</th>

            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->base_price }} €</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $services->links() }}
    </div>
</x-guest-layout>
