@extends('szablon')
{{-- social udostępnanie--}}
@section('title', $artykul->title)
@section('description', $artykul->description)
@section('keywords', $artykul->keywords)
{{-- Koniec social udostępnanie--}}
@section('og_image', 'https://AndrzejBobola.info/zdjecia/'.$artykul->zdjecie1)
@section('og_url', Request::url())
@section('og_title', $artykul->title)
@section('og_description', $artykul->description)

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
    <div class="row ">
        <div class="col-lg-2 col-md-0"></div>
        <div class="col-9 text-muted shadow-3 bg-light" style="text-align: justify;">{!!$artykul->motto!!}
            <div class="row">
                <div class="col-12 text-muted d-flex justify-content-end">{!!$artykul->motto_podpis!!}</div>
            </div>

        </div>
        <div class="col-lg-2 "></div>
    </div>



    @endif


    <div class="row mt-5 mb-3">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">{!!$artykul->tytul!!}</h1>

        </div>
    </div>
    {{--Koniec h1 na podstonie--}}






    @if(Str::length($artykul->spis_tresci)>5)
        <div class="row">
            <div class="col-lg-2 col-md-0"></div>
            <div class="col-lg-8 col-md-12 mb-3">{!!$artykul->spis_tresci!!}</div>
            <div class="col-lg-2 "></div>
        </div>
    @endif

    <div class="row justify-content-center">

        <div class="col-lg-1"></div>
        <div class="col-lg-9 col-sm-12 col-xs-12">

            <div class=" mb-3 fw-bolder" style="text-align: justify; font-size:larger">{!!$artykul->naglowek!!}</div>
        </div>
        <div class="col-lg-2 "></div>
    </div>
    {{-- koniec naglowek--}}
    @if(Str::length($artykul->zdjecie1)>3)
    <div class="row">
        <div class="col-lg-3"></div>
        <div class=" text-center col-lg-6  col-md-12">

                @include('dodatki.zdjecie1', ['zdjecie1'=>$artykul->zdjecie1, 'zdjecie1_podpis'=>$artykul->zdjecie1_podpis,'zdjecie1_id'=>$artykul->zdjecie1_id])

        </div></div>
    @endif


        <div class="row justify-content-center">
    <div class="col-lg-1"></div>
    <div class="col-lg-9 col-sm-12 col-xs-12">
        {{-- początek treści artykulu--}}



        @if(Str::length($artykul->ramka1)>3)

                <div class=" mb-3 note note-warning" style="text-align: justify;">

                    <p class="akapit">
                        {!!  App\Services\GlownaServices::formatowanie($artykul->ramka1)!!}
                    </p>
                </div>


        @endif
        <p class="akapit">{!!  App\Services\GlownaServices::formatowanie($artykul->tresc)!!}</p>

        @if(Str::length($artykul->ramka2)>3)
                <div class=" mb-3 note note-info" style="text-align: justify;">
                    <p class="akapit">
                        {!!  App\Services\GlownaServices::formatowanie($artykul->ramka2)!!}
                    </p>
                </div>
        @endif

        <div class=" mb-3 d-flex justify-content-end">{{$artykul->autor}}</div>
        <div class="mb-3 text-muted d-flex justify-content-end" style="font-size: small">Opublikowano: {{Carbon\Carbon::parse($artykul->data)->format('d-m-Y')}}</div>

        {{-- koniec treści artykulu--}}
    </div>
    <div class="col-lg-2 "></div>


    <div class="row"></div>
    <div class="row"></div>




    @if(Str::length($artykul->zdjecie2)>3)
                <div class="row">
                        <div class="col-lg-3"></div>
                        <div class=" text-center col-lg-6  col-md-12">

                            @include('dodatki.zdjecie2', ['zdjecie2'=>$artykul->zdjecie2, 'zdjecie2_podpis'=>$artykul->zdjecie2_podpis,'zdjecie2_id'=>$artykul->zdjecie2_id])
                        </div></div>
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
