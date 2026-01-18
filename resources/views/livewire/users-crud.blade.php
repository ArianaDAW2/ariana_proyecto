<div>
    {{-- FORMULARIO --}}
    @can('create', App\Models\User::class)
        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}">
            <input type="text" wire:model="name" placeholder="Nombre">
            @error('name') <span>{{ $message }}</span> @enderror

            <input type="email" wire:model="email" placeholder="Email">
            @error('email') <span>{{ $message }}</span> @enderror

            <input type="password" wire:model="password" placeholder="Contraseña">
            @error('password') <span>{{ $message }}</span> @enderror

            <button type="submit">
                {{ $isEdit ? 'Actualizar' : 'Crear' }}
            </button>
        </form>
    @endcan

    <hr>

    {{-- LISTADO --}}
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @can('update', $user)
                        <button wire:click="edit({{ $user->id }})">Editar</button>
                    @endcan

                    @can('delete', $user)
                        <button wire:click="delete({{ $user->id }})">Eliminar</button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>

