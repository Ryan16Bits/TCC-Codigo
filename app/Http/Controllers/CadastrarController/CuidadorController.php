<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\Auth;
use Illuminate\Support\Facade\Validator;

class CuidadorController extends Controller
{

    public function logar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'senha'     => 'required'
        ]);

        return redirect()->back()
            ->withErrors(['email' => 'Usuário ou senha inválidos'])
            ->withInput();
    }

    public function cadastrar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome'      => 'required|string|max:255',
            'email'     => 'required|email|unique',
            'telefone'  => 'required|string|max:30',
            'senha'     => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
        }

        $cl = new Cuidador();
        $cl->nome = $request->input('nome');
        $cl->email = $request->input('email', explode('@', $request->input('email'))[0]);
        $cl->telefone = $request->input('telefone');
        $cl->senha = Hash::make($request->input('senha'));

        $cl->save();

        Auth::login($cl);

        return redirect()->route('home');
    }
}
