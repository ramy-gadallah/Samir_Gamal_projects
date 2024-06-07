@extends('layout.navbar')
@section('content')
                          <h1 class="text-center p-5">All Posts Soft Delete</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col" class="text-center">Action</th>
        <th>
            <a href="{{ route('deleteAll') }}">
                <button class="btn btn-danger">
                        Delete All
                </button>
            </a>
        </th>
       
      </tr>
    </thead>
    <tbody>

        @foreach ($posts as $post)
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
        <td>
             
                <a href="{{ route('forceDelete',$post->id) }}">
                    <button class="btn btn-danger">
                        Delete
                    </button>
                </a>
                <a href="{{ route('restore',$post->id) }}">
                      <button class="btn btn-danger">
                          Restore
                      </button>
                </a>
      {{-- ________________________________________________________________________________________ --}}
                                      {{-- الطريقة الثانية ف الحذف  --}
                                        {{-- use route 'delete' --}}
                                        
                {{-- <form action="{{ route('delete',$post->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                    <button class="btn btn-danger" type="submit"> DELETE BY FORM</button>
                </form> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection