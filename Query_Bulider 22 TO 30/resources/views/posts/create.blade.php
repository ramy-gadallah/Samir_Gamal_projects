@extends('layouts.navbar')
@section('content')
<h1 class="text-center pt-5">Create New Post</h1>
<form class="container" action="{{ route('post.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" name='title' aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Body</label>
      <input type="test" class="form-control" name="body" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @stop