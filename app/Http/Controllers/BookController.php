<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'judul' => 'Pemrograman PHP',
                'penulis' => 'Keysa',
                'tahun' => 2022
            ],
            [
                'judul' => 'Laravel untuk Pemula',
                'penulis' => 'Hanny',
                'tahun' => 2023
            ],
            [
                'judul' => 'Basis Data',
                'penulis' => 'Dewi',
                'tahun' => 2021
            ],
            [
                'judul' => 'Algoritma dan Pemrograman',
                'penulis' => 'Zahwa',
                'tahun' => 2020
            ],
            [
                'judul' => 'Pemrograman Berorientasi Objek',
                'penulis' => 'Eca',
                'tahun' => 2024
            ]
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}