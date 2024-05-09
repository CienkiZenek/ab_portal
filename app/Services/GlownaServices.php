<?php

namespace App\Services;

use App\Models\Artykuly;
use App\Models\Kalendarium;
use App\Models\Czywiesz;
use App\Models\Cytat;
use App\Models\Modlitwy;
use App\Models\Wiadomosci;
use App\Models\Zasoby;
use App\Models\Zdjecia;
use Carbon\Carbon;
use Illuminate\Support\Str;


class GlownaServices
{

    public static function kalendariumNaDzis()
    {
// kalendarium na dzis
        $data = Carbon::now();
        //dd($dt->month);
        return Kalendarium::where('mies', $data->month)->where('dzien', $data->day)->where('status', 'Opublikowane')->orderBy('rok', 'asc')->get();
    }

    public static function kalendariumNaJutro()
    {
// kalendarium na jutr
        $data = Carbon::tomorrow();
        //dd($dt->month);
        return Kalendarium::where('mies', $data->month)->where('dzien', $data->day)->where('status', 'Opublikowane')->orderBy('rok', 'asc')->get();
    }

    public static function kalendariumNaPoJutrze()
    {
        // kalendarium na pojutrze
        $data = Carbon::now()->addDays(2);
        //dd($dt->month);
        return Kalendarium::where('mies', $data->month)->where('dzien', $data->day)->where('status', 'Opublikowane')->orderBy('rok', 'asc')->get();
    }


    public static function czyWieszLosowo()
    {
// wybieranie losowego "Czy wiesz że...":

        //dd(Czywiesz::all()->random());
        $czywiesz=false;
        if(Czywiesz::all()->count()>0){
            $czywiesz=Czywiesz::all()->random();
        }
        return $czywiesz;
    }

    public static function cytatDniaLosowo()
    {
        // wybieranie losowego Cytatu dnia:

        $cytat=false;
        if(Cytat::all()->count()>0){
            $cytat=Cytat::all()->random();
        }


        return $cytat;



    }

    public static function datownik()
    {
        $dzis = Carbon::now();
        $dzienTgodnia = '';
        $dzienmiesiaca = $dzis->day;
        $miesiac = '';
        $rok = $dzis->year;


        $dzienTgodnia2 = $dzis->locale('pl_PL')->dayName;

        switch ($dzis->dayOfWeek) {
            case 1:
                $dzienTgodnia = 'Poniedziałek';
                break;
            case 2:
                $dzienTgodnia = 'Wtorek';
                break;
            case 3:
                $dzienTgodnia = 'Środa';
                break;
            case 4:
                $dzienTgodnia = 'Czwartek';
                break;
            case 5:
                $dzienTgodnia = 'Piątek';
                break;
            case 6:
                $dzienTgodnia = 'Sobota';
                break;
            case 0:
                $dzienTgodnia = 'Niedziela';
                break;

        }

        switch ($dzis->month) {
            case 1:
                $miesiac = 'stycznia';
                break;
            case 2:
                $miesiac = 'lutego';
                break;
            case 3:
                $miesiac = 'marca';
                break;
            case 4:
                $miesiac = 'kwietnia';
                break;
            case 5:
                $miesiac = 'maja';
                break;
            case 6:
                $miesiac = 'czerwca';
                break;
            case 7:
                $miesiac = 'lipca';
                break;
            case 8:
                $miesiac = 'sierpnia';
                break;
            case 9:
                $miesiac = 'wrzesień';
                break;
            case 10:
                $miesiac = 'października';
                break;
            case 11:
                $miesiac = 'listopada';
                break;
            case 12:
                $miesiac = 'grudnia';
                break;

        }


        $data = $dzienTgodnia . ',&nbsp;' . $dzienmiesiaca . '&nbsp;' . $miesiac . '&nbsp;' . $rok;
        return $data;

    }

    public static function limitSpacja($string, $limit)
    {
        if (Str::length($string) > $limit) {
            $stringZLewej = Str::take($string, $limit);
// są problemy na produkcji...
            //$pozycjaOstaSpacji = strrpos($stringZLewej, ' ');
            //$stringDoOstatniejSpacji = Str::take($string, $pozycjaOstaSpacji);
           // return Str::replaceLast(' ', '...', $stringDoOstatniejSpacji);

        return $stringZLewej.'...';
        }
        return $string;
    }

    // Funkcja zwraca kolekcje treści (wiadomości, modlitwy, zasoby, filmy) powiazane takimi samymi wątkami
    public static function powiazaniaWatki($tresc, $id)
    {
//dd(get_class($tresc));
        // $wiadomosc = Wiadomosci::findOrFail($id);
        $watkiPowiazane = $tresc->watki;
        //dd($watkiPowiazane);
        $kolekcjaPowiazanych1 = collect(); // kolekcja dla wiadomości
        $kolekcjaPowiazanych2 = collect(); // kolekcja dla filmów
        $kolekcjaPowiazanych3 = collect(); // kolekcja dla modlitw
        $kolekcjaPowiazanych4 = collect(); // kolekcja dla zasobow
        $kolekcjaPowiazanych5 = collect(); // kolekcja dla artykułów


        foreach ($watkiPowiazane as $zWiadomosciami) {
            foreach ($zWiadomosciami->wiadomosc as $wiadom) {
                $kolekcjaPowiazanych1->push($wiadom);
            }
        }


        foreach ($watkiPowiazane as $zFilmami) {
            foreach ($zFilmami->film as $film) {
                $kolekcjaPowiazanych2->push($film);
            }
        }


        foreach ($watkiPowiazane as $zModlitwami) {
            foreach ($zModlitwami->modlitwa as $modlitwa) {
                $kolekcjaPowiazanych3->push($modlitwa);
            }
        }

        foreach ($watkiPowiazane as $zZasobami) {
            foreach ($zZasobami->zasob as $zasob) {
                $kolekcjaPowiazanych4->push($zasob);
            }
        }

        foreach ($watkiPowiazane as $zArtykulami) {
            foreach ($zArtykulami->artykul as $artykul) {
                $kolekcjaPowiazanych5->push($artykul);
            }
        }


// usuwanie duplikatów
        $kolekcja1 = $kolekcjaPowiazanych1->unique('tytul');
        $kolekcja2 = $kolekcjaPowiazanych2->unique('tytul');
        $kolekcja3 = $kolekcjaPowiazanych3->unique('nazwa');
        $kolekcja4 = $kolekcjaPowiazanych4->unique('nazwa');
        $kolekcja5 = $kolekcjaPowiazanych5->unique('tytul');

// usuwanie treści, do której są powiąznia z listy "zobacz również"

        if (get_class($tresc) == 'App\Models\Wiadomosci') {

            foreach ($kolekcja1 as $item) {
                if ($tresc->tytul == $item->tytul) {
                    $kolekcja1->forget($kolekcja1->search($item));
                }
            }
        }
        if (get_class($tresc) == 'App\Models\Filmy') {

            foreach ($kolekcja2 as $item) {
                if ($tresc->tytul == $item->tytul) {
                    $kolekcja2->forget($kolekcja2->search($item));
                }
            }
        }
        if (get_class($tresc) == 'App\Models\Modlitwy') {

            foreach ($kolekcja3 as $item) {
                if ($tresc->nazwa == $item->nazwa) {
                    $kolekcja3->forget($kolekcja3->search($item));
                }
            }
        }

        if (get_class($tresc) == 'App\Models\Zasoby') {

            foreach ($kolekcja4 as $item) {
                if ($tresc->nazwa == $item->nazwa) {
                    $kolekcja4->forget($kolekcja4->search($item));
                }
            }
        }
        if (get_class($tresc) == 'App\Models\Artykuly') {

            foreach ($kolekcja5 as $item) {
                if ($tresc->tytul == $item->tytul) {
                    $kolekcja5->forget($kolekcja5->search($item));
                }
            }
        }


        $wynik = $kolekcja1->concat($kolekcja2)->concat($kolekcja3)->concat($kolekcja4)->concat($kolekcja5);


        $wynik->sortBy('created_at');
        foreach ($wynik as $item) {
            switch (get_class($item)) {
                case 'App\Models\Wiadomosci':
                    $item->tytulPowiazania = $item->tytul;
                    $item->typTresci = 'Wiadomość';
                    $item->nazwaRoute = 'wiadomosc';
                    break;
                case 'App\Models\Filmy':
                    $item->tytulPowiazania = $item->tytul;
                    $item->typTresci = 'Film';
                    $item->nazwaRoute = 'film';
                    break;
                case 'App\Models\Modlitwy':
                    $item->tytulPowiazania = GlownaServices::limitSpacja($item->nazwa, 50);
                    $item->typTresci = 'Modlitwa';
                    $item->nazwaRoute = 'modlitwa';
                    break;
                case 'App\Models\Zasoby':
                    $item->tytulPowiazania = GlownaServices::limitSpacja($item->nazwa, 50);
                    $item->typTresci = 'Zasób';
                    $item->nazwaRoute = 'zasob';
                    break;

            }

        }
        return $wynik;


    }

    public static function formatowanie($tekst)
    {
        $tekst = Str::replace('<ak>', '</p><p class="akapit">', $tekst);
        $tekst = Str::replace('<st>', '</p><h2 class="srodtytul">', $tekst);
        $tekst = Str::replace('</st>', '</h2><p class="akapit">', $tekst);

        return $tekst;

    }

    public static function formatowanieModlitwy($tekst)
    {


        return $tekst;

    }

    public static function wynikWyszukiwania($wynikWyszukiwania)
    {

        $wynikWyszukiwania->sortBy('created_at');
        // dd($wynikWyszukiwania);
        foreach ($wynikWyszukiwania as $item) {
            switch ($item->gatunek) {
                case 'wiadomosc':
                    $item->tytulDodany = $item->tytul;
                    $item->naglowekDodany = $item->naglowek;
                    $item->typTresci = 'Wiadomość';
                    $item->nazwaRoute = 'wiadomosc';
                    break;
                case 'artykul':
                    $item->tytulDodany = $item->tytul;
                    $item->naglowekDodany = $item->naglowek;
                    $item->typTresci = 'Artykuł';
                    $item->nazwaRoute = 'artykul';
                    break;
                case 'biografia':
                    $item->tytulDodany = $item->tytul;
                    $item->naglowekDodany = $item->naglowek;
                    $item->typTresci = 'Biografia';
                    $item->nazwaRoute = 'biografia';
                    break;
                case 'film':
                    $item->tytulDodany = $item->tytul;
                    $item->naglowekDodany = GlownaServices::limitSpacja($item->opis, 220);
                    $item->typTresci = 'Film';
                    $item->nazwaRoute = 'film';
                    break;
                case 'modlitwa':
                    $item->tytulDodany = GlownaServices::limitSpacja($item->nazwa, 50);
                    $item->naglowekDodany = GlownaServices::limitSpacja($item->opis, 220);
                    $item->typTresci = 'Modlitwa';
                    $item->nazwaRoute = 'modlitwa';
                    break;
                case 'zasob':
                    $item->tytulDodany = GlownaServices::limitSpacja($item->nazwa, 50);
                    $item->naglowekDodany = GlownaServices::limitSpacja($item->opis, 220);
                    $item->typTresci = 'Zasób';
                    $item->nazwaRoute = 'zasob';
                    break;

            }

        }
        //dd($wynikWyszukiwania);
        return $wynikWyszukiwania;
    }

    public static function karuzelaZbior()
    {

        $wiadomosciKaruzela = Wiadomosci::where('strona_glowna', 'tak')->orderBy('updated_at', 'asc')->get();
        $zasobyKaruzela = Zasoby::where('strona_glowna', 'tak')->orderBy('updated_at', 'asc')->get();
        $artykulyKaruzela = Artykuly::where('strona_glowna', 'tak')->orderBy('updated_at', 'asc')->get();
        $modlitwyKaruzela = Modlitwy::where('strona_glowna', 'tak')->orderBy('updated_at', 'asc')->get();

        $karuzela = $wiadomosciKaruzela->concat($zasobyKaruzela)->concat($artykulyKaruzela)->concat($modlitwyKaruzela);
        // $karuzela = $zasobyKaruzela;

        foreach ($karuzela as $item) {
            $numer = 0;
            $item->numerDodany = $numer;
            $numer++;
            switch ($item->gatunek) {
                case 'wiadomosc':
                    $item->tytulDodany = GlownaServices::limitSpacja($item->tytul, 50);
                    $item->naglowekDodany = $item->naglowek;
                    $item->typTresci = 'Wiadomość';
                    $item->nazwaRoute = 'wiadomosc';
                    break;
                case 'artykul':
                    $item->tytulDodany = GlownaServices::limitSpacja($item->tytul, 50);
                    $item->naglowekDodany = $item->naglowek;
                    $item->typTresci = 'Artykuł';
                    $item->nazwaRoute = 'artykul';
                    break;
                case 'zasob':
                    $item->tytulDodany = GlownaServices::limitSpacja($item->nazwa, 50);
                    $item->naglowekDodany = GlownaServices::limitSpacja($item->opis, 70);
                    $item->typTresci = 'Zasób';
                    $item->nazwaRoute = 'zasob';
                    break;
                case 'modlitwa':
                    $item->tytulDodany = GlownaServices::limitSpacja($item->nazwa, 50);
                    $item->naglowekDodany = GlownaServices::limitSpacja($item->opis, 70);
                    $item->typTresci = 'Modlitwa';
                    $item->nazwaRoute = 'modlitwa';
                    break;
            }
        }
        for ($i = 0; $i < $karuzela->count(); $i++) {
            $karuzela[$i]->numerDodany = $i;

        }

        //$aaa=$karuzela->toArray();
        //$aaa=$karuzela->first();
        // $bbb=array_keys($aaa->toArray());
        // dd($karuzela);
        return $karuzela;
    }

    public static function zdjecieDuze($zdjecie)
    {
        $obrazek = Zdjecia::where('plik', $zdjecie)->first();
        //dd($obrazek);
        if ($obrazek->duze == 'tak') {
            $zdjecieDo = $obrazek->plik_duze;
        } else {
            $zdjecieDo = $zdjecie;
        }
        return $zdjecieDo;


    }


}
