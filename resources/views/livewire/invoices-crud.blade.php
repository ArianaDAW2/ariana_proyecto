<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\Invoice::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <select wire:model="reservation_id">
                <option value="">{{ __('private.reservation') }}</option>
                @foreach($reservations as $reservation)
                    <option value="{{ $reservation->id }}">
                        #{{ $reservation->id }}
                    </option>
                @endforeach
            </select>
            @error('reservation_id') <span>{{ $message }}</span> @enderror

            <input type="text" wire:model="invoice_number" placeholder="{{ __('private.invoice_number') }}">
            @error('invoice_number') <span>{{ $message }}</span> @enderror

            <input type="number" step="0.01" wire:model="total" placeholder="{{ __('private.total') }}">
            @error('total') <span>{{ $message }}</span> @enderror

            <select wire:model="status">
                <option value="unpaid">{{ __('private.unpaid') }}</option>
                <option value="paid">{{ __('private.paid') }}</option>
            </select>
            @error('status') <span>{{ $message }}</span> @enderror

            <input type="datetime-local" wire:model="issued_at">
            @error('issued_at') <span>{{ $message }}</span> @enderror

            <button type="submit">
                {{ $isEdit ? __('private.update') : __('private.create_invoice') }}
            </button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>{{ __('private.invoice') }}</th>
            <th>{{ __('private.total') }}</th>
            <th>{{ __('private.status') }}</th>
            <th>{{ __('private.date') }}</th>
            <th>{{ __('private.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->invoice_number }}</td>
                <td>{{ $invoice->total }} €</td>
                <td>{{ $invoice->status }}</td>
                <td>{{ $invoice->issued_at }}</td>
                <td>
                    @can('update', $invoice)
                        <button wire:click="edit({{ $invoice->id }})">
                            {{ __('private.edit') }}
                        </button>
                    @endcan

                    @can('delete', $invoice)
                        <button wire:click="delete({{ $invoice->id }})">
                            {{ __('private.delete') }}
                        </button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $invoices->links() }}
</div>
