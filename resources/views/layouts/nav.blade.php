<header class="pb-5 md:pb-20">
    <nav class="bg-black text-white text-center text-[15px] fixed w-[100%]">
        <p id="menu_mobile" class=" md:hidden group border-2 border-b-blue-500 px-[10px]">-->MENÚ<--</p>
        <ul id="menu"
            class=" hidden md:grid md:grid-cols-7 md:gap-2 items-center">
            <li><a href="<?= route('home') ?>">INICIO</a></li>
            <li class=" bg-blue-600 group">
                <a href="<?= route('contact') ?>">CONTACTO</a>
                <ul class="bg-black border-2 border-blue-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="<?= route('vets') ?>">VETERINARIOS</a></li>
                    <li><a href="<?= route('gallery') ?>">GALERÍA</a></li>
                </ul>
            </li>
            <li class="bg-orange-600 group"><a href="<?= route('services') ?>">SERVICIOS</a>
                <ul class="bg-black border-2 border-orange-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="#">ALOJAMIENTO</a></li>
                    <li><a href="#">JUEGOS</a></li>
                    <li><a href="#">PELUQUERÍA</a></li>
                    <li><a href="#">CONSULTA</a></li>
                    <li><a href="#">ADIESTRAMIENTO</a></li>
                </ul>
            </li>
            <li class="bg-red-600 group">
                <a href="<?= route('services','status=inactive ') ?>">Servicios por llegar</a>
                <ul class="bg-black border-2 border-red-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="#">CIRUJÍA</a></li>
                    <li><a href="#">SESIÓN DE FOTOS</a></li>
                    <li><a href="#">AROMATERAPIA</a></li>
                    <li><a href="#">URGENCIAS 24H</a></li>
                    <li><a href="#">DENTISTA</a></li>
                </ul>
            </li>
            <li><a href="<?= route('contact') ?>">CONTACTO</a></li>
            <livewire:language-switcher/>
        </ul>
    </nav>
</header>
