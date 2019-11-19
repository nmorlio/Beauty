@extends('layouts.app')

@section ('content')

@include ('nav')

<form method="GET" action="/offer/create">
    <input type="submit" value="Crear Oferta">
</form>


@foreach ($offers as $offer)
    @if ($offer->group_offer==FALSE)
        <li> {{$offer->title}}
            <form method="GET" action="/offer/{{$offer->id}}">
                <input type="submit" value="Mostrar Oferta">
            </form>
        </li>
    @endif
@endforeach

@endsection ()



