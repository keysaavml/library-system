<h1>Daftar Buku</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
        <th>Stok</th>
    </tr>

    @foreach($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->year }}</td>
        <td>{{ $book->stock }}</td>
    </tr>
    @endforeach
</table>