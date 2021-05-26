@extends('layouts.app')

@section('content')
@section('content')
<main class="container">
<br>
<a  class="btn btn-primary" href="{{ route('firms.index') }}">Atgal</a>
<br>
<br>

<form method="POST" action="{{ route('firms.update', $firm->id)}}">
    @csrf


@method('PUT')
  <div class="mb-3">
    <label  class="form-label">name</label>
    <input  value="{{$firm->Name}}" type="text" name="Name" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">course</label>
    <input value="{{$firm->email}}"type="email" name="email" class="form-control" >
  </div>
   <div class="mb-3">
    <label  class="form-label">fee</label>
    <input value="{{$firm->logo}}" type="text" name="logo" class="form-control" >

  </div>
  <div class="mb-3">
    <label  class="form-label">fee</label>
    <input value="{{$firm->website}}" type="text" name="website" class="form-control" >

  </div>




 <div class="mb-3">
  <button type="submit" class="btn btn-info">Submit</button>
  </div>

</form>
@endsection
@endsection
