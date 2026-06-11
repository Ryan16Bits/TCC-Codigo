<?php
 
namespace App\Http\Controllers;
 
use App\Models\Usuario;
use App\Models\Idoso;
use App\Models\Pulseira;
use App\Models\Cuidador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
 
class WebsiteController extends Controller
{

    public function logar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'senha'     => 'required'
        ]);

        return redirect()->back()
            ->withErrors($validator)
            ->withInput();

        if (Auth::attempt(['email' => $request->email, 'senha' => $request->senha])) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

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
 
        $u = new Usuario();
        $u->nome = $request->input('nome');
        $u->email = $request->input('email', explode('@', $request->input('email'))[0]);
        $u->telefone = $request->input('telefone');
        $u->senha = Hash::make($request->input('senha'));
        $u->dataNascimento = $request->input('dataNascimento');

        $u->save();

        Auth::login($u);

        return redirect()->route('home');
    }

        public function cadastrarIdoso(Request $request)
    {
        // Validação básica dos campos
        $validator = Validator::make($request->all(), [
            'nome'     => 'nullable|string|max:255',
            'peso'     => 'nullable|string',
            'altura'   => 'nullable|string',
            'dataNascimento'  => 'nullable|datetime',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
            }
 
        $i = new Idoso();
        $i->nome = $request->input('nome');
        $i->peso = $request->input('peso');
        $i->altua = $request->input('altura');
        $i->dataNascimento = $request->input('dataNascimento');

        $i->save();

        return redirect()->route('home');
    }

        public function cadastrarCuidador(Request $request)
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

        $c = new Cuidador();
        $c->nome = $request->input('nome');
        $c->email = $request->input('email', explode('@', $request->input('email'))[0]);
        $c->telefone = $request->input('telefone');
        $c->senha = Hash::make($request->input('senha'));

        $c->save();

        Auth::login($c);

        return redirect()->route('home');
    }

        public function cadastrarPulseira(Request $request)
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

        $p = new Pulseira();
        $p->nome = $request->input('nome');
        $p->codigo = $request->input('codigo');

        $p->save();

        Auth::login($p);

        return redirect()->route('home');
    }
}
