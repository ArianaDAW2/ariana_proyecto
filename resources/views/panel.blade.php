{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex h-full">
        {{-- Sidebar --}}
        <aside class="w-64 bg-gray-100 p-4 border-r border-gray-200">
            <nav class="space-y-2">
                <h3 class="text-gray-500 uppercase text-xs font-semibold mb-2">Admin Panel</h3>

                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Users</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Pets</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Reservations</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Medical Records</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Services</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Invoices</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Payments</a>
            </nav>
        </aside>

        {{-- Main content --}}
        <main class="flex-1 p-6 bg-white">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-2xl font-bold mb-6">Welcome, {{ Auth::user()->name }}!</h1>

                {{-- Aquí iría el contenido dinámico de cada sección --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @can('manage_users')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">Users</h2>
                            <p class="text-gray-500">Manage all registered users.</p>
                            <a href="{{ route('admin.users-admin') }}"
                               class="text-blue-500 hover:underline mt-2 block">Go to Users</a>
                        </div>
                    @endcan
                    @can('manage_users')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">Pets</h2>
                            <p class="text-gray-500">View and manage pets.</p>
                            <a href="{{route('admin.pets-admin')}}" class="text-blue-500 hover:underline mt-2 block">Go
                                to Pets</a>
                        </div>
                    @endcan
                    @can('manage_reservations')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">Reservations</h2>
                            <p class="text-gray-500">Manage reservations for pets.</p>
                            <a href="{{route('admin.pets-admin')}}"
                               class="text-blue-500 hover:underline mt-2 block">Go
                                to Reservations</a>
                        </div>
                    @endcan
                    @can('manage_medical_records')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">Medical Records</h2>
                            <p class="text-gray-500">View medical history of pets.</p>
                            <a href="{{route('admin.medical-records')}}"
                               class="text-blue-500 hover:underline mt-2 block">Go to Medical Records</a>
                        </div>
                    @endcan
                    @can('manage_services')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">Services</h2>
                            <p class="text-gray-500">Manage the services offered.</p>
                            <a href="{{route('services')}}"
                               class="text-blue-500 hover:underline mt-2 block">Go to Services</a>
                        </div>
                    @endcan
                    @can('manage_payments')
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg">Invoices</h2>
                            <p class="text-gray-500">View and manage invoices.</p>
                            <a href="{{ route('admin.invoices-admin') }}"
                               class="text-blue-500 hover:underline mt-2 block">Go to Invoices</a>
                        </div>
                    @endcan

                </div>
            </div>
        </main>
    </div>
</x-app-layout>
