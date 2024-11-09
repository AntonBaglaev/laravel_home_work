@extends('layouts.default')

@section('content')
    <p>{{ $name }}</p>
    @if($age > 18)
        <p>{{ $age }}</p>
    @else
        <p>Ваш возраст меньше 18 лет</p>
    @endif
    <p>{{$position}}</p>
    <p>{{$address}}</p>
@stop
