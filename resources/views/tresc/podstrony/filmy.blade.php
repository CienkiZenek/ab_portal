@extends('szablon')
@section('title', 'Filmy o św. Andrzeju Boboli')
@section('description', 'Filmy o św. Andrzeju Boboli z serwisu youtube.com')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, filmy o św. Andrzeju Boboli, youtube, film')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Filmy o św. Andrzeju Boboli')
@section('og_description', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, filmy o św. Andrzeju Boboli, youtube, film')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Filmy</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Filmy o św. Andrzeju Boboli:</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}

    <div class="row justify-content-center">

      @foreach($Wyniki as $film)

            <div class="col-lg-2 md-1"></div>
            <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">

                <div class="color-glowny mb-3 fs-5"><a href="{{route('film',$film->slug)}}"
                                                     class="text-decoration-none">{{$film->tytul}}</a></div>

                <div class="ratio ratio-16x9">
                <iframe
                    src="{{$film->film_kod}}"
                    title=""
                    allowfullscreen
                ></iframe>
            </div>
            </div>
            <div class="col-lg-2 md-1"></div>

        {{--<div class=" col-12 mb-3  p-2">
            <div class="mb-3 fs-6 color-glowny8">
                {{$film->tytul}}
            </div>
            <div class="mb-1">
                {{$film->opis}}
            </div>
</div>
            <div class="col-lg-2 col-md-0 "></div>
            <div class="col-lg-8 col-md-12 mb-4 ">
                <div class="ratio ratio-16x9">
                    <iframe
                        src="{{$film->film_kod}}"
                        title=""
                        allowfullscreen
                    ></iframe>
                </div>
            </div>
            <div class="col-lg-2 col-md-0 "></div>

            @if(Str::length($film->kanal)>2)
            <div class=" col-12 mb-3 text-mutted" style="font-size: small">
                Kanał:  <a href="{{$film->kanal_url}}" target="_blank">{{$film->kanal}}</a>
            </div>
            @endif--}}


            <hr class="hr hr-blurry" />
            <hr class="hr" />
    @endforeach
    @include('dodatki.paginacja')
</div>


@endsection
