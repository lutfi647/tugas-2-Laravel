<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Books</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 90%; margin: auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">📚 Daftar Books</h2>
    <table>
        <tr><th>No</th><th>Judul</th><th>Tahun</th><th>Author</th></tr>
        @foreach($books as $i => $book)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ optional($book->author)->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
