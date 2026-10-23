
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <div style="color: red;">
            <strong>Periksa kembali input kamu:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Judul Buku</label><br>
            <input type="text" name="title"
                   value="{{ old('title', $book->title) }}" required>
            @error('title')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Penulis</label><br>
            <input type="text" name="author"
                   value="{{ old('author', $book->author) }}" required>
            @error('author')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Tahun Terbit</label><br>
            <input type="number" name="year"
                   value="{{ old('year', $book->year) }}"
                   min="1900" max="{{ date('Y') }}" required>
            @error('year')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Stok</label><br>
            <input type="number" name="stock"
                   value="{{ old('stock', $book->stock) }}"
                   min="0" max="10000" required>
            @error('stock')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="category_id">Kategori</label><br>
            <select name="category_id" id="category_id" required>
                <option value="">-- Pilih Kategori --</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @selected(old('category_id', $book->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            @error('category_id')
                <br><span style="color: red;">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <p>
        <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    </p>
</body>
</html>