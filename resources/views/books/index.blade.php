<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    @foreach($books as $book)
        <div>
            <h3>{{ $book->title }}</h3>
            <p>Penulis: {{ $book->author }}</p>
            <p>Tahun Terbit: {{ $book->year }}</p>
            <p>Stok: {{ $book->stock }}</p>
            <hr>
        </div>
    @endforeach

</body>
</html>