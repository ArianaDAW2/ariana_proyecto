<div class="space-y-6">

    <div class="flex justify-between">
        <h1 class="text-xl font-bold">Mascotas</h1>
        <button wire:click="create" class="btn btn-primary">Nueva mascota</button>
    </div>

    @if($editing)
        <div class="card p-6 space-y-4">
            <x-input label="Nombre" wire:model.defer="pet.name"/>
            <x-input label="Especie" wire:model.defer="pet.species"/>
            <x-input label="Raza" wire:model.defer="pet.breed"/>
            <x-input type="number" step="0.1" label="Peso (kg)" wire:model.defer="pet.weight"/>
            <x-date-picker label="Fecha de nacimiento" wire:model.defer="pet.birth_date"/>
            <x-input label="Notas" wire:model.defer="pet.notes"/>

            <div class="flex gap-2">
                <button wire:click="save" class="btn btn-success">Guardar</button>
                <button wire:click="$set('editing', false)" class="btn btn-secondary">Cancelar</button>
            </div>
        </div>
    @endif

    <table class="table-auto w-full">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Peso</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->species }}</td>
                <td>{{ $pet->weight }} kg</td>
                <td class="flex gap-2">
                    <button wire:click="edit({{ $pet->id }})" class="btn btn-sm">Editar</button>
                    <button wire:click="delete({{ $pet->id }})"
                            onclick="confirm('¿Eliminar?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
