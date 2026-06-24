<?php
 
namespace App\Http\Controllers\UsuarioController;
 
use App\Models\UsuarioModels\Usuario;
use App\Models\UsuarioModels\Idoso;
use App\Models\UsuarioModels\Pulseira;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
 
class WebsiteController extends Controller
{

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
        return view('pulseira.conectar');
    }

        public function pulseira()
    {
        return view('pulseira.pulseira');
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

        public function convite()
    {
        return view('email.convite');
    }

    public function logar(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'senha'     => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();

        }

        $credenciais = [
        'email' => $request->email,
        'password' => $request->senha 
        ];
    
        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->route('tipo');
        }

        return redirect()->back()
            ->withErrors(['error' => 'Usuário ou senha inválidos'])
            ->withInput();
    }

    public function cadastrar(Request $request)
    {
        // Validação básica dos campos
        $validator = Validator::make($request->all(), [
            'nome'      => 'nullable|string|max:255',
            'email'     => 'required|email|unique:usuario,email',
            'telefone'  => 'nullable|string|max:30',
            'senha'     => 'required|min:6',
            'dataNascimento'  => 'nullable',
            'confirmarSenha' => 'nullable|string|same:senha'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

        if ($request->filled('confirmarSenha') && $request->input('senha') !== $request->input('confirmarSenha')) {
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

        return redirect()->route('login');
    }

    public function cadastrarIdoso(Request $request)
    {
        // Validação básica dos campos
        $validator = Validator::make($request->all(), [
            'nome'     => 'nullable|string|max:255',
            'peso'     => 'nullable|string',
            'altura'   => 'nullable|string',
            'dataNascimento'  => 'nullable|date',
            'genero'   => 'nullable|int'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
 
        $i = new Idoso();
        $i->nome = $request->input('nome');
        $i->peso = $request->input('peso');
        $i->altura = $request->input('altura');
        $i->dataNascimento = $request->input('dataNascimento');
        $i->genero = $request->input('genero');

        $i->save();

        return redirect()->route('idoso');
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

    public function mandarConvite(Request $request)
    {
        $convite = Convite::create([
            'email' => 'convidado@email.com',
            'token' => Convite::generateToken(),
            'expiraEm' => now()->addDays(7),
            'convidadoPor' => auth()->id(),
        ]);

        Mail::to($invite->email)->send(new ConviteEmail($convite));

        return redirect()->back()->with('success', 'Convite enviado!');
    }
}
