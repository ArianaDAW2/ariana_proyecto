<header class="pb-5 md:pb-20">
    <nav class="bg-black text-white text-center text-[15px] fixed w-[100%]">
        <p id="menu_mobile" class=" md:hidden group border-2 border-b-blue-500 px-[10px]">-->{{ __('public.menu') }}
            <--</p>
        <ul id="menu"
            class=" hidden md:grid md:grid-cols-7 md:gap-2 items-center">
            <li><a href="<?= route('home') ?>">{{ __('public.home') }}</a></li>
            <li class=" bg-blue-600 group">
                <a href="<?= route('public.contact') ?>">{{ __('public.contact') }}</a>
                <ul class="bg-black border-2 border-blue-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="">{{ __('public.veterinarians') }}</a></li>
                    <li><a href="<?= route('gallery') ?>">{{ __('public.gallery') }}</a></li>
                </ul>
            </li>
            <li class="bg-orange-600 group"><a href="<?= route('services') ?>">{{ __('public.services') }}</a>
                <ul class="bg-black border-2 border-orange-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="#">{{ __('public.accommodation') }}</a></li>
                    <li><a href="#">{{ __('public.games') }}</a></li>
                    <li><a href="#">{{ __('public.grooming') }}</a></li>
                    <li><a href="#">{{ __('public.consultation') }}</a></li>
                    <li><a href="#">{{ __('public.training') }}</a></li>
                </ul>
            </li>
            <li class="bg-red-600 group">
                <a href="<?= route('services','status=inactive ') ?>">{{ __('public.coming_soon') }}</a>
                <ul class="bg-black border-2 border-red-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="#">{{ __('public.surgery') }}</a></li>
                    <li><a href="#">{{ __('public.photo_session') }}</a></li>
                    <li><a href="#">{{ __('public.aromatherapy') }}</a></li>
                    <li><a href="#">{{ __('public.emergency_24h') }}</a></li>
                    <li><a href="#">{{ __('public.dentist') }}</a></li>
                </ul>
            </li>
            <li><a href="/docs">Api-doc</a></li>
            <livewire:language-switcher/>
        </ul>
    </nav>
</header>
