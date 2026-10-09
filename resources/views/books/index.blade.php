<h1>Daftar Buku</h1>

<a href="{{ route('books.create') }}">+ Tambah Buku</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->year }}</td>
        <td>{{ $book->stock }}</td>
        <td>
            <a href="{{ route('books.show', $book->id) }}">Detail</a>

            <a href="{{ route('books.edit', $book->id) }}">Edit</a>

            <form action="{{ route('books.destroy', $book->id) }}"
                  method="POST"
                  style="display: inline;"
                  onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                @csrf
                @method('DELETE')

                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
```