<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
   <body>
    <form action="{{ route('users.post') }}" method="POST">
        @csrf
            <input type="text" name="user_name">
           <a href="{{ route('users.post') }}">
            <button type="submit">submit</button>
           </a>

    </form>
   </body>
</html>
