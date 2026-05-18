<?php
 
namespace App\Http\Controllers;
 
use App\Models\Produto;
use Illuminate\Http\Request;
 
class CadastroController extends Controller
{
        // Recebe os dados do formulário e salva no banco
    public function cadastrar(Request $request)
    {
        // Validação básica dos campos
        $request->validate([
            'email'     => 'required',
            'senha'     => 'required'
        ]);
 
        // Cria a conta no banco
        Cadastro::create([
            'email'      => $request->email,
            'senha'      => $request->senha
        ]);
 
        // Redireciona para a listagem
        return redirect('/produtos');
    }
}