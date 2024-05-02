@extends('szablon')
@section('title', 'Artykuly o św. Andrzeju Boboli')
@section('description', 'Artykuły poświęcone św. Andrzejowi Boboli, jego życiu, historii kultu i dziejom jego relikwii.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, kult św. Adndrzeja Boboli, relikwie, kult swiętych, kult relikwii, hagiografi, żywoty świętych')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Artykuly o św. Andrzeju Boboli')
@section('og_description', 'Artykuły poświęcone św. Andrzejowi Boboli, jego życiu, historii kultu i dziejom jego relikwii.')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Artykuły</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Artykuły:</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}



    @foreach($Wyniki as $artykul)

        <div class="row mb-3"><div class="vr"></div>
            <div class="col-lg-8 col-md-7 col-sm-6">

                <div class="color-glowny fw-bold"><a href="{{route('artykul',$artykul->slug)}}" style="font-size: small"
                                                     class="text-decoration-none">{{$artykul->tytul}}</a></div>

                <div class="text-muted" style="font-size: x-small">{!!$artykul->naglowek!!}</div>
            </div>
            <div class="col-lg-2 col-md-5 col-sm-6 ">

                <figure class="figure">
                    <img
                        src="{{URL::asset('zdjecia/'.$artykul->zdjecie1)}}"
                        class="figure-img img-fluid rounded shadow-3 mb-3"
                        alt="{{$artykul->zdjecie1_podpis}}"
                    />
                </figure>
                {{--<img src="{{URL::asset('zdjecia/'.$wiadomosc->zdjecie1)}}" class="img-fluid" alt="">--}}
            </div>
        </div>
        {{--<div class="row">
            <div class="col-8">
                <div><a href="{{route('artykul',$artykul->slug)}}" style="font-size: xx-small"
                        class="text-decoration-none">{{$artykul->tytul}}</a></div>
                <div >{!!$artykul->naglowek!!}</div>
            </div>
            <div class="col-2">--}}{{--{{$artykul->zdjecie1}}--}}{{--
                <img src="{{URL::asset('zdjecia/'.$artykul->zdjecie1)}}" class="img-fluid" alt="">
            </div>
        </div>--}}


    @endforeach
    @include('dodatki.paginacja')
@endsection
