@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By: <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> | <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

                <img class="img-fluid" src="https://source.unsplash.com/random/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="d-block mt-3">kembali</a>
            </div>
        </div>
    </div>
@endsection

