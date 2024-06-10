@extends('layout.navbar')
@section('content')
<h1 class="text-center pt-5">Edit Posts</h1>
<form class="container pt-5" method="POST" action="{{ route('updates',$post->id) }}">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title"  value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Body</label>
      <input type="text" name="body" class="form-control" value="{{ $post->body }}" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection