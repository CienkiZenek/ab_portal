<?php

namespace App\Http\Controllers;

use App\Services\GlownaServices;
use Illuminate\Http\Request;
use App\Models\Modlitwy;

class ModlitwyController extends Controller
{
    public function modlitwy(){
$modlitwy=Modlitwy::orderBy('created_at', 'asc')->paginate(40);
        return view('tresc.podstrony.modlitwy', ['Wyniki'=>$modlitwy] );

    }
    public function modlitwa($slug){
        $modlitwa=Modlitwy::whereSlug($slug)->firstOrFail();
        $powiazaniaWatki=GlownaServices::powiazaniaWatki($modlitwa,$modlitwa->id);
        return view('tresc.cale.modlitwa', ['modlitwa'=>$modlitwa,
            'powiazaniaWatki'=>$powiazaniaWatki
            ]);

    }
    public function litania(){

        return view('tresc.podstrony.litania', );

    }
    public function nowenna(){

        return view('tresc.podstrony.nowenna', );

    }
    public function uchronienieOdWojny(){

        return view('tresc.podstrony.uchronienieOdWojny', );

    }
}
