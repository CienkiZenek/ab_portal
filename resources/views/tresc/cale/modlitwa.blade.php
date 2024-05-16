@extends('szablon')
{{-- social udostępnanie--}}
@section('title', $modlitwa->title)
@section('description', $modlitwa->description)
@section('keywords', $modlitwa->keywords)
{{-- Koniec social udostępnanie--}}
@section('og_image', 'https://AndrzejBobola.info/zdjecia/'.$modlitwa->zdjecie1)
@section('og_url', Request::url())
@section('og_title', $modlitwa->title)
@section('og_description', $modlitwa->description)

@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item"><a href="{{route('modlitwy')}}" class="color-glowny">Modlitwy</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{$modlitwa->nazwa}}</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">{{$modlitwa->nazwa}}</h1>

        </div>
    </div>
    {{--Koniec h1 na podstonie--}}

    @if(Str::length($modlitwa->widok)>4)

        @php
        $widok_modlitwy = 'tresc.modlitwy.'.$modlitwa->widok;
        @endphp
        @include($widok_modlitwy)

    @else
    <div class="row mb-4 mt-4">
        <div class="col-2"></div>
        <div class="col-8" style=" text-align: justify">
            {!!  App\Services\GlownaServices::formatowanieModlitwy($modlitwa->tresc)!!}
        </div>
        <div class="col-2"></div>
    </div>

    @endif

    @if($modlitwa->pliki->count()>0)
        @php
            // dd($zasob->pliki);
        @endphp


        @foreach($modlitwa->pliki as $plik)<div class="row mb-3 border border-2 rounded-2 bg-light p-2">




            <div class="col-4">

                <a href="{{ URL::asset('pliki/'.$plik->plik)}}" target="_blank" class="color-glowny">Pobierz plik z modlitwą
                    @switch($plik->typ)
                        @case('pdf')
                            <i class="fas fa-file-pdf fa-lg color-glowny"></i>
                            @break
                        @case('word')
                            <i class="fas fa-file-word fa-lg color-glowny"></i>
                            @break
                        @default
                            <i class="fas fa-file fa-lg color-glowny"></i>
                    @endswitch
                </a>

            </div>
            <div class="col-5">

                {{$plik->opis}}

            </div>

            <div class="col-3 lightbox" data-mdb-lightbox-init>

                <img src="{{URL::asset('zdjecia/'.$plik->zdjecie1)}}" alt="" class="img-fluid">
                @if($plik->zdjecia->count()>0)
                <p>{{$plik->zdjecia->first()->opis}}</p>
                @endif
            </div>
        </div>
        @endforeach

    @endif

<div class="row justify-content-center">

    <p class="mt-3" style="text-indent: 1em; text-align: justify">{{$modlitwa->opis}}</p>



    @php
        // dd($zasob->zdjecie1);
    @endphp

    <div class="text-center col-6">


        @if(Str::length($modlitwa->zdjecie1)>5)
            @include('dodatki.zdjecie1', ['zdjecie1'=>$modlitwa->zdjecie1, 'zdjecie1_podpis'=>$modlitwa->zdjecie1_podpis,'zdjecie1_id'=>$modlitwa->zdjecie1_id])
        @endif

    </div>

    @if(Str::length($modlitwa->zrodlo_nazwa)>5)
    <div class="row mb-4 mt-4">
        <div class="col-6"><a href="{{$modlitwa->zrodlo_link}}" target="_blank" rel="nofollow">{{$modlitwa->zrodlo_nazwa}}</a></div>
    </div>
    @endif
    @if($powiazaniaWatki->count()>0)
        @include('dodatki.powiazania', ['powiazaniaWatki'=>$powiazaniaWatki])
    @endif
</div>

@endsection
