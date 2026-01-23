<x-guest-layout>

    @section('content-1')
        <section>

            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">
                {{ __('messages.Bienvenidos a HotelForPets') }}
            </h1>
            <h2 class="text-purple-500 font-bold pb-3 text-[20px] italic">{{ __('CURAMOS CON EL CONOCIMIENTO') }}
                <br> {{ __('CUIDAMOS CON EL CORAZÓN') }}</h2>
            <div class="text-gray-800">
                <p class="p-2">{{ __('En el cuidado y la atención de cada uno de nuestros pacientes se unen el') }}
                    <span
                        class="font-bold"> {{ __('respeto, el cariño y la profesionalidad') }}</span> {{ __('como base de nuestra filosofía.') }}
                <p>
                <p class="p-2">{{ __('Cada uno de nuestros peluditos se trata de forma individualizada y especial. Tal y como reza nuestro lema: "Curamos con el conocimiento, cuidamos con el corazón".') }}</p>
                <p class="p-2">{{ __('Para poder ofrecer el mejor servicio confiamos en la formación continuada de nuestro equipo de trabajo, en nuestra pasión por los animales y en el afán por llevar a cabo un servicio íntegro y especializado, mediante el cual buscamos ante todo, lo mejor para nuestro paciente y su familia.') }}</p>
                <p class="p-2">{{ __('Nuestro centro ofrece una amplia gama de') }} <span
                        class="font-bold">{{ __('servicios y tratamientos') }}</span> {{ __('para que tu mascota esté perfectamente atendida.') }}
                </p>
            </div>
        </section>
    @endsection
    @section('content-2')
        <section>
            <h2 class="text-blue-600 font-bold pb-3 text-[25px] italic">
                {{ __('CUIDA A TU MASCOTA EN CUALQUIER MOMENTO') }} </h2>
            <div class="text-center"><a class="font-bold" href="/">{{ __('➡️ Ver toda la galería ⬅️') }}</a></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4 mb-20 ">
                <div id="overlay" class=" hidden fixed inset-0 bg-black/70 z-40"></div>
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-93-5e9d7d0cbeb60__700.jpg"
                    alt="{{ __('Falta imagen') }}">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-21-5e999f40b8f3f__700.jpg"
                    alt="{{ __('Falta imagen') }}">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://i.redd.it/ig9ef34rc8g51.jpg"
                    alt="{{ __('Falta imagen') }}">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://gatsimiauandorra.home.blog/wp-content/uploads/2020/04/luna-antes-despues.png"
                    alt="{{ __('Falta imagen') }}">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://prckc.org/wp-content/uploads/70327755_10157350756777177_2782837421362905088_o-800x708.jpg"
                    alt="{{ __('Falta imagen') }}">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://preview.redd.it/kitten-sticking-face-in-cups-bowls-v0-4qzic9xfod2e1.jpeg?width=640&crop=smart&auto=webp&s=e0af8de8f9eb3db5e2656bb918498871f5c398bc"
                    alt="{{ __('Falta imagen') }}">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://prckc.org/wp-content/uploads/IMG_8076_1-800x600.jpg"
                    alt="{{ __('Falta imagen') }}">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://rivanimal.org/imas/animales/_4398/a_43981593278064.jpg"
                    alt="{{ __('Falta imagen') }}">
            </div>
            <div class="text-center"><a class="font-bold" href="/">{{ __('➡️ Ver toda la galería ⬅️') }}</a></div>
        </section>
        <section>
            <h2 class="text-blue-600 font-bold pb-3 text-[25px] italic">{{ __('Descubre todo lo que podemos hacer por tu mascota') }}</h2>
            <div class="text-center"><a class="font-bold" href="/">{{ __('➡️ SERVICIOS ⬅️') }}</a></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 py-4 md:px-[25%] mb-20  bg-amber-50 place-items-center ">
                <img
                    class=" rounded-lg "
                    src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                    alt="{{ __('imagen servicio') }}">
                <img
                    class=" rounded-lg "
                    src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                    alt="{{ __('imagen servicio') }}">
                <img
                    class=" rounded-lg "
                    src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                    alt="{{ __('imagen servicio') }}">
                <img
                    class=" rounded-lg "
                    src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                    alt="{{ __('imagen servicio') }}">
            </div>
        </section>
    @endsection
</x-guest-layout>
