
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('private.admin_panel')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="flex h-full">
        
        <aside class="w-64 bg-gray-100 p-4 border-r border-gray-200">
            <nav class="space-y-2">
                <h3 class="text-gray-500 uppercase text-xs font-semibold mb-2"><?php echo e(__('private.admin_panel')); ?></h3>

                <a href="<?php echo e(route('document.admin.extra.create')); ?>"
                   class="block px-4 py-2 rounded hover:bg-gray-200"><?php echo e(__('private.global_message')); ?></a>

                <a href="<?php echo e(route('admin.payments')); ?>"
                   class="block px-4 py-2 rounded hover:bg-gray-200"><?php echo e(__('private.payments')); ?></a>
            </nav>
        </aside>

        
        <main class="flex-1 p-6 bg-white">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-2xl font-bold mb-6"><?php echo e(__('private.welcome')); ?>, <?php echo e(Auth::user()->name); ?>!</h1>

                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_users')): ?>
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg"><?php echo e(__('private.users')); ?></h2>
                            <p class="text-gray-500"><?php echo e(__('private.users_desc')); ?></p>
                            <a href="<?php echo e(route('admin.users')); ?>"
                               class="text-blue-500 hover:underline mt-2 block"><?php echo e(__('private.go_to_users')); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_users')): ?>
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg"><?php echo e(__('private.pets')); ?></h2>
                            <p class="text-gray-500"><?php echo e(__('private.pets_desc')); ?></p>
                            <a href="<?php echo e(route('admin.pets')); ?>"
                               class="text-blue-500 hover:underline mt-2 block"><?php echo e(__('private.go_to_pets')); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_reservations')): ?>
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg"><?php echo e(__('private.reservations')); ?></h2>
                            <p class="text-gray-500"><?php echo e(__('private.reservations_desc')); ?></p>
                            <a href="<?php echo e(route('admin.reservations')); ?>"
                               class="text-blue-500 hover:underline mt-2 block"><?php echo e(__('private.go_to_reservations')); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_medical_records')): ?>
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg"><?php echo e(__('private.medical_records')); ?></h2>
                            <p class="text-gray-500"><?php echo e(__('private.medical_records_desc')); ?></p>
                            <a href="<?php echo e(route('admin.medical-records')); ?>"
                               class="text-blue-500 hover:underline mt-2 block"><?php echo e(__('private.go_to_medical_records')); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_services')): ?>
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg"><?php echo e(__('private.services')); ?></h2>
                            <p class="text-gray-500"><?php echo e(__('private.services_desc')); ?></p>
                            <a href="<?php echo e(route('admin.services')); ?>"
                               class="text-blue-500 hover:underline mt-2 block"><?php echo e(__('private.go_to_services')); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_payments')): ?>
                        <div class="p-4 border rounded shadow-sm hover:shadow-md transition">
                            <h2 class="font-semibold text-lg"><?php echo e(__('private.invoices')); ?></h2>
                            <p class="text-gray-500"><?php echo e(__('private.invoices_desc')); ?></p>
                            <a href="<?php echo e(route('admin.invoices')); ?>"
                               class="text-blue-500 hover:underline mt-2 block"><?php echo e(__('private.go_to_invoices')); ?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </main>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/proyectos/ariana_proyecto/resources/views/panel.blade.php ENDPATH**/ ?>