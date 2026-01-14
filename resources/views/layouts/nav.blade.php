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
                    <li><a href="<?= route('services') ?>">MEDICINA INTERNA</a></li>
                    <li><a href="<?= route('services') ?>">CIRUGÍA</a></li>
                    <li><a href="<?= route('services') ?>">ODONTOLOGÍA Y CIRUGÍA ORAL</a></li>
                    <li><a href="<?= route('services') ?>">DIAGNÓSTICO POR IMAGEN</a></li>
                    <li><a href="<?= route('services') ?>">HOSPITALIZACIÓN</a></li>
                </ul>
            </li>
            <li class="bg-red-600 group">
                <a href="<?= route('pricing') ?>">PRECIOS</a>
                <ul class="bg-black border-2 border-red-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="<?= route('pricing') ?>">CONSULTA A DOMICILIO</a></li>
                    <li><a href="<?= route('pricing') ?>">URGENCIAS 24H</a></li>
                    <li><a href="<?= route('pricing') ?>">ATENCION ANIMAL EXTRAJERO</a></li>
                    <li><a href="<?= route('pricing') ?>">CONSULTA ONLINE</a></li>
                    <li><a href="<?= route('pricing') ?>">DOG&amp;CAT HOTEL</a></li>
                    <li><a href="<?= route('pricing') ?>">PELUQUERÍA Y SPA</a></li>
                </ul>
            </li>

            <li><a href="/">TIENDA</a></li>
            <li><a href="/">CONTACTO</a></li>
            <li class="border-2 border-red-600 group relative">
                <p>
                    <a href="/">🇪🇸</a>
                    <a href="/">🇩🇪</a>
                    <a href="/">🇫🇷</a>
                    <a href="/">🇺🇸</a>
                    <a href="/">🇮🇹</a>
                </p>
                <ul class="bg-black border-2 border-red-600 absolute left-[-9999px] md:group-hover:left-auto md:group-hover:right-[0%] w-36 not-md:w-111 not-md:block not-md:left-auto">
                    <li><a href="/">🇪🇸 Español</a></li>
                    <li><a href="/">🇩🇪 Deutsch</a></li>
                    <li><a href="/">🇫🇷 Français</a></li>
                    <li><a href="/">🇺🇸 English</a></li>
                    <li><a href="/">🇮🇹 Italiano</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
