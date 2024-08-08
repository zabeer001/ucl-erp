

<?php $__env->startSection('page-title'); ?>
<?php echo e(__('Edit Team')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('team.update', $team->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($team->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5"><?php echo e($team->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="employees">Employees</label>
            <select class="form-control" name="employees[]" multiple="multiple" id="employees">
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($employee->id); ?>"
                        <?php if(in_array($employee->id, $team->employees->pluck('id')->toArray())): ?> selected <?php endif; ?>>
                        <?php echo e($employee->id); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div> 
   
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
    $(document).ready(function() {
            $('#employees').select2();
        });
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ucl-basic_erp\resources\views/team/edit.blade.php ENDPATH**/ ?>