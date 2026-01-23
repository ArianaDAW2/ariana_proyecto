<nav class="grid grid-cols-4">
    <div class="my-10 text-center">
        <a href="{{ route('client.my_reservations') }}"
           class="bg-indigo-600 p-5 rounded-lg font-bold text-white hover:bg-indigo-700 transition">
            Tus Reservas
        </a>
    </div>
    <div class="my-10 text-center">
        <a href="{{ route('client.top_buyers') }}"
           class="bg-indigo-600 p-5 rounded-lg font-bold text-white hover:bg-indigo-700 transition">
            Top Clientes
        </a>
    </div>
    <div class="my-10 text-center">
        <a href="{{ route('client.top_services') }}"
           class="bg-indigo-600 p-5 rounded-lg font-bold text-white hover:bg-indigo-700 transition">
            Top Servicios
        </a>
    </div>
    <div class="my-10 text-center">
        <a href="{{ route('client.dashboard') }}"
           class="bg-indigo-600 p-5 rounded-lg font-bold text-white hover:bg-indigo-700 transition">
            Pide tu cita
        </a>
    </div>
</nav>

