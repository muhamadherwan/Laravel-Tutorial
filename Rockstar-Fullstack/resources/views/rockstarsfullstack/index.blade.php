@extends('layout/main')

@section('title', 'Rockstars Fullstack!')

@section('container')
<div class ='container'>
<div class ='row'>
<div class ='col-8'>
<h1 class="mt-3">Rockstars Fullstack</h1>

<a href="/rockstars/create" class="btn btn-primary m-3 right">Register New Rockstar Fullstack</a>


@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

<ul class="list-group">
@foreach( $rockstars as $rockstar )
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $rockstar->nama }}
    <a href="/rockstars/{{ $rockstar->id}}" class="btn btn-primary">Detail</a>
    <!--<a href="/rockstars/{{ $rockstar->id }}/edit" class="btn btn-dark">Edit</a>
    <form action="/rockstars/{{ $rockstar->id }}" method="post" class="d-inline">
  @method('delete')
  @csrf
  <button type="submit" class="btn btn-danger">Delete</button>
  </form>-->
  </li>
@endforeach
</ul>

</div>
</div>
</div>
@endsection