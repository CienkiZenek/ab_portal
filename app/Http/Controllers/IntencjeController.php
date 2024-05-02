<?php

namespace App\Http\Controllers;


use App\Models\Intencje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IntencjeController extends Controller
{

    protected function validator($data)
    {
        $walidated = Validator::make($data, [
            'tresc_nadeslana' => 'required|min:20',
            'status' => 'nullable',
            'captcha' => 'required|captcha'

        ])->validate();
        return $walidated;
    }
    public function create(Request $request)
    {
        $data = $this->validator($request->all());
        $data['status']='Nowa';
        Intencje::create($data);
        session()->flash('komunikat', "Intencja została przekazana redakcji!");
        return redirect()->route('StronaGlowna');
    }
    public function index(){

        $Wyniki=Intencje::where('Status', 'Opublikowana')->orderBy('created_at', 'desc')->paginate(20);
//dd($Wyniki);
        return view('tresc.podstrony.intencjeLista',['Wyniki'=>$Wyniki] );
    }
}
