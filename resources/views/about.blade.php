@extends('layout.main')


@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="broke" width="100" class="thumnail rounded-circle">
@endsection

