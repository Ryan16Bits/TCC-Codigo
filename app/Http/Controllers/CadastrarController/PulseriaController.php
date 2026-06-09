<?php

namespace App\Http\Controllers;

use App\Models\Pulseira;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\Auth;
use Illuminate\Support\Facade\Validator;

class PulseiraController extends Controller
{

    public function cadastrar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome'      => 'required|string|max:255',
            'codigo'    => 'required|string|unique',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
        }

        $cl = new Pulseira();
        $cl->nome = $request->input('nome');
        $cl->codigo = $request->input('codigo');

        $cl->save();

        Auth::login($cl);

        return redirect()->route('home');
    }
}
