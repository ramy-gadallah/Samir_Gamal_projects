<html>
    <head>
        <title> nav </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="{{ asset('images22.png') }}">
    </head>
    <body>
        
 
        <div class="container">
            <div>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="{{ route('main') }}">Main</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('users') }}">Users</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                          </li>
                         
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
  @yield('content')  {{--  بس @yeild الصفحة اللى هتتكر معايا ف كل الصفحات دى بيبقى فيها ال --}}

  {{-- ____________________________________________________________________________________________________ --}}

  {{-- دا بيستخدم لما يكون  عندى حاجة عاوزة تظهر فى كله وبعدين اظهرها هيا واظهر معاها حاجة كمان  --}}
  @section('section') 
    <h1> this text static in all pages in mainpage navbar</h1>
    @show
  {{-- ____________________________________________________________________________________________________ --}}

    </body>
</html>