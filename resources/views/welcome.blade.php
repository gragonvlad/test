@extends('app')
@section('content')

    <body>

        <div class="mw6 center pa3 sans-serif">

            <h1 class="mb4">Blog</h1>

            
<main>

<ff data="datall"></ff>
</main>
            @foreach($users as $blog )
<table>
<checkrbox></checkrbox>
            <div class="pa2 mb3 striped--near-white">

                <header class="b mb2">{{ $blog->name }}</header>

                <div class="pl2">
               
               <p class="mb2">id: {{ $blog->id }}</p>

                    <p class="mb2">email: {{ $blog->link }}</p>

                    <p class="mb2">details: {{ $blog->menu }}</p>
                    <p class="mb2">details: {{ $blog->express_time }}</p>

                </div>

            </div>
</table>
            @endforeach
            <br>TRASH</br>
          
      
        </div>
</main>
    </body>

</html>
@endsection