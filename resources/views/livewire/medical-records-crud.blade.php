<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\MedicalRecord::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <select wire:model="pet_id">
                <option value="">Mascota</option>
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">
                        {{ $pet->name ?? 'Mascota #' . $pet->id }}
                    </option>
                @endforeach
            </select>
            @error('pet_id') <span>{{ $message }}</span> @enderror

            <select wire:model="veterinarian_id">
                <option value="">Veterinario</option>
                @foreach($veterinarians as $vet)
                    <option value="{{ $vet->id }}">
                        {{ $vet->name }}
                    </option>
                @endforeach
            </select>
            @error('veterinarian_id') <span>{{ $message }}</span> @enderror

            <textarea wire:model="diagnosis" placeholder="Diagnóstico"></textarea>
            @error('diagnosis') <span>{{ $message }}</span> @enderror

            <textarea wire:model="treatment" placeholder="Tratamiento"></textarea>
            @error('treatment') <span>{{ $message }}</span> @enderror

            <textarea wire:model="notes" placeholder="Notas"></textarea>
            @error('notes') <span>{{ $message }}</span> @enderror

            <button type="submit">
                {{ $isEdit ? 'Actualizar' : 'Crear historial' }}
            </button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>Mascota</th>
            <th>Veterinario</th>
            <th>Diagnóstico</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $record->pet->name ?? $record->pet_id }}</td>
                <td>{{ $record->veterinarian->name }}</td>
                <td>{{ Str::limit($record->diagnosis, 50) }}</td>
                <td>
                    @can('update', $record)
                        <button wire:click="edit({{ $record->id }})">
                            Editar
                        </button>
                    @endcan

                    @can('delete', $record)
                        <button wire:click="delete({{ $record->id }})">
                            Eliminar
                        </button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $records->links() }}
</div>
