@vite('res')
<header class="pb-5 md:pb-20">
    <nav class="bg-black text-white text-center text-[15px] fixed w-[100%]">
        <p id="menu_mobile" class=" md:hidden group border-2 border-b-blue-500 px-[10px]">-->MENÚ<--</p>
        <ul id="menu"
            class=" not-md:hidden md:grid md:grid-cols-12 md:gap-2 items-center">
            <li><a href="<?= route('home') ?>">INICIO</a></li>
            <li class=" bg-blue-600 group">
                <a href="/contact">CONÓCENOS</a>
                <ul class="bg-black border-2 border-blue-600 absolute left-9999 md:group-hover:left-auto not-md:w-112">
                    <li><a href="/gallery">Nuestra historia</a></li>
                    <li><a href="/">Nuestro Centro</a></li>
                    <li><a href="/">Compromiso Social Internacional</a></li>
                </ul>
            </li>
            <li class="bg-orange-600 group"><a href="/">SERVICIOS</a>
                <ul class="bg-black border-2 border-orange-600 absolute left-9999 md:group-hover:left-auto not-md:w-112">
                    <li><a href="/">MEDICINA INTERNA</a></li>
                    <li><a href="/">CIRUGÍA</a></li>
                    <li><a href="/">ODONTOLOGÍA Y CIRUGÍA ORAL</a></li>
                    <li><a href="/">DIAGNÓSTICO POR IMAGEN</a></li>
                    <li><a href="/">HOSPITALIZACIÓN</a></li>
                </ul>
            </li>
            <li><a href="/">CONSULTA A DOMICILIO</a></li>
            <li><a href="/">URGENCIAS 24H</a></li>
            <li><a href="/">ATENCION ANIMAL EXTRAJERO</a></li>
            <li><a href="/">CONSULTA ONLINE</a></li>
            <li><a href="/">DOG&amp;CAT HOTEL</a></li>
            <li><a href="/">PELUQUERÍA Y SPA</a></li>
            <li><a href="/">TIENDA</a></li>
            <li><a href="/">CONTACTO</a></li>
            <li class="border-2 border-red-600 group relative"><p>🇪🇸 🇩🇪 🇫🇷 🇺🇸 🇮🇹</p>
                <ul class="bg-black border-2 border-red-600 absolute left-9999 md:group-hover:left-auto md:group-hover:right-[0%] w-36 not-md:w-111 not-md:block not-md:left-auto">
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
