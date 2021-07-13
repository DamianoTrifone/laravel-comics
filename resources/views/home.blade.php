@extends('layouts.base')

@section('main')
@foreach ($comics as $comic)
    <img src="{{ $comic['thumb'] }}" alt="">
    <h5>{{ $comic['title'] }}</h5>
@endforeach
@endsection