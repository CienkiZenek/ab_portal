@extends('szablon')
@section('title', 'Zasoby portalu AndrzejBobola.info')
@section('description', 'Zbiór dokumentów, plików, książek, wydawnictw, zdjęć i portretów związanych ze św. Andrzejem Bobolą.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, biografie, hagiografia, żywoty świętych, książki o Andrzeju Boboli, portrety Andrzej Bobola, dokumenty o Andrzeju Boboli, publikacje o Andrzeju Boboli, encyklika o Andrzeju Boboli' )
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Zasoby portalu AndrzejBobola.info')
@section('og_description', 'Zbiór dokumentów, plików, książek, wydawnictw, zdjęć i portretów związanych ze św. Andrzejem Bobolą.')
{{-- Koniec social udostępnanie--}}
@section('tresc')



    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny" rel="canonical">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Zdjęcia, dokumenty, książki</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-2">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Dokumenty, zdjęcia, książki związane ze św. Andrzejem Bobolą</h1>

        </div>
    </div>
    <hr class="hr mb-9" />
    {{--Koniec h1 na podstonie--}}

@foreach($zasoby as $zasob)

    <div class="row mb-3">
        <div class="col-1">
            </div>
        <div class="col-1">
            @switch($zasob->rodzaj)
                @case('ksiazka')
                    <i class="fas fa-book fa-lg color-glowny fa-2x" title="Książka"></i>
                    @break

                @case('galeria')
                    <i class="fas fa-images fa-lg color-glowny fa-2x" title="Zdjęcia"></i>
                    @break
                @case('modlitwa')
                    <i class="fas fa-hands-praying fa-lg color-glowny fa-2x" title="Modlitwa"></i>
                    @break
                @case('dokument')
                    <i class="fas fa-file-lines fa-lg color-glowny fa-2x" title="Dokument"></i>
                    @break

                @case('wydarzenie')
                    <i class="fas fa-users fa-lg color-glowny fa-2x" title="Wydarzenie"></i>
                    @break
                @case('inne')
                    <i class="fas fa-circle-dot fa-lg color-glowny fa-2x" title="Inne"></i>
                    @break
                @default
                    <i class="fas fa-circle-dot fa-lg color-glowny fa-2x"  title="Inne"></i>
                    @break


            @endswitch


        </div>
        <div class="col-10">


                <a href="{{route('zasob',$zasob->slug)}}" class="text-decoration-none color-glowny8" rel="canonical">{{$zasob->nazwa}}</a></div>
    </div>

    <hr class="hr hr-blurry" />
@endforeach

@endsection
