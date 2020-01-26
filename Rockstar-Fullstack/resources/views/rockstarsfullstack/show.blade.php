@extends('layout/main')

@section('title', 'Rockstars Fullstack Details')

@section('container')
<div class ='container'>
<div class ='row'>
<div class ='col-6'>
<h1 class="mt-3">Rockstars Fullstack</h1>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $rockstar->nama }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $rockstar->company }}</h6>
    <h6 class="card-text">{{ $rockstar->phone }}</h6>
    <h6 class="card-text">{{ $rockstar->email }}</h6>

  <a href="{{ $rockstar->id }}/edit" class="btn btn-primary">Edit</a>

  <form action="{{ $rockstar->id }}" method="post" class="d-inline">
  @method('delete')
  @csrf
  <button type="submit" class="btn btn-danger">Delete</button>
  </form>

  <a href="/rockstars" class="btn btn-dark">Back</a>
  </div>
</div>

</div>
</div>
</div>
@endsection