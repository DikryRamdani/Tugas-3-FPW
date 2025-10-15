@extends('app')

@section('content')
    <h1>Welcome to My Homepage</h1>

    <h2>Halo, {{ auth()->user()->name }}</h2>
    <p>Email: {{ auth()->user()->email }}</p>
    <a href="/logout">Logout</a>
@endsection
