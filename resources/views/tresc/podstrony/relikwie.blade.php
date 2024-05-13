@extends('szablon')
@section('title', 'Relikwie św. Andrzeja Boboli dla Twojego kościoła')
@section('description', 'Informacje, w jaki sposób zdobyć relikwie św. Andrzeja Boboli dla Twojego kościoła. Dane konaktowe, gdzie się zwrócić i co zrobić.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, relikwie, kult relikwii, relikwie św. Andrzeja Boboli')

@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Relikwie Twojego kościoła</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Relikwie św. Andrzeja Boboli dla Twojego kościoła.</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}

    <div class="row mt-4">

        <div class="col-12 text-center lightbox" data-mdb-lightbox-init data-mdb-zoom-level="0.25">

            <figure class="figure">
                <img
                    data-mdb-lazy-load-init
                    data-mdb-lazy-src="{{URL::asset('/stat/relikwiarz_Andrzeja_Boboli_kaplica_sejmowa.webp')}}"
                    {{--src="{{ URL::asset('/stat/relikwie-andrzeja-boboli-warszawa2.webp')}}"--}}
                    data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
                    alt="Relikwiarz św. Andrzeja Boboli w kaplicy sejmowej."
                    class="img-fluid rounded w-100 shadow-1-strong rounded"
                    data-mdb-img="{{ URL::asset('/stat/relikwiarz_Andrzeja_Boboli_kaplica_sejmowa_duze.webp')}}"

                />
                <figcaption class="figure-caption text-end">Relikwiarz św. Andrzeja Boboli w kaplicy sejmowej. Fot. Redakcja</figcaption>
            </figure>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-9 col-md-12">
    <p class="akapit">Jeśli w Twoim kościele istnieje kult św. Andrzeja Boboli albo ktoś chce go zapoczątkować, istnieje możliwość uzyskania relikwii cząstkowych świętego męczennika.</p>
    <p class="akapit">W tym celu należy się zwrócić do proboszcza parafii św. Andrzeja Boboli w Warszawie, gdzie znajdują się integralne relikwie.</p>
    <p class="">Należy napisać na adres:</p>
    ul. Rakowiecka 61
    </br> 02-532 Warszawa</p>
    <p class="akapit">Pamiętaj, żeby wesprzeć organizacyjnie i materialnie (np. w zakupie stosownego relikwiarza) swoich duszpasterzy w tym przedsięwzięciu!</p>

    </div>
    </div>
    <div class="col-lg-2"></div>

    <div class="row mt-4">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 col-md-12 lightbox" data-mdb-lightbox-init data-mdb-zoom-level="0.25">

            <figure class="figure">
                <img
                    data-mdb-lazy-load-init
                    data-mdb-lazy-src="{{URL::asset('/stat/relikwie-andrzeja-boboli-warszawa2.webp')}}"
                    {{--src="{{ URL::asset('/stat/relikwie-andrzeja-boboli-warszawa2.webp')}}"--}}
                    data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
                    alt="Sanktuarium św. Andrzeja Boboli w Warszawie - trumna z ciałem męczennika (fot. br. Damian Wojciechowski SJ)."
                    class="img-fluid rounded w-100 shadow-1-strong rounded"
                    data-mdb-img="{{ URL::asset('/stat/relikwie-andrzeja-boboli-warszawa2_duze.webp')}}"

                />
                <figcaption class="figure-caption text-end">Sanktuarium św. Andrzeja Boboli w Warszawie - trumna z ciałem męczennika (fot. br. Damian Wojciechowski SJ). </figcaption>
            </figure>
  {{--  <div class=" mt-5 lightbox" data-mdb-lightbox-init data-mdb-zoom-level="0.25">
        <img
            src="{{ URL::asset('/stat/relikwie-andrzeja-boboli-warszawa2.webp')}}"
            alt="Relikwie św. Andrzeja Boboli - sanktuarium w Warszawie"
            class="img-fluid rounded w-100 shadow-1-strong rounded"
            data-mdb-img="{{ URL::asset('/stat/relikwie-andrzeja-boboli-warszawa2_duze.webp')}}"

        />

    </div>--}}
        </div>
        <div class="col-lg-1"></div>
    </div>
@endsection
