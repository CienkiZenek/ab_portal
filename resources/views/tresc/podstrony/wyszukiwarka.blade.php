@extends('szablon')
@section('title', 'AndrzejBobola.info - wyszukiwarka')
@section('description', 'Wyszukiwarka portalu AndrzejBobola.info.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, portal AndrzejBobola.info, AndrzejBobola.info, AndrzejBobola.info, wyszukiwarka')

@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny" rel="canonical">Strona główna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wyszukiwarka</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Wyszukiwarka</h1>

        </div>
    </div>
    {{--Koniec h1 na podstonie--}}

<div class="row justify-content-center mt-3">

<h5>Wyniki wyszukiwania dla <i>{{$szukane}}</i></h5>
    <hr class="hr" />

    @foreach($Wyniki as $wynik)

        <div class="row mb-3 ">
            <div class="col-lg-8 col-md-7 col-sm-6 shadow-5 rounded-5">


                <div class="color-glowny fw-bold"><a href="/{{$wynik->nazwaRoute}}/{{$wynik->slug}}" style="font-size: small"
                        class="text-decoration-none" target="_blank" rel="canonical">{{$wynik->tytulDodany}}  ({{$wynik->typTresci}})</a></div>
                <div  class="text-muted" style="font-size: x-small" >{!!$wynik->naglowekDodany!!}</div>

            {{--<div class="color-glowny fw-bold"><a href="{{route('wiadomosc',$wiadomosc->slug)}}" style="font-size: small"
            class="text-decoration-none">{{$wiadomosc->tytul}}</a></div>

    <div class="text-muted" style="font-size: x-small">{!!$wiadomosc->naglowek!!}</div>--}}

            </div>

        </div>

        <hr class="hr hr-blurry" />
    @endforeach

</div>

@endsection
