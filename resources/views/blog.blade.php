@extends('layouts/main')

@section('container')
<h1>Hello, blog</h1>
<br>
@foreach ($posts as $post)
    <article class="mb-5">
    <h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
        <h5>Penulis : {{ $post->excerpt }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

@endforeach
@endsection