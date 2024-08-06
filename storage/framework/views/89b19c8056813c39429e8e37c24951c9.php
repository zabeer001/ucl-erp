
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Edit Knowledge')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card container">
        <form action="<?php echo e(route('knowledge.update', $knowledge->id)); ?>" method="POST" enctype="multipart/form-data"
            class="p-1">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Use PUT method for update -->

            <div class="form-group">
                <label for="header">Title</label>
                <input type="text" class="form-control mt-1" id="title" name="title" value="<?php echo e($knowledge->title); ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="knowledge">Description</label>
                <textarea class="form-control mt-1" id="knowledge" name="description" rows="5" required><?php echo e($knowledge->description); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucl-erp\resources\views/knowledge/edit.blade.php ENDPATH**/ ?>