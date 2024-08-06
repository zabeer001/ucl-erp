

<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('knowledge/create')); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="pb-lg-4">Create New Knowledge</h1>
        <form action="<?php echo e(route('knowledge.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div>
                <div class="form-group">
                    <label for="header">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="paragraph">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucl-erp\resources\views/knowledge/create.blade.php ENDPATH**/ ?>