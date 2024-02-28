
@extends('app')
@section('content')
<html lang="ru">
<!DOCTYPE html>
<title>{{$menu}}</title>
<main>
<h1></h1>
<sil></sil>
<? echo 'Петров Иван<br>Родился</br>' ?>
<test selall="{{$menu}}"></test>

<a class="active" href="#home">{{$menu}}</a>
<?php echo ("Петров Иван<br>Родился</br>"); ?>
<h2>Test</h2>
<h2>Greeting php {{$name}} {{$textss}} Количество фруктов:{{$summbanalimon}}</h2>
</main>
@endsection
