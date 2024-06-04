@extends('Layouts.nav')
<html>
    <head>
        <title> 
            Users
         </title>
         <link rel="icon" type="image/x-icon" href="{{ asset('users-icon.jpg') }}">
        </head>
    <body>
@section('content')
        <div class="container">
            <h1 class="text-center pt-5">
                Users 
            </h1>
        </div>
@endsection

      @section('section')
      @parent
       <h1> this section belong child of users </h1>
       @endsection

    </body>
</html> 