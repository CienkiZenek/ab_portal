@extends('szablon')
{{-- social udostępnanie--}}
@section('title', $wiadomosc->title)
@section('description', $wiadomosc->description)
@section('keywords', $wiadomosc->keywords)
{{-- Koniec social udostępnanie--}}
@section('og_image', 'https://AndrzejBobola.info/zdjecia/'.$wiadomosc->zdjecie1)
@section('og_url', Request::url())
@section('og_title', $wiadomosc->title)
@section('og_description', $wiadomosc->description)

@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item"><a href="{{route('wiadomosci')}}" class="color-glowny">Aktualności</a></li>

            <li class="breadcrumb-item active" aria-current="page">{!!$wiadomosc->tytul!!}</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-3">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">{!!$wiadomosc->tytul!!}</h1>

        </div>
    </div>

    {{--Koniec h1 na podstonie--}}

    {{--naglowek --}}
    <div class="row justify-content-center">

        <div class="col-lg-1"></div>
        <div class="col-lg-9 col-sm-12 col-xs-12">

            <div class=" mb-3 fw-bolder" style="text-align: justify; font-size:larger">{!!$wiadomosc->naglowek!!}</div>
        </div>
        <div class="col-lg-2 "></div>
    </div>
            {{-- koniec naglowek--}}

    <div class="row">
        <div class="col-lg-3"></div>
        <div class=" text-center col-lg-6  col-md-12">
            @if(Str::length($wiadomosc->zdjecie1)>1)
                @include('dodatki.zdjecie1', ['zdjecie1'=>$wiadomosc->zdjecie1, 'zdjecie1_podpis'=>$wiadomosc->zdjecie1_podpis,'zdjecie1_id'=>$wiadomosc->zdjecie1_id])
            @endif
        </div></div>






    <div class="row justify-content-center">
    <div class="col-lg-1"></div>
    <div class="col-lg-9 col-sm-12 col-xs-12">
        {{-- początek treści aktualnosci--}}

                <p class="akapit">
            {!!  App\Services\GlownaServices::formatowanie($wiadomosc->tresc)!!}</p>

        @if(Str::length($wiadomosc->ramka1)>5)

                <div class="mb-3 note note-warning">{!!$wiadomosc->ramka1!!}</div>

        @endif

        @if(Str::length($wiadomosc->zdjecie2)>1)
                                @include('dodatki.zdjecie2', ['zdjecie2'=>$wiadomosc->zdjecie2, 'zdjecie2_podpis'=>$wiadomosc->zdjecie2_podpis,'zdjecie2_id'=>$wiadomosc->zdjecie2_id])

        @endif

        @if(Str::length($wiadomosc->ramka2)>5)
                <div class=" mb-3  note note-info">{!!$wiadomosc->ramka2!!}</div>

        @endif

        @if(Str::length($wiadomosc->komentarz)>5)
            <div class="row mb-3"><div class="col-1"><div class="vr" style="width: 5px; background-color: #d63384; height: 100%"></div>

                </div>
                <div class="col-10  bg-light rounded-2 p-3 fst-italic">

                    {!!$wiadomosc->komentarz!!}</div>
            </div>
        @endif

        @if(Str::length($wiadomosc->film)>5)

                    <div class="ratio ratio-16x9">
                        <iframe
                            src="{!! $wiadomosc->film!!}"
                            title=""
                            allowfullscreen
                        ></iframe>
                    </div>

                <div class="mt-3 mb-3 ">{!! $wiadomosc->film_podpis!!}</div>


        @endif



            <div class=" mb-3 d-flex justify-content-end">{{$wiadomosc->autor}}</div>
        <div class="mb-3 text-muted d-flex justify-content-end" style="font-size: small">Opublikowano: {{Carbon\Carbon::parse($wiadomosc->data)->format('d-m-Y')}}</div>




        @if(Str::length($wiadomosc->zrodlo)>1)

                <div class=" mb-1 text-muted d-flex justify-content-end">
                   {{$wiadomosc->zrodlo}}
                </div>

        @endif
        @if(Str::length($wiadomosc->link_tresc)>1)

                <div class=" mb-1">
                    <a href="{{$wiadomosc->link_url}}" target="_blank">{{$wiadomosc->link_tresc}}</a>
                </div>

        @endif

        {{-- koniec treści aktualnosci--}}
    </div>
    <div class="col-lg-2 "></div>






    @if($wiadomosc->galeria->count()>0)
            {{--Wyświetlanie galerii--}}
            @include('dodatki.galeria', [ 'galeria'=>$wiadomosc->galeria])
    @endif

    @if($wiadomosc->pliki->count()>0)
        @include('dodatki.plikiDolaczone', ['tresc'=>$wiadomosc])
    @endif
    @if($powiazaniaWatki->count()>0)
    @include('dodatki.powiazania', ['powiazaniaWatki'=>$powiazaniaWatki])
    @endif

</div>

@endsection
