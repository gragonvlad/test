
@extends('app')

@section('content')
<table>

@foreach($blogs as $blog)
<tr>
    <td>{{ $blog->id }}</td>
    <td>{{ $blog->link }}</td>
    <td>{{ $blog->menu }}</td>
</tr>
@endforeach


</table>

@endsection
