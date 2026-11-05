<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    public function index()
    {
        // Hak akses melihat daftar buku
        Gate::authorize('viewAny', Book::class);

        $books = Book::with('category')->get();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        // Hak akses menambahkan buku
        Gate::authorize('create', Book::class);

        $categories = Category::orderBy('name')->get();

        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Hak akses menyimpan buku
        Gate::authorize('create', Book::class);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', 'regex:/.*\S.*/'],
            'author' => ['required', 'string', 'max:255', 'regex:/.*\S.*/'],
            'year' => ['required', 'integer', 'digits:4', 'min:1900', 'max:' . date('Y')],
            'stock' => ['required', 'integer', 'min:0', 'max:10000'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        Book::create($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        // Hak akses melihat detail buku
        Gate::authorize('view', $book);

        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        // Hak akses mengedit buku
        Gate::authorize('update', $book);

        $categories = Category::orderBy('name')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        // Hak akses memperbarui buku
        Gate::authorize('update', $book);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255', 'regex:/.*\S.*/'],
            'author' => ['required', 'string', 'max:255', 'regex:/.*\S.*/'],
            'year' => ['required', 'integer', 'digits:4', 'min:1900', 'max:' . date('Y')],
            'stock' => ['required', 'integer', 'min:0', 'max:10000'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        $book->update($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        // Hak akses menghapus buku
        Gate::authorize('delete', $book);

        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
