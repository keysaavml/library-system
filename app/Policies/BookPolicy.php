<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    // Melihat daftar buku
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'petugas']);
    }

    // Melihat detail buku
    public function view(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'petugas']);
    }

    // Menambahkan buku
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'petugas']);
    }

    // Mengedit buku
    public function update(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'petugas']);
    }

    // Menghapus buku: khusus Admin
    public function delete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }
}
