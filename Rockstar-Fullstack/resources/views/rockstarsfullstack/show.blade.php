@extends('layout/main')

@section('title', 'Rockstars Fullstack Details')

@section('container')
<div class ='container'>
<div class ='row'>
<div class ='col-6'>
<h1 class="mt-3">Rockstars Fullstack</h1>

<div class="card text-white bg-primary mb-3" style="max-width: 27rem;">
  <div class="card-body">
  <h3 class="card-title">{{ $rockstar->nama }}</h3>
  <h5 class="card-title">{{ $rockstar->company }}</h4>
    <p class="card-text">{{ $rockstar->phone }}</p>
    <p class="card-text">{{ $rockstar->email }}</p>

  <a href="{{ $rockstar->id }}/edit" class="btn btn-success">Edit</a>

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