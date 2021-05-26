{{-- @extends('firms.layout') --}}

@extends('layouts.app')
@section( 'content')

<main class="container">


<div class="pull-left">
<h2>Firms crud</h2>

</div>

<div class="row">
    <div class="col-lg-12"></div>
    <div class="pull-right">
        <a  class="btn btn-success" href="{{ route('firms.create') }}" >Create new student</a>
    </div>

</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">logo</th>
      <th scope="col">website</th>
       <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
@foreach ($firms as $firm)


        <td>{{ $firm->id }}</td>
      <td>{{ $firm->name }}</td>
      <td>{{ $firm->email }}</td>
      <td>{{ $firm->logo }}</td>
        <td>{{ $firm->website }}</td>

      <td>
        <form action="{{ route('firms.destroy',$firm->id) }}" method="POST">

        <a href="{{ route('firms.edit',$firm->id) }}" class="btn btn-primary">Edit</a>
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Delete

</button>
        </form>

      </td>
    </tr>
@endforeach

  </tbody>
</table>
</main>
@endsection
