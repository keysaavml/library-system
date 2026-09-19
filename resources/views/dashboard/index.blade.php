@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h2>{{ $title }}</h2>

<p>{{ $description }}</p>

<ul>
    <li>Jumlah Buku: {{ $bookCount }}</li>
    <li>Jumlah Member: {{ $memberCount }}</li>
    <li>Jumlah Kategori: {{ $categoryCount }}</li>
</ul>

@endsection