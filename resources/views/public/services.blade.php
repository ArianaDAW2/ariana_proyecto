<x-guest-layout>
    <div class="text-center">
        @if($request->status === 'inactive')
            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">SERVICIOS INACTIVOS</h1>
        @else
            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">SERVICIOS</h1>
        @endif
        {{-- LISTADO --}}
        <table class="border-black border-2 text-center mx-20">
            <thead>
            <tr class="border-black border-2 grid grid-cols-3">
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio Base</th>

            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr class="grid grid-cols-3">
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        @if($request->status === 'inactive' || !$service->base_price)
                            unknown €
                        @else
                            {{ $service->base_price }} €
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $services->links() }}
    </div>
    <div class="inline-block">
        <a href="{{ route('services', ['status' => 'active']) }}" class="btn btn-warning ">
            Activos
        </a>

        <a href="{{ route('services', ['status' => 'inactive']) }}" class="btn btn-danger">
            Inactivos
        </a>
    </div>
</x-guest-layout>
