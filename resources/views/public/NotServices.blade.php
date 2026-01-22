<x-guest-layout>
    <div class=" text-center">
        {{-- LISTADO --}}
        <table class="border-black border-2 ">
            <thead>
            <tr class="border-black border-2 grid grid-cols-3">
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio Base</th>

            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr class="grid grid-cols-3 items-center ">
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>Indeterminado</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $services->links() }}
    </div>
</x-guest-layout>
