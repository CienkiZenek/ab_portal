<?php

namespace App\Http\Controllers;

use App\Services\GlownaServices;
use Illuminate\Http\Request;
use App\Models\Wiadomosci;
class WiadomosciController extends Controller
{
    public function wiadomosci(){
        $wiadomosci=Wiadomosci::orderBy('data', 'desc')->orderBy('created_at', 'desc')->where('status','Opublikowana')->where('data', '<=', Today())->paginate(30);
        return view('tresc.podstrony.wiadomosci', ['Wyniki'=>$wiadomosci]);

    }

    public function wiadomosc($slug){
$wiadomosc=Wiadomosci::whereSlug($slug)->where('status','Opublikowana')->where('data', '<=', Today())->firstOrFail();
        $powiazaniaWatki=GlownaServices::powiazaniaWatki($wiadomosc,$wiadomosc->id);
/*dd($powiazaniaWatki);*/
        return view('tresc.cale.wiadomosc', ['wiadomosc'=>$wiadomosc,
            'powiazaniaWatki'=>$powiazaniaWatki]);

    }
    /*public function artykuly($slug){

        $wiadomosc=Wiadomosci::whereSlug($slug)->where('status','Opublikowana')->where('data', '<=', Today())->firstOrFail();
        return view('tresc.cale.wiadomosc', ['wiadomosc'=>$wiadomosc]);

    }*/

    // podglłąd redakcyjny wiadomości w wersji roboczej i przed czasem
    public function wiadomoscRedakcja($slug){

        $wiadomosc=Wiadomosci::whereSlug($slug)->firstOrFail();
        $powiazaniaWatki=GlownaServices::powiazaniaWatki($wiadomosc,$wiadomosc->id);
        return view('tresc.cale.wiadomosc', ['wiadomosc'=>$wiadomosc,
            'powiazaniaWatki'=>$powiazaniaWatki]);

    }


}

