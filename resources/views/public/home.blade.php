<x-guest-layout>

    @section('content-1')
        <section>

            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">
                {{ __('public.welcome') }}
            </h1>
            <h2 class="text-purple-500 font-bold pb-3 text-[20px] italic">{{ __('public.slogan_1') }}
                <br> {{ __('public.slogan_2') }}</h2>
            <div class="text-gray-800">
                <p class="p-2">{{ __('public.intro_1') }} <span
                        class="font-bold">{{ __('public.intro_values') }}</span> {{ __('public.intro_2') }}</p>
                <p class="p-2">{{ __('public.intro_3') }}</p>
                <p class="p-2">{{ __('public.intro_4') }}</p>
                <p class="p-2">{{ __('public.intro_5') }} <span
                        class="font-bold">{{ __('public.services_treatments') }}</span> {{ __('public.intro_6') }}</p>
            </div>
        </section>
    @endsection
    @section('content-2')
        <section>
            <h2 class="text-blue-600 font-bold pb-3 text-[25px] italic">{{ __('public.care_anytime') }}</h2>
            <div class="text-center"><a class="font-bold" href="/">{{ __('public.view_gallery') }}</a></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4 mb-20">
                <div id="overlay" class="hidden fixed inset-0 bg-black/70 z-40"></div>
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-93-5e9d7d0cbeb60__700.jpg"
                     alt="{{ __('public.missing_image') }}">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-21-5e999f40b8f3f__700.jpg"
                     alt="{{ __('public.missing_image') }}">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://i.redd.it/ig9ef34rc8g51.jpg" alt="{{ __('public.missing_image') }}">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://gatsimiauandorra.home.blog/wp-content/uploads/2020/04/luna-antes-despues.png"
                     alt="{{ __('public.missing_image') }}">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://prckc.org/wp-content/uploads/70327755_10157350756777177_2782837421362905088_o-800x708.jpg"
                     alt="{{ __('public.missing_image') }}">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://preview.redd.it/kitten-sticking-face-in-cups-bowls-v0-4qzic9xfod2e1.jpeg?width=640&crop=smart&auto=webp&s=e0af8de8f9eb3db5e2656bb918498871f5c398bc"
                     alt="{{ __('public.missing_image') }}">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://prckc.org/wp-content/uploads/IMG_8076_1-800x600.jpg"
                     alt="{{ __('public.missing_image') }}">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://rivanimal.org/imas/animales/_4398/a_43981593278064.jpg"
                     alt="{{ __('public.missing_image') }}">
            </div>
            <div class="text-center"><a class="font-bold" href="/">{{ __('public.view_gallery') }}</a></div>
        </section>
        <section>
            <h2 class="text-blue-600 font-bold pb-3 text-[25px] italic">{{ __('public.discover_services') }}</h2>
            <div class="text-center"><a class="font-bold" href="/">{{ __('public.services_link') }}</a></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 py-4 md:px-[25%] mb-20 bg-amber-50 place-items-center">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="{{ __('public.service_image') }}">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="{{ __('public.service_image') }}">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="{{ __('public.service_image') }}">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="{{ __('public.service_image') }}">
            </div>
        </section>
    @endsection
</x-guest-layout>
