@extends('szablon')
@section('title', '404 - nie ma takiej strony')
@section('description', '')
@section('keywords', '')

@section('tresc')

    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    <div class="row mt-5 mb-8">
        <div class="col-12 text-center ">
            <h1 class="h1_podstrony fs-5 color-glowny">Nie ma takiej strony!</h1>

        </div>
    </div>






@endsection
