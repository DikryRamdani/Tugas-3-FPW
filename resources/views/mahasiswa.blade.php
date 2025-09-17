@extends('app')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    <a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Prodi</th>
                <th>Fakultas</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->npm }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->fakultas }}</td>
                    <td>{{ $mhs->semester }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
