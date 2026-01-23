<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Servicios más comprados</h2>

                <table class="w-full text-left">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">Servicio</th>
                        <th class="px-4 py-3">Precio</th>
                        <th class="px-4 py-3">Estado</th>
                        <th class="px-4 py-3 text-right">Veces comprado</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    @forelse($services as $service)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $service->name }}</td>
                            <td class="px-4 py-3">{{ number_format($service->base_price, 2) }}€</td>
                            <td class="px-4 py-3">
                                @if($service->is_active)
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Activo</span>
                                @else
                                    <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full">Inactivo</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-right">{{ $service->reservations_count }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-3 text-center text-gray-400">Sin servicios</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
