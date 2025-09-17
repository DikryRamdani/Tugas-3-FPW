@extends('app')

@section('content')
    <h1>Tambah Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama" required>
        </div>

        <div>
            <label for="npm">NPM:</label><br>
            <input type="text" name="npm" id="npm" required>
        </div>

        <div>
            <label for="prodi">Prodi:</label><br>
            <input type="text" name="prodi" id="prodi" required>
        </div>

        <div>
            <label for="fakultas">Fakultas:</label><br>
            <input type="text" name="fakultas" id="fakultas" required>
        </div>

        <div>
            <label for="semester">Semester:</label><br>
            <input type="number" name="semester" id="semester" min="1" required>
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}">Batal</a>
    </form>
@endsection
