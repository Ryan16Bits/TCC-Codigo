<?php
 
namespace App\Http\Controllers\UsuarioController;
 
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

        public function login()
    {
        return view('login.entrada');
    }

        public function cadastro()
    {
        return view('login.cadastro');
    }

        public function tipo()
    {
        return view('login.tipoConta');
    }

        public function home()
    {
        return view('home');
    }

        public function relatorios()
    {
        return view('relatorio.relatorios');
    }

        public function observacao()
    {
        return view('relatorio.observacao');
    }

        public function acelerometro()
    {
        return view('relatorio.acelerometro');
    }

        public function configuracoes()
    {
        return view('configuracoes.configuracoes');
    }

        public function acessibilidade()
    {
        return view('configuracoes.acessibilidade');
    }

        public function duvidas()
    {
        return view('login.duvidas');
    }

        public function suporte()
    {
        return view('configuracoes.suporte');
    }

        public function notificacoes()
    {
        return view('configuracoes.notificacoes');
    }

        public function sobre()
    {
        return view('configuracoes.sobre.sobre');
    }

        public function politica()
    {
        return view('configuracoes.sobre.politicaPrivacidade');
    }

        public function sobreConta()
    {
        return view('configuracoes.sobre.sobreConta');
    }

        public function termos()
    {
        return view('configuracoes.sobre.termosUso');
    }

        public function perfil()
    {
        return view('perfil.perfil');
    }

        public function dados()
    {
        return view('perfil.dados');
    }

        public function editarDados()
    {
        return view('perfil.editarDados');
    }

        public function gerenciar()
    {
        return view('perfil.gerenciar');
    }

        public function trocar()
    {
        return view('perfil.trocar');
    }

        public function senha()
    {
        return view('perfil.senha');
    }

        public function conectar()
    {
        return view('perfil.conectar');
    }

        public function pulseira()
    {
        return view('perfil.pulseira');
    }

        public function cuidador()
    {
        return view('cadastrar.cuidador');
    }

        public function idoso()
    {
        return view('cadastrar.idoso');
    }

        public function esqueciSenha()
    {
        return view('login.esqueciSenha');
    }

        public function esqueciSenha2()
    {
        return view('login.esqueciSenha2');
    }

        public function notificacoesLista()
    {
        return view('notificacoes');
    }

        public function homeCuidador()
    {
        return view('homeCuidador');
    }
}
