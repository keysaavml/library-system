@extends('layouts.app')

@section('title', 'Edit Pengguna')

@section('content')

    <h2>Edit Pengguna</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama</label><br>
        <input type="text" name="name"
               value="{{ old('name', $user->name) }}">
        <br><br>

        <label>Email</label><br>
        <input type="email" name="email"
               value="{{ old('email', $user->email) }}">
        <br><br>

        <label>Password Baru (kosongkan jika tidak diganti)</label><br>
        <input type="password" name="password">
        <br><br>

        <label>Role</label><br>
        <select name="role">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                Admin
            </option>
            <option value="petugas" {{ $user->role == 'petugas' ? 'selected' : '' }}>
                Petugas
            </option>
        </select>
        <br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('users.index') }}">Kembali</a>
    </form>

@endsection
