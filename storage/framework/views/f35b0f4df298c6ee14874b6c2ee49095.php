
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Employee')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<style>
   .card{
    overflow: auto;
   }
</style>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Branch ID</th>
                    <th>Department ID</th>
                    <th>Designation ID</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <?php
                            // Fetch the string from the forign ids
                            //branch
                            $branch = \App\Models\Branch::find($e->branch_id);
                            $branchName = $branch ? $branch->name : 'Not Available';

                            //department
                            $department = \App\Models\Department::find($e->department_id);
                            $departmentName = $department ? $department->name : 'Not Available';

                            //designation 
                            $designation = \App\Models\Department::find($e->designation_id);
                            $designationName = $designation ? $designation->name : 'Not Available';
                      
                        ?>
                        <td><?php echo e($e->user_id); ?></td>
                        <td><?php echo e($e->employee_id); ?></td>
                        <td><?php echo e($e->name); ?></td>
                        <td><?php echo e($e->phone); ?></td>
                        <td><?php echo e($e->email); ?></td>
                        <td><?php echo e($branchName); ?></td>
                        <td><?php echo e($departmentName); ?></td>
                        <td><?php echo e($designationName); ?></td>
                        <td>
                            <?php if($e->is_active): ?>
                                <button class="btn btn-success btn-sm">Active</button>
                            <?php else: ?>
                                <button class="btn btn-danger btn-sm">Inactive</button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('employee.edit', $e->id)); ?>">
                                <i class="fa-solid fa-pen-to-square" style="color: #004fd6;"></i>
                            </a>
                            <form action="<?php echo e(route('employee.destroy', $e->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')" style="border:none;background:none;">
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
        <?php echo e($employees->links('vendor.pagination.bootstrap-5')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ucl-basic_erp\resources\views/employee/index.blade.php ENDPATH**/ ?>