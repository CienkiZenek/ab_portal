@extends('szablon')
@section('title', 'Relikwie św. Andrzeja Boboli dla Twojego kościoła')
@section('description', 'Informacje, w jaki sposób zdobyć relikwie św. Andrzeja Boboli dla Twojego kościoła. Dane konaktowe, gdzie się zwrócić i co zrobić.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, relikwie, kult relikwii, relikwie św. Andrzeja Boboli')

@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Wsparcie</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Wsparcie dla portalu</h1>

        </div>
    </div>
    <hr class="hr" />


    <div class="row mb-6">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">

            <div class="mb-3">Udziel wsparcia (PLN) za pośrednictwem <a href="https://zrzutka.pl/z/wesprzyj-rozwoj-portalu-o-sw-andrzeju-boboli" target="_blank">zrzutka.pl</a></div>
            <div>
                Indywidualny numer konta zrzutki: 93 1750 1312 6885 1359 7030 9584
            </div>

        </div>
        <div class="col-lg-2"></div>
    </div>


    <div class="row mb-4">
<div class="col-lg-2"></div>
<div class="col-lg-8">

    <div style="position: relative; width: 100%; height: 700px; overflow: hidden;" class="shadow-5">
        <iframe style="position: absolute; top:0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%;" src="https://zrzutka.pl/jgfe8g/widget/23" frameborder="0" scrolling="no">

        </iframe>
    </div>

</div>
<div class="col-lg-2 "></div>
    </div>

    <div class="row mb-6 mt-4">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">

            <div class="mb-3">Udziel wsparcia (EUR) za pośrednictwem <a href="https://4fund.com/pl/5vbpvv" target="_blank">4fund.com</a></div>
            {{--<div>
                Indywidualny numer konta zrzutki: 93 1750 1312 6885 1359 7030 9584
            </div>--}}

        </div>
        <div class="col-lg-2"></div>
    </div>


    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">

            <div style="position: relative; width: 100%; height: 900px; overflow: hidden;"><iframe style="position: absolute; top:0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%;" src="https://4fund.com/pl/5vbpvv/widget/13" frameborder="0" scrolling="no"></iframe></div>

        </div>
        <div class="col-lg-2"></div>
    </div>
@endsection
