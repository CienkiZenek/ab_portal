@extends('szablon')
@section('title', $zasob->title)
@section('description', $zasob->description)
@section('keywords', $zasob->keywords)
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', $zasob->title)
@section('og_description', $zasob->description)
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item"><a href="{{route('zasoby')}}" class="color-glowny">Zasoby</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{App\Services\GlownaServices::limitSpacja($zasob->nazwa,50)}}</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">{{$zasob->nazwa}}</h1>

        </div>
    </div>
    {{--Koniec h1 na podstonie--}}


<div class="row justify-content-center">


    <p style="text-align: justify; text-indent: 1em" class="mb-3">{{$zasob->opis}}</p>


    @if(Str::length($zasob->zdjecie1)>4)
        <div class="row d-flex justify-content-center">
            <div class="col-6 ">
        @include('dodatki.zdjecie1', ['zdjecie1'=>$zasob->zdjecie1, 'zdjecie1_podpis'=>$zasob->zdjecie1_podpis,'zdjecie1_id'=>$zasob->zdjecie1_id])
        </div></div>
    @endif


    @if(Str::length($zasob->zdjecie2)>4)
        <div class="row d-flex justify-content-center">
            <div class="col-6 ">
        @include('dodatki.zdjecie2', ['zdjecie2'=>$zasob->zdjecie2, 'zdjecie2_podpis'=>$zasob->zdjecie2_podpis,'zdjecie2_id'=>$zasob->zdjecie2_id])
            </div></div>
                @endif

    @if($zasob->pliki->count()>0)
        @php
           // dd($zasob->pliki);
        @endphp

        <div>Pliki: {{--{{$zasob->pliki->count()}}--}}</div>

<div class="row">
        @foreach($zasob->pliki as $plik)<div class="row mb-3"><div class="vr" style="width: 5px;"></div>
            <div class="col-5"  style="text-align: justify; ">

               {{$plik->opis}}

            </div>
            <div class="col-2">

                <a href="{{ URL::asset('pliki/'.$plik->plik)}}" target="_blank" class="color-glowny">Pobierz plik

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
            <div class="col-5 lightbox" data-mdb-lightbox-init>

                <img src="{{URL::asset('zdjecia/'.$plik->zdjecie1)}}" alt="" class="img-fluid">
                <p>{{$plik->zdjecie1_podpis}}</p>

            </div>
</div>
        @endforeach
</div>

    @endif



    @if($zasob->galeria->count()>0)
@php
//dd($zasob->galeria);
@endphp
        <div class="row mt-3">
            {{--Wyświetlanie galerii--}}
            @include('dodatki.galeria', [ 'galeria'=>$zasob->galeria])

        </div>

    @endif

    @if($powiazaniaWatki->count()>0)
        @include('dodatki.powiazania', ['powiazaniaWatki'=>$powiazaniaWatki])
    @endif

</div>

@endsection
