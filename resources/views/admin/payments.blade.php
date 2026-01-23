<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Pagos</h2>

                <table class="w-full text-left">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Cantidad</th>
                        <th class="px-4 py-3">Método</th>
                        <th class="px-4 py-3">Fecha</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    @forelse($payments as $payment)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $payment->id }}</td>
                            <td class="px-4 py-3">{{ number_format($payment->amount, 2) }}€</td>
                            <td class="px-4 py-3">
                                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">
                                        {{ $payment->payment_method }}
                                    </span>
                            </td>
                            <td class="px-4 py-3">{{ $payment->paid_at?->format('d/m/Y') ?? 'Pendiente' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-3 text-center text-gray-400">Sin pagos</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
