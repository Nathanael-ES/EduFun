@extends('layouts.master')

@section('title', 'Category')

@section('content')
<h2>Categories</h2>
<div class="row">
  @foreach($categories as $label => $slug)
    <div class="col-md-6">
      <div class="card mb-3">
        <div class="card-body">
          <h5>{{ $label }}</h5>
          <p>Explore courses in {{ $label }}.</p>
          <a href="{{ route('category.show', $slug) }}" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
