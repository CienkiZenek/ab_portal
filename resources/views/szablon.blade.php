<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description', 'Portal poświęcony św. Andrzejowi Boboli')">
    <meta name="keywords" content="@yield('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, kult świętych, hagiografia, żywoty świętych, relikwie')">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3561469657068826"
            crossorigin="anonymous"></script>

    <title>@yield('title', 'AndrzejBobola.info')</title>
    <link rel="icon" type="image/png" sizes="48x48"   href="{{ URL::asset('/stat/favicon.webp')}}">


    <meta property="og:url"           content="@yield('og_url', 'https://AndrzejBobola.info')" />
    <meta property="og:type"           content="@yield('og_type', 'website')" />
    <meta property="og:title"         content="@yield('og_title', 'AndrzejBobola.info')" />
    <meta property="og:description"   content="@yield('og_description', 'Portal poświęcony św. Andrzejowi Boboli')" />
    <meta property="og:image"         content="@yield('og_image', 'https://AndrzejBobola.info/stat/andrzej-bobola.webp')" />

    <meta property="og:locale" content="pl_PL" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="stylesheet" href="{{ URL::asset('/css/fonty.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/mdb/mdb.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/awsome/all.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style_util.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css?v='.config('Bobola.wersja'))}}">

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q01DL1L1FM"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q01DL1L1FM');
</script>
<body >

{{--
Święty Michale Archaniele,
 wspomagaj nas w walce, a przeciw niegodziwości
  i zasadzkom złego ducha bądź naszą obroną.
   Oby go Bóg pogromić raczył, pokornie o to prosimy,
    a Ty, Wodzu niebieskich zastępów, szatana i inne
     duchy złe, które na zgubę dusz ludzkich po tym
      świecie krążą, mocą Bożą strąć do piekła. Amen.
--}}

<!-- Navbar -->

<nav class="navbar navbar-expand-lg tlo-glowne text-white shadow-0 ">

    <!-- Container wrapper -->
    <div class="container-fluid ">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="/"
           data-mdb-ripple-init
           data-mdb-ripple-unbound="true"
           data-mdb-ripple-color="white"
           data-mdb-ripple-centered="true"
           data-mdb-ripple-radius="80"
        >
            <img src="{{ URL::asset('/stat/logoAndrzejBobolaInfo.webp')}}"
                 width="95" height="100"
                 title="logoAndrzejBobolaInfo"
                 alt="sw-Andrzej-Bobola-logo-portalu-AndrzejBobola.info"
                 loading="lazy">
        </a>
        <!-- Toggle button -->
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarLink"
            aria-controls="navbarLink"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars text-white"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarLink">
            <!-- Left links -->

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route('biografia')}}"

                    >Życie&nbsp;i&nbsp;kult</a>
                </li>
            </ul>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('wiadomosci')}}" >{{--<i class="fas fa-comment"></i>--}} Aktualności</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('IntencjeSwiadectwa')}}" >{{--<i class="fas fa-comment"></i>--}} Intencje&nbsp;i&nbsp;świdectwa</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('modlitwy')}}" >{{--<i class="fas fa-hands-praying"></i>--}} Modlitwy</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('relikwie')}}" >{{--<i class="fas fa-hands-praying"></i>--}} Relikwie</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item dropdown">
                    <a
                        data-mdb-dropdown-init
                        class="nav-link dropdown-toggle text-white"
                        href="#"
                        id="tresc"
                        role="button"
                        aria-expanded="false"
                    >
                     Zasoby</a>

                    <ul class="dropdown-menu" aria-labelledby="tresc">

                        <li>
                            <a class="dropdown-item" href="{{route('artykuly')}}">Artykuły</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('biogram')}}">Biogram</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('filmy')}}">Filmy</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{route('zasoby')}}">Zdjęcia, dokumenty, książki</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('naszaKsiazka')}}">Książka "Boży wojownik"</a>
                        </li>



                    </ul>
                </li>
            </ul>

            <!-- Left links -->
            {{--<div class="d-flex align-items-center">
            </div>--}}
            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <form class="d-flex input-group w-auto" method="POST" action="{{ route('szukaj') }}">
                    @csrf
                    <input
                        type="search"
                        size="10"
                        class="form-control rounded"
                        placeholder="Szukaj"
                        aria-label="Szukaj"
                        name="szukane"
                        aria-describedby="search-addon"
                        value="{{request()->get('szukane')}}"
                    />
                <button class="btn btn-primary" type="submit" data-mdb-ripple-init><i class="fas fa-search fa-lg"></i></button>
            </form>
        </div>
        <!-- Right elements -->
        </div>
        <!-- Collapsible wrapper -->
    </div>

</nav>
<!-- Navbar -->
{{--tytuł, datownik, social share --}}
<div class="container-fluid">

    {{--<div class="row tlo-glowne text-white shadow-5">
        <div class="col-lg-6 col-sm-12"><h1 class="fs-6">Portal poświęcony św.&nbsp;Andrzejowi&nbsp;Boboli</h1>

        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="d-flex justify-content-end me-1">{!!App\Services\GlownaServices::datownik()!!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;@include('komponenty.socialPrzyciski')
            </div>
        </div>

    </div>--}}
    {{-- inny kolor --}}
    <div class="row mt-2">
        <div class="col-lg-6 col-md-12"><h1 class="fs-6 color-glowny">Portal poświęcony św.&nbsp;Andrzejowi&nbsp;Boboli</h1>

        </div>
        <div class="col-lg-6 col-md-12 color-glowny">
            <div class="d-block d-lg-none ">
                {!!App\Services\GlownaServices::datownik()!!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;@include('komponenty.socialPrzyciskiNiebieskie')

            </div>
            {{--<div class="d-flex justify-content-end me-1 color-glowny">{!!App\Services\GlownaServices::datownik()!!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;@include('komponenty.socialPrzyciskiNiebieskie')
            </div>--}}
            <div class="d-none d-lg-block">
                <div class="d-flex justify-content-end me-1 color-glowny">{!!App\Services\GlownaServices::datownik()!!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;@include('komponenty.socialPrzyciskiNiebieskie')
                </div>

            </div>
        </div>

        {{--<div class="col-md-12 d-none d-sm-block d-md-none color-glowny">AA
            {!!App\Services\GlownaServices::datownik()!!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;@include('komponenty.socialPrzyciskiNiebieskie')

        </div>--}}

    </div>


</div>




<div class="container justify-content-center" id="zawartoscGlowna">
    {{-- Komunikaty - Start--}}
   @include('dodatki.komunikaty')
    {{-- Komunikaty - Koniec --}}
    <div class="mb-3"></div>
    @yield('tresc')


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3561469657068826"
            crossorigin="anonymous"></script>
    <!-- AB-portal -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3561469657068826"
         data-ad-slot="1132656567"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

  {{--  <div class="row border border-1 p-2 bg-light rounded-1">
        <div class="col-lg-12 col-md-12 col-sm-12 fs-6">
            --}}{{--reklama googla--}}{{--
            Reklama googla
            --}}{{--koniec reklamy googla--}}{{--
        </div>


    </div>
    <div class="row border border-1 p-2 bg-light rounded-1 mt-4 mb-7">
        <div class="col-lg-12 col-md-12 col-sm-12 fs-6">
            --}}{{--wsparcie--}}{{--
            Wsparcie Patronite.pl
            --}}{{--koniec wsparcie--}}{{--
        </div>


    </div>--}}


    <button onclick="topFunction()" id="myBtn" title="Do góry" data-mdb-ripple-init data-mdb-ripple-color="white">&nbsp;<i class="fas fa-arrow-up-long fa-2x"></i>&nbsp;{{--Do góry--}}</button>
    @if(!isset($strona_glowna))
    <button onclick="window.location='{{route("StronaGlowna")}}'" id="stronaGlIdzDo" title="Strona główna" data-mdb-ripple-init data-mdb-ripple-color="white"><i class="fas fa-house  fa-2x"></i>{{--Strona główna--}}</button>
    @endif

</div>

{{--Koniec zawartości głownej--}}

<footer class="tlo-nav text-white mt-5"{{-- style="font-size: small"--}}>

    <div class="" >



        <div class="container pt-2">
            <div class="row ">
                <div class="col-lg-2 col-md-6 col-sm-12">

                    <div class="mt-3">
                        <a href="https://twitter.com/@BobolaInfo" target="_blank"><i class="fa-brands fa-x-twitter fa-lg text-white"></i></a>
                        <a href="https://www.facebook.com/AndrzejaBobolaInfo/" target="_blank" class="ms-2"><i class="fab fa-facebook fa-lg text-white"></i></a>
                        <a href="https://www.youtube.com/@AndrzejBobolaInfo"  target="_blank" class="ms-2" ><i class="fa-brands fa-youtube fa-lg text-white"></i></a>
                       </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ">

                    <ul class="list-unstyled">
                        <li><i class="fas fa-pen-to-square"></i> <a href="{{route('kontakt')}}" class="text-white">Formularz kontaktowy</a></li>
                        <li><i class="far fa-envelope"></i>

                            <span >&#112;&#111;&#099;&#122;&#116;&#097;&#064;&#065;&#110;&#100;&#114;&#122;&#101;&#106;&#066;&#111;&#098;&#111;&#108;&#097;&#046;&#105;&#110;&#102;&#111;</span></li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">

                    <ul class="list-unstyled">

                        <li><i class="fas fa-sitemap fa-lg"></i>  <a href="{{route('mapaStrony')}}" class="text-white">Mapa strony</a></li>
                        <li><i class="fas fa-book fa-lg"></i>  <a href="{{route('naszaKsiazka')}}" class="text-white">&nbsp;Książka "Boży wojownik"</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="text-center p-2 fs-6" style="background-color: rgba(0, 0, 0, 0.2);"> &copy; 2024 AndrzejBobola.info </div>
</footer>
</body>
<script src="{{ URL::asset('/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{ URL::asset('/js/mdb/mdb.umd.min.js')}}"></script>
<script src="{{ URL::asset('/js/scriptsWspolne.js')}}"></script>


</html>
