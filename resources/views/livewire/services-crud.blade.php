<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Servicios') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Lista de Servicios</h2>
                @if(auth()->user()->hasRole('Admin'))
                    <button wire:click="create"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                        Nuevo Servicio
                    </button>
                @endif
            </div>

            @if (session()->has('message'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    <p>{{ session('message') }}</p>
                </div>
            @endif

            @if($editing && auth()->user()->hasRole('Admin'))
                <div class="mb-6 p-4 border rounded-lg bg-gray-50">
                    <h3 class="text-lg font-semibold mb-3">{{ $service->id ? 'Editar' : 'Crear' }} Servicio</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" wire:model.defer="service.name"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('service.name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Precio Base</label>
                            <input type="number" step="0.01" wire:model.defer="service.base_price"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('service.base_price') <span
                                class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea wire:model.defer="service.description" rows="3"
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                            @error('service.description') <span
                                class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" wire:model.defer="service.is_active"
                                   class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label class="ml-2 block text-sm text-gray-900">Activo</label>
                        </div>
                    </div>
                    <div class="mt-4 flex gap-2">
                        <button wire:click="save"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition">
                            Guardar
                        </button>
                        <button wire:click="$set('editing', false)"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition">
                            Cancelar
                        </button>
                    </div>
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Descripción
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Precio Base
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        @if(auth()->user()->hasRole('Admin'))
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones
                            </th>
                        @endif
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($services as $s)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $s->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $s->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ number_format($s->base_price, 2) }}
                                €
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $s->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $s->is_active ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            @if(auth()->user()->hasRole('Admin'))
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex gap-2">
                                    <button wire:click="edit({{ $s->id }})"
                                            class="text-indigo-600 hover:text-indigo-900">Editar
                                    </button>
                                    <button wire:click="delete({{ $s->id }})"
                                            onclick="confirm('¿Estás seguro de eliminar este servicio?') || event.stopImmediatePropagation()"
                                            class="text-red-600 hover:text-red-900">
                                        Eliminar
                                    </button>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
