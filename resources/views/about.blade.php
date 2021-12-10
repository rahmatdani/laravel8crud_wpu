@extends('layouts/main')

@section('container')
    <p>Nama : {{ $name }}</p>
    <p>Alamat : {{ $alamat }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection

