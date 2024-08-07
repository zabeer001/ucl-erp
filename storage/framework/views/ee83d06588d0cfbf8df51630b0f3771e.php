
<?php $__env->startSection('page-title'); ?>
<?php echo e(__('Manage Team')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('team.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5" ></textarea>
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ucl-basic_erp\resources\views/team/create.blade.php ENDPATH**/ ?>