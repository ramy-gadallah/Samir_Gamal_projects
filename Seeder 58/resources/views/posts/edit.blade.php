@extends('layouts.nav')
@section('crud')
<h1 class="text-center text-danger">Edit Post</h1>
<form action="{{ route('update',$posts->id) }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" value="{{ $posts->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input name="title" value="{{ $posts->title }}" type="text" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Street</label>
    <input name="street" value="{{ $posts->street }}" type="text" class="form-control" id="exampleInputPassword1" >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop   
