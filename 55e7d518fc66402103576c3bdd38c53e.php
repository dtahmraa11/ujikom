<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Products</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('products.store')); ?>" class="mb-4">
            <?php echo csrf_field(); ?>
            <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama item" required>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Tambah</button>
                    <a href="<?php echo e(route('products.edit', $items)); ?>">Edit</a>
                </div>
            </div>
        </form>

        <ul class="list-group">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo e($item->name); ?>

                    <div>
                        <a href="<?php echo e(route('products.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php echo e(route('products.destroy', $item->id)); ?>" class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($item->id); ?>').submit();">Hapus</a>
                        <form id="delete-form-<?php echo e($item->id); ?>" action="<?php echo e(route('products.destroy', $item->id)); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp1\htdocs\MoonlightBlooms\resources\views/products/index.blade.php ENDPATH**/ ?>