{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('private.admin_panel') }}
        </h2>
    </x-slot>

    <div class="flex h-full">
        {{-- Sidebar --}}
        <aside class="w-64 bg-gray-100 p-4 border-r border-gray-200">
            <nav class="space-y-2">
                <h3 class="text-gray-500 uppercase text-xs font-semibold mb-2">{{ __('private.admin_panel') }}</h3>

                <a href="{{ route('document.admin.extra.create') }}"
                   class="block px-4 py-2 rounded hover:bg-gray-200">{{ __('private.global_message') }}</a>

                <a href="{{ route('admin.payments') }}"
                   class="block px-4 py-2 rounded hover:bg-gray-200">{{ __('private.payments') }}</a>
            </nav>
        </aside>

        {{-- Main content --}}
        <main class="flex-1 p-6 bg-white">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-2xl font-bold mb-6">{{ __('private.welcome') }}, {{ Auth::user()->name }}!</h1>

                {{-- Aquí iría el contenido dinámico de cada sección --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @can('manage_users')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">{{ __('private.users') }}</h2>
                            <p class="text-gray-500">{{ __('private.users_desc') }}</p>
                            <a href="{{ route('admin.users') }}"
                               class="text-blue-500 hover:underline mt-2 block">{{ __('private.go_to_users') }}</a>
                        </div>
                    @endcan
                    @can('manage_users')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">{{ __('private.pets') }}</h2>
                            <p class="text-gray-500">{{ __('private.pets_desc') }}</p>
                            <a href="{{route('admin.pets')}}"
                               class="text-blue-500 hover:underline mt-2 block">{{ __('private.go_to_pets') }}</a>
                        </div>
                    @endcan
                    @can('manage_reservations')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">{{ __('private.reservations') }}</h2>
                            <p class="text-gray-500">{{ __('private.reservations_desc') }}</p>
                            <a href="{{route('admin.reservations')}}"
                               class="text-blue-500 hover:underline mt-2 block">{{ __('private.go_to_reservations') }}</a>
                        </div>
                    @endcan
                    @can('manage_medical_records')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">{{ __('private.medical_records') }}</h2>
                            <p class="text-gray-500">{{ __('private.medical_records_desc') }}</p>
                            <a href="{{route('admin.medical-records')}}"
                               class="text-blue-500 hover:underline mt-2 block">{{ __('private.go_to_medical_records') }}</a>
                        </div>
                    @endcan
                    @can('manage_services')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">{{ __('private.services') }}</h2>
                            <p class="text-gray-500">{{ __('private.services_desc') }}</p>
                            <a href="{{route('admin.services')}}"
                               class="text-blue-500 hover:underline mt-2 block">{{ __('private.go_to_services') }}</a>
                        </div>
                    @endcan
                    @can('manage_payments')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">{{ __('private.invoices') }}</h2>
                            <p class="text-gray-500">{{ __('private.invoices_desc') }}</p>
                            <a href="{{ route('admin.invoices') }}"
                               class="text-blue-500 hover:underline mt-2 block">{{ __('private.go_to_invoices') }}</a>
                        </div>
                    @endcan

                </div>
            </div>
        </main>
    </div>
</x-app-layout>
