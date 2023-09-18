@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p><a class="text=decoration-none" href="#">{{ $post->user->name }}</a> <a class="text=decoration-none" href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog" class="d-block mt-3">kembali</a>
@endsection

