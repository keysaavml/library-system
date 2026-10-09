
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <p>
            <label>Judul Buku</label><br>
            <input type="text" name="title"
                   value="{{ old('title') }}" required>
        </p>

        <p>
            <label>Penulis</label><br>
            <input type="text" name="author"
                   value="{{ old('author') }}" required>
        </p>

        <p>
            <label>Tahun Terbit</label><br>
            <input type="number" name="year"
                   value="{{ old('year') }}"
                   min="1" max="9999" required>
        </p>

        <p>
            <label>Stok</label><br>
            <input type="number" name="stock"
                   value="{{ old('stock') }}"
                   min="0" required>
        </p>

        <button type="submit">Simpan Buku</button>
    </form>

    <p><a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a></p>
</body>
</html>
