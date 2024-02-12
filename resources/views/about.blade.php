
@extends('app')
@section('content')
<html lang="ru">
<!DOCTYPE html>
<title>About</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<header>
<body class="menu">

    <div class="nav">
        
    <a class="activer" href="/"><img src="smiley.png"></a>
        <a class="active" href="#home">Home</a>
        <a class="menu" href="#news">News</a>
        <a class="menu" href="#contact">Contact</a>
        <a class="menu" href="#about">About</a>
</div>
<form class="level-form">
    <div class="level-form__slider" id="slider"></div>
    <p class="level-form__field">
        <label class="level-from__label">Цена</label>
        <input class="level-form__value" type="text">
</p>
<p class="level-form__field">
    <label>
        <input class="level-form__special" type="checkbox"> test
</label>
</p>
</form>

</body>
</header>
<main>
<h1 class="hh">Test worked</h1>
</main>
<footer>
<h1>@2024</h1>
</footer>

@endsection
