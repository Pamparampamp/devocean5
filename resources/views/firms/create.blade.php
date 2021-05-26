@extends('layouts.app')

@section('content')
@section('content')
<main class="container">
<br>
<a  class="btn btn-primary" href="{{ route('firms.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('firms.store')}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control"  >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">email</label>
    <input type="text" name="email" class="form-control" >
  </div>
 <div class="mb-3">
    <label  class="form-label">logo</label>
    <input type="text" name="logo" class="form-control"  >
  </div>

  <div class="mb-3">
    <label  class="form-label">website</label>
    <input type="text" name="website" class="form-control"  >
  </div>

  <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection
@endsection
