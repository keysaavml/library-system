@extends('layouts.app')

@section('title', 'Tambah Pengguna')

@section('content')

    <h2>Tambah Pengguna</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <label>Nama</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}">
        <br><br>

        <label>Password</label><br>
        <input type="password" name="password">
        <br><br>

        <label>Role</label><br>
        <select name="role">
            <option value="">-- Pilih Role --</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
        <br><br>

        <button type="submit">Simpan Pengguna</button>
        <a href="{{ route('users.index') }}">Kembali</a>
    </form>

@endsection
