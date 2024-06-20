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
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny" rel="canonical">Strona główna</a></li>

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

    {{--Koniec h1 na podstonie--}}



    @foreach($Wyniki as $artykul)

        <div class="row mb-3"><div class="vr"></div>
            <div class="col-lg-8 col-md-7 col-sm-12 mb-3">

                <div class="color-glowny mb-2"><a href="{{route('artykul',$artykul->slug)}}"
                                                     class="text-decoration-none" rel="canonical">{{$artykul->tytul}}
                    </a></div>

                <div class="text-muted color-czarny" style="text-align: justify">
                    <a href="{{route('artykul',$artykul->slug)}}"
                                                                     class="text-decoration-none color-czarny" rel="canonical">{!!$artykul->naglowek!!}</a></div>
            </div>
            <div class="col-lg-2 col-md-5 col-sm-12 ">

                {{--<figure class="figure">
                    <img
                        src="{{URL::asset('zdjecia/'.$artykul->zdjecie1)}}"
                        class="figure-img img-fluid rounded shadow-3 mb-3"
                        alt="{{$artykul->zdjecie1_podpis}}"
                    />
                </figure>--}}
                @if(Str::length($artykul->zdjecie1)>4)
                <div class="lightbox" data-mdb-lightbox-init>

                    <img style="max-height: 190px"
                         data-mdb-lazy-load-init
                         data-mdb-lazy-src="{{URL::asset('zdjecia/'.$artykul->zdjecie1)}}"
                         data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
                         data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($artykul->zdjecie1))}}
                    class="figure-img img-fluid rounded shadow-3 mb-3"
                    alt="{{$artykul->zdjecie1_podpis}}"/>

                </div>
                @endif




            </div>
        </div>


        {{--<hr class="hr" />--}}
    @endforeach
    @include('dodatki.paginacja')

    <div class="mb-14"></div>
    <div class="mb-14"></div>
@endsection
