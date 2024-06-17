@extends('layouts.nav')
@section('crud')
<h1> All Soft Delete </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Street</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Action</th>
      <th scope="col">
        <a href="{{ route('truncate') }}">
            <button class="btn btn-danger">
                Truncate
            </button>
        </a>
      </th>
    </tr>
  </thead>
  <tbody>
    
       @foreach ($posts as $post)
         
     <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->name }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->street }}</td>
      <td>{{ $post->created_at }}</td>
      <td>{{ $post->updated_at }}</td>
      <td>
        <a href="{{ route('restore',$post->id) }}">
            <button class="btn btn-danger">
                Restore
            </button>
        </a>
    </td> 
      <td>
        <a href="{{ route('forceDelete',$post->id) }}">
          <button class="btn btn-danger">
           Force Delete 
          </button>
        </a> 
    </td>
    </tr>
    @endforeach


  </tbody>
</table>
@stop