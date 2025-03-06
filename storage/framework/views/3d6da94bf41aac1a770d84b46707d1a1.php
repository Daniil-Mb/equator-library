<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать жанр</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Создать жанр</h1>
    <form action="<?php echo e(route('genres.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Название жанра</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>
</body>
</html>
<?php /**PATH C:\Users\Daniil2005\PhpstormProjects\equator\lar-library\resources\views/genres/create.blade.php ENDPATH**/ ?>