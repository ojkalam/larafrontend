@extends('layouts.app')


@section('content')

<h1>Dashboard</h1>

@auth
<a href="{{ url('logout') }}">Logout</a>
@else
<p>Not logged in </p>
@endauth

@endsection