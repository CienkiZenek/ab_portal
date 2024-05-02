@extends('szablon')
@section('title', 'Modlitwy do św. Andrzeja Boboli')
@section('description', 'Lista modlitw do św. Andrzeja Boboli')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, modlitwy do św. Andrzeju Boboli, nowenna do do św. Andrzeja Boboli, litania do św. Andrzeja Boboli, modlitwa o uchronienie od wojny, litania, nowenna ')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Modlitwy do św. Andrzeja Boboli')
@section('og_description', 'Lista modlitw do św. Andrzeja Boboli')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Modlitwy</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Modlitwy:</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}


@foreach($Wyniki as $modlitwa)
    <div class="row mb-3">
        <div class="col-1"></div>
    <div class="col-8"><a href="{{route('modlitwa',$modlitwa->slug)}}" style="font-size: small"
            class="text-decoration-none color-glowny8">{{$modlitwa->nazwa}}</a></div>
    </div>

@endforeach
@include('dodatki.paginacja')
@endsection
