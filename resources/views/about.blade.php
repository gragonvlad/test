
@extends('app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">

<body class="menu">

    <div class="nav">
        
    <a class="activer" href="/"><img src="smiley.png"></a>
        <a class="active" :hover href="#home">Home</a>
        <a class="menu" :hover href="#news">News</a>
        <a class="menu" :hover href="#contact">Contact</a>
        <a class="menu" :hover href="#about">About</a>
</div>

</body>

<h1 class="hh">Test worked</h1>

@endsection
