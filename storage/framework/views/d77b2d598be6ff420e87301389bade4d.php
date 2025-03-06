<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список жанров</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Список жанров</h1>
    <a href="<?php echo e(route('genres.create')); ?>" class="btn btn-success mb-3">Создать жанр</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($genre->id); ?></td>
                <td><?php echo e($genre->name); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php /**PATH C:\Users\Daniil2005\PhpstormProjects\equator\lar-library\resources\views/genres/index.blade.php ENDPATH**/ ?>