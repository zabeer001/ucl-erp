
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Team')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th> <!-- New column for edit and delete buttons -->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($e->id); ?></td>
                        <td><?php echo e($e->name); ?></td>
                        <td>
                            <a href="<?php echo e(route('team.show', $e->id)); ?>" style="color: green; margin-right: 10px;" title="View">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('team.edit', $e->id)); ?>">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="<?php echo e(route('team.destroy', $e->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" style="border:none;background:none;" onclick="return confirm('Are you sure you want to delete this event?')" >
                                    <i class="fa-solid fa-trash" style="color: #ff0a0a;"></i> 
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

       
    </div>
    <div class="mt-3 p-1">
        <?php echo e($teams->links('vendor.pagination.bootstrap-5')); ?>

    </div>
    <script>
        console.log('hello');
        
       </script>
  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
    $(document).ready(function () {
        console.log('ok, jquery');
        
    });
</script>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ucl-basic_erp\resources\views/team/index.blade.php ENDPATH**/ ?>