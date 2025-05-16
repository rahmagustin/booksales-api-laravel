<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
        img.cover-photo {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Cover</th>
                <th>Genre ID</th>
                <th>Author ID</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description ?? '-' }}</td>
                <td>Rp {{ number_format($book->price, 2, ',', '.') }}</td>
                <td>{{ $book->stock }}</td>
                <td>
                    @if ($book->cover_photo)
                        <img src="{{ asset('storage/' . $book->cover_photo) }}" alt="Cover {{ $book->title }}" class="cover-photo">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $book->genre_id ?? '-' }}</td>
                <td>{{ $book->author_id }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8">Tidak ada data buku.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
