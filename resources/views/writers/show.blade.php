@extends('layouts.master')

@section('title', $writer->name)

@section('content')

<div class="container my-2">
<h2>{{ $writer->name }}</h2>
<p>{{ $writer->bio }}</p>

<h4>Articles by {{ $writer->name }}</h4>
@foreach($writer->articles as $article)
  <div class="card mb-2">
    <div class="card-body">
      <h5>{{ $article->title }}</h5>
      <p>{{ \Illuminate\Support\Str::limit($article->content, 150) }}</p>
      <small class="text-muted">{{ $article->published_at ?? $article->created_at->toDateString() }}</small>
    </div>
  </div>
@endforeach
</div>

@endsection

