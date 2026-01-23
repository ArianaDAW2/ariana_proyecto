<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\Pet::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <select wire:model="user_id">
                <option value="">Propietario</option>
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                @endforeach
            </select>
            @error('user_id') <span>{{ $message }}</span> @enderror

            <input type="text" wire:model="name" placeholder="Nombre">
            @error('name') <span>{{ $message }}</span> @enderror

            <input type="text" wire:model="species" placeholder="Especie">
            @error('species') <span>{{ $message }}</span> @enderror

            <input type="text" wire:model="breed" placeholder="Raza">
            @error('breed') <span>{{ $message }}</span> @enderror

            <input type="number" wire:model="age" placeholder="Edad">
            @error('age') <span>{{ $message }}</span> @enderror

            <input type="number" step="0.01" wire:model="weight" placeholder="Peso">
            @error('weight') <span>{{ $message }}</span> @enderror

            <textarea wire:model="notes" placeholder="Notas"></textarea>
            @error('notes') <span>{{ $message }}</span> @enderror

            <button type="submit">{{ $isEdit ? 'Actualizar' : 'Crear mascota' }}</button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>Propietario</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Peso</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->owner->name }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->species }}</td>
                <td>{{ $pet->breed }}</td>
                <td>{{ $pet->age }}</td>
                <td>{{ $pet->weight }}</td>
                <td>
                    @can('update', $pet)
                        <button wire:click="edit({{ $pet->id }})">Editar</button>
                    @endcan

                    @can('delete', $pet)
                        <button wire:click="delete({{ $pet->id }})">Eliminar</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mb-4 flex gap-4">
        <select wire:model.live="filterSpecies" class="rounded border-gray-300">
            <option value="">Todas las especies</option>
            @foreach($speciesList as $species)
                <option value="{{ $species }}">{{ $species }}</option>
            @endforeach
        </select>

        <label class="flex items-center gap-2">
            <input type="checkbox" wire:model.live="sortByName" class="rounded">
            Ordenar alfabéticamente por mascota
        </label>
    </div>
    <div class="mb-4 flex gap-4 items-center">
        <div class="flex items-center gap-2">
            <label>Peso mínimo: {{ $minWeight }}kg</label>
            <input type="range" wire:model.live="minWeight" min="0" max="100" step="1" class="w-32">
        </div>

        <div class="flex items-center gap-2">
            <label>Peso máximo: {{ $maxWeight }}kg</label>
            <input type="range" wire:model.live="maxWeight" min="0" max="100" step="1" class="w-32">
        </div>
    </div>
    {{ $pets->links() }}
</div>
