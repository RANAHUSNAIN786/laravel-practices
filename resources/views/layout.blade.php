<!DOCTYPE html>
<html>
<head>
    <title>Laravel Practice @yield('title','undefine')</title>
   <link rel="stylesheet" href="{{@asset('css/style1.css')}}">
</head>
<body>
    <header>
        <h1>My Laravel Practice App</h1>
    </header>

     <nav>
    @section('sidebar')
    
        <a href="{{ url('/') }}" class="btn">Home</a>
        <a href="{{ url('/about') }}" class="btn">About</a>
        <a href="{{ url('/post') }}" class="btn">Post</a>
   
     @show
    </nav>
    <main>
       @hasSection ('content')
           
        @yield('content')
       @else
           <h1><center> No Data Found</center></h1>
       @endif

    </main>

    <footer>
        <p>&copy; 2025 My Laravel App</p>
    </footer>
</body>
</html>
