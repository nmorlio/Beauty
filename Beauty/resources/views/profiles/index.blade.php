@extends('layouts.app')

@section ('content')

@include ('nav')

@foreach ($profiles as $profile)
    <li> {{$profile->name}}<form method="GET" action="/profile/{{$profile->id}}">
        <input type="submit" value="Mostrar">
    </form></li>
@endforeach

@endsection ()