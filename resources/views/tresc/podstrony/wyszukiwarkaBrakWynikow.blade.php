@extends('szablon')
@section('title', 'AndrzejBobola.info - wyszukiwarka')
@section('description', 'Wyszukiwarka portalu AndrzejBobola.info.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, portal AndrzejBobola.info, AndrzejBobola.info, AndrzejBobola.info, wyszukiwarka')

@section('tresc')

    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wyszukiwarka</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-11">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Brak wyników wyszukiwania</h1>

        </div>
    </div>
    {{--Koniec h1 na podstonie--}}


@endsection
