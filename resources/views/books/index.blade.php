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
    <a href="{{ route('books.create') }}" class="btn btn-success mb-3">Создать книгу</a>
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
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->status ? 'Опубликовано' : 'Не опубликовано' }}</td>
                <td>
                    @if($book->cover_url)
                        <img src="{{ asset('storage/' . $book->cover_url) }}" alt="Обложка" width="100">
                    @else
                        Нет обложки
                    @endif
                </td>
                <td>
                    <form action="{{ route('books.publish', $book->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-warning">Опубликовать</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $books->links() }} <!-- Пагинация -->
</div>
</body>
</html>
