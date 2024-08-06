
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('knowledge')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th> <!-- New column for edit and delete buttons -->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $knowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($e->id); ?></td>
                        <td><?php echo e($e->title); ?></td>
                        <td>
                            <a href="<?php echo e(route('knowledge.show', $e->id)); ?>" class="pe-lg-2">
                                <i class="fa-solid fa-circle-info" style="color: #e4d615;"></i>
                            </a>
                            <a href="<?php echo e(route('knowledge.edit', $e->id)); ?>">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="<?php echo e(route('knowledge.destroy', $e->id)); ?>" method="POST"
                                style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this knowledge?')"
                                    style="border: none">
                                    <i class="fa-solid fa-trash p-1" style="color: #ff0a0a;"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="mt-3 px-3">
            <?php echo e($knowledges->links('vendor.pagination.bootstrap-5')); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucl-erp\resources\views/knowledge/index.blade.php ENDPATH**/ ?>