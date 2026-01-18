<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\Service::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <input type="text" wire:model="name" placeholder="Nombre del servicio">
            @error('name') <span>{{ $message }}</span> @enderror

            <textarea wire:model="description" placeholder="Descripción"></textarea>
            @error('description') <span>{{ $message }}</span> @enderror

            <input type="number" step="0.01" wire:model="base_price" placeholder="Precio base">
            @error('base_price') <span>{{ $message }}</span> @enderror

            <label>
                <input type="checkbox" wire:model="is_active"> Activo
            </label>
            @error('is_active') <span>{{ $message }}</span> @enderror

            <button type="submit">{{ $isEdit ? 'Actualizar' : 'Crear servicio' }}</button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio Base</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->base_price }} €</td>
                <td>{{ $service->is_active ? 'Sí' : 'No' }}</td>
                <td>
                    @can('update', $service)
                        <button wire:click="edit({{ $service->id }})">Editar</button>
                    @endcan

                    @can('delete', $service)
                        <button wire:click="delete({{ $service->id }})">Eliminar</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $services->links() }}
</div>
