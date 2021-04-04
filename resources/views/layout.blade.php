<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{mix('/css/app.css')}}">
     <link rel="stylesheet" href="{{mix('/css/theme.css')}}">
     
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('cars.index')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav mr-auto">
           
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('cars.index')}}">Cars   </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">Users  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cars.create')}}">New Car  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.create')}}">New User  </a>

            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
        
    @if(session()->has('status'))
    <h3 style ="color: green">
        {{session()->get('status')}}

    </h3>
    @endif
 
 
   
    @yield('content')
    <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>