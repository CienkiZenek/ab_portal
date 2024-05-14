@extends('szablon')
@section('title', 'Prośby do św. Andrzeja Boboli')
@section('description', 'Prośby i intencje do św. Andrzeja Boboli. Świadectwa otrzymanych łaska za wstawinnictwem św. Andrzeja Boboli.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, kult świętych, prośby, intencje, świadectwa')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Prośby do św. Andrzeja Boboli')
@section('og_description', 'Prośby i intencje do św. Andrzeja Boboli. Świadectwa otrzymanych łaska za wstawinnictwem św. Andrzeja Boboli.')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Intencje i świadectwa</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Intencje i świadectwa:</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}

<div class="row">



    @foreach($Wyniki as $intencja)

        <div class="col-8 offset-1" style="text-align: justify; "> {{$intencja->tresc_opublikowana}}</div>
        <div class="col-8 offset-1 mt-1 mb-4 text-muted" style="font-size: x-small">Przesłano: {{Carbon\Carbon::parse($intencja->created_at)->format('d-m-Y')}}</div>

    @endforeach
</div>


<div class="row mt-3 mb-3">
    <div class="col-8 offset-2">

        <a href="{{route('intencje')}}" class="btn btn-primary w-100 shadow-5" data-mdb-ripple-init><i class="fas fa-feather"></i> Prześlij intencję lub świadectwo łaski</a>
    </div>
</div>

@include('dodatki.paginacja')
@endsection
