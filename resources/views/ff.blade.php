
@extends('app')
@section('content')
<html lang="ru">
<!DOCTYPE html>
<title>Test</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
/*<meta name="keywords" content="важные, ключевые, слова"> // увы тут нет ключевых слов*/
<header>
<body class="menu">

    <div class="nav">
        
    <a class="activer" href="/"><img src="smiley.png"></a>
    <a class="active" href="#home">Home</a>
    <a class="menu" href="#news">News</a>
    <a class="menu" href="#contact">Contact</a>
    <a class="menu" href="/about">About</a>
</div>
<div id="app" class="demo">
  <my-title blog-title="Шикарный Vue"></my-title>
</div>
</body>
</header>
<main>
<button id="btn">Sign up</button>
<h1 class="data">{{$data}}</h1>
<h2 class="cursive">Cursive</h2>
<h2 class="times">Times New Roman</h2>
<label class="dd">Test colm name: <input name="firstName" class="dd" type="text" /></label>
<ff datall="{{$data}}"></ff>
</main>
<footer>
<h1>@2024</h1>
</footer>
@endsection
