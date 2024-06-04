    @extends('Layouts.nav')
    <html>
    <head>
        <title> 
           Main
        </title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images22.png') }}">
    </head>
    <body>

        @section('content')
        <div class="container">
            <h1 class="text-center pt-5">
               Main
            </h1>
        </div>
        @endsection

       @section('section')
       @parent   {{--  "parent use in all pages if i use @parent"
         @section('section')
       <h1> this text static in all pages in mainpage navbar</h1>
       @show
        --}}
       <h1> this page belongs the main page </h1> {{-- this text show in this page only "child" --}}
       @endsection

    </body>
</html>