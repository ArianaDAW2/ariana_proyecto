<x-guest-layout>

    @section('title', 'Contact')

    @section('content-1')
        <section class="grid place-items-center">
            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">CONTACTO</h1>
            <form class=" bg-white w-[500px] shadow-lg grid grid-rows-3 h-[300px] p-[20px]">
                <div class="row-start-1">
                    <label class="m-[5px]">Nombre</label><br>
                    <input class="m-[5px] h-[30px] w-[25em] border-2 p-[5px]" type="text" placeholder="Tu nombre">
                </div>
                <div class="row-start-2">
                    <label class="m-[5px]">Correo</label><br>
                    <input class="m-[5px] h-[30px] w-[25em] border-2 p-[5px]" type="email"
                           placeholder="Tu correo electrónico">
                </div>
                <div class="row-start-3">
                    <label class="m-[5px]">Mensaje</label><br>
                    <textarea class="m-[5px] h-[50px] w-[25em] border-2 p-[5px]" placeholder="Tu mensaje"></textarea>
                </div>
                <button
                    class="bg-blue-500 text-white p-[5px] px-[20px] m-[20px] mb-[0px] rounded-[5px] h-[40px] w-[100px]">
                    Enviar
                </button>
            </form>
        </section>
        <div class="md:h-150"></div>
    @endsection
</x-guest-layout>
