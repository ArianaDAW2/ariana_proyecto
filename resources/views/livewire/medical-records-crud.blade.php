<div>
    {{-- FORMULARIO --}}
    @can('manage_medical_records')
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <select wire:model="pet_id">
                <option value="">{{ __('private.pet') }}</option>
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">
                        {{ $pet->name ?? __('private.pet') . ' #' . $pet->id }}
                    </option>
                @endforeach
            </select>
            @error('pet_id') <span>{{ $message }}</span> @enderror

            <select wire:model="veterinarian_id">
                <option value="">{{ __('private.veterinarian') }}</option>
                @foreach($veterinarians as $vet)
                    <option value="{{ $vet->id }}">
                        {{ $vet->name }}
                    </option>
                @endforeach
            </select>
            @error('veterinarian_id') <span>{{ $message }}</span> @enderror

            <textarea wire:model="diagnosis" placeholder="{{ __('private.diagnosis') }}"></textarea>
            @error('diagnosis') <span>{{ $message }}</span> @enderror

            <textarea wire:model="treatment" placeholder="{{ __('private.treatment') }}"></textarea>
            @error('treatment') <span>{{ $message }}</span> @enderror

            <textarea wire:model="notes" placeholder="{{ __('private.notes') }}"></textarea>
            @error('notes') <span>{{ $message }}</span> @enderror

            <button type="submit">
                {{ $isEdit ? __('private.update') : __('private.create_record') }}
            </button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>{{ __('private.pet') }}</th>
            <th>{{ __('private.veterinarian') }}</th>
            <th>{{ __('private.diagnosis') }}</th>
            <th>{{ __('private.actions') }}</th>
        </tr>
        </thead>

        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $record->pet->name ?? $record->pet_id }}</td>
                <td>{{ $record->veterinarian->name }}</td>
                <td>{{ Str::limit($record->diagnosis, 50) }}</td>
                <td>
                    @can('manage_medical_records')
                        <button wire:click="edit({{ $record->id }})">
                            {{ __('private.edit') }}
                        </button>
                    @endcan

                    @can('manage_medical_records')
                        <button wire:click="delete({{ $record->id }})">
                            {{ __('private.delete') }}
                        </button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $records->links() }}
</div>
