<?php

namespace App\Http\Controllers;

use App\Models\Wiadomosci;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SzukajController extends Controller
{

    public function szukaj(Request $request)
    {

        $szukane=$request->get('szukane');

        $Wyniki=DB::table('wiadomosci')->Where('status','Opublikowana')
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
                })
            ->get();

        return view('tresc.podstrony.wyszukiwarka', ['Wyniki'=>$Wyniki, 'szukane'=>$szukane]);
    }
}
