<!-- resources/views/users/index.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Pengguna</h1>
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">Tambah Pengguna</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('users.show', $user)); ?>" class="btn btn-info">Lihat</a>
                        <a href="<?php echo e(route('users.edit', $user)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('users.destroy', $user)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\MoonlightBlooms\resources\views/users/index.blade.php ENDPATH**/ ?>