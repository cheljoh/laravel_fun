@extends('layout')

@section('content')
  <div class="container">

    @unless (empty($people))
      There are some people
    @else
      There are no people
    @endunless

    @foreach ($people as $person)
      <li>{{ $person }}</li>
    @endforeach
  </div>
@stop
