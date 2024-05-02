<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmy;
use App\Models\Strony;
use App\Models\Biogram;
class PomocniczyController extends Controller
{


    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
// formularz intencji
    public function filmy(){
        $filmy=Filmy::orderBy('created_at', 'desc')->paginate(10);
        return view('tresc.podstrony.filmy', ['Wyniki'=>$filmy]);

    }
    public function strony(){

        return view('tresc.podstrony.strony', );

    }
    public function relikwie(){

        return view('tresc.podstrony.relikwie', );

    }
    public function czywiesz(){

        return view('tresc.podstrony.czywiesz', );

    }
    public function biogram(){

        $biogram=Biogram::orderBy('kolejnosc', 'asc')->get();

        return view('tresc.podstrony.biogram', ['Biogram'=>$biogram]);

    }
}
