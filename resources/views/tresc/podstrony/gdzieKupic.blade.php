@extends('szablon')
@section('title', 'Gdzie można kupić ksiązkę "Boży wojownik"?')
@section('description', 'Lista księgarnii internetowych, gdzie można kupić ksiązkę "Boży wojownik. Opowieść o św. Andrzeju Boboli." ')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, żywoty świętych, hagiografia, biografia, księgarnie internetowe, katolickie księgarnie internetowe, religijne księgarnie internetowe')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'O portalu AndrzejBobola.info')
@section('og_description', 'Informacje o stronie i redakcji portalu AndrzejBobola.info.')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item"><a href="{{route('naszaKsiazka')}}" class="color-glowny">Książka "Boży wojownik"</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gdzie kupić książkę?</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Książkę, "Boży wojownik", można jeszcze kupić (nakład na wyczerpaniu) w następujacych księgarniach internetowych:</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}


    @foreach($Wyniki as $ksiegarnia)
        <div class="mb-2"><i class="fas fa-check-circle me-3 text-primary"></i><a href="{{$ksiegarnia->link}}" target="_blank" class="link-primary text-decoration-none"> {{$ksiegarnia->nazwa}}</a></div>
    @endforeach



@endsection
