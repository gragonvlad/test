
@extends('app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">

<body class="menu">

    <div class="nav">
        
    <a class="activer" href="/"><img src="smiley.png"></a>
        <a class="active" :hover href="#home">Home</a>
        <a class="menu" :hover href="#news">News</a>
        <a class="menu" :hover href="#contact">Contact</a>
        <a class="menu" :hover href="/about">About</a>
</div>

</body>
<h1 class="name">{{$name}}</h1>
<h1 class="name">{{$age}}</h1>
<h1 class="name">{{$address}}</h1>
<h2 class="cursive">Cursive</h2>
<h2 class="times">Times New Roman</h2>

<ff nameall="{{$name}}"></ff>

@endsection