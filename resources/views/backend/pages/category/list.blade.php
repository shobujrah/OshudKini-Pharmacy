@extends('backend.master')

@section('content')



<h1 class="mt-2"> Categories</h1>

@if(session()->has('msg'))
  <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


<a href="{{route('category.create')}}" class="btn btn-success"> Create</a>


<table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td>
        <ul>
            <a href="" class="btn btn-success">view </a>
            <a href="" class="btn btn-success"> edit</a>
        </ul>
      </td>
    </tr>
@endforeach
  </tbody>
</table>



@endsection
