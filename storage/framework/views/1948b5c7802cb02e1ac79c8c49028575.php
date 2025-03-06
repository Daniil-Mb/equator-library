<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список книг</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Список книг</h1>
    <a href="<?php echo e(route('books.create')); ?>" class="btn btn-success mb-3">Создать книгу</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Статус</th>
            <th>Обложка</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->id); ?></td>
                <td><?php echo e($book->title); ?></td>
                <td><?php echo e($book->status ? 'Опубликовано' : 'Не опубликовано'); ?></td>
                <td>
                    <?php if($book->cover_url): ?>
                        <img src="<?php echo e(asset('storage/' . $book->cover_url)); ?>" alt="Обложка" width="100">
                    <?php else: ?>
                        Нет обложки
                    <?php endif; ?>
                </td>
                <td>
                    <form action="<?php echo e(route('books.publish', $book->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-warning">Опубликовать</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($books->links()); ?> <!-- Пагинация -->
</div>
</body>
</html>
<?php /**PATH C:\Users\Daniil2005\PhpstormProjects\equator\lar-library\resources\views/books/index.blade.php ENDPATH**/ ?>