<?php

namespace App\Http\Controllers;

use App\Models\Artykuly;
use App\Services\GlownaServices;
use Illuminate\Http\Request;

class ArtykulyController extends Controller
{
    public function artykuly(){
        $artykuly=Artykuly::orderBy('created_at', 'desc')->where('status','Opublikowany')->paginate(20);
        return view('tresc.podstrony.artykuly', ['Wyniki'=>$artykuly]);

    }

    public function artykul($slug){
        $artykul=Artykuly::whereSlug($slug)->where('status','Opublikowany')->where('data', '<=', Today())->firstOrFail();
        $powiazaniaWatki=GlownaServices::powiazaniaWatki($artykul,$artykul->id);
        return view('tresc.cale.artykul', ['artykul'=>$artykul,
            'powiazaniaWatki'=>$powiazaniaWatki]);

    }

    public function artykulRedakcja($slug){
        //dd($slug);
        $artykul=Artykuly::whereSlug($slug)->firstOrFail();
        $powiazaniaWatki=GlownaServices::powiazaniaWatki($artykul,$artykul->id);
        return view('tresc.cale.artykul', ['artykul'=>$artykul,
            'powiazaniaWatki'=>$powiazaniaWatki]);

    }
}
