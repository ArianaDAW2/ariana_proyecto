<div>
    @can('manage_users')
        <livewire:user-form :key="$form->userId ?? 'new-user'"/>
    @endcan

    @if(session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 mb-2">{{ session('message') }}</div>
    @endif

    <table class="min-w-full divide-y divide-gray-200">
        <thead>
        <tr>
            <th class="px-6 py-3 text-left">Nombre</th>
            <th class="px-6 py-3 text-left">Email</th>
            <th class="px-6 py-3 text-left">Roles</th>
            <th class="px-6 py-3 text-left">Acciones</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($users as $user)
            <tr>
                <td class="px-6 py-4">{{ $user->name }}</td>
                <td class="px-6 py-4">{{ $user->email }}</td>
                <td class="px-6 py-4">{{ $user->roles->pluck('name')->join(', ') }}</td>
                <td class="px-6 py-4">
                    @can('manage_users')
                        <button wire:click="$emit('editUser', {{ $user->id }})"
                                class="bg-blue-500 text-white px-2 py-1 rounded">Editar
                        </button>

                        <button wire:click="deleteUser({{ $user->id }})"
                                class="bg-red-500 text-white px-2 py-1 rounded"
                                onclick="confirm('¿Eliminar usuario?') || event.stopImmediatePropagation()">
                            Eliminar
                        </button>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
