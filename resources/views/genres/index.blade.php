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
    <a href="{{ route('genres.create') }}" class="btn btn-success mb-3">Создать жанр</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
        </tr>
        </thead>
        <tbody>
        @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
