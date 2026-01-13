<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold text-gray-800">
            @if($petId)
                Historial Médico de {{ $medicalRecords->first()?->pet->name ?? 'la Mascota' }}
            @else
                Historial Médico General
            @endif
        </h2>
    </div>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Mascota
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Veterinario
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Diagnóstico
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tratamiento
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Notas
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($medicalRecords as $record)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $record->created_at->format('d/m/Y H:i') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <span class="font-medium text-gray-900">{{ $record->pet->name }}</span>
                                <span class="text-xs text-gray-400">({{ $record->pet->species }})</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $record->veterinarian->name }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs truncate"
                                title="{{ $record->diagnosis }}">
                                {{ $record->diagnosis }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"
                                title="{{ $record->treatment }}">
                                {{ $record->treatment ?? 'N/A' }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-400 max-w-xs truncate" title="{{ $record->notes }}">
                                {{ $record->notes ?? '-' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                No se encontraron registros médicos.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $medicalRecords->links() }}
            </div>
        </div>
    </div>
</div>
