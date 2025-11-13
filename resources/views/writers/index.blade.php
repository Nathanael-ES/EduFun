@extends('layouts.master')

@section('title','Writers')

@section('content')

<div class="container">
<h2 class="my-2">Writers</h2>
<div class="row">
  @foreach($writers as $writer)
    <div class="col-md-4 d-flex align-items-stretch">
      <div class="card mb-3">
        <div class="card-body ">
          <h5>{{ $writer->name }}</h5>
          <p>{{ Str::limit($writer->bio, 60) }}</p>
          <div class="d-flex justify-content-end"><a href="{{ route('writers.show', $writer->id) }}" class="btn btn-sm btn-primary">View articles</a></div>
        </div>
      </div>
    </div>
  @endforeach
</div>
</div>
@endsection
