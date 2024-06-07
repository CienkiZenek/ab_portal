<?php

namespace App\Http\Controllers;

use App\Models\Biografia;
use App\Models\Artykuly;
use App\Models\Czywiesz;
use App\Models\Filmy;
use App\Models\Kalendarium;
use App\Models\Modlitwy;
use App\Models\Wiadomosci;
use App\Models\Ksiegarnie;
use App\Models\Zasoby;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Services\GlownaServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GlownyController extends Controller
{
    public function StronaGlowna()
    {
        $strona_glowna='Tak';


        $karuzelaZbior=GlownaServices::karuzelaZbior();


      /*  $ksiegarnieStart=Ksiegarnie::orderBy('created_at', 'desc')->limit(3)->get();*/
        $wiadomosciStart=Wiadomosci::orderBy('data', 'desc')->orderBy('created_at', 'desc')->where('status','Opublikowana')->where('przyklejona','nie')->where('data', '<=', Today())->limit(15)->get();
        $wiadomosciPrzyklejone=Wiadomosci::orderBy('data', 'desc')->orderBy('created_at', 'desc')->where('status','Opublikowana')->where('przyklejona','tak')->where('data', '<=', Today())->get();
        $artykulyStart=Artykuly::orderBy('created_at', 'desc')->where('status','Opublikowany')->where('data', '<=', Today())->limit(12)->get();
        $filmyStart=Filmy::orderBy('created_at', 'desc')->limit(12)->get();
        $modlitwyStart=Modlitwy::orderBy('created_at', 'desc')->limit(12)->get();
        $zasobyStart=Zasoby::orderBy('created_at', 'desc')->limit(12)->get();


        // wybieranie losowego "Czy wiesz że...":

        $czywiesz=GlownaServices::czyWieszLosowo();
        $cytatDnia=GlownaServices::cytatDniaLosowo();
        //dd($strona_glowna);
        /*$data = Carbon::now();*/
        //dd($dt->month);
        // kalendarium
$kalendariumDzis=GlownaServices::kalendariumNaDzis();
//dd($kalendariumDzis->count());
$kalendariumJutro=GlownaServices::kalendariumNaJutro();
$kalendariumPojutrze=GlownaServices::kalendariumNaPoJutrze();


        //dd($karuzelaZbior);
        return view('tresc.stronaGlowna', ['strona_glowna'=>$strona_glowna,
'karuzelaZbior'=>$karuzelaZbior,
/*'ksiegarnieStart'=>$ksiegarnieStart,*/
'wiadomosciStart'=>$wiadomosciStart,
'wiadomosciPrzyklejone'=>$wiadomosciPrzyklejone,
'filmyStart'=>$filmyStart,
'modlitwyStart'=>$modlitwyStart,
'zasobyStart'=>$zasobyStart,
'kalendariumDzis'=>$kalendariumDzis,
'kalendariumJutro'=>$kalendariumJutro,
'kalendariumPojutrze'=>$kalendariumPojutrze,
'artykulyStart'=>$artykulyStart,
'cytatDnia'=>$cytatDnia,
'czywiesz'=>$czywiesz


            ]);
    }
// formularz kontaktu
    public function kontakt(){

        return view('tresc.podstrony.kontakt', );
    }
    // formularz intencji
    public function intencje(){

        return view('tresc.podstrony.intencja', );
    }

    public function oStronie(){

        return view('tresc.podstrony.oStronie', );
    }

    public function mapaStrony(){

        return view('tresc.podstrony.mapaStrony', );
    }


    public function fragmentKsiazki(){

        return view('tresc.podstrony.fragmentKsiazki', );
    }

    public function naszaKsiazka(){

        return view('tresc.podstrony.naszaKsiazka', );
    }

    /*public function gdzieKupic(){
        $ksiegarnie=Ksiegarnie::orderBy('created_at', 'desc')->where('dostepna', 'tak')->get();
        return view('tresc.podstrony.gdzieKupic', ['Wyniki'=>$ksiegarnie]);
    }*/

    public function publikacjeKsiazka(){

        return view('tresc.podstrony.publikacjeKsiazka');
    }

    public function szukaj(Request $request)
    {
        $szukane=$request->get('szukane');

        if(Str::length($szukane)>2){
// wyszukiwanie w wiadomościach
        $WynikiWiadomosci=DB::table('wiadomosci')->Where('status','Opublikowana')
            ->where('data', '<=', Today())
            ->Where(function (Builder $query) use ($szukane) {
                $query->orWhere('tytul', 'like', "%$szukane%")
                    ->orWhere('naglowek', 'like', "%$szukane%")
                    ->orWhere('tresc', 'like', "%$szukane%")
                    ->orWhere('komentarz', 'like', "%$szukane%")
                    ->orWhere('ramka1', 'like', "%$szukane%")
                    ->orWhere('ramka2', 'like', "%$szukane%")
                    ->orWhere('film_podpis', 'like', "%$szukane%")
                    ->orWhere('zdjecie1_podpis', 'like', "%$szukane%")
                    ->orWhere('zdjecie2_podpis', 'like', "%$szukane%");
            })->get();



        // wyszukiwanie w modlitwach
        $WynikiModlitwy=Modlitwy::where('nazwa', 'like', "%$szukane%")
            ->orWhere('tresc', 'like', "%$szukane%")
            ->orWhere('tresc_wyszukiwarka', 'like', "%$szukane%")
            ->orWhere('opis', 'like', "%$szukane%")
            ->orWhere('zdjecie1_podpis', 'like', "%$szukane%")
            ->orWhere('zdjecie2_podpis', 'like', "%$szukane%")
            ->get();

        // wyszukiwanie w filmach
        $WynikiFilmy=Filmy::where('tytul', 'like', "%$szukane%")
            ->orWhere('opis', 'like', "%$szukane%")
            ->get();

        // wyszukiwanie w zasobach
        $WynikiZasoby=Zasoby::where('nazwa', 'like', "%$szukane%")
            ->orWhere('tresc', 'like', "%$szukane%")
            ->orWhere('opis', 'like', "%$szukane%")
            ->orWhere('zdjecie1_podpis', 'like', "%$szukane%")
            ->orWhere('zdjecie2_podpis', 'like', "%$szukane%")
            ->get();

        // wyszukiwanie w artykulach
        $WynikiArtykuly=DB::table('artykuly')->Where('status','Opublikowany')
            ->Where(function (Builder $query) use ($szukane) {
                $query->orWhere('tytul', 'like', "%$szukane%")
                    ->orWhere('naglowek', 'like', "%$szukane%")
                    ->orWhere('tresc', 'like', "%$szukane%")
                    ->orWhere('ramka1', 'like', "%$szukane%")
                    ->orWhere('ramka2', 'like', "%$szukane%")
                    ->orWhere('zdjecie1_podpis', 'like', "%$szukane%")
                    ->orWhere('zdjecie2_podpis', 'like', "%$szukane%");
            })->get();


        // wyszukiwanie w biografii
        /*$WynikiBiografia=Biografia::where('tytul', 'like', "%$szukane%")
            ->orWhere('tresc', 'like', "%$szukane%")
            ->orWhere('naglowek', 'like', "%$szukane%")
            ->orWhere('zdjecie1_podpis', 'like', "%$szukane%")
            ->orWhere('zdjecie2_podpis', 'like', "%$szukane%")
            ->orWhere('ramka1', 'like', "%$szukane%")
            ->orWhere('ramka2', 'like', "%$szukane%")
            ->get();*/

        $wynikWyszukiwaniaSurowe=$WynikiWiadomosci->concat($WynikiArtykuly)->concat($WynikiModlitwy)->concat($WynikiZasoby)->concat($WynikiFilmy);
        $wynikWyszukiwania=GlownaServices::wynikWyszukiwania($wynikWyszukiwaniaSurowe);
       //dd($wynikWyszukiwania);
        if($wynikWyszukiwania->count()>0){

            return view('tresc.podstrony.wyszukiwarka', ['Wyniki'=>$wynikWyszukiwania, 'szukane'=>$szukane]);
        }
        else
        {

            return view('tresc.podstrony.wyszukiwarkaBrakWynikow', ['szukane'=>'nic1']);
        }


    }
        return view('tresc.podstrony.wyszukiwarkaBrakWynikow', ['szukane'=>'nic2']);
    }


}
