@extends('app')

@section('content')
    <h1>Daftar Buku</h1>
    <a href='/tambahBuku'>+Tambah Buku</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $buku)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Data buku belum tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
