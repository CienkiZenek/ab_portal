@extends('szablon')
@section('title', 'Aktualne wiadomości o św. Andrzeju Boboli i jego kulcie')
@section('description', 'Widomości poświęcone wydarzeniom związanym ze św. Andrzejem Bobolą, jego życiem, historii jego kultu, dziejom jego relikwii oraz modliwom za jego pośrednictwem.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, kult św. Adndrzeja Boboli, relikwie, kult swiętych, kult relikwii, hagiografi, żywoty świętych, modliwy do świętych, kult świętych')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Aktualne wiadomości o św. Andrzeju Boboli i jego kulcie')
@section('og_description', 'Widomości poświęcone wydarzeniom związanym ze św. Andrzejem Bobolą, jego życiem, historii jego kultu, dziejom jego relikwii oraz modliwom za jego pośrednictwem.')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Aktualności</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Aktualności:</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}



@foreach($Wyniki as $wiadomosc)
    <div class="row mb-7" >

        <div class="col-lg-8 col-md-7 col-sm-12 mb-3">

    <div class="color-glowny mb-2"><a href="{{route('wiadomosc',$wiadomosc->slug)}}"
            class="text-decoration-none">{{$wiadomosc->tytul}}</a></div>

    <div class="text-muted" style="text-align: justify">
        <a href="{{route('wiadomosc',$wiadomosc->slug)}}"
        class="text-decoration-none  color-czarny" >
        {!!$wiadomosc->naglowek!!}</a></div>

    </div>
        <div class="col-lg-2 col-md-5 col-sm-12 ">
            @if(Str::length($wiadomosc->zdjecie1)>4)
                <div class="lightbox" data-mdb-lightbox-init>

                <img style="max-height: 190px"
                    data-mdb-lazy-load-init
                    data-mdb-lazy-src="{{URL::asset('zdjecia/'.$wiadomosc->zdjecie1)}}"
                    data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
                    data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($wiadomosc->zdjecie1))}}
                    class="figure-img img-fluid rounded shadow-3 mb-3"
                    alt="{{$wiadomosc->zdjecie1_podpis}}"/>

                </div>

            @endif
        </div>


    </div>
  {{--  <hr class="hr hr-blurry" />

    <div class="row mb-7" >

        <div class="col-lg-8 col-md-7 col-sm-6 shadow-5 rounded-5">

    <div class="color-glowny mb-2"><a href="{{route('wiadomosc',$wiadomosc->slug)}}"
            class="text-decoration-none">{{$wiadomosc->tytul}}</a></div>

    <div class="text-muted" style="font-size: small">
        <a href="{{route('wiadomosc',$wiadomosc->slug)}}"
        class="text-decoration-none  color-czarny">
        {!!$wiadomosc->naglowek!!}</a></div>

    </div>
        <div class="col-lg-2 col-md-5 col-sm-6 ">
            @if(Str::length($wiadomosc->zdjecie1)>4)
                <div class="lightbox" data-mdb-lightbox-init>

                <img style="max-height: 190px"
                    data-mdb-lazy-load-init
                    data-mdb-lazy-src="{{URL::asset('zdjecia/'.$wiadomosc->zdjecie1)}}"
                    data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
                    data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($wiadomosc->zdjecie1))}}
                    class="figure-img img-fluid rounded shadow-3 mb-3"
                    alt="{{$wiadomosc->zdjecie1_podpis}}"/>

                </div>

            @endif
        </div>


    </div>



  --}}

@endforeach


@include('dodatki.paginacja')
    <div class="mb-14"></div>
    <div class="mb-14"></div>
@endsection
