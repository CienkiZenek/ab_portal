@extends('szablon')
@section('title', $film->title)
@section('description', $film->description)
@section('keywords', $film->keywords)
{{-- social udostępnanie--}}
@if($film->id=1)
    @section('og_image', 'https://AndrzejBobola.info/stat/klatki_filmy/powrot-relikwii-youtoube-klatka.png')
@endif

@section('og_url', Request::url())
@section('og_title', $film->title)
@section('og_description', $film->description)
{{-- Koniec social udostępnanie--}}
@section('tresc')

    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item"><a href="{{route('filmy')}}" class="color-glowny">Filmy</a></li>

            <li class="breadcrumb-item active" aria-current="page">{!!$film->tytul!!}</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-3">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">{!!$film->tytul!!}</h1>

        </div>
    </div>

    {{--Koniec h1 na podstonie--}}


<div class="row justify-content-center">

    <div class="row mb-3 mt-4">
        <div class="col-12 ">{!!$film->opis!!}</div>
    </div>

    <div class="row mb-2">
        <div class="col-12">
            <div class="ratio ratio-16x9">
                <iframe
                    src="{!!$film->film_kod!!}"
                    title=""
                    allowfullscreen
                ></iframe>
            </div>

        </div>
    </div>

    @if(Str::length($film->kanal)>2)
        <div class=" col-12 mb-5 text-mutted" style="font-size: small">
            Kanał:  <a href="{{$film->kanal_url}}" target="_blank">{{$film->kanal}}</a>
        </div>
    @endif
    </div>


@if($powiazaniaWatki->count()>0)
    @include('dodatki.powiazania', ['powiazaniaWatki'=>$powiazaniaWatki])
@endif


@endsection
