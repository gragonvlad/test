
@extends('app')
@section('content')
<html lang="ru">
<!DOCTYPE html>
<title>{{$menu}}</title>
<main>
<h1></h1>


<test selall="{{$menu}}"></test>
<a class="active" href="#home">{{$menu}}</a>
<h2>Test</h2>
<h2>Greeting php {{$name}}</h2>
</main>
@endsection
