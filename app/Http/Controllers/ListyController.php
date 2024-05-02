<?php

namespace App\Http\Controllers;

use App\Models\Listy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListyController extends Controller
{

    protected function validator($data)
    {
        $walidated = Validator::make($data, [
            'tresc' => 'required|min:20',
            'status' => 'nullable',
            'captcha' => 'required|captcha'

        ])->validate();
        return $walidated;
    }
    public function create(Request $request)
    {
        $data = $this->validator($request->all());
        $data['status']='Nowy';
        Listy::create($data);
        session()->flash('komunikat', "List do redakcji został wysłany!");
        return redirect()->route('StronaGlowna');
    }
}
