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

    <div class="row">
        <div class="col-lg-1 col-md-0"></div>
        <div class="col-lg-9 col-md-12">
    <p class="akapit">Jeśli w Twoim kościele istnieje kult św. Andrzeja Boboli, lub istnieje pragnienie zapoczątkować
        go, to jest możliwość zdobycia relikwi cząstkowych tego świętego męczennika! </p>
    <p class="akapit">W tym celu należy zwrócić się do proboszcza parafii św. Andrzeja Boboli, gdzie znajdują się jego
        integralne relikwie.</p>
    <p class="">Należy napisać na adres:</p>
    ul. Rakowiecka 61
    </br> 02-532 Warszawa</p>
    <p class="akapit">Pamiętaj, aby wesprzeć, organizacyjnie i materialnie (np. koszt wykonania stosownego relikwiarza)
        w tym przedsięwzięciu swoich duszpasterzy!</p>

    </div>
    </div>
    <div class="col-lg-2 col-md-0"></div>

@endsection
