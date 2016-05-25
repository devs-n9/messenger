@extends('layout')

@section('content')
<ul>
    @foreach($city as $c)
    <li>{{ $c->name }}</li>
    @endforeach
</ul>
@endsection