
    <!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'HotelForPets')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Route::has('login')): ?>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('client.dashboard')); ?>"
               class="text-sm text-gray-700 dark:text-gray-500 underline"><?php echo e(__('public.dashboard')); ?></a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>"
               class="text-sm text-gray-700 dark:text-gray-500 underline"><?php echo e(__('public.login')); ?></a>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>"
                   class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><?php echo e(__('public.register')); ?></a>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


<?php echo $__env->make('layouts.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<main class="md:px-[110px] px-[10px] ">
    <?php echo $__env->yieldContent('content-1'); ?>
    <?php echo e($slot); ?>

    <div class="my-10 text-center">
        <a href="<?php echo e(route('client.dashboard')); ?>"
           class="bg-indigo-600 p-5 rounded-lg font-bold text-white hover:bg-indigo-700 transition">
            <?php echo e(__('public.book_appointment')); ?>

        </a>
    </div>

    <?php echo $__env->yieldContent('content-2'); ?>
</main>


<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/proyectos/ariana_proyecto/resources/views/layouts/guest.blade.php ENDPATH**/ ?>