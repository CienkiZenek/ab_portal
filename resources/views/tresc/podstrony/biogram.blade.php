@extends('szablon')
@section('title', 'Kalendarium życia i kultu św. Andrzeja Boboli')
@section('description', 'Kalendarium życia i kultu św. Andrzeja Boboli')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, żywoty świętych, hagiografia, biografia, biogram, kalendarium, kalendarium życia i kultu św. Andrzeja Boboli ')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Kalendarium życia i kultu św. Andrzeja Boboli')
@section('og_description', 'Kalendarium życia i kultu św. Andrzeja Boboli')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Biogram</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Kalendarium życia i kultu św. Andrzeja Boboli:</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}


    @foreach($Biogram as $biogram)
        <div class="row mb-3">
            <div class="col-1 fs-5 fw-bold">{{$biogram->rok}}</div>
            <div class="col-2 fs-6 fw-bolder">{{$biogram->dzien_mies}}</div>
        <div class=" col-8 fs-6">
            {{$biogram->tresc}}

        </div>
        </div>
    @endforeach


@endsection
