<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Author</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Daftar Author</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->bio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
