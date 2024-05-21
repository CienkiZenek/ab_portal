<?php

namespace App\Http\Controllers;

use App\Models\Filmy;
use App\Services\GlownaServices;
use Illuminate\Http\Request;

class FilmyController extends Controller
{

    public function filmy(){
        $filmy=Filmy::orderBy('created_at', 'asc')->paginate(20);
        return view('tresc.podstrony.filmy', ['Wyniki'=>$filmy]);

    }

    public function film($slug){
        $film=Filmy::whereSlug($slug)->firstOrFail();
        $powiazaniaWatki=GlownaServices::powiazaniaWatki($film,$film->id);
        return view('tresc.cale.film', ['film'=>$film,
            'powiazaniaWatki'=>$powiazaniaWatki
        ]);

    }
}
