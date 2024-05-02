@extends('szablon')
@section('title', 'Mapa portalu portalu AndrzejBobola.info')
@section('description', 'Dokładna mapa portalu portalu AndrzejBobola.info. Lista wszystkich podstron, usług i zasobów portalu AndrzejBobola.info.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, portal AndrzejBobola.info')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Mapa portalu AndrzejBobola.info')
@section('og_description', 'Mapa strony AndrzejBobola.info.')
{{-- Koniec social udostępnanie--}}
@section('tresc')

    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mapa strony</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}

{{-- h1 na podstonie--}}
<div class="row mt-5">
    <div class="col-12 text-center">
        <h1 class="h1_podstrony fs-5 color-glowny">Mapa strony</h1>

    </div>
</div>
    <hr class="hr" />
{{--Koniec h1 na podstonie--}}

    <div class="row mt-2">
        <div class="col-10 offset-2">

            <ul class="list-unstyled">
                <li class=""><i class="fas fa-house me-2 text-info"></i><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('wiadomosci')}}" class="color-glowny">Aktualności</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('artykuly')}}" class="color-glowny">Artykuły</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/dlaczego-andrzej-bobola" class="color-glowny">Dlaczego Andrzej Bobola?</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('biografia')}}" class="color-glowny">Życi i kult</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('biogram')}}" class="color-glowny">Biogram</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('IntencjeSwiadectwa')}}" class="color-glowny">Intencje i świadectwa</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('intencje')}}" class="color-glowny">Prześlij intencje lub świadectwa</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('relikwie')}}" class="color-glowny">Relikwie dla Twojego kościoła</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('modlitwy')}}" class="color-glowny">Modlitwy</a></li>

                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/modlitwa/nowenna-do-sw-andrzeja-boboli" class="color-glowny">Nowenna do św. Andrzeja Boboli</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="modlitwa/litania-do-sw-andrzeja-boboli" class="color-glowny">Litania do św. Andrzeja Boboli</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/modlitwa/modlitwa-o-uchronienie-polski-od-wojny" class="color-glowny">Modlitwa o uchronienie od wojny</a></li>
               {{-- <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('nawrocenieNarodu')}}" class="color-glowny">Modlitwa o nawrócenie narodu</a></li>--}}

                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('filmy')}}" class="color-glowny">Filmy</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('zasoby')}}" class="color-glowny">Zdjęcia, dokumenty, książki</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="zasob/obrazy-sw-andrzeja-boboli" class="color-glowny">Obrazy św. Andrzeja Boboli</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/zasob/powrot-relikwii-do-kraju-album-1938" class="color-glowny">Powrót relikwii do kraju (Album 1938)</a></li>

                {{--<li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('kalendarium')}}" class="color-glowny">Kalendarium</a></li>--}}

                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('naszaKsiazka')}}" class="color-glowny">Książka "Boży wojownik"</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('gdzieKupic')}}" class="color-glowny">Gdzie kupić książkę?</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('publikacjeKsiazka')}}" class="color-glowny">Publikacje o książce</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('fragmentKsiazki')}}" class="color-glowny">Fragment książki</a></li>

                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('kontakt')}}" class="color-glowny">Formularz kontaktowy</a></li>


            </ul>


        </div>
    </div>

@endsection
