<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\Pet::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <select wire:model="user_id">
                <option value="">{{ __('private.owner') }}</option>
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                @endforeach
            </select>
            @error('user_id') <span>{{ $message }}</span> @enderror

            <input type="text" wire:model="name" placeholder="{{ __('private.name') }}">
            @error('name') <span>{{ $message }}</span> @enderror

            <input type="text" wire:model="species" placeholder="{{ __('private.species') }}">
            @error('species') <span>{{ $message }}</span> @enderror

            <input type="text" wire:model="breed" placeholder="{{ __('private.breed') }}">
            @error('breed') <span>{{ $message }}</span> @enderror

            <input type="number" wire:model="age" placeholder="{{ __('private.age') }}">
            @error('age') <span>{{ $message }}</span> @enderror

            <input type="number" step="0.01" wire:model="weight" placeholder="{{ __('private.weight') }}">
            @error('weight') <span>{{ $message }}</span> @enderror

            <textarea wire:model="notes" placeholder="{{ __('private.notes') }}"></textarea>
            @error('notes') <span>{{ $message }}</span> @enderror

            <button type="submit">{{ $isEdit ? __('private.update') : __('private.create_pet') }}</button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>{{ __('private.owner') }}</th>
            <th>{{ __('private.name') }}</th>
            <th>{{ __('private.species') }}</th>
            <th>{{ __('private.breed') }}</th>
            <th>{{ __('private.age') }}</th>
            <th>{{ __('private.weight') }}</th>
            <th>{{ __('private.actions') }}</th>
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
                        <button wire:click="edit({{ $pet->id }})">{{ __('private.edit') }}</button>
                    @endcan

                    @can('delete', $pet)
                        <button wire:click="delete({{ $pet->id }})">{{ __('private.delete') }}</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mb-4 flex gap-4">
        <select wire:model.live="filterSpecies" class="rounded border-gray-300">
            <option value="">{{ __('private.all_species') }}</option>
            @foreach($speciesList as $species)
                <option value="{{ $species }}">{{ $species }}</option>
            @endforeach
        </select>

        <label class="flex items-center gap-2">
            <input type="checkbox" wire:model.live="sortByName" class="rounded">
            {{ __('private.sort_alphabetically') }}
        </label>
    </div>
    <div class="mb-4 flex gap-4 items-center">
        <div class="flex items-center gap-2">
            <label>{{ __('private.min_weight') }}: {{ $minWeight }}kg</label>
            <input type="range" wire:model.live="minWeight" min="0" max="100" step="1" class="w-32">
        </div>

        <div class="flex items-center gap-2">
            <label>{{ __('private.max_weight') }}: {{ $maxWeight }}kg</label>
            <input type="range" wire:model.live="maxWeight" min="0" max="100" step="1" class="w-32">
        </div>
    </div>
    {{ $pets->links() }}
</div>
