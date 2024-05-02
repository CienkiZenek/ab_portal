@extends('szablon')
@section('title', 'O portalu AndrzejBobola.info')
@section('description', 'Informacje o stronie i redakcji portalu AndrzejBobola.info.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, portal AndrzejBobola.info, AndrzejBobola.info, redakcja portalu AndrzejBobola.info')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'O portalu AndrzejBobola.info')
@section('og_description', 'Informacje o stronie i redakcji portalu AndrzejBobola.info.')
{{-- Koniec social udostępnanie--}}

@section('tresc')

    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item active" aria-current="page">O stronie</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
{{-- h1 na podstonie--}}
<div class="row mt-5">
    <div class="col-12 text-center">
        <h1 class="h1_podstrony fs-5 color-glowny">O stronie AndrzejBobola.info</h1>

    </div>
</div>
    <hr class="hr" />
{{--Koniec h1 na podstonie--}}


<div class="row mt-3">

    <div class="col-9 offset-3 fs-6 mb-2">
        Stronę prowadzą i redagują:</br> Joanna Operacz i Włodzimierz Operacz</br>
        autorzy ksiązki <a href="{{route('naszaKsiazka')}}" class="color-glowny">"Boży wojownik. Opowieść o św. Andrzeju Boboli"</a>.
    </div>
</div>

<div class="row">

    <div class="col-5 offset-3 fs-6 mb-3">
        <figure class="figure mt-3">
            <a href="{{route('naszaKsiazka')}}" ><img
                src="{{ URL::asset('/stat/okladka-ksiazki-bozy-wojownik.webp')}}"
                class="figure-img img-fluid rounded shadow-3 mb-3"
                alt="Okładka książki 'Boży wojownik. Opowieść o św. Andrzeju Boboli"
            /></a>
            <figcaption class="figure-caption"></figcaption>
        </figure>

    </div>
</div>
{{-- Koniec h1 na podstonie--}}


@endsection
