@extends('layouts.app')

@section('title', 'Books')

@section('content')

<h2>Daftar Buku</h2>

<ul>
    @foreach($books as $book)
        <li>
            <strong>{{ $book['judul'] }}</strong>
            - {{ $book['penulis'] }}
            - {{ $book['tahun'] }}
        </li>
    @endforeach
</ul>

@endsection