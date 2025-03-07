

<?php $__env->startSection('content'); ?>
<h1>To-Do List</h1>
<form action="<?php echo e(route('tasks.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" required>
    <button type="submit">Add Task</button>
</form>

<ul>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($task->title); ?>

            <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hamed\Herd\todo-app\resources\views/tasks/index.blade.php ENDPATH**/ ?>