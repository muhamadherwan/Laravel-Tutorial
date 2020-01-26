@extends('layout/main')

@section('title', 'Edit Data')

@section('container')
<div class ='container'>
<div class ='row'>
<div class ='col-8'>
<h1 class="mt-3">Edit Data</h1>

<form method="post" action="/rockstars/{{ $rockstar->id }}">
@method('patch')
@csrf
  <div class="form-group">
    <label for="nama">Name</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Please Enter Name" name="nama" value="{{ $rockstar->nama }}">
  @error('nama')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  </div>

  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Please Enter Phone" name="phone" value="{{ $rockstar->phone }}">
    @error('phone')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  </div>

 <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Please Enter Email" name="email" value="{{ $rockstar->email }}">
    @error('email')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  </div>

  <div class="form-group">
    <label for="company">Company</label>
    <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Please Enter Company" name="company" value="{{ $rockstar->company   }}">
    @error('company')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>

  <a href="/rockstars" class="btn btn-dark">Back</a>  
</form>

</div>
</div>
</div>
@endsection