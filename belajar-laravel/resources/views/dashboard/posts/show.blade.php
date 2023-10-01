@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-square"></i> Back to my posts</a>
            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>

            <img class="img-fluid mt-3" src="https://source.unsplash.com/random/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>
@endsection