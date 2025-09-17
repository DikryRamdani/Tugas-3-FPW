<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data = mahasiswa::all();
        return view('mahasiswa', compact('data'));
    }

    public function create()
    {
        return view('tambahMahasiswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20|unique:mahasiswa,npm',
            'prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'semester' => 'required|integer|min:1',
        ]);

        mahasiswa::create($request->only([
            'nama',
            'npm',
            'prodi',
            'fakultas',
            'semester'
        ]));

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }
}
