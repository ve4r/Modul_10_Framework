<?php $__env->startSection("content"); ?>
    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is <?php echo e($pageTitle); ?>.</h4>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\File Utama Javier\Kuliah\Semester 4\Framework\Modul4\Controller_view\resources\views/profile.blade.php ENDPATH**/ ?>