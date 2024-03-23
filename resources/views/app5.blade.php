<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  
  <div id="app">
    <main class="py-4">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body class="menu">

    <div class="nav">
      <!-- menu db and count from db -->
      <a class="activer" href="/"><img src="smiley.png"></a>
      <!-- <checkrbox2 :urls="{{ $urlsJson }}"></checkrbox2>-->
   

    
</div>
    <!-- <a class="menu"  href="#home">Home</a>
        <a class="menu"  href="#news">News</a>
        <a class="menu"  href="#contact">Contact</a>
        <a class="menu" href="/about">About</a> -->
</div>

        @yield('content')
        <footer>
<h1>@2024</h1>
</footer>
    </main>
    <!-- <App></App> -->
  </div>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>