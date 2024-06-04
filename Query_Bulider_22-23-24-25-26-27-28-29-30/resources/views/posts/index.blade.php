
@extends('layouts.navbar')
@section('content')
<h1 class="text-center">All Posts</h1>
<table class="table container">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        <th>
          {{-- <a href="{{ route('post.deleteAll') }}">
            <button class="btn btn-dark">
              Delete All
            </button>
          </a> --}}
        
        <form action="{{ route('post.deleteTrancate') }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit"  class="btn btn-danger"> Trancate Posts</button>
      </form>

      
        </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
      <tr>
        <th scope="row"> {{ $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
        <td>
            <a href="{{ route('post.edit',$post->id) }}">
                <button class="btn btn-primary">
                            Update
                </button>
            </a>
        </td>
        <td>
          <a href="{{ route('post.delete',$post->id) }}">
            <button class="btn btn-danger">
              Delete 
            </button>
          </a>
        </td>
        <td>    
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  @stop