<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 text-center">
    <h1>Добро пожаловать в библиотеку!</h1>
    <div class="mt-4">
        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-primary btn-lg me-3">Перейти к книгам</a>
        <a href="<?php echo e(route('genres.index')); ?>" class="btn btn-success btn-lg">Перейти к жанрам</a>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\Daniil2005\PhpstormProjects\equator\lar-library\resources\views/welcome.blade.php ENDPATH**/ ?>