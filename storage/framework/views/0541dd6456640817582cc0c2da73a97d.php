
<?php $__env->startSection('page-title'); ?>
<?php echo e(__('Edit Team')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="card container">

    
    
    <form action="<?php echo e(route('team.update', $team->id)); ?>" method="POST" enctype="multipart/form-data" class="p-1">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> <!-- Use PUT method for update -->

        <div class="form-group">
            <label for="header">Name</label>
            <input type="text" class="form-control mt-1" id="header" name="header" value="<?php echo e($team->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="paragraph">Description</label>
            <textarea class="form-control mt-1" id="paragraph" name="paragraph" rows="5" required><?php echo e($team->description); ?></textarea>
        </div>
      
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucl-erp\resources\views/team/edit.blade.php ENDPATH**/ ?>