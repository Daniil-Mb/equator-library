<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать книгу</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Создать книгу</h1>
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название книги</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Обложка книги</label>
            <input type="file" class="form-control" id="cover" name="cover">
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>
</body>
</html>
