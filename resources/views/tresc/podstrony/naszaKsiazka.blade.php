@extends('szablon')
@section('title', 'Książka "Boży wojownik. Opowieść o św. Andrzeju Boboli"')
@section('description', 'Informacje o książce Joanny Operacz i Włodzimierza Operacz "Boży wojownik. Opowieść o św. Andrzeju Boboli". Fragmenty ksiażki oraz wykaz księgarnii internetowych, gdzie można ją kupić')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, Książka "Boży wojownik. Opowieść o św. Andrzeju Boboli", Joanna Operacz, Włodzimierz Operacz, żywoty świętych, hagiografia, książka religijna')
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
            <li class="breadcrumb-item active" aria-current="page">"Boży wojownik. Opowieść o św. Andrzeju Boboli"</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Książka "Boży wojownik. Opowieść o św. Andrzeju Boboli"</h1>

        </div>
    </div>
    <hr class="hr" />
    {{--Koniec h1 na podstonie--}}




    <div class="d-flex justify-content-center mt-3">
        <div class="card mb-3 text-bg-light" >
            <div class="row g-0">
                <div class="col-md-4 lightbox" data-mdb-lightbox-init data-mdb-zoom-level="0.25">
                    <img
                            src="{{ URL::asset('/stat/okladka-ksiazki-bozy-wojownik.webp')}}"
                            alt="Okładka książki 'Boży wojownik. Opowieść o św. Andrzeju Boboli' "
                            class="img-fluid rounded w-100 shadow-1-strong rounded"
                            data-mdb-img="{{ URL::asset('/stat/BozyWojownik.webp')}}"

                        />

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">
                            <small class="text-muted">Joanna Operacz, Włodzimierz Operacz</small>
                        </p>
                        <h5 class="card-title color-glowny">"Boży wojownik. Opowieść o św. Andrzeju Boboli"</h5>
                        {{--<p class="card-text fst-italic">
                            (...) Już miał położyć się do łóżka, gdy zjawiła się przed nim
                            postać w jezuickim stroju. Gość powiedział, że jest Andrzejem
                            Bobolą i kazał zakonnikowi otworzyć okno.
                            (...)
                        </p>--}}
                        <p class="mb-2">
                        <small class="text-muted ">Wydawnictwo Esprit 2022</small></p>
                        <p class="mb-2"><small class="text-muted ">ISBN: 978-83-67291-97-2</small></p>
                        <p class="mb-2"><small class="text-muted ">Format: 130x200 mm</small></p>
                        <p class="mb-2"><small class="text-muted ">Stron: 248</small></p>
                        <p class="mb-2"><small class="text-muted ">Data wydania: 2022-11-15</small></p>



                        <p class="text-center mt-4">
                            <a href="{{route('fragmentKsiazki')}}" class="btn btn-primary mb-3" data-mdb-ripple-init><i class="fas fa-book"></i> Fragment książki</a>
                        </p>

                        <p class="text-center mt-4">
                            <a href="{{route('publikacjeKsiazka')}}" class="btn btn-primary mb-3" data-mdb-ripple-init><i class="far fa-keyboard"></i> Publikacje o książce</a>
                        </p>
                        <p class="text-center mt-4">
                            <a href="https://www.esprit.com.pl/894/Bozy-wojownik.html" target="_blank" class="btn btn-primary mb-3" data-mdb-ripple-init><i class="fas fa-book-open"></i> O książce na stronie wydawnictwa</a>

                        </p>
                        {{--<p class="text-center mt-4">
                        <a href="{{route('gdzieKupic')}}" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-cart-arrow-down"></i> Księgarnie internetowe gdzie można kupić książkę</a>
                        </p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>















   {{-- <div class="row mt-4">

        <div class="col-lg-2 col-md-0"></div>
        <div class="col-lg-8 col-md-12 p-4 shadow-4"><p>Fragment książki:</p>

            <p><a href="{{ URL::asset('stat/Bozy-Wojownik-Fragment-Ksiazki.pdf')}}" target="_blank"><i class="fas fa-file-pdf fa-lg"></i> Pobierz fen fragment jako plik .pdf  </a></p>


            <p class="tytul">Prorok</p>
            <p class="pod-tytul">Widzenie o. Godebskiego</p>
            <p class="akapit">W styczniu 1702 roku o. Marcin Godebski, rektor kolegium jezuitów w Pińsku, miał wielki problem. Polska  była wtedy areną wielu walk w toczącym się w latach  1700–1721 zbrojnym konflikcie między Szwecją a jej  sprzymierzonymi wrogami – Królestwem Danii i Norwegii  oraz Rosją, Saksonią i Prusami – który przeszedł  do historii jako wielka wojna północna. Rzeczpospolita  teoretycznie pozostawała neutralna wobec tego  konfliktu, ale w praktyce wiele bitew toczyło się na jej  terytorium i jej kosztem. Poza tym na wschodzie kraju  trwały zbrojne zatargi między dwiema frakcjami magnackimi  – Sapiehów i Wiśniowieckich, którzy sprzymierzali  się z różnymi najeźdźcami i pustoszyli ziemie  oponentów. W okolicach Pińska grasowało w tym czasie  kilka różnych oddziałów i o. Godebski zastanawiał  się, kogo powinien prosić o protekcję. Sprawa była delikatna,  bo ochrona jednego wojska mogła oznaczać  śmiertelne zagrożenie ze strony innego. Komu zaufać?  Kto ma większe szanse na zwycięstwo i kto może lepiej  obronić zakonników? Dużo się modlił w tej sprawie. W niedzielę 16 kwietnia po wieczornej modlitwie  położył się spać, nadal rozważając, co powinien zrobić.  Wtedy ukazał mu się jakiś zakonnik w jezuickiej sutannie.  Był uśmiechnięty i miał miłą powierzchowność  (o. Godebski zapewne uznał ten szczegół za wart przekazania,  bo zgodnie z popularnym przekonaniem dusze  potępione i czyśćcowe ukazują się żyjącym w przerażającej  postaci), a z jego twarzy biła wielka, ponadnaturalna  jasność. Gość najpierw zganił rektora za to, że  szuka ratunku nie tam, gdzie powinien, a potem obiecał,  że sam otoczy kolegium opieką. Przedstawił się  jako Andrzej Bobola, zamordowany przez Kozaków.  Postawił tylko jeden warunek – że jego ciało ma zostać  odnalezione w krypcie pod kościołem, w której pochowano  wielu zakonników, i umieszczone osobno. Po  tych słowach zniknął.
            </p>


            <p class="pod-tytul">Objawienia prywatne</p>

            <p class="akapit">Warto wspomnieć, jak Kościół traktuje takie wydarzenia jak to, którego doświadczył o.
                Marcin Godebski, bo podobne sytuacje związane ze św. Andrzejem powtarzały się później jeszcze nie raz.
                Wizja o. Godebskiego należy do objawień prywatnych, które w fundamentalny sposób różnią się od
                objawienia publicznego, zakończonego wraz ze śmiercią ostatniego apostoła. Wyłącznie objawienie
                publiczne domaga się naszej wiary. Na temat prywatnych wizji czy innych zdarzeń nadzwyczajnych każdy
                może sobie wyrobić własną opinię. Beatyfikacja czy kanonizacja osób, które doświadczyły takich zjawisk,
                także nie przesądzają o ich prawdziwości. Nie da się jednak ukryć, że w późniejszych czasach również
                zdarzały się przypadki nadzwyczajnej Bożej interwencji w życie ludzkie – cuda, wizje czy proroctwa.
                Przecież wszechmogący Bóg może wpływać na nasze życie także w sposób nadprzyrodzony. Kościół zawsze
                zachowuje wielką ostrożność wobec objawień prywatnych, ale może po wnikliwym zbadaniu stwierdzić ich
                wiarygodność, jak na przykład w przypadku wydarzeń w Lourdes czy Fatimie. Ogłasza wówczas jedynie, że
                roztropność nakazuje uznać, iż mamy do czynienia z Bożą ingerencją.</p>

            <p class="pod-tytul">Zwłoki zachowane od rozkładu</p>

            <p class="akapit">Ojciec Godebski potraktował widzenie poważnie. Wstał z łóżka, poszedł do jednego ze
                współbraci i powiedział, co mu się przydarzyło. Razem uradzili, że nazajutrz zaczną poszukiwania.
                Rankiem o niezwykłej wizycie wiedzieli już wszyscy zakonnicy, a koło południa – całe miasto. Jeden z
                nauczycieli kolegium opowiedział o zdarzeniu uczniom, zachęcając ich do modlitwy. Powiedział, że być
                może z Bożą pomocą powiat zyska w tych trudnych czasach wyjątkowego patrona w niebie. Odnalezienie
                trumny z ciałem o. Boboli okazało się jednak zaskakująco trudne. Krypta była zastawiona trumnami i ich
                bezładne przestawianie nic nie dało. Przez ostatnie czterdzieści pięć lat nastąpiło wiele roszad
                personalnych i nikt w pińskiej wspólnocie nie pamiętał już o. Andrzeja Boboli, a dokumenty kolegium
                zostały wcześniej przewiezione do archiwum w Wilnie. Można było odtworzyć informacje, ale w obliczu
                zagrożenia trzeba było działać szybko. Na szczęście zgłosił się do rektora jeden z mieszkańców miasta,
                Józef Szczerbicki, który przyniósł kartę z nazwiskami osób pochowanych w zakonnej krypcie. Powiedział,
                że około 1690 roku znalazł ją wśród śmieci wyrzuconych z jezuickiego domu i z jakiegoś powodu przechował
                aż do tego czasu. W dokumencie odnotowano pogrzeb o. Andrzeja Boboli w 1657 roku z informacją, że trumna
                z jego ciałem została umieszczona pod głównym ołtarzem. Poza tym zmarły ukazał się we śnie świeckiemu
                zakrystianowi i udzielił mu dokładnych wskazówek na temat miejsca swojego pochówku. 19 kwietnia
                odnaleziono trumnę we wskazanym miejscu. Była zapadnięta w ziemię aż po wieko, na którym znajdował się
                krzyż i napis: Pater Andreas Bobola Societatis Iesu a Cosacis occisus (Ojciec Andrzej Bobola, jezuita,
                zamordowany przez Kozaków). Kiedy otwarto trumnę, widok zdumiał wszystkich obecnych. Gdyby nie to, że
                zwłoki i szaty były pokryte grubą warstwą kurzu, można by pomyśleć, że pogrzeb odbył się poprzedniego
                dnia. Ciało było zachowane w idealnym stanie, bez oznak rozkładu i bez trupiego zapachu. Widać było
                straszne ślady tortur, a krew na ranach była czerwona, jakby świeżo skrzepła. Skóra i mięśnie były
                elastyczne i miały naturalny kolor. Oczyszczono ciało męczennika, zawinięto je w płótno, ubrano w nową
                sutannę oraz czarny ornat z adamaszku i biret i włożono do nowej trumny. Skrzynia została umieszczona na
                katafalku na środku krypty. Nierozkładanie się zwłok po śmierci to zjawisko, które niekiedy zachodzi w
                sposób naturalny, jeśli znajdą się one w specyficznych warunkach. Potrzebne są między innymi niska
                wilgotność powietrza i odpowiednia temperatura. Jednak w tym przypadku warunki były wybitnie
                niesprzyjające konserwacji – kościół i kolegium w Pińsku zostały zbudowane na podmokłym terenie, w
                pobliżu rzeki Piny, a trumna przeleżała prawie pół wieku zakopana częściowo w ziemi, wśród innych skrzyń
                z rozkładającymi się ciałami.</p>


            <p class="pod-tytul">Opiekun Pińszczyzny</p>

            <p class="akapit">Kiedy wiadomość o odnalezieniu cudownie zachowanego ciała o. Andrzeja Boboli obiegła
                okolicę, wiele starszych osób przypomniało sobie, że miało kiedyś do czynienia z tym zakonnikiem. Kryptę
                w jezuickim kościele zaczęły odwiedzać tłumy ludzi, prosząc świętego o ratunek. Pod jego opiekę oddała
                się też jezuicka wspólnota. Wkrótce męczennik wypełnił obietnicę daną o. Godebskiemu. Kiedy miasto
                zajęły trzy pułki rosyjskie, ich dowódca z własnej inicjatywy wystawił rektorowi kolegium dokument
                chroniący od postojów i rekwizycji kolegium i jego majątek, czyli należące do klasztoru wsie i folwarki.
                Później to samo zrobili jego dwaj następcy. Podobnej opieki doznało także wielu mieszkańców Pińszczyzny.
                Mówili o tym, przyjeżdżając do grobu o. Boboli i pisząc listy do jezuitów. Miejsce pochówku odwiedzało
                też wielu prawosławnych; w prawosławiu żywe jest bowiem przekonanie, że zachowanie ciała od pośmiertnego
                rozkładu to niezbity dowód świętości zmarłego. W ślad za wojenną zawieruchą, w której znaczna część
                ludności straciła dobytek i ziarno na zasiew, przyszedł głód, a po nim zaraza. Epidemia, która
                pustoszyła polskie ziemie od połowy 1709 do końca 1710 roku, pochłonęła tysiące ofiar (sama tylko
                litewska prowincja jezuitów straciła wówczas aż stu osiemnastu członków). W Pińsku i okolicach całe
                rzesze ludzi błagały o ratunek Andrzeja Bobolę. Modlitwy za przyczyną męczennika najwyraźniej zostały
                wysłuchane, bo rejon ten był wyspą zdrowia na morzu choroby. W 1710 roku wydarzyło się coś, co sprawiło,
                że o Andrzeju Boboli usłyszało również wielu magnatów, a sława jego cudów rozeszła się po kraju. Żona
                księcia Michała Serwacego Wiśniowieckiego, Katarzyna, modliła się gorąco o uwolnienie męża więzionego
                przez Rosjan w kozackiej twierdzy Głuchów nad Dnieprem. Dowiedziała się, że mieszkańcy Pińszczyzny
                przypisują męczennikowi liczne cuda, więc sama też postanowiła zwrócić się do niego o ratunek. Uprosiła
                jezuitów, żeby przenieśli jego ciało w bardziej dostępne i wyeksponowane miejsce, które obiecała
                odpowiednio przyozdobić. Zadeklarowała między innymi ofiarowanie jedwabnego okrycia na trumnę i
                własnoręcznie uszytego ornatu dla relikwii. Przeniesiono więc trumnę do dawnego składziku przy kościele.
                Księżna codziennie przychodziła na mszę, a potem długo modliła się przy szczątkach męczennika. Resztę
                czasu poświęcała na haftowanie kosztownych, wyszywanych srebrem wotów. Książę Wiśniowiecki zbiegł z
                więzienia, uchodzącego za miejsce, z którego nie da się uciec, dokładnie w dniu i godzinie, w których
                jego małżonka wysłała dwie służące do klasztoru z gotowymi ornatem i kapą. Później jeszcze kilka razy
                cudownie uniknął wpadnięcia w ręce wroga. Poza tym sama pani Katarzyna wyzdrowiała z ciężkiej choroby, o
                której oddalenie również gorąco się modliła za wstawiennictwem o. Boboli.</p>

            <p class="pod-tytul">Wskrzeszenia i uzdrowienia ciała i duszy</p>

            <p class="akapit">W tym czasie w Pińsku odbywało się akurat posiedzenie trybunału, na które zjechała
                szlachta z Litwy. Uczestnicy tego spotkania dowiedzieli się o łaskach, których udzielił Bóg
                Wiśniowieckim za wstawiennictwem jezuickiego męczennika, i zaczęli tłumnie odwiedzać jego grób.
                Niektórzy z nich także dostąpili łask, które uznali za cudowne, na przykład żona hetmana wielkiego
                litewskiego Ludwika Pocieja wyzdrowiała z poważnej choroby i zostawiła jako wotum cenny złoty pierścień
                wysadzany diamentami. Kiedy skończyły się obrady trybunału, posłowie rozwieźli po całych kresach
                wiadomość o niezwykłych zdarzeniach przy grobie Boboli. W pewnym momencie Andrzej był tak znany na
                wschodzie Rzeczpospolitej, że jeśli do jakiejś miejscowości przyjechał jezuita z Pińska, oczekiwano od
                niego obrazków Boboli, a jeśli ich akurat nie miał, spotykał się z niechęcią. Dwa wydarzenia wywołały
                szczególne poruszenie. Było to wskrzeszenie dwóch dziewczynek w 1711 roku – dziewięcioletniej Anny
                Głuszyńskiej i czteroletniej córki Macieja Grudzińskiego. Obie zostały bezsprzecznie uznane za zmarłe
                (rodzina stwierdziła brak oddechu, pulsu i reakcji na ukłucia szpilkami), a po kilku godzinach i po
                gorących modłach rodziców zanoszonych do Boga za pośrednictwem Andrzeja Boboli zaczęły zdradzać objawy
                życia, po czym szybko wyzdrowiały. Uzdrowienie trojga innych dzieci z tamtego okresu uznano później za
                najlepiej udokumentowane i wykorzystano w procesie beatyfikacyjnym (dzisiaj do beatyfikacji i
                kanonizacji wymagany jest jeden cud). Chodzi o wyleczenie Katarzyny Brzozowskiej z powiatu pińskiego i
                Marianny Florkowskiej z Wilna z „krwawej dyzenterii”, czyli czerwonki – ostrej choroby zakaźnej jelit –
                oraz o uzdrowienie ze szkorbutu syna Jana Chmielnickiego, szlachcica z okolic Dubna.</p>

            <p class="pod-tytul">Złóżcie świadectwo! Uzdrowienie Marianny Florkowskiej</p>

            <p class="akapit">Szczególnie poruszająca, ale również chyba pouczająca, jest historia rodziny Florkowskich
                z 1730 roku. Niespełna dwuletnia Marianna, wyczerpana dyzenterią, była już bliska śmierci – spuchła,
                zesztywniała i wydzielała trupi zapach. Rodzice byli zrozpaczeni, tym bardziej że podczas epidemii tej
                choroby stracili wcześniej synka. Matka modliła się gorąco o uzdrowienie, a spowiednik doradził jej,
                żeby pobożnie wysłuchała trzech mszy i prosiła o orędownictwo Andrzeja Bobolę. Kobieta postąpiła zgodnie
                z tą radą i jeszcze tego samego dnia z radością skonstatowała, że stan dziewczynki się poprawił. Ksiądz
                zachęcił Florkowskich, żeby złożyli formalne oświadczenie o cudzie przed komisją biskupią. Ci początkowo
                się zgodzili, ale później, usłyszawszy wyolbrzymione opowieści o trudnościach, które rzekomo miały się z
                tym wiązać, zrezygnowali. Ksiądz powiedział Florkowskiej: „Czyń, jak ci się podoba, ja ciebie zmuszać
                nie mam zamiaru. Ale uważaj, aby Bóg nie ukarał cię za niewdzięczność i córki ci nie zabrał”. Matka
                zlekceważyła to ostrzeżenie, jednak kiedy wróciła do domu, zastała dziewczynkę znowu w bardzo złym
                stanie – dziecko miało konwulsje i skurcze żołądka, i straszliwie jęczało. Lekarstwa nie pomagały.
                Rodzice zaczęli gorąco się modlić i obiecali złożyć zeznania. Wkrótce po tym atak minął.</p>

            <p class="pod-tytul">Uzdrowienie przy trumnie. Historia Katarzyny Brzozowskiej</p>

            <p class="akapit">Trzyletnia Katarzyna Brzozowska też chorowała na czerwonkę. Choroba zaczęła się w
                styczniu, a w marcu doszła do ostatniego stadium. Dziecko przestało już przyjmować pokarm. Poproszony o
                lekarstwa aptekarz powiedział, że nie ma sensu ich podawać, bo godziny małej Kasi są policzone. Rodzice
                jednak polecili córkę wstawiennictwu Andrzeja Boboli, wzięli ją na ręce i przyjechali wozem do Pińska,
                do grobu orędownika. Na ich prośbę otwarto trumnę, a wtedy dziecko, które jeszcze przed chwilą niemal
                nie dawało znaku życia, ożywiło się, wyciągnęło ręce do relikwii i zaczęło się wyrywać z rąk matki w
                kierunku trumny. Dziewczynka ucałowała nogi męczennika i po chwili wyglądała już na zdrową. Po wyjściu z
                kościoła zjadła posiłek w gospodzie i faktycznie była zdrowa.</p>


            <p class="pod-tytul">Szkorbut, robactwo i kołtun. Uzdrowienie syna Jana Chmielnickiego</p>

            <p class="akapit">Ostatnie zdarzenie uznane w procesie beatyfikacyjnym za cud wymodlony za pośrednictwem
                Andrzeja Boboli dotyczył nieznanego z imienia syna szlachcica Jana Chmielnickiego. Chłopiec przez kilka
                miesięcy chorował na szkorbut. Ciało pokryło się ropiejącymi ranami, w których zagnieździło się
                robactwo. W dodatku na włosach pojawił się uciążliwy kołtun. Kiedy stan dziecka się pogorszył, matka
                zawiozła je na wieś, w której gospodarował jej mąż. Zobaczywszy chłopca, ojciec powiedział, że łatwiej
                byłoby zmarłemu powstać z grobu, niż ich synowi powrócić do zdrowia. Uznał, że nie warto już wzywać
                lekarza ani podawać lekarstw. Wnet chłopiec zdrętwiał, zanikły objawy życia. Służąca zabrała się za
                mycie dziecka, żeby przygotować je do trumny. W tym momencie Chmielnicka postanowiła ofiarować syna Bogu
                i pogrążyła się w modlitwie, wzywając wstawiennictwa Andrzeja Boboli. I wtedy stało się coś niezwykłego
                – chłopiec się ożywił, znikły objawy choroby, a nawet odpadł kołtun. Po tygodniu dziecko było już
                zupełnie zdrowe. Biograf Boboli o. Marcin Czermiński w 1922 roku tak podsumował cuda wymodlone przez
                męczennika u początków jego kultu: Z niezliczonych łask otrzymanych za przyczyną bł. Andrzeja Boboli w
                wieku XVIII akta procesu toczącego się za czasów Benedykta XIV wyliczają więcej niż 350 łask i cudów
                przysięgą stwierdzonych. Prócz cudownego zachowania ciała od zepsucia liczą 11 wskrzeszonych, przeszło
                15 nagłych uzdrowień, po kilka uleczeń nóg, rąk, uszu, gardła, uzdrowienia z puchliny, paralityków,
                epileptyków, owrzodzonych, dotkniętych gangreną i wielu innych chorób, już to ciała, już to duszy, i to
                rozmaitego stanu osób obojga płci, różnego wieku i godności. Król polski August II, […] kapłani świeccy
                i zakonni rozmaitych zakonów i obrządków, magnaci, senatorowie królestwa, szlachta i prostaczkowie,
                wszyscy udawali się do Czcigodnego Cudotwórcy; nawet, co bardziej jest dziwnym, sami schizmatycy i żydzi
                winszowali sobie łask otrzymywanych przy grobie Męczennika w Pińsku43. Doszło nawet do tego, że
                aptekarze w ziemi pińskiej żalili się, iż tracą zarobek, bo miejscowa ludność „we wszystkich swoich
                chorobach” zwraca się z modlitwą do Andrzeja Boboli i doznaje uzdrowienia, więc nie kupuje u nich
                lekarstw.</p>

            <p class="pod-tytul">Świecący krzyż w Janowie</p>

            <p class="akapit">W 1723 roku w Janowie Poleskim, gdzie zginął Andrzej Bobola, doszło do niezwykłego
                zdarzenia. Od kilku lat stał tam krzyż upamiętniający jego męczeństwo, postawiony w miejscu dawnej
                rzeźni, która spłonęła podczas pożaru miasta. 1 listopada wieczorem w miasteczku odbywało się
                nabożeństwo zaduszne, na którym zebrali się okoliczni mieszkańcy. Około godziny dwudziestej, gdy
                modlitwa się skończyła i ludzie rozchodzili się do domów, Konstancja Kunicka i wójt Cyryl Jakusz
                zobaczyli na rynku tuż nad drogą duży świetlisty krzyż w pobliżu krzyża upamiętniającego Bobolę. Wkrótce
                dołączyli do nich inni. Ludzie uklękli w błocie wokół świetlistego krzyża, modlili się i mówili, że oto
                Bóg w ten cudowny sposób wskazał właściwe miejsce śmierci swojego wiernego sługi. Dwaj księża, którzy
                wkrótce zjawili się na miejscu, podeszli do sprawy bardziej sceptycznie – zaczęli badać dziwne zjawisko.
                Zastanawiali się, czy blask nie jest refleksem światła księżycowego, ale noc była pochmurna, niebo
                szczelnie zasłaniały chmury. Co ciekawe, blask był tak samo widoczny z bliska i z daleka. Jeden z
                mężczyzn spróbował chwycić krzyż i podnieść go, ale kiedy go dotykał, jego ręce promieniały od blasku, a
                gdy podnosił dłonie, było na nich tylko błoto. Zjawisko trwało prawie do świtu. Wbito kołki w końce
                ramion świetlistego krzyża, żeby zaznaczyć miejsce, w którym się ukazał. Tam ustawiono później nowy
                drewniany krzyż upamiętniający męczeństwo Andrzeja Boboli. To zjawisko było nawet rozpatrywane w
                procesie beatyfikacyjnym. Pojawił się pomysł, żeby wykorzystać je jako cud potrzebny do beatyfikacji,
                jednak Kongregacja do spraw Świętych Obrzędów go nie zakwalifikowała.</p>

            <p class="pod-tytul">Długi proces beatyfikacyjny</p>

            <p class="akapit">O wydarzeniach przy grobie męczennika usłyszał biskup diecezji łuckiej, do której należał
                Pińsk, Aleksander Wyhowski. Wybrał się więc tam w 1712 roku, żeby osobiście zbadać sprawę i zebrać
                świadectwa osób, które uważały, że doznały łask za wstawiennictwem Andrzeja Boboli. Chętnych do zeznań
                było tak wielu, że ich przesłuchania trwały dwa tygodnie. Potraktowano sprawę z należytą starannością –
                każdy świadek składał zeznania pod przysięgą, a jego relację spisano. Do akt zostały dołączone dwa ważne
                zeznania, które przysłał wcześniej biskup unickiej diecezji pińsko-turowskiej Porfiriusz Kulczycki:
                świadectwo na temat męczeńskiej śmierci o. Boboli złożone przez naocznego świadka, który później został
                księdzem unickim, Samuela Szalkę z Janowa Poleskiego, oraz zeznania lekarza z Janowa, Wolfa
                Abrahamowicza, dotyczące okoliczności pojmania o. Boboli i stanu jego ciała po śmierci. Biskup Wyhowski
                i specjalnie powołana komisja lekarska obejrzeli zwłoki i stwierdzili, że zostały one zachowane od
                rozkładu. Przeniesiono ciało do nowej, zamykanej na kłódkę trumny i umieszczono z powrotem w podziemiach
                kościoła – ale tym razem w osobnej krypcie, sąsiadującej z kryptą grzebalną, w której wcześniej
                spoczywało. Jeden z jezuitów został zobowiązany do stałej opieki nad trumną. Biskup, zbudowany tym, co
                zobaczył, przed wyjazdem powiedział zakonnikom, że ich współbrat zapewne niedługo zostanie wyniesiony na
                ołtarze. Wysłał zgromadzone akta do Watykanu. Własne starania o rozpoczęcie procesu beatyfikacyjnego
                rozpoczęli też w 1713 roku jezuici. Ojciec Jan Łukaszewicz, który pamiętał Andrzeja Bobolę, zebrał
                świadectwa na temat jego życia i spisał setki zeznań o łaskach wymodlonych po jego śmierci. Zanotował
                też wielki wzrost pobożności i częstości przystępowania do sakramentów wśród osób, które pielgrzymowały
                do grobu o. Boboli. Niestety bp Wyhowski zmarł dwa lata po swojej wizycie w Pińsku, co na jakiś czas
                zastopowało sprawę beatyfikacji.</p>


            <p class="pod-tytul">Królowie listy piszą</p>

            <p class="akapit">W 1719 roku następny biskup łucki, Joachim Przebendowski, oficjalnie otworzył w Pińsku
                proces informacyjny. Spisano sto sześćdziesiąt jeden nadzwyczajnych łask, z których dziesięć
                zakwalifikowano jako cuda. Akta przesłane do rzymskiej Kongregacji do spraw Obrzędów liczyły tysiąc
                sześćset stron. Prośbę biskupa o beatyfikację poparli dygnitarze zebrani na sejmie w Warszawie, między
                innymi: król August II Mocny, prymas Stanisław Szembek, hetman koronny Adam Mikołaj Sieniawski i hetman
                koronny Ludwik Pociej, wojewodowie, marszałkowie i biskupi. Jednak po śmierci papieża Klemensa XI, a
                wkrótce potem jego następcy Innocentego XIII, sprawa beatyfikacji utknęła w martwym punkcie. Kiedy na
                Stolicy Piotrowej zasiadł Benedykt XIII, otrzymał kolejną porcję petycji. Był wśród nich drugi już list
                od króla Augusta II, który sam znalazł się w gronie osób przypisujących swoje uzdrowienie Andrzejowi
                Boboli. Otóż w 1727 roku, podczas pobytu w Białymstoku, zdiagnozowano u niego gangrenę w palcu lewej
                stopy. Uczynił wówczas ślub, że jeśli po amputacji palca lekarze ocalą mu nogę, odda cześć o. Boboli ad
                sepulchrum, czyli przy jego grobie, „albo przez plenipotenta, albo we własnej swej królewskiej osobie” –
                jak zapisał podskarbi nadworny Maksymilian Franciszek Ossoliński w liście do przełożonego pińskich
                jezuitów. Uzdrowiony król ofiarował wotum w kształcie nogi wykonane ze złotej blachy. Zdaje się, że
                wybrał opcję podziękowania „przez plenipotenta”, a nie „we własnej swej królewskiej osobie”, bo z listu
                Ossolińskiego wynika, że pismo zostało dołączone do wotum. Na marginesie warto zauważyć, że szkoda, iż
                August II, znany hulaka i rozpustnik (mówiło się, że miał ponad trzysta nieślubnych dzieci), który na
                łożu śmierci powiedział: „Całe moje życie było jednym nieprzerwanym grzechem. Boże, zlituj się nade
                mną!”, nie potraktował wówczas poważnie swojej choroby i uzdrowienia, bo sześć lat później bezpośrednim
                powodem jego zgonu było zakażenie po amputacji stopy cukrzycowej, a do choroby z pewnością przyczyniło
                się pijaństwo i nieumiarkowanie w jedzeniu. W sprawie beatyfikacji polskiego jezuity pisała do papieża
                także królowa angielska Maria Klementyna, wnuczka Jana III Sobieskiego, a król Stanisław August
                Poniatowski w konstytucjach zaprzysiężonych na sejmie koronacyjnym w 1764 roku obiecał między innymi:
                „starać się będziemy wnieść instancję do Stolicy Apostolskiej […] o beatyfikację […] Andrzeja Boboli
                SI”.</p>

            <p class="pod-tytul">Dekret o męczeństwie</p>

            <p class="akapit">Jak się później okazało, przerw niweczących zaawansowane niekiedy starania o wyniesienie
                Andrzeja Boboli na ołtarze było jeszcze wiele. Powodowały je czasem spektakularne wydarzenia, takie jak
                śmierć papieży, kasata zakonu jezuitów czy wreszcie zniknięcie Polski z mapy świata. Wraz z upływem
                czasu przy kolejnych wznowieniach procesu pojawiały się też niekiedy trudności formalne, które trudno
                było rozwiązać, ponieważ zmarły osoby składające zeznania na poprzednich etapach. W pewnym momencie
                proces zastopowały poszukiwania pewnego listu. Krystyna Ordzianka Jaspersowa zeznała w procesie
                informacyjnym w Łucku w 1719 roku, że była kiedyś w posiadaniu listu o. Andrzeja Boboli napisanego do
                jej ojca i że podarowała go pewnemu jezuicie. Nic nie wskazywało na to, by pismo zawierało coś ważnego,
                ale osiemnaście lat później, podczas procesu rzymskiego, promotor wiary zażądał wstrzymania obrad do
                czasu przedłożenia Kongregacji rzeczonego listu. Poszukiwania w dwóch jezuickich domach, w Pińsku i
                Reszlu, gdzie zakonnik spędził ostatnie lata życia, i wymiana korespondencji na ten temat trwały dwa
                lata. Przetrząśnięto nie tylko archiwa i biblioteki, ale również prywatne pokoje, i niczego nie
                znaleziono. W związku z tym zapadła decyzja, żeby wznowić proces. W 1757 roku doszło już nawet do tego,
                że Andrzej Bobola został oficjalnie uznany przez papieża Benedykta XIV za męczennika, co zwykle zamyka
                proces i poprzedza rychłą beatyfikację. Jednak w tym przypadku Kongregacja do spraw Świętych Obrzędów
                postanowiła zawiesić na sześć lat sprawę uznania cudów za wstawiennictwem jezuity, a potem pojawiły się
                inne przeszkody. Kiedy się czyta długą i zawikłaną historię procesu beatyfikacyjnego, można mieć
                wrażenie, że św. Andrzej miał wyjątkowego pecha albo że siły nieczyste sprzysięgły się przeciwko
                wyniesieniu go na ołtarze. W XIX wieku sprawie beatyfikacji Boboli starała się na różne sposoby
                przeszkodzić Rosja, do czego zapewne przyczyniła się popularna na ziemiach polskich pogłoska o rzekomej
                przepowiedni, że kiedy ten męczennik zostanie beatyfikowany, Rosja się nawróci. Z kolei Polacy starający
                się o wyniesienie Boboli na ołtarze argumentowali w Stolicy Apostolskiej, że taki akt pomógłby
                przeciwdziałać prawosławnej propagandzie rosyjskiego zaborcy w Polsce. Do beatyfikacji doszło dopiero w
                1853 roku – półtora wieku po tym, jak Andrzej przypomniał o sobie w Pińsku, i niemal dwa wieki po jego
                śmierci.</p>

            <p class="pod-tytul">Przeniesienie ciała do Połocka</p>

            <p class="akapit">Dwa zdarzenia, które najbardziej spowolniły proces beatyfikacyjny, miały miejsce w 1772 i
                1773 roku. Był to rozbiór Polski i rozwiązanie Towarzystwa Jezusowego przez papieża Klemensa XIV. Kiedy
                papież wydał breve Dominus ac Redemptor likwidujące zakon jezuitów, doszło do paradoksalnej sytuacji: w
                Rosji, w której zasadniczo panowały nastroje niechętne jezuitom, caryca Katarzyna II nie pozwoliła
                ogłosić papieskiego dokumentu, co było warunkiem wejścia w życie rozporządzenia. Dotyczyło to także
                terenów Rzeczpospolitej, które po rozbiorach znalazły się w imperium rosyjskim. Tam zakon przetrwał i
                później, gdy został reaktywowany, zalążkiem jego odrodzenia stały się właśnie struktury zachowane w
                Rosji. Po pierwszym rozbiorze Polski w 1772 roku Pińsk nadal należał do Rzeczpospolitej, więc tamtejsza
                wspólnota jezuicka została rozwiązana; natomiast placówka jezuicka w Połocku, leżącym około pięciuset
                kilometrów dalej na północny wschód, ocalała, bo te tereny wcielono do Rosji. W Pińsku większość
                zakonników musiała opuścić kolegium, na miejscu zostali tylko trzej staruszkowie. Wkrótce kościół i
                klasztor zostały oddane unitom. Po drugim rozbiorze Polski caryca zlikwidowała unicką diecezję
                pińsko-turowską i osadziła w pińskim kościele prawosławnych bazylianów. Unici troskliwie opiekowali się
                relikwiami Andrzeja Boboli. Mnisi prawosławni także traktowali je z szacunkiem, ale z czasem zaczęły ich
                drażnić liczne odwiedziny prawosławnych wiernych u grobu męczennika. Jak zanotowano, „błahoczestiwe
                [prawosławne – przyp. aut.] pospólstwo ustawicznie chodzi do Bobolego, długo się modli i offerta [ofiary
                – przyp. aut.] znaczne daje”. Bazylianie postanowili więc zamknąć kryptę i nie dopuszczać do niej
                wiernych, a potem po cichu zakopać ciało w ziemi. Na szczęście zanim doszło do realizacji drugiej części
                tego planu, dowiedzieli się o tym jezuici i w 1808 roku przewieźli ciało o. Boboli do swojej placówki w
                Połocku. To miasto było – jak się później okazało – jednym z wielu miejsc odwiedzonych przez jego
                relikwie w trwającej wiele lat i pełnej perypetii podróży, zanim spoczęły w obecnym sanktuarium w
                Warszawie. W Połocku Andrzej Bobola również był w kolejnych latach pobożnie wspominany przez współbraci
                i wkrótce stał się także znany miejscowej ludności. Jezuici codziennie po obiedzie schodzili do jego
                grobu na modlitwę, a 30 listopada, czyli w dzień uważany za datę jego urodzin, modlili się o wyniesienie
                go na ołtarze. Choć krypta, w której przechowywano ciało, była otwierana tylko wtedy, gdy ktoś o to
                poprosił (zajmował się tym specjalnie wyznaczony zakonnik, który otrzymał funkcję „prezesa grobu
                Wielebnego Męczennika”), wiele osób modliło się za wstawiennictwem o. Boboli i zostawiało świadectwa
                otrzymanych łask. Znowu pojawiły się też liczne offerta, które gromadzono na cele związane z
                beatyfikacją. W 1814 roku papież Pius VII przywrócił Towarzystwo Jezusowe, jednak łaskawość rosyjskich
                władz dla zakonu nie trwała długo. Już sześć lat później jezuici zostali wypędzeni z Rosji, bo carowi
                Aleksandrowi nie podobało się to, że wielu przedstawicieli arystokracji przeszło pod ich wpływem na
                katolicyzm. Wspólnota z Połocka również musiała opuścić placówkę. Nie pozwolono zakonnikom zabrać ciała
                Andrzeja Boboli. Relikwie najpierw zostały na miejscu pod opieką pijarów, a po wygnaniu pijarów z
                Połocka przeniesiono je w 1830 roku do kościoła parafialnego, który należał do dominikanów. Spoczęły tam
                w osobnej kaplicy, oddzielonej od kościoła i odpowiednio przygotowanej. O kulcie męczennika w tym
                miejscu tak pisał przeor dominikanów o. Alojzy Raczkowski: „Codzienny napływ z nabożeństwa licznej
                ludności, nie tylko z warstwy pospolitej, ale także ze szlachty i znakomitych wiernych płci obojga, daje
                nam dowód wielkiej czci relikwii tegoż czcigodnego męża i męczennika. Cześć ta nigdy nie była
                przerwana”. W tym czasie doszło do kolejnej nadzwyczajnej ingerencji męczennika. Kluczową rolę odegrał
                tu pewien dominikanin z Wilna.</p>

            <p class="tytul">Błogosławiony</p>

            <p class="pod-tytul">Wizja fizyka</p>

            <p class="akapit">Dominikanin o. Alojzy Korzeniewski należał do ludzi twardo stąpających po ziemi. Był
                wcześniej nauczycielem fizyki w gimnazjum w Grodnie i przełożył na język polski holenderski podręcznik
                do tego przedmiotu. Interesował się między innymi nowatorską ideą lotów balonem. Gdy w Grodnie
                zamieszkał wywieziony przez Rosjan ostatni król Polski Stanisław August Poniatowski, odwiedzał o.
                Korzeniewskiego w jego laboratorium i rozmawiał z nim o balonach. Po wojnach napoleońskich dominikanin
                trafił do Wilna. Jako płomienny kaznodzieja często poruszający tematy patriotyczne naraził się władzom
                carskim, które zmusiły jego przełożonych do zakazania mu głoszenia kazań i słuchania spowiedzi. Pewnego
                wieczoru w 1819 roku przed pójściem spać o. Korzeniewski modlił się w swojej celi klasztornej, zwracając
                się z ufnością do Andrzeja Boboli w sprawach ojczyzny. Postać męczennika była mu znana. Ponoć słyszał
                wcześniej jakieś nieznane nam dzisiaj obietnice dotyczące odrodzenia Polski. Modlił się: O wielebny
                Andrzeju, wiele już lat przeszło, jak przepowiedziałeś wskrzeszenie nieszczęśliwej Polski. Kiedyż się
                ziści twoje proroctwo? Wiesz lepiej ode mnie, z jaką nienawiścią schizmatycy prześladują naszą świętą
                wiarę i jak starają się nasz kochany kraj, twoją ojczyznę, do schizmy popchnąć. Ach, święty męczenniku,
                nie pozwól na takie nieszczęście; wyjednaj u Boga miłosiernego litość dla biednych Polaków. Niech Polska
                stanie się znowu jednym królestwem, królestwem prawowiernym i Bogu podległym. Już miał położyć się do
                łóżka, gdy zjawiła się przed nim postać w jezuickim stroju. Gość powiedział, że jest Andrzejem Bobolą i
                kazał zakonnikowi otworzyć okno. Za oknem, zamiast klasztornego podwórka, o. Alojzy zobaczył rozległą
                równinę. Andrzej powiedział: „Patrz jeszcze, a zobaczysz to, co chciałeś wiedzieć”. I oto na równinie
                pojawiły się zastępy Rosjan, Turków, Francuzów, Anglików, Austriaków, Prusaków i innych wojsk, których
                o. Korzeniewski nie był w stanie rozpoznać. Żołnierze walczyli z ówcześnie nieznaną zawziętością.
                Andrzej Bobola powiedział: „Gdy wojna, której masz obraz przed sobą, zakończy się pokojem, Polska
                zostanie odbudowana i ja zostanę uznany jej głównym patronem”. Dominikanin zapytał jeszcze, skąd ma
                wiedzieć, że to widzenie pochodzi z nieba, a nie jest grą wyobraźni czy snem. Bobola odpowiedział: „Daję
                ci na to moją rękę i zostawiam ci jej odbicie na twym stoliku” i dotknął blatu. Na stole pojawiło się
                odbicie dłoni. Rano niezwykły znak był nadal widoczny44. Ojciec Korzeniewski opowiedział współbraciom o
                nocnej wizycie i pokazał im ślad na stoliku. Później listownie powiadomiono inne klasztory dominikańskie
                w prowincji. Poinformowano też jezuitów.</p>

            <p class="pod-tytul">Czy to ta wojna?</p>

            <p class="akapit">Ta historia, która ewidentnie wypełniła się sto lat później, została upubliczniona w 1854
                roku we Włoszech. Opisał ją w piśmie „La Civilta Cattolica” włoski jezuita o. Luigi Taparelli. Dlaczego
                dopiero wtedy? Realia życia w zaborze rosyjskim nakazywały znaczną ostrożność w rozpowszechnianiu
                podobnych informacji, szczególnie dotyczących tak delikatnej kwestii jak odzyskanie przez Polskę
                niepodległości. W realiach politycznych 1819 roku wolność kraju wydawała się mrzonką. Ponadto stara
                tradycja Kościoła, oparta na wielowiekowym doświadczeniu, nakazuje traktować wszelkie nadzwyczajne
                zjawiska z rezerwą. Sytuacja z objawieniami o. Godebskiego z 1702 roku była nieco inna – obietnica
                męczennika wkrótce się wypełniła i wyglądało na to, że wolą Bożą jest, by jak najwięcej osób dowiedziało
                się o niej i modliło się za wstawiennictwem Andrzeja Boboli. Gdy w 1854 roku wybuchła wojna krymska, w
                którą zaangażowane były Rosja, Turcja, Anglia i Francja, mogło się wydawać, że to jest konflikt, o
                którym mówił Andrzej Bobola. A przede wszystkim 30 października 1853 roku męczennik został beatyfikowany
                przez papieża Piusa IX. I choć oficjalne uznanie przez Kościół świętości osoby, która się komuś ukazała,
                nie potwierdza prawdziwości wizji ani tym bardziej nie gwarantuje wypełnienia się proroctwa, temat stał
                się szczególnie aktualny i ważny. O obietnicy Boboli opowiedział o. Taparellemu zapewne jezuita z
                Biarorusi o. Grzegorz Felkierzamb45, który jako młody zakonnik usłyszał ją z ust o. Korzeniewskiego, a
                później był obecny na beatyfikacji w Rzymie. Ojciec Felkierzamb potem sam opisał tę historię we
                francuskim dzienniku „L’Union franc-comtoise”, a tłumaczenie jego artykułu opublikował „Przegląd
                Poznański”. Dzięki tym publikacjom treść przepowiedni rozpowszechniła się w Polsce. Poeta Wincenty Pol w
                wierszu o Andrzeju Boboli napisał: Stąd, jako Stanisław jest w sztuki pocięty, I ciało się jego znów
                zrosło miłośnie… Tak kiedy Rzym powie, że Andrzej jest święty I Polska na powrót jak cudem się
                zrośnie46. W okresie poprzedzającym wybuch pierwszej wojny światowej przepowiednia przekazana o.
                Korzeniewskiemu była dość dobrze znana w kraju47, a po 1918 roku wielu Polaków uważało, że to właśnie
                orędownictwo Boboli przyczyniło się do odzyskania niepodległości. Echa wizji o. Godebskiego znajdziemy w
                liście, w którym Episkopat Polski w 1920 roku prosił Benedykta XV o kanonizację Andrzeja Boboli:
                Spodziewamy się przez kanonizację zadośćuczynić pragnieniu i oczekiwaniu całego narodu polskiego, który
                od początku wojny światowej całą swą ufność położył w Błogosławionym Męczenniku i bezustannie zanosił
                modły, tak prywatne jak publiczne, ażeby wypełniło się proroctwo bł. Andrzeja Boboli o wskrzeszeniu
                Polski, i w swej nadziei nie został zawiedziony48. Akta kanonizacyjne z 1938 roku kończą się natomiast
                słowami: Słusznie radować się będzie Polska, której zmartwychwstanie przepowiedział Błogosławiony
                Andrzej Bobola i której przyrzekł, iż stanie się patronem przed Bogiem, aby ten naród szlachetny zawsze
                pozostał mocny w swej wierze, którą przypieczętował tak szczodrze swoją krwią.</p>

            <p class="pod-tytul">Beatyfikacja w 1853 roku</p>

            <p class="akapit">Jak się okazało, droga do odzyskania przez Polskę niepodległości była jednak daleka.
                Tymczasem w 1853 roku nadszedł wreszcie moment beatyfikacji Andrzeja Boboli. Jako cuda potrzebne do
                wyniesienia go na ołtarze zakwalifikowano wspomniane uleczenie trojga dzieci na początku XVIII wieku.
                Uroczystość odbyła się w bazylice św. Piotra w Rzymie. Jak zanotowali uczestnicy ceremonii, została ona
                zorganizowana z wielkim przepychem. Świątynię bogato przyozdobiono czerwonym adamaszkiem ze złotymi
                frędzlami i rzęsiście oświetlono. Powieszono obrazy przedstawiające dzieci uzdrowione za wstawiennictwem
                o. Boboli. Nad główną bramą bazyliki zawisł obraz męczennika przywiązanego do słupa i dręczonego przez
                Kozaków. Nad tronem papieskim wisiał drugi obraz, który został odsłonięty tuż po odczytaniu aktu
                beatyfikacyjnego. Jeden element wystroju miał bardzo wymowne znaczenie. Podczas beatyfikacji wieszało
                się wówczas po obu stronach papieskiej katedry dwa herby: papieża oraz władcy kraju, w którym urodził
                się błogosławiony; a tym razem znalazły się tam dwa godła Piusa IX, co symbolizowało fakt, że ojciec
                święty zastępuje króla narodowi pozbawionemu własnego państwa. Odczytano dekret po łacinie: Dla tych
                powodów, pragnąc, by w tak ciężkich czasach i wobec wielkiej liczby nieprzyjaciół wierni Chrystusa
                uzyskali nowy wzór, który by wzmógł ich odwagę w walce, skłaniając się do próśb całego Towarzystwa
                Jezusowego i opierając się na zdaniu Wielebnych Braci Naszych Świętego Kościoła Rzymskiego, kardynałów,
                członków Kongregacji św. Obrzędów, powagą apostolską tym listem pozwalamy tegoż Sługę Bożego Andrzeja
                Bobolę, kapłana profesa Towarzystwa Jezusowego, który za wiarę katolicką i dusz zbawienie poniósł
                męczeństwo, nazywać odtąd imieniem błogosławionego i ciało jego oraz św. relikwie wystawiać na cześć
                publiczną […]. Po odczytaniu tego aktu wystrzeliły działa na Zamku Anioła, a w bazylice odśpiewano Te
                Deum. Dla rodaków bł. Andrzeja obecnych na uroczystości to wydarzenie było szczególnie wzruszające, bo
                pamiętali oni, w jak trudnym położeniu znajduje się ojczyzna, i zapewne wielu z nich liczyło na
                szczególne orędownictwo nowego błogosławionego w tej sprawie. Beatyfikację upamiętniły liczne obrazki,
                medaliki i ulotki z życiorysem męczennika. Choć postać Andrzeja Boboli jest tak ściśle związana z
                polskimi sprawami, jego historię (zarówno tę za życia, jak i pośmiertną) mogli poznać nie tylko jego
                rodacy. W drugiej połowie XIX wieku książki o męczenniku z Pińska ukazały się we Włoszech, Francji,
                Niemczech i Austrii, Kanadzie, Irlandii i Belgii. W Rosji wyniesienie Andrzeja Boboli na ołtarze
                odebrano z nieukrywanym niezadowoleniem. Car odwołał z Rzymu swojego ambasadora i okazał mu niełaskę
                oraz kazał pokazowo rozstrzelać sześciu Polaków służących w armii rosyjskiej, którzy pewnego razu po
                odczytaniu przed oddziałem manifestu wzywającego armię do obrony prawosławia powiedzieli, że jako
                katolicy nie mogą walczyć za to wyznanie.</p>

            <p class="pod-tytul">Niewypełniony ślub. Uzdrowienie św. Gabriela Possentiego</p>

            <p class="akapit">Ciekawym przykładem jest tu epizod z życia Włocha, św. Gabriela Possentiego, pasjonisty
                (1838–1862). Gabriel miał od dziecka powołanie do życia zakonnego, ale nie dbał o nie i zagłuszał ten
                głos w duszy. Pewnego razu ciężko zachorował i wtedy przyszło mu do głowy, żeby prosić Boga o
                uzdrowienie i obiecać, że jeśli dostąpi tej łaski, wstąpi do zakonu. Jednak kiedy mu się polepszyło,
                zrezygnował z wypełnienia obietnicy i oddawał się życiu, które dawni mistrzowie życia duchowego nazywali
                światowym. Ponieważ aż do przesady dbał o wygląd i lubił grę w karty, tańce i polowania, nazywano go
                bawidamkiem. Po jakimś czasie zachorował na anginę. Miał tak spuchnięte gardło, że istniała obawa, że
                udusi się i nie dożyje rana. Wtedy znowu zwrócił się do Pana Boga, wzywając pośrednictwa bł. Andrzeja
                Boboli, który niedawno został wyniesiony na ołtarze i o którym zapewne młodzieniec usłyszał jako uczeń
                szkoły jezuickiej. Przyłożył jego obrazek do szyi, owinął szyję bandażem i zasnął. Rano skonstatował, że
                znacznie łatwiej mu się oddycha i że opuchlizna wyraźnie się zmniejszyła. Tym razem wypełnił ślub i
                wstąpił do pasjonistów. Pamięć o uzdrowieniu zachował aż do swojej przedwczesnej śmierci na gruźlicę w
                wieku dwudziestu czterech lat. Jego kierownik duchowy mówił, że Gabriel Possenti starannie przechowywał
                obrazek Boboli i często na niego zerkał oraz ze czcią go całował.</p>


            <p class="pod-tytul">Pobranie relikwii</p>

            <p class="akapit">Termin „wyniesienie na ołtarze” jest używany jako synonim beatyfikacji. To określenie
                pochodzi jednak od konkretnej czynności, którą często wykonuje się po ogłoszeniu kogoś błogosławionym –
                umieszczenia jego relikwii (obecnie jest to zwykle mała cząstka ciała włożona do relikwiarza) na
                ołtarzu. Ten gest unaocznia wiernym, że Kościół oficjalnie uznał, że dana osoba jest już w niebie i że
                można się modlić za jej pośrednictwem. W przypadku Andrzeja Boboli był problem z uczczeniem jego
                relikwii, bo nadal znajdowały się one w kościele dominikanów w Połocku, a władze rosyjskie odnosiły się
                niechętnie do wszelkich przejawów kultu. Dopiero cztery lata po beatyfikacji biskup mohylewski Wacław
                Żyliński dokonał kanonicznej wizytacji grobu męczennika i wtedy odpiłował część lewego ramienia z
                przeznaczeniem na relikwie, które kazał dostarczyć papieżowi. Tak jak przy poprzednich oficjalnych
                oględzinach, przecięto sznur, który opasywał zwłoki męczennika, i złamano pieczęcie biskupie
                pozostawione przy poprzedniej wizytacji. Ciało ubrano w nowe szaty, opasano nowymi sznurami i włożono do
                trumny ze szklanym wiekiem, którą również opieczętowano. Takie procedury są konieczne w przypadku ciał
                świętych, żeby nie było wątpliwości przy ich identyfikacji. Dominikanie musieli wkrótce opuścić Połock,
                a kościół przeszedł pod opiekę księży diecezjalnych. Przy grobie męczennika nadal modliło się wielu
                prawosławnych, co nie podobało się władzom. W 1866 roku kaplicę bł. Andrzeja odwiedziła więc komisja z
                Petersburga, która miała zbadać relikwie. Wizytacja jednak szybko się skończyła, bo kiedy goście weszli
                do kaplicy i przy trumnie zaczęli niewybrednie kpić z „polskich metod produkowania świętych”, z sufitu
                spadła cegła, która trafiła jednego z członków komisji w głowę. Wywołało to przerażenie i jakże słuszną,
                choć nieco spóźnioną, konstatację, że ze świętymi nie ma żartów. Komisja uznała swoje zadanie za
                zakończone i pospiesznie opuściła kaplicę. W 1917 roku ciało, oczyszczone i przebrane w nowe szaty,
                zostało przeniesione do metalowej trumny, bo poprzednia, drewniana, spróchniała. Wtedy też pobrano
                kolejne cząstki (trzy żebra) na relikwie.</p>

            <p class="pod-tytul">Eksponat na Wystawie Higienicznej</p>

            <p class="akapit">Gdy w 1918 roku Polska odzyskała niepodległość, rząd wszczął starania o odzyskanie
                relikwii Andrzeja Boboli. Niestety ta próba i wszystkie kolejne okazały się daremne. Ówczesny nuncjusz
                apostolski w Polsce Achille Ratti, późniejszy papież Pius XI, wspominał po latach podczas audiencji dla
                polskich biskupów, że pod koniec 1919 roku Józef Piłsudski zwierzył mu się podczas podróży do Wilna, że
                rozważa nawet rajd wojskowy na zajęty przez bolszewików Połock w celu odzyskania relikwii. Wkrótce po
                tym, jak bolszewicy przejęli władzę w całym państwie rosyjskim, w Połocku postanowiono pozbyć się ciała
                męczennika. Po pierwszych nieudanych próbach, podjętych ponoć na życzenie „mas pracujących”, które
                jakoby domagały się udowodnienia „obywatelom katolickim”, że cudowne zachowanie ciała bł. Andrzeja to
                mistyfikacja, w czerwcu 1922 roku do kaplicy w kościele św. Katarzyny wkroczyła ośmioosobowa komisja
                powołana przez lokalny Ispołkom (Ispołnitielnyj Komitiet, czyli Komitet Wykonawczy). Zerwała ona
                pieczęcie, otworzyła trumnę i obnażyła ciało męczennika z szat. Członkowie komisji byli zaskoczeni, że
                zachowało się ono w tak dobrym stanie. W jeszcze większą konfuzję wprawił ich fakt, że kiedy z impetem
                wyrzucili szczątki na posadzkę, te się nie rozpadły. Raport z oględzin głosił, że ciało uległo
                mumifikacji, co archeolog wchodzący w skład komisji przypisał właściwościom ziemi, w której zwłoki
                zostały pochowane. Plan ośmieszenia kultu Andrzeja Boboli się nie powiódł. Przeciwnie – wiele osób
                przychodziło później na nabożeństwa ekspiacyjne za profanację, trumna męczennika tonęła w kwiatach, a
                parafianie pilnowali kościoła. Władze bolszewickie postanowiły więc wywieźć relikwie z Połocka. Miesiąc
                później uzbrojeni bojówkarze wdarli się do świątyni, pobili obrońców kościoła i zabrali relikwie.
                Zawieźli je do Moskwy i umieścili na Wystawie Higienicznej w Ludowym Komisariacie Zdrowia, gdzie miały
                być eksponatem ilustrującym religijny fanatyzm. Jednak po pewnym czasie pracownicy muzeum zauważyli, że
                przy gablocie z ciałem zakonnika można spotkać modlących się ludzi. W filmie Krzysztofa Żurowskiego
                Terrorysta od Pana Boga mieszkanka Moskwy Sasza Niemtina opowiada, że jej mama jako mała dziewczynka
                chodziła często na tę wystawę razem ze swoją matką. Przewodniczka oprowadzająca wycieczki mówiła, że
                chrześcijanie twierdzą, iż te zwłoki nigdy się nie zepsują. Codziennie powtarzała kolejnej grupie, że
                zostały one wczoraj umieszczone na ekspozycji i że warto przyjść za jakiś czas i przekonać się, że się
                rozłożyły. Ponieważ jednak szczątki wciąż pozostawały w tym samym stanie, a wzbudzenie kultu męczennika
                zdecydowanie nie było celem organizatorów wystawy, przeniesiono je do pomieszczenia niedostępnego dla
                zwiedzających. Spoczywały tam aż do czasu, kiedy stały się przedmiotem międzynarodowych negocjacji.</p>

            <p class="pod-tytul">Relikwie za zboże</p>

            <p class="akapit">W sowieckiej Rosji socjalistyczne metody prowadzenia gospodarki niestety szybko
                przyniosły skutki, jakich można się było spodziewać – reforma rolna doprowadziła do głodu. Rząd zgodził
                się przyjąć pomoc od papieża Piusa XI, który utworzył w 1922 roku w kilku miastach Rosji oddziały
                Papieskiej Misji Ratowniczej (Papal Famine Relief Mission), w których wydawano zboże głodującym. W
                Moskwie taką misję prowadzili od lipca 1922 roku amerykańscy jezuici: Edmund Walsh i Leonard Gallagher.
                Niedługo po tym, jak znaleźli się w stolicy Rosji, dowiedzieli się, że w siedzibie Ludowego Komisariatu
                Zdrowia znajdują się relikwie ich błogosławionego współbrata. Zwiedzili wystawę, ale nigdzie nie
                znaleźli ciała. Dopiero później, kiedy dzięki ich sugestii Stolica Apostolska wystąpiła z prośbą o
                przekazanie zwłok Andrzeja Boboli, zaprowadzono ich do muzealnej rupieciarni, w której wśród
                zniszczonych mebli i zakurzonych eksponatów stała przeszklona skrzynia ze szczątkami. Wyglądały one tak,
                jak je szczegółowo opisał ksiądz diecezjalny Leonard Baranowski, który jako proboszcz kościoła w Połocku
                był wcześniej ich oddanym opiekunem (ksiądz nie został dopuszczony do oględzin w muzeum). Rząd sowiecki,
                który miał dług wdzięczności wobec papieża za pomoc żywnościową, czuł się zobowiązany do spełnienia
                prośby o wydanie relikwii męczennika. 3 października 1923 roku opuściły one Moskwę i zostały
                przewiezione przez Odessę do Rzymu – najpierw pociągiem, a potem statkiem. Dlaczego nie do Polski?
                Władzom sowieckim bardzo zależało na tym, żeby relikwie Boboli nie trafiły do jego ojczyzny. Urzędnicy
                usiłowali nawet wymóc na o. Walshu zobowiązanie, że ciało męczennika ani żadna z jego części nie znajdą
                się nigdy w Polsce. Jak pisze o. Jan Poplatek, Walsh nie zgodził się na dopisanie takiego punktu do
                umowy, ale żeby nie zniweczyć negocjacji, strona kościelna zdecydowała, że trumna pojedzie do Rzymu.</p>

            <p class="pod-tytul">W Rzymie</p>

            <p class="akapit">W Rzymie relikwie spoczęły w kaplicy św. Matyldy z Canossy, w północnym skrzydle Pałacu
                Apostolskiego. Tę kaplicę Jan Paweł II z okazji Roku Maryjnego 1987/1988 kazał przemianować na kaplicę
                Redemptoris Mater. Odbywają się w niej między innymi rekolekcje papieża i Kurii Rzymskiej. Co ciekawe,
                po remoncie wykonanym pod koniec XX wieku kaplica ma wystrój nawiązujący do stylu wschodniej sztuki
                sakralnej, a przecież sprawa jedności chrześcijaństwa wschodniego i zachodniego bardzo leżała na sercu
                Andrzejowi Boboli. Na polecenie papieża zebrała się komisja, której zadaniem było ustalenie tożsamości
                zmarłego. Jej członkiem był między innymi jezuita o. Jan Rostworowski, który jako przedstawiciel zakonu
                uczestniczył w oględzinach zwłok w 1917 roku w Połocku. Przed otwarciem trumny o. Rostworowski
                szczegółowo opisał, jak wyglądały one, kiedy je ostatnio widział. Wszystko się zgadzało. Poza tym z
                jezuickiego kościoła Il Gesú w Rzymie przyniesiono fragment lewego ramienia Andrzeja Boboli odcięty
                przez bp. Żylińskiego w 1857 roku i przyłożono go do reszty ciała. Odcięta część pasowała idealnie, więc
                relikwie zostały zidentyfikowane ponad wszelką wątpliwość. Po pół roku szczątki Andrzeja Boboli
                przeniesiono do kościoła Il Gesú. Przeniesienie miało bardzo uroczysty charakter. Przed schodami
                świątyni ośmiu Polaków, przedstawicieli Sodalicji Mariańskiej szlachty, zdjęło trumnę z paradnego wozu,
                a w progu kościoła przejęło ją ośmiu księży z Towarzystwa Jezusowego. Obecni byli ambasadorzy Polski
                przy Stolicy Apostolskiej i Włoszech, kardynałowie, biskupi i przedstawiciele państwa. Relikwie
                zainstalowano w kościele w eksponowanym miejscu – między ołtarzem Serca Jezusowego a ołtarzem apostoła
                Indii, św. Franciszka Ksawerego. Przez kolejne trzy dni odbywały się w Rzymie nabożeństwa, w których
                uczestniczyły rzesze wiernych, nie tylko Polaków. Wkrótce odnotowano cuda przypisywane wstawiennictwu
                polskiego męczennika.</p>

            <p class="pod-tytul">Mumifikacja</p>

            <p class="akapit">Ten, kto zobaczy integralne relikwie św. Andrzeja Boboli wystawione przed ołtarzem w jego
                sanktuarium w Warszawie, zauważy, że dzisiaj są one zmumifikowane. Ciało się nie rozłożyło, choć było
                przechowywane w różnych miejscach i rozmaitych warunkach, które chyba nigdy nie sprzyjały konserwacji, i
                nie było balsamowane ani poddawane żadnym podobnym zabiegom. Nie rozpadło się nawet wtedy, gdy w 1922
                roku bolszewicy wyrzucili je z trumny na posadzkę kaplicy, licząc na to, że rozsypie się w pył. Jednak
                bez wątpienia obecny stan zwłok różni się od tego, co zobaczyli jezuici w Pińsku, kiedy otworzyli trumnę
                męczennika czterdzieści pięć lat po jego śmierci, i co widziały komisje dokonujące następnych rewizji
                ciała. Jeszcze w 1730 roku (czyli sześćdziesiąt trzy lata po zgonie św. Andrzeja) komisja biskupia, w
                skład której wchodzili między innymi specjalnie sprowadzeni specjaliści: nadworny lekarz marszałka
                litewskiego księcia Sanguszki Godfryd Geyen i lekarz wojsk koronnych Daniel Fleischer, zanotowała, że
                ciało wygląda jak tuż po śmierci – „zachowało ścisłą spójnię i łączność członków, elastyczność i
                ciągliwość skóry i mięśni”. Opisano wówczas drobiazgowo ślady tortur, na przykład: „Na wierzchu głowy
                zauważono zdartą skórę, prawe oko wykłute, wargi obcięte, dwa przednie zęby wybite, język wyrwany, uszy
                i nos odcięte, na karku widniała głęboka rana. Na lewym ramieniu powyżej łokcia widoczna była jedna rana
                na szerokość dłoni, a druga poniżej łokcia, brak palca wskazującego i części palca wielkiego, z dłoni
                skóra zdarta”. Biodra pokrywała skrzepła krew (poddano ją badaniom, by się upewnić, że jest to krew).
                Szczątki były dobrze zachowane jeszcze w 1857 roku, czyli dwieście lat po śmierci świętego, kiedy
                pobrano duży kawałek z ramienia z przeznaczeniem na relikwie. Natomiast podczas oględzin w 1917 roku
                komisja stwierdziła już tylko, że zwłoki zachowały „pewien stopień elastyczności” i że tkanki w
                przekroju przepiłowanego ramienia zachowały różową barwę. A Sowieci, którzy sprofanowali relikwie w 1922
                ręku, zapisali już, że są one zmumifikowane. Mumifikacja mogła nastąpić bez konkretnej przyczyny, wraz z
                upływem czasu, jednak, jak zauważył jezuita o. Aleksander Jacyniak, powodem mogło być także naruszenie
                ciała przy pobieraniu fragmentu na relikwie cząstkowe. Taka ingerencja mogła spowodować wypłynięcie i
                wyparowanie płynów ustrojowych. Później tkanki pozbawione płynów wyschły i ściemniały. To tylko
                hipoteza, ale, jak mówi o. Jacyniak, warto, żeby o tym przypadku pamiętali wszyscy opiekunowie ciał
                świętych zachowanych od rozkładu. Niewykluczone, że pewną rolę odegrał tu również pożar, który w 1912
                roku strawił kaplicę kościoła św. Katarzyny w Połocku, gdzie stała trumna Andrzeja Boboli. Ktoś uratował
                relikwie, wynosząc trumnę na plac przed kościołem, ale nie wiadomo, ile czasu spędziły one wówczas w
                wysokiej temperaturze. Jeśli pożar tlił się przez kilka albo kilkanaście godzin, mógł dodatkowo wysuszyć
                ciało. Gdyby doczesne szczątki św. Andrzeja zachowały się do dzisiaj w takim stanie, w jakim je znalazł
                w 1730 roku zespół Godfryda Geyena i Daniela Fleischera, zapewne nie można byłoby ich wystawić na widok
                publiczny. Jak wiadomo, na pogrzebie o. Boboli jezuici nie pozwolili oglądać zwłok uczniom i najmłodszym
                współbraciom, bo widok był zbyt makabryczny. Dziś też mogłoby nam być trudno go znieść. Kto wie, może
                więc mumifikacja relikwii była opatrznościowa?</p>




        </div>
        <div class="col-2"></div>
    </div>--}}
@endsection
