@extends('layouts.master')

@section('title', $categoryName)

@section('content')

<div class="container my-2">
<h2>{{ $categoryName }}</h2>
@if($articles->isEmpty())
  <p>No articles yet in this category.</p>
@else
  @foreach($articles as $article)
    <div class="card mb-3">
      <div class="card-body">
        <h5>{{ $article->title }}</h5>
        <p>{{ Str::limit($article->content, 200) }}</p>
        <small class="text-muted">By {{ $article->writer->name }} — {{ $article->published_at ?? $article->created_at->toDateString() }}</small>
      </div>
    </div>
  @endforeach
@endif
</div>
@endsection
