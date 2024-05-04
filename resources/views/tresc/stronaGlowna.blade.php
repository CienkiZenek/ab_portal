@extends('szablon')
@section('title', 'AndrzejBobola.info')
@section('description', 'Portal poświęcony św. Andrzejowi Boboli')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, kult świętych, hagiografia, żywoty świętych')
@section('tresc')
    aaaaaaa
{{--


    <div class="row text-center  mt-2 mb-3   ">
        <div class="col-12">

        </div>
    </div>
    @include('dodatki.dlaczegoAB')

    <div class="row  mb-2 ">
        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 ">
            @if(isset($karuzelaZbior) && $karuzelaZbior->count()>1)
                @include('dodatki.karuzela', ['karuzelaZbior'=>$karuzelaZbior])

            @endif
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 border border-1 rounded-1 ps-0 pe-0 shadow-5">
<div class="tlo-glowne0 border border-1  rounded-1">
            <a href="{{route('wiadomosci')}}" class="text-decoration-none color-glowny ms-2 "
               >Aktualności</a>
        </div>
            @if($wiadomosciPrzyklejone->count()>0)
        <ul  class="list-unstyled mb-0  ms-2">
                @foreach($wiadomosciPrzyklejone as $wiadomosc)

                <li  class="hover-shadow rounded-1"><i class="fa-solid fa-thumbtack me-1 text-warning fa-rotate-by ms-1" style="--fa-rotate-angle: 45deg;" ></i>
                    <a href="{{route('wiadomosc',$wiadomosc->slug)}}"
                        class="text-decoration-none color-przyklejone text-warning ">
                        {{App\Services\GlownaServices::limitSpacja($wiadomosc->tytul,40)}}</a>
                </li>
            @endforeach
        </ul>
            @endif

<ul class="list-unstyled mb-1  ms-2">
           @foreach($wiadomosciStart as $wiadomosc)
        <li class="hover-shadow rounded-1"><a href="{{route('wiadomosc',$wiadomosc->slug)}}"
                        class="text-decoration-none color-glowny ms-1">{{App\Services\GlownaServices::limitSpacja($wiadomosc->tytul,40)}}</a>
        </li>
            @endforeach
</ul>
        </div>
    </div>

        <div class="row mb-3 gap-lg-4">

            @if ($kalendariumDzis->count()>0 || $kalendariumJutro->count()>0 || $kalendariumPojutrze->count()>0)

                <div class="col-lg-5 col-md-12 col-sm-12 border border-1 rounded-1 ps-0 pe-0 mb-2 mb-lg-0 ms-lg-5 shadow-5">
                @include('dodatki.kalendarium', ['kalendariumDzis'=>$kalendariumDzis, 'kalendariumJutro'=>$kalendariumJutro, 'kalendariumPojutrze'=>$kalendariumPojutrze])
                </div>
            @else
                <div class="col-lg-5 col-md-12 col-sm-12 border border-1 rounded-1 ps-0 pe-0 mb-2 mb-lg-0 ms-lg-5 shadow-5">
        @if($cytatDnia)
                    @include('dodatki.cytatDnia')
                    @endif
                </div>
   @endif
                <div class="col-lg-5 col-md-12 col-sm-12  border border-1 rounded-1 ps-0 pe-0 shadow-5">
                    @if($czywiesz)
                    @include('dodatki.czyWieszZe')
                    @endif

</div>

</div>

    <div class="row mb-2 ">

        <div class="col-lg-6 col-md-12 col-sm-12 ">

            <div class="card" style="max-width: 476px;">
                <a data-mdb-ripple-init  data-mdb-ripple-color="white" href="{{route('relikwie')}}">
                    <img
                    src="{{ URL::asset('/stat/relikwie-andrzeja-boboli-warszawa.webp')}}"
                    alt="Relikwie św. Andrzeja Boboli w Warszawie"
                    class="img-fluid rounded"
                />
                  </a>
                    <div class="card-body">
                    <h5 class="card-title">Relikwie</h5>
                    <p class="card-text">W Twoim kościele modlicie się do św. Andrzeja Boboli? A może chesz zapoczątkować w nim jego kult?</p>
                    <a href="{{route('relikwie')}}" class="btn btn-primary  w-100 shadow-5" data-mdb-ripple-init><i class='fas fa-church'></i> Relikwie dla Twojego kościoła</a>

                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card" style="max-width: 476px;">
                <a data-mdb-ripple-init  data-mdb-ripple-color="white" href="{{route('intencje')}}">
                <img
                    src="{{ URL::asset('/stat/meczenstwo-andrzej-bobola.webp')}}"
                    alt="Męczństwo św. Andrzeja Boboli"
                    class="img-fluid rounded"
                />
                </a>
                <div class="card-body">
                    <h5 class="card-title">Intencje</h5>
                    <p class="card-text">Chcesz przsłać intencję modlitwy do św. Andrzeja Boboli, lub podzielić się informacją, o łasce udzielonej za jego posrednictwem? </p>
                    <a href="{{route('intencje')}}" class="btn btn-primary w-100 shadow-5" data-mdb-ripple-init><i class="fas fa-feather"></i> Prześlij intencję</a>


                </div>
            </div>

        </div>

    </div>

<div class="row mb-3 gap-lg-4">

        <div class="col-lg-5 col-md-12 col-sm-12 border border-1 rounded-1 ps-0 pe-0 mb-2 mb-lg-0 ms-lg-5 shadow-5">

            <div class="tlo-glowne0 border border-1  rounded-1">
                <span class="text-decoration-none color-glowny ms-2"><a href="{{route('modlitwy')}} " class="color-glowny"><i class="fas fa-hands-praying"></i> Modlitwy</a></span>
            </div>
            <div class="ms-2"><a href="/modlitwa/modlitwa-o-uchronienie-polski-od-wojny" class="color-glowny">Modlitwa o uchronienie Polski od wojny</a></div>
            <div class="ms-2"><a href="/modlitwa/nowenna-do-sw-andrzeja-boboli" class="color-glowny">Nowenna do św. Andrzeja Boboli</a></div>
            <div class="ms-2"><a href="/modlitwa/litania-do-sw-andrzeja-boboli" class="color-glowny">Litania do św. Andrzeja Boboli</a></div>

        </div>

    <div class="col-lg-5 col-md-12 col-sm-12  border border-1 rounded-1 ps-0 pe-0 shadow-5">

        <div class="tlo-glowne0 border border-1  rounded-1">
            <span class="text-decoration-none color-glowny ms-2"><a href="{{route('zasoby')}} " class="color-glowny"><i class="fas fa-swatchbook"></i> Zdjęcia, dokumenty, książki</a></span>
        </div>
        <div class="ms-2"><a href="zasob/obrazy-sw-andrzeja-boboli" class="color-glowny">Obrazy św. Andrzeja Boboli</a></div>
        <div class="ms-2"><a href="/zasob/powrot-relikwii-do-kraju-album-1938" class="color-glowny">Powrót relikwii do kraju (Album 1938)</a></div>
        <div class="ms-2"><a href="/zasob/encyklika-o-sw-andrzeju-boboli" class="color-glowny">Encyklika o św. Andrzeju Boboli</a></div>
    </div>

</div>

<div class="row mb-5 gap-lg-4">
    <div class="col-lg-5 col-md-12 col-sm-12 border border-1 rounded-1 ps-0 pe-0 mb-2 mb-lg-0 ms-lg-5 shadow-5">
        <div class="tlo-glowne0 border border-1  rounded-1">
            <a href="{{route('artykuly')}}" class="text-decoration-none color-glowny ms-2"
            ><i class="fas fa-book-open-reader color-glowny"></i> Artykuły</a>
        </div>
        <ul  class="list-unstyled mb-0  ms-2">
            @foreach($artykulyStart as $artykul)
                <li><a href="{{route('artykul',$artykul->slug)}}"
                       class="text-decoration-none color-glowny ">{{App\Services\GlownaServices::limitSpacja($artykul->tytul,40)}}</a>
                </li>
            @endforeach
        </ul>

    </div>
    <div class="col-lg-5 col-md-12 col-sm-12  border border-1 rounded-1 ps-0 pe-0 shadow-5">

        <div class="tlo-glowne0 border border-1  rounded-1">
            <span class="text-decoration-none color-glowny ms-2"><i class="fas fa-film color-glowny"></i> <a href="{{route('filmy')}}" class="color-glowny">Filmy</a></span>
        </div>

        <div class="ms-2"><a href="https://www.youtube.com/watch?v=1dR3TAWynmY" target="_blank" class="color-glowny">Powrót relikwii do kraju (Film 1938)</a></div>
    </div>

</div>


@include('dodatki.ksiazkaGlowna')

--}}

@endsection
