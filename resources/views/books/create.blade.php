<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <strong>Terjadi kesalahan input:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <p>
            <label>Judul Buku</label><br>
            <input type="text"
                   name="title"
                   value="{{ old('title') }}"
                   required>

            @error('title')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Penulis</label><br>
            <input type="text"
                   name="author"
                   value="{{ old('author') }}"
                   required>

            @error('author')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Tahun Terbit</label><br>
            <input type="number"
                   name="year"
                   value="{{ old('year') }}"
                   min="1900"
                   max="{{ date('Y') }}"
                   required>

            @error('year')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Stok</label><br>
            <input type="number"
                   name="stock"
                   value="{{ old('stock') }}"
                   min="0"
                   max="10000"
                   required>

            @error('stock')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Simpan Buku</button>
    </form>

    <p>
        <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    </p>
</body>
</html>