@extends('szablon')
@section('title', 'Życie i kult św. Andrzeja Boboli')
@section('description', 'Życie, męczeństwo i kult św. Andrzeja Boboli')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, kult świętych, hagiografia, żywoty świętych, biografia, męczeństwo, kult męczenników,')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Życie i kult św. Andrzeja Boboli')
@section('og_description', 'Życie, męczeństwo i kult św. Andrzeja Boboli')
{{-- Koniec social udostępnanie--}}
@section('tresc')


    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Życie i kult św. Andrzeja Boboli</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5 mb-3">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Życie, męczeństwo i kult św. Andrzeja Boboli</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}

    <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 col-12">

        <a href="#Pochodzenie" class="text-decoration-none color-glowny">Pochodzenie</a></br>
        <a href="#Formacja" class="text-decoration-none color-glowny">Formacja zakonna</a></br>
        <a href="#Posluga" class="text-decoration-none color-glowny">Posługa kapłańska</a></br>
        <a href="#Misje" class="text-decoration-none color-glowny">Misje na Polesiu</a></br>
        <a href="#Sylwetka" class="text-decoration-none color-glowny">Sylwetka i charakter</a></br>
        <a href="#Meczenstwo" class="text-decoration-none color-glowny">Męczeństwo</a></br>
        <a href="#Meczennik" class="text-decoration-none color-glowny">Męczennik przypomina o sobie po latach</a></br>
       <a href="#Prorok" class="text-decoration-none color-glowny">Prorok niepodległości</a></br>
        <a href="#Cud" class="text-decoration-none color-glowny">„Cud nad Wisłą”</a></br>
        <a href="#Relikwie" class="text-decoration-none color-glowny">Relikwie na wystawie w Moskwie</a></br>
        <a href="#Kanonizacja" class="text-decoration-none color-glowny">Kanonizacja i powrót do Ojczyzny</a></br>
        <a href="#Niezwyciezony" class="text-decoration-none color-glowny">Niezwyciężony bohater</a></br>
        <a href="#Patron" class="text-decoration-none color-glowny">Patron</a></br>



        <h2 class="srodtytul mt-5"><a name="Pochodzenie"></a>Pochodzenie</h2>


        <p class="akapit">Święty Andrzej Bobola, wedle wszelkiego prawdopodobieństwa, przyszedł na świat w Strachocinie niedaleko Sanoka na Podkarpaciu, 30 listopada 1591 roku. Pochodził ze średniozamożnej szlachty herbu Leliwa, zasłużonej dla Kościoła i zakonu jezuitów, który w tamtym czasie stanowił w Polsce główny filar kontrreformacji. Ród jego pozostawał wierny Kościołowi. Źródła podają, że żaden z członków rodu nie przeszedł na protestantyzm. </p>
        <p class="akapit">Skończył jezuickie kolegium w Brunsberdze (Braniewie). Tu nauczył się łaciny, zdobył sztukę wymowy i biegłą znajomość języka greckiego, co np. ułatwiło mu później czytanie dzieł greckich ojców Kościoła w oryginale oraz dyskusje z prawosławnymi duchownymi.</p>

        <h2 class="srodtytul"><a name="Formacja"></a>Formacja zakonna</h2>
        <p class="akapit">Po ukończeniu szkoły wstąpił do nowicjatu Towarzystwa Jezusowego (jezuitów) w Wilnie 31 lipca 1611 r. Po ukończeniu nowicjatu, który trwał dwa lata, złożył w 1613 r. pierwsze  śluby zakonne: czystości, ubóstwa i posłuszeństwa. W latach 1613-1616 studiował filozofię na Akademii Wileńskiej. Studia skończył z wynikiem dobrym. Ówczesnym zwyczajem jako kleryk został przeznaczony do pracy pedagogicznej w jednym z kolegiów. Po dwóch latach nauczania młodzieży (1616-1618), najpierw w Brunsberdze (Braniewie), a potem w Pułtusku, wrócił na Akademię Wileńską na dalsze studia teologiczne (1618-1622). Po ich ukończeniu 12 marca 1622 r. otrzymał święcenia kapłański. Warto zaznaczyć, że tego samego dnia w Rzymie miała miejsce kanonizacja św. Ignacego Loyoli – założyciela zakonu jezuitów. Niestety, nie zdał najważniejszego egzaminu z całości teologii, co przekreślało jego szanse na skierowanie go do szkoły jako nauczyciela, pracy naukowej lub pisarskiej lub innego „prestiżowego” duszpasterstwa. </p>
        <p class="akapit">Rok później skierowany został na tak zwaną trzecią probację (ostatni etap formacji zakonnej przed podjęciem pracy duszpasterskiej) w Nieświeżu. Podczas tego roku pogłębiał zarówno swoją znajomość konstytucji Towarzystwa, jak i osobisty kontakt z Bogiem przez Ćwiczenia duchowe św. Ignacego.</p>

        <h2 class="srodtytul"><a name="Posluga"></a>Posługa kapłańska</h2>
        <p class="akapit">W Nieświeżu, po probacji, spędził także pierwszy rok swojej pracy apostolskiej (1623-1624). Był rektorem kościoła, kaznodzieją, spowiednikiem, misjonarzem ludowym i prefektem bursy dla ubogiej młodzieży.</p>
        <p class="akapit">Okazał się doskonałym administratorem oraz jeszcze lepszym duszpasterzem. Jako misjonarz Andrzej obchodził zaniedbane wioski, chrzcił, łączył sakramentem pary małżeńskie (statystyki zakonne podają, że sakramentalnym związkiem połączył 49 par żyjących przedtem bez ślubu), wielu grzeszników skłonił do spowiedzi, nawracał również prawosławnych.</p>
        <p class="akapit">Wcześnie musiał zyskać sławę jako głosiciel słowa Bożego, skoro starał się o niego, właśnie jako o wybitnego kaznodzieję, przełożony dom jezuitów w Warszawie. Prowincjał posłał jednak Bobolę do Wilna, do pracy w kościele św. Kazimierza. Tam w latach 1624-1630 Andrzej kierował Sodalicją Mariańską mieszczan i prowadził konferencje z Pisma Świętego i dogmatyki. Wreszcie został mianowany rektorem kościoła. Gdy w czerwcu 1625 r. nawiedziła Wilno epidemia, nie zważając na niebezpieczeństwo zarażenia się, pospieszył wraz z innymi współbraćmi z posługą chorym. Podczas trwania zarazy śmierć poniosło sześciu jezuitów.</p>
        <p class="akapit">W roku 1627 pojawiła się kwestia publicznych i uroczystych ślubów Andrzeja, które ostatecznie włączyłyby go do zakonu. Informacje zgromadzone przez przełożonych przed podjęciem decyzji o dopuszczeniu do ślubów zgodnie podkreślały bystry umysł kandydata, dobre wykształcenie, trzeźwość osądu, zdolności kaznodziejskie oraz wielki i dobroczynny wpływ, jaki wywierał on na ludzi. Zarzucano mu jednak upieranie się przy własnym zdaniu oraz wybuchowość. Ostatecznie został dopuszczony do profesji czterech ślubów, które złożył 2 czerwca 1630 r., w kościele św. Kazimierza w Wilnie.</p>
        <p class="akapit">Po profesji odczuł na sobie jedną z cech jezuickiego charyzmatu: częste przenoszenie z miejsca na miejsce. Najpierw trafił do nowo założonego domu zakonnego w Bobrujsku (1630-1633) - niewielkim miasteczku zamieszkałym przede wszystkim przez prawosławnych. Pisząc opinię o o. Boboli w tym okresie, prowincjał o. Mikołaj Łęczycki podkreślił jego zdrowy rozsądek, dobre wykształcenie, łatwość obcowania z ludźmi oraz wywieranie dodatniego wpływu na otoczenie.</p>
        <p class="akapit">Następnie Andrzej przebywał w Płocku w charakterze moderatora Sodalicji Mariańskiej wśród młodzieży tamtejszego kolegium (1633-1635). Od połowy roku 1636 był kaznodzieją w Warszawie (1636-1637). Po roku znowu wrócił do Płocka (1637-1638). Pracował tam jako kaznodzieja i dyrektor studiów młodzieży. Szkoła, którą kierował, była niewielka – liczyła zaledwie czterech nauczycieli. Zanotowano jednak w czasie jego pobytu w Płocku ożywienie kultu św. Stanisława Kostki, do czego przyczynił się prawdopodobnie Andrzej swoimi kazaniami.</p>
        <p class="akapit">W latach 1638-1642 o. Bobola pełnił w Łomży urząd kaznodziei i dyrektora w szkole kolegiackiej. W latach 1642-1643 ponownie w Wilnie pełnił funkcję moderatora Sodalicji Mariańskiej i kaznodziei. Podobne obowiązki spełniał w Pińsku (1643-1646). W tym czasie wielu prawosławnych przychodziło do kościoła jezuickiego, aby posłuchać kazań lub nauki katechizmu. To prowadziło do licznych nawróceń.</p>
        <p class="akapit">Potem ponownie był w Wilnie (1646-1652). Tym razem przyczyną przeniesienia było pogorszenie się jego zdrowia (Wilno miało klimat lepszy niż bagniste Polesie). W kościele św. Kazimierza, wrócił do poprzednio pełnionych obowiązków i pracował tam przez sześć lat.</p>

        <h2 class="srodtytul"><a name="Misje"></a>Misje na Polesiu</h2>
        <p class="akapit">Od roku 1652 pełnił w Pińsku urząd kaznodziei w kościele św. Stanisława. W tym czasie oddawał się pracy misyjnej nad ludem w okolicach Pińska.</p>
        <p class="akapit">Zadanie, jakie postawili przed nim przełożeni, nie było łatwe. Prowadzenie misji utrudniały zarówno okoliczności zewnętrzne, jak i atmosfera duchowa. Brak dróg, trudny dostęp do ludzi izolowanych od świata, żyjących wśród bagien, sprawił, iż stan religijno-moralny Poleszuków był opłakany. Hołdowali oni przeróżnym zabobonom. W niedzielę jeździli wprawdzie tłumnie do większych miejscowości, ale w kościele lub cerkwi zjawiali się tylko na błogosławieństwo przed końcem Mszy św., a resztę czasu spędzali w karczmie.</p>
        <p class="akapit">Andrzej wraz ze swymi towarzyszami chodził po wioskach od domu do domu i nauczał. Pod wpływem jego kazań wielu prawosławnych przeszło na katolicyzm. Jego gorliwość, z powodu której dostał przydomek „duszochwat”, czyli „łowca dusz”, wzbudziła wrogość prawosławnych. W czasie wojen kozackich przerodziła się w nienawiść i miała tragiczny finał.</p>
        <p class="akapit">Początkowo w wioskach Pińszczyzny przyjmowano misjonarzy jezuickich bardzo niechętnie. Później jednak chłopi gromadzili się licznie na naukach głoszonych w wiejskich chatach. Praca duszpasterska była niejednokrotnie dla Boboli okazją do polemiki z duchownymi prawosławnymi z każdej dysputy wychodził zwycięsko. Do największych jego osiągnięć należy nawrócenie na katolicyzm dwóch wsi: Bałandycze i Udrożyn.</p>

        <h2 class="srodtytul"><a name="Sylwetka"></a>Sylwetka i charakter</h2>

        <p class="akapit">Nie zachowały się niemal żadne zapiski Andrzeja Boboli poza zdawkowymi notatkami w zakonnych księgach i jednym niezbyt istotnym listem. Wiemy jednak o nim całkiem sporo dzięki aktom Towarzystwa Jezusowego, w których przechowywane są do dzisiaj jego charakterystyki pisane przez przełożonych. Wynika z nich, że Bobola był gorliwym i świątobliwym zakonnikiem, choć przez wiele lat musiał walczyć z trudnym charakterem. Miał choleryczny temperament. Bywał wybuchowy, niecierpliwy i uparty. W pewnym momencie nawet jeden z przełożonych zanotował, że Bobola nie powinien pełnić funkcji przełożonego, dopóki nie wykorzeni tych wad. Wszyscy, którzy sporządzali te opisy, notowali jednak, że Andrzej zacięcie walczy ze swoimi ograniczeniami i odnosi na tym polu sukcesy. Pod koniec życia pisano o nim w samych superlatywach – że przyciąga ludzi miłym usposobieniem, a szczególnie celuje w pracy z młodzieżą, że potrafi się porozumieć z ludźmi różnych stanów: chłopami, mieszczanami, szlachtą i magnatami; i że ma talent kaznodziejski. </p>
        <p class="akapit">Wiemy nawet, jak wyglądał. Podczas procesu beatyfikacyjnego opisał go m.in. jeden ze współbraci, który w młodości dobrze poznał sześćdziesięcioletniego wówczas o. Bobolę. Na podstawie tych wspomnień oraz wyglądu zwłok, które po upływie kilkudziesięciu lat po śmierci wyglądały tak, jakby zgon nastąpił poprzedniego dnia, powstały pierwsze wizerunki męczennika. Najwyraźniej na ich podstawie powstawały kolejne obrazy. Święty Andrzej był mężczyzną średniego albo nawet niskiego wzrostu, o zwartej i muskularnej budowie ciała. Twarz miał okrągłą, a policzki „okraszone rumieńcem”. Miał jasne włosy, przez które z upływem lat zaczęła prześwitywać łysina. Pod koniec życia nosił dość długą, „nisko strzyżoną” brodę.</p>

        <h2 class="srodtytul"><a name="Meczenstwo"></a>Męczeństwo</h2>
        <p class="akapit">W roku 1657 Pińsk był w rękach polskich i jezuici mogli wrócić tam do normalnej pracy. Ale jeszcze w tym samym roku Kozacy ponownie najechali Polskę. W maju roku 1657 Pińsk zajął oddział kozacki pod dowództwem Jana Lichego. Najbardziej zagrożeni jezuici: Maffon i Bobola opuścili miasto. Musieli kryć się po okolicznych wioskach. 15 maja o. Maffon został ujęty w Horodcu przez oddział Zielenieckiego i Popeńki i na miejscu poniósł śmierć męczeńską.</p>
        <p class="akapit">Andrzej Bobola schronił się do Janowa, odległego od Pińska o około 30 kilometrów. Stamtąd udał się do wsi Peredił. 16 maja do Janowa wpadł oddział kozacki i zaczął mordować Polaków i Żydów. Kozacy wypytywali, gdzie jest „duszochwat” Bobola. Andrzej Bobola na prośbę mieszkańców wsi, którzy dowiedzieli się, że jest poszukiwany, chciał uciekać na chłopskim wozie. Niedaleko jednak dojechał, zanim dopadli go Kozacy.</p>
        <p class="akapit">Z Andrzeja zdarto suknię kapłańską, na pół obnażonego zaprowadzono do płotu płot, przywiązano go i zaczęto bić nahajami. Kozacy namawiali go do porzucenia Kościoła, a kiedy odmawiał, zadawali mu kolejne straszliwe katusze. Kongregacja do spraw Świętych Obrzędów, która zapoznała się z historią Andrzeja w ramach przygotowań do procesu beatyfikacyjnego, zapisała w 1739 roku, że nigdy jeszcze nie rozpatrywała tak okrutnego męczeństwa.</p>
        <p class="akapit">Potem zaczęto go policzkować, aż wybito mu zęby. Wyrywano mu paznokcie i zdarto skórę z górnej części ręki. Następnie przywiązanego do siodeł Kozacy pognali go do Janowa Poleskiego. Tam kozacki dowódca zapytał: „Jesteś ty ksiądz?”. „Tak – padła odpowiedź. - Moja wiara prowadzi do zbawienia. Nawróćcie się”. Na te słowa dowódca zamierzył się szablą i byłby zabił Andrzeja, gdyby ten nie zasłonił się ręką.</p>
        <p class="akapit">Kapłana zawleczono do tamtejszej rzeźni, rozłożono go na stole i zaczęto przypalać ogniem. Na głowie wycięto mu skórę w miejscu tonsury, na plecach wycięto mu skórę w formie ornatu. Rany posypywano sieczką. Odcięto mu nos, wargi, wykłuto mu jedno oko. Kiedy z bólu wzywał stale imienia Jezus, w karku zrobiono otwór i odcięto mu język u nasady. Potem powieszono go nogami do góry, a kiedy ciało drgało w konwulsjach, Kozacy naigrawali się, że „Lach tańczy”. Uderzeniem szabli w głowę dowódca zakończył nieludzkie męczarnie Andrzeja Boboli 16 maja 1657. Było to około godziny 15.</p>
        <p class="akapit">Na wieść o nadciagających wojskach polskich Kozacy wycofali się z miasta. Ciało męczennika przeniesiono do miejscowego kościoła. Następnie jezuici przenieśli je do Pińska i pochowali w podziemiach swojego kościoła. Zwłoki były tak strasznie zmasakrowane, że nie pozwolono ich oglądać klerykom i uczniom kolegium. Wkrótce pamięć o męczenniku zaginęła. On sam jednak nie pozwolił, aby trwało to zbyt długo.</p>


        <h2 class="srodtytul"><a name="Meczennik"></a>Męczennik przypomina o sobie po latach</h2>

        <p class="akapit">16 kwietnia 1702 roku Andrzej Bobola ukazał się jezuicie, rektorowi kolegium w Pińsku o. Marcinowi Godebskiemu. Powiedział mu, że otoczy opieką kolegium i miasto, zagrożone przez wojska walczące ze sobą podczas Wojny Północnej, pod warunkiem, że trumna z jego ciałem zostanie odnaleziona i wyeksponowana. Wskazał również, gdzie znajduje się jego grób. Ciało znaleziono doskonale zachowane, bez śladów rozkładu, mimo że spoczywało w wilgotnej ziemi.</p>
        <p class="akapit">Miasto i majątek zakonny zostały w niezwykły sposób ochronione, a wkrótce do grobu męczennika zaczęły przybywać tłumy. Notowano setki uzdrowień i innych łask. Mieszkańcy Pińszczyzny modlili się za wstawiennictwem Andrzeja Boboli, zwłaszcza podczas zarazy w latach 1709 1710. Wtedy okolica była wolna od epidemii, przez co Bobola został uznany za szczególnego orędownika w czasie zarazy. Od roku 1712 podjęto starania o beatyfikację. W 1755 r. papież Benedykt XVI zaliczył jezuitę w poczet męczenników Kościoła.</p>
        <p class="akapit">Niestety, kasata Towarzystwa Jezusowego i wojny, a potem rozbiory, przerwały te starania. Kościół pojezuicki w Pińsku trafił w ręce prawosławnych. Wywieziono zatem trumnę z ciałem Andrzeja Boboli z Pińska do Połocka, bo istniało ryzyko, że prawosławni zakopią je gdzieś w ukryciu. </p>

        <h2 class="srodtytul"><a name="Prorok"></a>Prorok niepodległości</h2>
        <p class="akapit">W 1819 r. miała miejsce kolejna interwencja z nieba – o. Bobola ukazał się dominikaninowi o. Alojzemu Korzeniewskiemu w Wilnie i zapowiedział mu, że Polska odzyska wolność po wielkiej wojnie, a on zostanie ogłoszony jej patronem. Pamięć o Boboli, wówczas przygasła, znowu się odrodziła i od tej pory była często wiązana z losami Polski. Andrzeja Bobolę beatyfikował, pomimo sprzeciwu carskiej dyplomacji, papież Pius IX 30 października 1853 roku w Rzymie.</p>

        <h2 class="srodtytul"><a name="Cud"></a>„Cud nad Wisłą”</h2>
        <p class="akapit">Gdy w 1920 r. do Warszawy zbliżały się wojska bolszewickie, uznano, że ten, który zapowiedział wskrzeszanie Polski, może przyczynić się do uchronienia ojczyzny od nowego niebezpieczeństwa. Z Krakowa sprawdzono cząstkę relikwii Andrzeja Boboli. Setki tysięcy mieszkańców stolicy modliły się  za jego wstawiennictwem o ratunek. W kazaniu kard. Aleksander Kakowski nazwał Andrzeja Bobolę „bohaterem wschodniego frontu”. Potem jego orędownictwu przypisywano ocalenie Polski.</p>
        <p class="akapit">Ówczesny nuncjusz Achille Ratti, później papież Pius XI, wspominał po latach, że Józef Piłsudski rozważał nawet zbrojny rajd na zajęty przez bolszewików Połock, żeby odzyskać znajdującą się tam trumnę z ciałem Boboli.</p>

        <h2 class="srodtytul"><a name="Relikwie"></a>Relikwie na wystawie w Moskwie</h2>
        <p class="akapit">W 1922 r. bolszewicy, chcąc udowodnić „obywatelom katolickim” fałszywość ich wiary, dopuścili się profanacji relikwii. Wyrzucili ciało z trumny na posadzkę kościoła, przekonani, że rozpadnie się ono w pył. Nic takiego jednak się nie stało, a napaść wywołała oburzenie. Wywieźli więc trumnę z ciałem Boboli do Moskwy i umieścili na wystawie higienicznej w Ludowym Komisariacie Zdrowia, gdzie zwłoki miały być eksponatem ilustrującym religijny fanatyzm. Pracownicy muzeum zauważyli jednak, że zwiedzający modlą się przy relikwiach, więc schowali je magazynu.</p>
        <p class="akapit">Zgodę na wywiezienie trumny z doczesnymi szczątkami Andrzeja Boboli udało się wynegocjować w 1923 r. dwóm amerykańskim jezuitom, którzy zostali wysłani przez papieża Piusa XI do Moskwy z misją ratunkową dla głodującej ludności Rosji. Bolszewicy zgodzili się oddać relikwie, gdyż w tamtym czasie zabiegali o międzynarodowe uznanie swej władzy i chcieli, aby Stolica Apostolska nie była wroga tym staraniom.</p>
        <p class="akapit">Komuniści postawili warunek, że relikwie nie trafią do Polski, więc zostały one wywiezione do Rzymu – przez Odessę, Konstantynopol, Ateny i Brindisi. Przybyły one do Polski dopiero po kanonizacji Andrzeja Boboli w 1938 r.</p>

        <h2 class="srodtytul"><a name="Kanonizacja"></a>Kanonizacja i powrót do Ojczyzny</h2>
        <p class="akapit">17 kwietnia 1938 roku, w uroczystość Zmartwychwstania Pańskiego, Pius XI dokonał kanonizacji bł. Andrzeja. Na wydarzenie to do Rzymu przybyło kilkadziesiąt tysięcy Polaków. Wielu z nich przyjechało z Polski specjalnymi pociągami. </p>
        <p class="akapit">W czerwcu roku 1938 relikwie św. Andrzeja zostały uroczyście przewiezione do kraju. Przejazd relikwii specjalnym pociągiem przez Lublianę i Budapeszt, a następnie przez wiele polskich miast (w tym Kraków, Katowice, Poznań, Łódź aż do Warszawy), był wielkim wydarzeniem. W każdym mieście na trasie organizowano uroczystości ku czci świętego męczennika. W Warszawie podczas uroczystości, na Placu Zamkowym prezydent Ignacy Mościcki złożył na trumnie Andrzeja Boboli jako wotum swój Krzyż Niepodległości. Na koniec kilkudniowych uroczystości w Warszawie relikwie w srebrno-kryształowej trumnie-relikwiarzu spoczęły w kaplicy jezuitów przy ul. Rakowieckiej.</p>
        <p class="akapit">We wrześniu 1939 r. zostały przeniesione do kościoła jezuitów na Starym Mieście w Warszawie. W czasie Powstania Warszawskiego trumnę przeniesiono do dominikańskiego kościoła św. Jacka. W lutym 1945 wróciła ona do kaplicy jezuitów przy ul. Rakowieckiej. Tam do dziś szczątki doznają czci w wybudowanym w 1989 r. kościele św. Andrzeja Boboli, podniesionym do rangi sanktuarium narodowego. </p>

        <h2 class="srodtytul"><a name="Niezwyciezony"></a>Niezwyciężony bohater</h2>
        <p class="akapit">Po wojnie pamięć o Boboli niemal zaginęła. Stało się to na skutek celowych zabiegów komunistów, którzy dobrze pamiętali nastroje z 1920 r., ale także uznali Andrzeja za świętego kresowego i związanego z grekokatolikami. Nie można było nawet wydrukować jego obrazków ani wspominać o nim w mediach – nawet w negatywnym kontekście.</p>
        <p class="akapit">Gdy w 1957 roku papież Pius XII ogłosił poświęconą Boboli encyklikę, zaczynającą się od słów „Invicti athletae Christi, Andreae Bobolae, martyrium vitaeque sanctitatem…” („Niezwyciężonego bohatera, Andrzeja Boboli, męczeństwo i świętość życia…”), dokument przeszedł niemal bez echa i do dzisiaj jest bardzo mało znany, nawet wśród ludzi Kościoła.</p>

        <h2 class="srodtytul"><a name="Patron"></a>Patron</h2>



        <p class="akapit">U schyłku PRL zaczęły się znowu ukazywać książki i artykuły o św. Andrzeju, a jego kult ożył. Przyczyniło się do tego kolejne nadzwyczajne zdarzenie – począwszy od 1982 r. męczennik ukazywał się przez cztery lata ks. Józefowi Niżnikowi w miejscu swojego urodzenia, w Strachocinie. Kiedy ksiądz wreszcie odważył się zapytać „zjawę”, czego chce, usłyszał: „Jestem św. Andrzej Bobola. Zacznijcie mnie czcić w Strachocinie”. Dzięki staraniom ks. Niżnika powstał tam prężny ośrodek kultu poleskiego męczennika.</p>
        <p class="akapit">W kwietniu 2002 r. watykańska Kongregacja Kultu Bożego i Dyscypliny Sakramentów, przychylając się do prośby prymasa Polski kard. Józefa Glempa, ogłosiła św. Andrzeja Bobolę drugorzędnym patronem Polski.</p>



    </div>
    <div class="col-lg-2"></div>
    </div>
@endsection
