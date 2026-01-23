<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <table class="w-full text-left">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Mascotas</th>
                        <th class="px-4 py-3 text-right">Top compras</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    @foreach($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $user->name }}</td>
                            <td class="px-4 py-3">
                                {{ $user->pets->pluck('name')->join(', ') ?: 'Sin mascotas' }}
                            </td>
                            <td class="px-4 py-3 text-right">{{ number_format($user->reservations_sum_total_price ?? 0, 2) }}
                                €
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
