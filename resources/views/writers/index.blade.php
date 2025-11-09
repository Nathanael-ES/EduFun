@extends('layouts.master')

@section('title','Writers')

@section('content')
<h2>Writers</h2>
<div class="row">
  @foreach($writers as $writer)
    <div class="col-md-4">
      <div class="card mb-3">
        <div class="card-body">
          <h5>{{ $writer->name }}</h5>
          <p>{{ \Illuminate\Support\Str::limit($writer->bio, 100) }}</p>
          {{-- <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-sm btn-primary">View articles</a> --}}
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
