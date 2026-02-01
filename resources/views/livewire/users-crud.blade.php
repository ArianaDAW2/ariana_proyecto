<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\User::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <input type="text" wire:model="name" placeholder="{{ __('private.name') }}">
            @error('name') <span>{{ $message }}</span> @enderror

            <input type="email" wire:model="email" placeholder="{{ __('private.email') }}">
            @error('email') <span>{{ $message }}</span> @enderror

            <input type="password" wire:model="password" placeholder="{{ __('private.password') }}">
            @error('password') <span>{{ $message }}</span> @enderror

            <button type="submit">
                {{ $isEdit ? __('private.update') : __('private.create') }}
            </button>
        </form>
    @endcan

    <hr>
    <a href="{{ route('document.print.morosos') }}" class="btn btn-primary">
        Descargar Morosos PDF
    </a>
    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>{{ __('private.name') }}</th>
            <th>{{ __('private.email') }}</th>
            <th>{{ __('private.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @can('update', $user)
                        <button wire:click="edit({{ $user->id }})">{{ __('private.edit') }}</button>
                    @endcan

                    @can('delete', $user)
                        <button wire:click="delete({{ $user->id }})">{{ __('private.delete') }}</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>
