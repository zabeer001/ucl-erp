
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Knowledge')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php echo e($knowledge->title); ?></h3>
            <p class="card-text"><?php echo e($knowledge->description); ?></p>
            <p class="card-text"><small class="text-muted">Last updated <?php echo e($knowledge->updated_at); ?></small></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucl-erp\resources\views/knowledge/show.blade.php ENDPATH**/ ?>