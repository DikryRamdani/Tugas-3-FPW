@extends('app')

@section('content')
    <h1>Tambah Buku</h1>

    @if ($errors->any())
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul') }}"><br><br>

        <label>Pengarang:</label><br>
        <input type="text" name="pengarang" value="{{ old('pengarang') }}"><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" value="{{ old('penerbit') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('buku.index') }}">Kembali</a>
@endsection
