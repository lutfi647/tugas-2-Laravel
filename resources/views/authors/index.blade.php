<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Authors</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">✍️ Daftar Authors</h2>
    <table>
        <tr><th>No</th><th>Nama</th><th>Email</th></tr>
        @foreach($authors as $i => $author)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
