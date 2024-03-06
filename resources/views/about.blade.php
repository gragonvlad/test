
@extends('app')
@section('content')


<checkrbox :blogs="{{ $usersJson }}"></checkrbox>
<checkrbox2 :unblogs="{{ $unusersJson }}"></checkrbox2>


<main>
<h1 class="hh">Test worked</h1>
</main>


@endsection
