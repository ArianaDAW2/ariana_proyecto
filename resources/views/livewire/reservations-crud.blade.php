<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\Reservation::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <select wire:model="user_id">
                <option value="">{{ __('private.client') }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('user_id') <span>{{ $message }}</span> @enderror

            <select wire:model="pet_id">
                <option value="">{{ __('private.pet') }}</option>
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                @endforeach
            </select>
            @error('pet_id') <span>{{ $message }}</span> @enderror

            <input type="date" wire:model="start_date" placeholder="{{ __('private.start_date') }}">
            @error('start_date') <span>{{ $message }}</span> @enderror

            <input type="date" wire:model="end_date" placeholder="{{ __('private.end_date') }}">
            @error('end_date') <span>{{ $message }}</span> @enderror

            <select wire:model="status">
                <option value="pending">{{ __('private.pending') }}</option>
                <option value="confirmed">{{ __('private.confirmed') }}</option>
                <option value="completed">{{ __('private.completed') }}</option>
                <option value="cancelled">{{ __('private.cancelled') }}</option>
            </select>
            @error('status') <span>{{ $message }}</span> @enderror

            <input type="number" step="0.01" wire:model="total_price" placeholder="{{ __('private.total_price') }}">
            @error('total_price') <span>{{ $message }}</span> @enderror

            <label>{{ __('private.services') }}:</label>
            @foreach($services as $service)
                <div>
                    <input type="checkbox" value="{{ $service->id }}" wire:model="selectedServices">
                    {{ $service->name }} ({{ $service->price }} €)
                </div>
            @endforeach

            <button type="submit">{{ $isEdit ? __('private.update') : __('private.create_reservation') }}</button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>{{ __('private.client') }}</th>
            <th>{{ __('private.pet') }}</th>
            <th>{{ __('private.start_date') }}</th>
            <th>{{ __('private.end_date') }}</th>
            <th>{{ __('private.status') }}</th>
            <th>{{ __('private.total') }}</th>
            <th>{{ __('private.services') }}</th>
            <th>{{ __('private.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->user->name }}</td>
                <td>{{ $reservation->pet->name }}</td>
                <td>{{ $reservation->start_date }}</td>
                <td>{{ $reservation->end_date }}</td>
                <td>{{ ucfirst($reservation->status) }}</td>
                <td>{{ $reservation->total_price }} €</td>
                <td>
                    @foreach($reservation->services as $service)
                        {{ $service->name }}<br>
                    @endforeach
                </td>
                <td>
                    @can('update', $reservation)
                        <button wire:click="edit({{ $reservation->id }})">{{ __('private.edit') }}</button>
                    @endcan

                    @can('delete', $reservation)
                        <button wire:click="delete({{ $reservation->id }})">{{ __('private.delete') }}</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $reservations->links() }}
</div>
