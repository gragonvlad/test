<!doctype html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Users</title>

        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

    </head>

    <body>

        <div class="mw6 center pa3 sans-serif">

            <h1 class="mb4">Blog</h1>

            <header class="b mb2">{{ $books  }}ST</header>
fwf
            @foreach($blogf as $blog )
<table>
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

    </body>

</html>