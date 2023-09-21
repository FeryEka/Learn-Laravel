@extends('layouts.main')

    @section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
      <div class="col-md-6">
        <form action="/blog" method="get">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="search" name="search" value="{{ request('search') }}">
            <button class="btn btn-dark text-white" type="submit">Search</button>
          </div>          
        </form>
      </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/random/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body">
          <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
          
          <p>
            <small class="text-body-secondary">
            By: <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> | <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>

          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a class="text-decoration-none btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>

        </div>
      </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a class="text-white text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/random/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-body-secondary">
                        By: <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                      </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    
    @else
    <p class="text-center fs-5">No Post found.</p>
    @endif

    <div class="d-flex justify-content-center">
    {{ $posts->links() }}
    </div>

@endsection

