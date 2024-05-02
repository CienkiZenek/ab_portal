@extends('szablon')
@section('title', $artykul->title)
@section('description', $artykul->description)
@section('keywords', $artykul->keywords)
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', $artykul->title)
@section('og_description', $artykul->description)
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item"><a href="{{route('artykuly')}}" class="color-glowny">Artykuły</a></li>

            <li class="breadcrumb-item active" aria-current="page">{!!$artykul->tytul!!}</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    @if(Str::length($artykul->motto)>5)
    <div class="row">

        <div class="col-12 text-muted">{!!$artykul->motto!!}</div>
    </div>
    <div class="row">
        <div class="col-12 text-muted d-flex justify-content-end">{!!$artykul->motto_podpis!!}</div>
    </div>
    @endif


    <div class="row mt-5 mb-3">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">{!!$artykul->tytul!!}</h1>

        </div>
    </div>
    {{--Koniec h1 na podstonie--}}


<div class="row justify-content-center">


<div class="mb-3">Opublikowano: {{Carbon\Carbon::parse($artykul->data)->format('d-m-Y')}}</div>

{{--<div class="mb-3">{!!$artykul->naglowek!!}</div>--}}
    <div class="row mb-3">

        <div class=" col-12 ">{!!$artykul->naglowek!!}</div>

    </div>
    @if(Str::length($artykul->spis_tresci)>5)
        <div class="row">
            <div class="col-lg-2 col-md-0"></div>
            <div class="col-lg-8 col-md-12 mb-3">{!!$artykul->spis_tresci!!}</div>
            <div class="col-lg-2 col-md-0"></div>
        </div>
    @endif


<div class="mb-3"><p class="akapit">{!!  App\Services\GlownaServices::formatowanie($artykul->tresc)!!}</p></div>
    @if(Str::length($artykul->ramka1)>3)
    <div class="row">
        <div class=" col-12 mb-3 note note-warning">{!!$artykul->ramka1!!}</div>

    </div>
    @endif

    {{--@if(Str::length($wiadomosc->ramka1)>5)
    <div class="mb-3 note note-warning">{!!$wiadomosc->ramka1!!}</div>
    @endif--}}

    <div class="row">
        <div class=" col-12 mb-3">{{$artykul->autor}}</div>

    </div>


    <div class="row"></div>
    <div class="row"></div>



    @if(Str::length($artykul->zdjecie1)>1)
    @include('dodatki.zdjecie1', ['zdjecie1'=>$artykul->zdjecie1, 'zdjecie1_podpis'=>$artykul->zdjecie1_podpis,'zdjecie1_id'=>$artykul->zdjecie1_id])
    @endif
    @if(Str::length($artykul->zdjecie2)>1)
        @include('dodatki.zdjecie2', ['zdjecie2'=>$artykul->zdjecie2, 'zdjecie2_podpis'=>$artykul->zdjecie2_podpis,'zdjecie2_id'=>$artykul->zdjecie2_id])
    @endif
    @if($artykul->pliki->count()>0)
        @include('dodatki.plikiDolaczone', ['tresc'=>$artykul])
    @endif

    @if($artykul->galeria->count()>0)

        <div class="row mt-3">

            {{--Wyświetlanie galerii--}}
            @include('dodatki.galeria', [ 'galeria'=>$artykul->galeria])

        </div>

    @endif
    @if($powiazaniaWatki->count()>0)
    @include('dodatki.powiazania', ['powiazaniaWatki'=>$powiazaniaWatki])
    @endif

</div>

@endsection
