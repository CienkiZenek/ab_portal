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
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny" rel="canonical">Strona główna</a></li>
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
                <li class=""><i class="fas fa-house me-2 text-info"></i><a href="{{route('StronaGlowna')}}" class="color-glowny" rel="canonical">Strona główna</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('wiadomosci')}}" class="color-glowny" rel="canonical">Aktualności</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('artykuly')}}" class="color-glowny" rel="canonical">Artykuły</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/dlaczego-wlasnie-andrzej-bobola" class="color-glowny" rel="canonical">Dlaczego Andrzej Bobola?</a></li>

                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/polska-pielgrzymka-prosi-papieza-o-relikwie-sw-andrzeja-boboli-7-czerwca-1938" class="color-glowny" rel="canonical">Polska pielgrzymka prosi papieża o relikwie św. Andrzeja Boboli (7 czerwca 1938)</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/pozegnanie-relikwii-sw-andrzeja-boboli-przez-rzym-8-czerwca-1938-opis-galeria" class="color-glowny" rel="canonical">Pożegnanie relikwii św. Andrzeja Boboli przez Rzym – 8 czerwca 1938</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/powitanie-relikwii-sw-andrzeja-boboli-na-polskiej-ziemi-11-czerwca-1938-opis-i-galeria" class="color-glowny" rel="canonical">Powitanie relikwii św. Andrzeja Boboli na polskiej ziemi – 11 czerwca 1938</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/relikwie-sw-andrzeja-boboli-w-oswiecimiu-11-czerwca-1938" class="color-glowny" rel="canonical">Relikwie św. Andrzeja Boboli w Oświęcimiu – 11 czerwca 1938</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/relikwie-sw-andrzeja-boboli-w-krakowie-11-13-czerwca-1938" class="color-glowny" rel="canonical">Relikwie św. Andrzeja Boboli w Krakowie 11-13 czerwca 1938</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/relikwie-sw-andrzeja-boboli-w-poznaniu-13-17-czerwca-1938-galeria" class="color-glowny" rel="canonical">Relikwie św. Andrzeja Boboli w Poznaniu 13-17 czerwca 1938</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/relikwie-sw-andrzeja-boboli-w-warszawie-17-19-czerwca-1938" class="color-glowny" rel="canonical">Relikwie św. Andrzeja Boboli w Warszawie (17-19 czerwca 1938)</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/relikwie-sw-andrzeja-boboli-w-warszawie-20-czerwca-1938" class="color-glowny" rel="canonical">Relikwie św. Andrzeja Boboli w Warszawie (20 czerwca 1938)</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/profanacja-relikwii-andrzeja-boboli-przez-bolszewikow-23-czerwca-1922" class="color-glowny" rel="canonical">Profanacja relikwii Andrzeja Boboli przez bolszewików 23 czerwca 1922</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/artykul/wywiezienie-przez-bolszewikow-relikwii-bl-andrzeja-boboli-z-polocka-do-muzeum-w-moskwie-20-lipca-1922" class="color-glowny" rel="canonical">Wywiezienie przez bolszewików relikwii bł. Andrzeja Boboli z Połocka do muzeum w Moskwie – 20 lipca 1922</a></li>


                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('biografia')}}" class="color-glowny" rel="canonical">Życi i kult</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('biogram')}}" class="color-glowny" rel="canonical">Biogram</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('IntencjeSwiadectwa')}}" class="color-glowny" rel="canonical">Intencje i świadectwa</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('intencje')}}" class="color-glowny" rel="canonical">Prześlij intencje lub świadectwa</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('relikwie')}}" class="color-glowny" rel="canonical">Relikwie dla Twojego kościoła</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('modlitwy')}}" class="color-glowny" rel="canonical">Modlitwy</a></li>

                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/modlitwa/nowenna-do-sw-andrzeja-boboli" class="color-glowny" rel="canonical">Nowenna do św. Andrzeja Boboli</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="modlitwa/litania-do-sw-andrzeja-boboli" class="color-glowny" rel="canonical">Litania do św. Andrzeja Boboli</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/modlitwa/modlitwa-o-uchronienie-polski-od-wojny" class="color-glowny" rel="canonical">Modlitwa o uchronienie od wojny</a></li>
               {{-- <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('nawrocenieNarodu')}}" class="color-glowny" rel="canonical">Modlitwa o nawrócenie narodu</a></li>--}}

                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('filmy')}}" class="color-glowny" rel="canonical">Filmy</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('zasoby')}}" class="color-glowny" rel="canonical">Zdjęcia, dokumenty, książki</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/zasob/portrety-sw-andrzeja-boboli" class="color-glowny" rel="canonical">Portrety św. Andrzeja Boboli</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/zasob/powrot-relikwii-do-kraju-album-1938" class="color-glowny" rel="canonical">Powrót relikwii do kraju (Album 1938)</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="/zasob/encyklika-papieza-piusa-xii-invicti-athletae-christi" class="color-glowny" rel="canonical">Encyklika "Invicti Athletae Christi"</a></li>

                {{--<li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('kalendarium')}}" class="color-glowny" rel="canonical">Kalendarium</a></li>--}}

                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('naszaKsiazka')}}" class="color-glowny" rel="canonical">Książka "Boży wojownik"</a></li>
                {{--<li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('gdzieKupic')}}" class="color-glowny" rel="canonical">Gdzie kupić książkę?</a></li>--}}
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('publikacjeKsiazka')}}" class="color-glowny" rel="canonical">Publikacje o książce</a></li>
                <li class="ms-4"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('fragmentKsiazki')}}" class="color-glowny" rel="canonical">Fragment książki</a></li>

                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('wsparcie')}}" class="color-glowny" rel="canonical">Wsparcie dla portalu</a></li>
                <li class="ms-2"><i class="fas fa-long-arrow-alt-right me-2 text-info"></i><a href="{{route('kontakt')}}" class="color-glowny" rel="canonical">Formularz kontaktowy</a></li>


            </ul>


        </div>
    </div>

@endsection
