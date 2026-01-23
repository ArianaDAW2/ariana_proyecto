<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\Service::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <input type="text" wire:model="name" placeholder="{{ __('private.service_name') }}">
            @error('name') <span>{{ $message }}</span> @enderror

            <textarea wire:model="description" placeholder="{{ __('private.description') }}"></textarea>
            @error('description') <span>{{ $message }}</span> @enderror

            <input type="number" step="0.01" wire:model="base_price" placeholder="{{ __('private.base_price') }}">
            @error('base_price') <span>{{ $message }}</span> @enderror

            <label>
                <input type="checkbox" wire:model="is_active"> {{ __('private.active') }}
            </label>
            @error('is_active') <span>{{ $message }}</span> @enderror

            <button type="submit">{{ $isEdit ? __('private.update') : __('private.create_service') }}</button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>{{ __('private.name') }}</th>
            <th>{{ __('private.description') }}</th>
            <th>{{ __('private.base_price') }}</th>
            <th>{{ __('private.active') }}</th>
            @can('manage_services')
                <th>{{ __('private.actions') }}</th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->base_price }} €</td>
                <td>{{ $service->is_active ? __('private.yes') : __('private.no') }}</td>
                <td>
                    @can('update', $service)
                        <button wire:click="edit({{ $service->id }})">{{ __('private.edit') }}</button>
                    @endcan

                    @can('delete', $service)
                        <button wire:click="delete({{ $service->id }})">{{ __('private.delete') }}</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $services->links() }}
</div>
