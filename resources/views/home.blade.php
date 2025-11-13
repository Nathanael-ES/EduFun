@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div class="card text-bg-dark mb-4">
        <img height="400" src="{{ asset('img/backgroundLaptop.jpg') }}" class="card-img" alt="...">
</div>

<div class="container">
  <div class="row">
      <div class="col-md-8">
        <h3>Latest Article</h3>
        <div class="row">
          @foreach ($articles as $article)
            <div class="mb-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ Str::limit($article->content, 180) }}</p>
                <small class="text-muted">Published: {{ $article->published_at ?? $article->created_at->toDateString() }} • Writer: {{ $article->writer->name }}</small>
                <div class="d-flex justify-content-end"><a href="{{ route('category.show', Str::slug($article->category)) }}" class="btn btn-dark">Read more...</a></div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  

    <div class="col-md-4">
      <h5>Popular</h5>
      <ul class="list-group mb-3">
        @foreach (\App\Models\Article::orderBy('views','desc')->take(5)->get() as $pop)
          <li class="list-group-item">
            <strong>{{ $pop->title }}</strong><br>
            <small class="text-muted">{{ $pop->views }} views</small>
          </li>
        @endforeach
      </ul>

      <h5>Categories</h5>
      <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('category.show', 'interactive-multimedia') }}">Interactive Multimedia</a></li>
        <li class="list-group-item"><a href="{{ route('category.show', 'software-engineering') }}">Software Engineering</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection
