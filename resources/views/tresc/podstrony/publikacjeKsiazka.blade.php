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
            <li class="breadcrumb-item active" aria-current="page">Publikacje o książce</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}

    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-3">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Publikacje o książce "Boży wojownik":</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}

    <div class="mb-3 fw-bolder">Książka została uhonorowana wyróżnieniem, w kategorii „Duchowość”, przez Stowarzyszenie
        Wydawnictw Katolickich w 2023 r.</div>

<p><i class="fab fa-youtube fa-lg"></i> Filmy:</p>

    <div class="akapit mb-4">CZY ŚW. ANDRZEJ BOBOLA WYPEŁNIŁ OBIETNICĘ? Wizja o. Alojzego Korzeniewskiego z Wilna?
        Podcast Wydawnictwa Esprit:</div>

    <div class="row">
        <div class="col-lg-2 col-md-0"></div>
        <div class="col-lg-8 col-md-12 mb-4 ">
            <div class="ratio ratio-16x9">
                <iframe
                    src="https://www.youtube.com/embed/xf3s0Wv_kwY?si=4EWsrxTRvx7MXzXM"
                    title=""
                    allowfullscreen
                ></iframe>
            </div>
        </div>
        <div class="col-lg-2 col-md-0"></div>

    </div>




    {{--<div><iframe width="560" height="315" src="https://www.youtube.com/embed/xf3s0Wv_kwY?si=4EWsrxTRvx7MXzXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
--}}
    <div class="akapit mb-4">BOBOLA - ŚWIĘTY AWANTURNIK, KTÓRY CZYNI WIELKIE CUDA (Wydawnictwo Esprit):</div>
    <div class="row">
        <div class="col-lg-2 col-md-0"></div>
        <div class="col-lg-8 col-md-12 mb-4 ">
            <div class="ratio ratio-16x9">
                <iframe
                    src="https://www.youtube.com/embed/gXXzGTFlWoI?si=BxLflZ2tHpdk2tya"
                    title=""
                    allowfullscreen
                ></iframe>
            </div>
        </div>
        <div class="col-lg-2 col-md-0"></div>
    </div>
    {{--<div><iframe width="560" height="315" src="https://www.youtube.com/embed/gXXzGTFlWoI?si=BxLflZ2tHpdk2tya" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
--}}
    <div class="akapit mb-4">Andrzej Bobola pojawia się, by nas ratować! Rozmowa w studiu PCh24TV - Polonia Christiana:</div>
    <div class="row">
        <div class="col-lg-2 col-md-0"></div>
        <div class="col-lg-8 col-md-12 mb-4 ">
        <div class="ratio ratio-16x9">
            <iframe
                src="https://www.youtube.com/embed/AeZUFPM4qq8?si=ddFKRjvPU4MWGkNl"
                title=""
                allowfullscreen
            ></iframe>
        </div>
    </div>
        <div class="col-lg-2 col-md-0"></div>
    </div>
    {{--<div><iframe width="560" height="315" src="https://www.youtube.com/embed/AeZUFPM4qq8?si=ddFKRjvPU4MWGkNl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
--}}

    <p class="mt-4"><i class="fas fa-tower-broadcast fa-lg"></i> Radio:</p>
    <div><a class="color-glowny" href="https://trojka.polskieradio.pl/artykul/3081657,swiety-andrzej-bobola-operacz-wslawil-sie-w-nawracaniu-prawoslawnych-na-katolicyzm" target="_blank">Wsławił się w nawracaniu prawosławnych na katolicyzm (Polskie Radio, 2022-12-04)</a></div>



    <div><a class="color-glowny" href="https://radiowarszawa.com.pl/caly-czas-pracowal-nad-swoim-charakterem/" target="_blank">„Cały czas pracował nad swoim charakterem” (wypowiedź dla Radia Warszawa 9 grudnia 2022)</a></div>
    <div></div>

    <p class="mt-4"><i class="fas fa-pen-nib fa-lg"></i>Artykuły:</p>

    <div><a class="color-glowny" href="https://warszawa.gosc.pl/doc/7942211.Zwykle-zycie-jezuity-Andrzeja-Boboli-Ksiazki-dla-czytelnikow" target="_blank">Zwykłe życie jezuity Andrzeja Boboli? ("Gość Niedzielny", 15 listopada 2022)</a></div>
    <div><a class="color-glowny" href="https://www.ekai.pl/czy-sw-andrzej-bobola-napisal-sluby-lwowskie/" target="_blank">Czy św. Andrzej Bobola napisał Śluby Lwowskie? (Ekai.pl, 16 listopada 2022)</a></div>
    <div><a class="color-glowny" href="https://wpolityce.pl/tygodniksieci/627604-andrzej-bobola-na-pokladzie-tupolewa" target="_blank">Andrzej Bobola na pokładzie tupolewa. „Boży wojownik. Opowieść o św. Andrzeju Boboli” (Tygodnik Sieci 52/2022-1/2023)</a></div>
    <div><a class="color-glowny" href="https://www.ekai.pl/cud-nad-wisla-i-modlitwa-za-wstawiennictwem-sw-andrzeja-boboli-zapomniany-epizod-z-1920-r/" target="_blank">Cud nad Wisłą i modlitwa za wstawiennictwem św. Andrzeja Boboli. Zapomniany epizod z 1920 r. (Ekai.pl, 11 sierpnia 2023)</a></div>


    <div><a class="color-glowny" href="https://stacja7.pl/swieci/bozy-wojownik-sw-andrzej-bobola-najbardziej-zadziwiajacy-patron-polski/" target="_blank">Boży wojownik – św. Andrzej Bobola. Najbardziej zadziwiający patron Polski (stacja7.pl)</a></div>
    <div><a class="color-glowny" href="https://www.niedziela.pl/artykul/163629/nd/Swiety-na-celowniku" target="_blank">"Święty na celowniku" ("Tygodnik Niedziela", 5/2023)</a></div>
    <div><a class="color-glowny" href="https://www.przewodnik-katolicki.pl/Archiwum/2022/Przewodnik-Katolicki-50-2022/drogami-Kosciola/Paradoksy-Andrzeja-Boboli" target="_blank">"Paradoksy Andrzeja Boboli" ("Przewodnik katolicki", 50/2022 - fragment książki)</a></div>
    <div><a class="color-glowny" href="https://www.niedziela.pl/artykul/86946/Andrzej-Bobola-uprosil-mi-uzdrowienie" target="_blank">Andrzej Bobola uprosił mi uzdrowienie ("Bliżej Życia" nr 14)</a></div>
    <div><a class="color-glowny" href="https://christianitas.org/news/hagiografia-zawsze-na-czasie/" target="_blank">Hagiografia zawsze na czasie (Kwartalnik "Christianitas)"</a></div>
    <div><a class="color-glowny" href="https://www.exlibrismarty.pl/2023/03/bozy-wojownik-czyli-reportazowa.html" target="_blank">Boży wojownik, czyli reportażowa biografia św. Andrzeja Boboli (Ex libris Marty)</a></div>
    <div><a class="color-glowny" href="https://moj.powiat.pl/bozy-wojownik-sw-andrzej-bobola-najbardziej-zadziwiajacy-patron-polski-2417590.html" target="_blank">Boży wojownik – św. Andrzej Bobola. Najbardziej zadziwiający patron Polski (Mój powiat)</a></div>


@endsection
