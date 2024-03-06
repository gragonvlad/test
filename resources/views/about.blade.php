
@extends('app')
@section('content')


<checkrbox :blogs="{{ $usersJson }}" :unblogs="{{ $unusersJson }}"></checkrbox>


<main>
<h1 class="hh">Test worked</h1>
</main>


@endsection
