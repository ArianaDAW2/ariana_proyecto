<x-guest-layout>

    @section('title', 'Gallery')

    @section('content-1')
        <h1 class="text-3xl font-bold underline p-4">Galería</h1>
        <p class="p-4 text-gray-600">Explora nuestras imágenes.</p>
        <main class="p-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4 mb-20 ">
                <div id="overlay" class=" hidden fixed inset-0 bg-black/70 z-40"></div>
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-93-5e9d7d0cbeb60__700.jpg"
                    alt="Falta imagen">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-21-5e999f40b8f3f__700.jpg"
                    alt="Falta imagen">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://i.redd.it/ig9ef34rc8g51.jpg"
                    alt="Falta imagen">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://gatsimiauandorra.home.blog/wp-content/uploads/2020/04/luna-antes-despues.png"
                    alt="Falta imagen">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://prckc.org/wp-content/uploads/70327755_10157350756777177_2782837421362905088_o-800x708.jpg"
                    alt="Falta imagen">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://preview.redd.it/kitten-sticking-face-in-cups-bowls-v0-4qzic9xfod2e1.jpeg?width=640&crop=smart&auto=webp&s=e0af8de8f9eb3db5e2656bb918498871f5c398bc"
                    alt="Falta imagen">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://prckc.org/wp-content/uploads/IMG_8076_1-800x600.jpg"
                    alt="Falta imagen">
                <img
                    class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                    src="https://rivanimal.org/imas/animales/_4398/a_43981593278064.jpg"
                    alt="Falta imagen">
            </div>
        </main>
    @endsection
</x-guest-layout>
