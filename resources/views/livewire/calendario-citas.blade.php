<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Calendario de Citas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                {{-- Columna del Calendario --}}
                <div class="lg:col-span-2">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                        {{-- Header del calendario --}}
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-bold">
                                {{ \Carbon\Carbon::create($año_actual, $mes_actual, 1)->locale('es')->isoFormat('MMMM YYYY') }}
                            </h3>
                            <div class="flex space-x-2">
                                <button wire:click="mesAnterior"
                                        class="px-3 py-2 bg-gray-200 hover:bg-gray-300 rounded-md transition">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <button wire:click="mesSiguiente"
                                        class="px-3 py-2 bg-gray-200 hover:bg-gray-300 rounded-md transition">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        {{-- Grid del calendario --}}
                        <div class="grid grid-cols-7 gap-2">

                            {{-- Encabezados de días --}}
                            @foreach(['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'] as $dia)
                                <div class="text-center font-semibold text-sm text-gray-600 py-2">
                                    {{ $dia }}
                                </div>
                            @endforeach

                            {{-- Días del mes --}}
                            @php
                                $primerDia = \Carbon\Carbon::create($año_actual, $mes_actual, 1);
                                $ultimoDia = $primerDia->copy()->endOfMonth();
                                $diasMes = $ultimoDia->day;
                                $diaSemanaInicio = $primerDia->dayOfWeekIso; // 1 = Lunes
                            @endphp

                            {{-- Espacios vacíos antes del primer día --}}
                            @for($i = 1; $i < $diaSemanaInicio; $i++)
                                <div class="text-center py-3 text-gray-400 bg-gray-50 rounded">
                                </div>
                            @endfor

                            {{-- Días del mes --}}
                            @for($dia = 1; $dia <= $diasMes; $dia++)
                                @php
                                    $fechaActual = \Carbon\Carbon::create($año_actual, $mes_actual, $dia);
                                    $esHoy = $fechaActual->isToday();
                                    $esFechaSeleccionada = $fecha_seleccionada && $fechaActual->isSameDay($fecha_seleccionada);
                                    $citasDelDia = 0; // Aquí iría la lógica para contar citas
                                @endphp
                                <div wire:click="cambiarFecha('{{ $fechaActual->format('Y-m-d') }}')"
                                     class="text-center py-3 cursor-pointer rounded transition
                                        {{ $esHoy ? 'bg-blue-100 border-2 border-blue-500' : '' }}
                                        {{ $esFechaSeleccionada ? 'bg-blue-500 text-white' : 'hover:bg-gray-100' }}">
                                    <div class="font-semibold">{{ $dia }}</div>
                                    @if($citasDelDia > 0)
                                        <div class="text-xs mt-1">
                                            <span class="inline-block w-2 h-2 bg-red-500 rounded-full"></span>
                                            {{ $citasDelDia }}
                                        </div>
                                    @endif
                                </div>
                            @endfor
                        </div>

                        {{-- Leyenda --}}
                        <div class="mt-4 flex items-center justify-center space-x-4 text-xs text-gray-600">
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-blue-100 border-2 border-blue-500 rounded mr-2"></div>
                                <span>Hoy</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-blue-500 rounded mr-2"></div>
                                <span>Seleccionado</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                                <span>Con citas</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Columna de Citas del Día --}}
                <div class="lg:col-span-1">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 sticky top-6">
                        <h3 class="text-lg font-semibold mb-4">
                            Citas
                            del {{ $fecha_seleccionada ? \Carbon\Carbon::parse($fecha_seleccionada)->format('d/m/Y') : 'día' }}
                        </h3>

                        <div class="space-y-3 max-h-[600px] overflow-y-auto">
                            @forelse($citas_del_dia as $cita)
                                <div
                                    class="border-l-4 border-blue-500 bg-gray-50 p-3 rounded hover:bg-gray-100 transition">
                                    <div class="flex items-start justify-between mb-2">
                                    <span class="font-semibold text-sm text-blue-600">
                                        {{ $cita->hora }}
                                    </span>
                                        <span class="text-xs px-2 py-1 rounded-full
                                        {{ $cita->estado === 'confirmada' ? 'bg-green-200 text-green-800' : '' }}
                                        {{ $cita->estado === 'pendiente' ? 'bg-yellow-200 text-yellow-800' : '' }}
                                        {{ $cita->estado === 'cancelada' ? 'bg-red-200 text-red-800' : '' }}">
                                        {{ ucfirst($cita->estado) }}
                                    </span>
                                    </div>
                                    <p class="font-semibold text-sm">{{ $cita->mascota->nombre }}</p>
                                    <p class="text-xs text-gray-600">{{ $cita->mascota->cliente->nombre }}</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ $cita->motivo }}</p>
                                    <div class="mt-2 flex justify-end space-x-2">
                                        <button class="text-xs text-blue-600 hover:text-blue-800">Ver</button>
                                        <button class="text-xs text-green-600 hover:text-green-800">Editar</button>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-8 text-gray-500">
                                    <svg class="h-12 w-12 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <p class="text-sm">No hay citas para este día</p>
                                </div>
                            @endforelse
                        </div>

                        <div class="mt-4">
                            <x-button wire:click="$emit('abrirModalNuevaCita')" class="w-full justify-center">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 4v16m8-8H4"/>
                                </svg>
                                Nueva Cita
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
