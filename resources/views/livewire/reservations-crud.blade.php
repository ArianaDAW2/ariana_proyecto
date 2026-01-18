<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\Reservation::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <select wire:model="user_id">
                <option value="">Cliente</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('user_id') <span>{{ $message }}</span> @enderror

            <select wire:model="pet_id">
                <option value="">Mascota</option>
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                @endforeach
            </select>
            @error('pet_id') <span>{{ $message }}</span> @enderror

            <input type="date" wire:model="start_date" placeholder="Fecha inicio">
            @error('start_date') <span>{{ $message }}</span> @enderror

            <input type="date" wire:model="end_date" placeholder="Fecha fin">
            @error('end_date') <span>{{ $message }}</span> @enderror

            <select wire:model="status">
                <option value="pending">Pendiente</option>
                <option value="confirmed">Confirmada</option>
                <option value="completed">Completada</option>
                <option value="cancelled">Cancelada</option>
            </select>
            @error('status') <span>{{ $message }}</span> @enderror

            <input type="number" step="0.01" wire:model="total_price" placeholder="Precio total">
            @error('total_price') <span>{{ $message }}</span> @enderror

            <label>Servicios:</label>
            @foreach($services as $service)
                <div>
                    <input type="checkbox" value="{{ $service->id }}" wire:model="selectedServices">
                    {{ $service->name }} ({{ $service->price }} €)
                </div>
            @endforeach

            <button type="submit">{{ $isEdit ? 'Actualizar' : 'Crear reserva' }}</button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>Cliente</th>
            <th>Mascota</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Status</th>
            <th>Total</th>
            <th>Servicios</th>
            <th>Acciones</th>
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
                        <button wire:click="edit({{ $reservation->id }})">Editar</button>
                    @endcan

                    @can('delete', $reservation)
                        <button wire:click="delete({{ $reservation->id }})">Eliminar</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $reservations->links() }}
</div>
