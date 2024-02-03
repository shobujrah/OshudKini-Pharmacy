@extends('backend.master')
@section('content')


<h1> Category Create Form</h1>


<form action="{{route('category.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="">Category Name</label>
    <input required name="category_name" type="text" class="form-control" id=""  placeholder="Enter the category name">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <textarea  class="form-control" placeholder="Enter description" name="description" id="" cols="" rows=""></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
