<?php

namespace App\Http\Controllers;

use App\Services\GlownaServices;
use Illuminate\Http\Request;
use App\Models\Zasoby;

class ZasobyController extends Controller
{
    public function zasoby(){
$zasoby=Zasoby::orderBy('created_at', 'desc')->paginate(20);
        return view('tresc.podstrony.zasoby', ['zasoby'=>$zasoby] );

    }
    public function zasob($slug){

        $zasob=Zasoby::whereSlug($slug)->firstOrFail();
        $powiazaniaWatki=GlownaServices::powiazaniaWatki($zasob,$zasob->id);

        return view('tresc.cale.zasob', ['zasob'=>$zasob,
            'powiazaniaWatki'=>$powiazaniaWatki
            ] );

    }

    public function portrety(){

        return view('tresc.podstrony.portrety', );

    }
}
