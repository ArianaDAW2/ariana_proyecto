<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Veterinario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Tarjetas de estadísticas --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

                {{-- Citas de Hoy --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Citas Hoy
                                    </dt>
                                    <dd class="text-3xl font-semibold text-gray-900">
                                        {{ $citasHoy }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Citas Pendientes --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Pendientes
                                    </dt>
                                    <dd class="text-3xl font-semibold text-gray-900">
                                        {{ $citasPendientes }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Total Mascotas --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"/>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Mascotas
                                    </dt>
                                    <dd class="text-3xl font-semibold text-gray-900">
                                        {{ $totalMascotas }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Total Clientes --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-purple-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                        Total Clientes
                                    </dt>
                                    <dd class="text-3xl font-semibold text-gray-900">
                                        {{ $totalClientes }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dos columnas: Próximas Citas y Vacunas Vencidas --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                {{-- Próximas Citas --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                            <svg class="h-5 w-5 mr-2 text-blue-500" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Próximas Citas
                        </h3>

                        <div class="space-y-3">
                            @forelse($proximasCitas as $cita)
                                <div
                                    class="border-l-4 border-blue-500 bg-gray-50 p-3 rounded hover:bg-gray-100 transition">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <p class="font-semibold text-sm">{{ $cita->mascota->nombre }}</p>
                                            <p class="text-xs text-gray-600">
                                                Cliente: {{ $cita->mascota->cliente->nombre }}</p>
                                            <p class="text-xs text-gray-500 mt-1">{{ $cita->motivo }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-xs font-semibold text-blue-600">
                                                {{ \Carbon\Carbon::parse($cita->fecha)->format('d/m/Y') }}
                                            </p>
                                            <p class="text-xs text-gray-500">{{ $cita->hora }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-8 text-gray-500">
                                    <svg class="h-12 w-12 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <p>No hay citas programadas</p>
                                </div>
                            @endforelse
                        </div>

                        <div class="mt-4 text-center">
                            <a href="{{ route('citas') }}"
                               class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Ver todas las citas →
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Vacunas Vencidas/Próximas --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                            <svg class="h-5 w-5 mr-2 text-red-500" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            Vacunas Próximas/Vencidas
                        </h3>

                        <div class="space-y-3">
                            @forelse($vacunasVencidas as $vacuna)
                                <div
                                    class="border-l-4 {{ $vacuna->vencida ? 'border-red-500 bg-red-50' : 'border-yellow-500 bg-yellow-50' }} p-3 rounded">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <p class="font-semibold text-sm">{{ $vacuna->mascota->nombre }}</p>
                                            <p class="text-xs text-gray-600">Vacuna: {{ $vacuna->nombre_vacuna }}</p>
                                            <p class="text-xs text-gray-500">
                                                Cliente: {{ $vacuna->mascota->cliente->nombre }}</p>
                                        </div>
                                        <div class="text-right">
                                        <span
                                            class="inline-block px-2 py-1 text-xs rounded-full {{ $vacuna->vencida ? 'bg-red-200 text-red-800' : 'bg-yellow-200 text-yellow-800' }}">
                                            {{ $vacuna->vencida ? 'Vencida' : 'Próxima' }}
                                        </span>
                                            <p class="text-xs text-gray-600 mt-1">
                                                {{ \Carbon\Carbon::parse($vacuna->proxima_dosis)->format('d/m/Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-8 text-gray-500">
                                    <svg class="h-12 w-12 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <p>Todas las vacunas al día</p>
                                </div>
                            @endforelse
                        </div>

                        <div class="mt-4 text-center">
                            <a href="{{ route('vacunas') }}"
                               class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Ver control de vacunas →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Gráfico de actividad (opcional) --}}
            <div class="mt-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Actividad de la Semana</h3>
                    <div class="h-64 flex items-end justify-around">
                        @foreach(['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'] as $dia)
                            <div class="flex flex-col items-center flex-1 mx-1">
                                <div class="w-full bg-blue-500 rounded-t" style="height: {{ rand(30, 100) }}%"></div>
                                <span class="text-xs text-gray-600 mt-2">{{ $dia }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
