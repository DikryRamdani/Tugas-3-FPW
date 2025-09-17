<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::all();
        return view('buku', compact('data')); // langsung ke buku.blade.php
    }

    // Menampilkan form tambah buku
    public function create()
    {
        return view('tambahBuku'); // langsung ke tambahBuku.blade.php
    }

    // Simpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
        ]);

        Buku::create($request->only(['judul', 'pengarang', 'penerbit']));

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }
}
