<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('content-1'); ?>
        <section>

            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">
                <?php echo e(__('public.welcome')); ?>

            </h1>
            <h2 class="text-purple-500 font-bold pb-3 text-[20px] italic"><?php echo e(__('public.slogan_1')); ?>

                <br> <?php echo e(__('public.slogan_2')); ?></h2>
            <div class="text-gray-800">
                <p class="p-2"><?php echo e(__('public.intro_1')); ?> <span
                        class="font-bold"><?php echo e(__('public.intro_values')); ?></span> <?php echo e(__('public.intro_2')); ?></p>
                <p class="p-2"><?php echo e(__('public.intro_3')); ?></p>
                <p class="p-2"><?php echo e(__('public.intro_4')); ?></p>
                <p class="p-2"><?php echo e(__('public.intro_5')); ?> <span
                        class="font-bold"><?php echo e(__('public.services_treatments')); ?></span> <?php echo e(__('public.intro_6')); ?></p>
            </div>
        </section>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content-2'); ?>
        <section>
            <h2 class="text-blue-600 font-bold pb-3 text-[25px] italic"><?php echo e(__('public.care_anytime')); ?></h2>
            <div class="text-center"><a class="font-bold" href="/"><?php echo e(__('public.view_gallery')); ?></a></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4 mb-20">
                <div id="overlay" class="hidden fixed inset-0 bg-black/70 z-40"></div>
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-93-5e9d7d0cbeb60__700.jpg"
                     alt="<?php echo e(__('public.missing_image')); ?>">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://www.boredpanda.com/blog/wp-content/uploads/2020/04/rescue-kittens-before-after-21-5e999f40b8f3f__700.jpg"
                     alt="<?php echo e(__('public.missing_image')); ?>">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://i.redd.it/ig9ef34rc8g51.jpg" alt="<?php echo e(__('public.missing_image')); ?>">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://gatsimiauandorra.home.blog/wp-content/uploads/2020/04/luna-antes-despues.png"
                     alt="<?php echo e(__('public.missing_image')); ?>">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://prckc.org/wp-content/uploads/70327755_10157350756777177_2782837421362905088_o-800x708.jpg"
                     alt="<?php echo e(__('public.missing_image')); ?>">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://preview.redd.it/kitten-sticking-face-in-cups-bowls-v0-4qzic9xfod2e1.jpeg?width=640&crop=smart&auto=webp&s=e0af8de8f9eb3db5e2656bb918498871f5c398bc"
                     alt="<?php echo e(__('public.missing_image')); ?>">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://prckc.org/wp-content/uploads/IMG_8076_1-800x600.jpg"
                     alt="<?php echo e(__('public.missing_image')); ?>">
                <img class="gallery_img rounded-lg border-2 border-gray-400 shadow-lg"
                     src="https://rivanimal.org/imas/animales/_4398/a_43981593278064.jpg"
                     alt="<?php echo e(__('public.missing_image')); ?>">
            </div>
            <div class="text-center"><a class="font-bold" href="/"><?php echo e(__('public.view_gallery')); ?></a></div>
        </section>
        <section>
            <h2 class="text-blue-600 font-bold pb-3 text-[25px] italic"><?php echo e(__('public.discover_services')); ?></h2>
            <div class="text-center"><a class="font-bold" href="/"><?php echo e(__('public.services_link')); ?></a></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 py-4 md:px-[25%] mb-20 bg-amber-50 place-items-center">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="<?php echo e(__('public.service_image')); ?>">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="<?php echo e(__('public.service_image')); ?>">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="<?php echo e(__('public.service_image')); ?>">
                <img class="rounded-lg"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=152x10000:format=png/path/s39ed26dd2c57254a/image/i4cfc2a5943be9459/version/1713104271/veterinaria-centro-veterinario-petlovers-clinica-susana-veterinaria-susana-murcia-veterinaria-veterinario-sucina-veterinario-24-horas-urgencias-perros-gatos-peluqueria-canina-vacuna-mascotas-clinica-veterinaria-residencia-canina-petlovers.png"
                     alt="<?php echo e(__('public.service_image')); ?>">
            </div>
        </section>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/proyectos/ariana_proyecto/resources/views/public/home.blade.php ENDPATH**/ ?>