<header class="pb-5 md:pb-20">
    <nav class="bg-black text-white text-center text-[15px] fixed w-[100%]">
        <p id="menu_mobile" class=" md:hidden group border-2 border-b-blue-500 px-[10px]">--><?php echo e(__('public.menu')); ?>

            <--</p>
        <ul id="menu"
            class=" hidden md:grid md:grid-cols-7 md:gap-2 items-center">
            <li><a href="<?= route('home') ?>"><?php echo e(__('public.home')); ?></a></li>
            <li class=" bg-blue-600 group">
                <a href="<?= route('document.contact') ?>"><?php echo e(__('public.contact')); ?></a>
                <ul class="bg-black border-2 border-blue-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href=""><?php echo e(__('public.veterinarians')); ?></a></li>
                    <li><a href="<?= route('gallery') ?>"><?php echo e(__('public.gallery')); ?></a></li>
                </ul>
            </li>
            <li class="bg-orange-600 group"><a href="<?= route('services') ?>"><?php echo e(__('public.services')); ?></a>
                <ul class="bg-black border-2 border-orange-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="#"><?php echo e(__('public.accommodation')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.games')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.grooming')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.consultation')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.training')); ?></a></li>
                </ul>
            </li>
            <li class="bg-red-600 group">
                <a href="<?= route('services','status=inactive ') ?>"><?php echo e(__('public.coming_soon')); ?></a>
                <ul class="bg-black border-2 border-red-600 absolute left-[-9999px] md:group-hover:left-auto not-md:w-112">
                    <li><a href="#"><?php echo e(__('public.surgery')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.photo_session')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.aromatherapy')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.emergency_24h')); ?></a></li>
                    <li><a href="#"><?php echo e(__('public.dentist')); ?></a></li>
                </ul>
            </li>
            <li><a href="/docs">Api-doc</a></li>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('language-switcher', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-4173421946-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </ul>
    </nav>
</header>
<?php /**PATH /opt/lampp/htdocs/proyectos/ariana_proyecto/resources/views/layouts/nav.blade.php ENDPATH**/ ?>