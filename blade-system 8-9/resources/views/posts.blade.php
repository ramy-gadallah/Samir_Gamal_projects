@extends('Layouts.nav')
<html>
    <head>
       
        <title>Posts</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('Instagram-Apps-Cover-Photo-556x556.png') }}">

    </head>
    @section('content')
    <body>
        <div class="container">
            <h1 class="text-center pt-5">
                Posts
            </h1>
        </div>
    </body>
    @endsection

    @section('section')
    @parent
       <h1> this section belong child of posts </h1>
       @endsection
    
</html>