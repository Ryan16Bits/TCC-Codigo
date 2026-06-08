<?php
 
namespace App\Http\Controllers;
 
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
 
class UsuarioController extends Controller
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
        // Validação básica dos campos
        $validator = Validator::make($request->all(), [
            'nome'      => 'nullable|string|max:255',
            'email'     => 'required|email|unique',
            'telefone'  => 'nullable|string|max:30',
            'senha'     => 'required|min:6',
            'dataNascimento'  => 'nullable',
            'confirmarSenha' => 'nullable|string|same:senha'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
            }

        if ($request->filled('confirmar_senha') && $request->input('senha') !== $request->input('confirmar_senha')) {
            return redirect()->back()->with('error', 'As senhas não coincidem!')->withInput();
            }
 
        $cl = new Usuario();
        $cl->nome = $request->input('nome', explode('@', $request->input('email'))[0]);
        $cl->email = $request->input('email');
        $cl->telefone = $request->input('telefone');
        $cl->senha = Hash::make($request->input('senha'));
        $cl->dataNascimento = $request->input('dataNascimento');

        $cl->save();

        Auth::login($cl);

        return redirect()->route('home');
    }
}
