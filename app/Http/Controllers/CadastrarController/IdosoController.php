<?php
 
namespace App\Http\Controllers;
 
use App\Models\Produto;
use Illuminate\Http\Request;
 
class IdosoController extends Controller
{
        // Recebe os dados do formulário e salva no banco
    public function idoso(Request $request)
    {
        // Validação básica dos campos
        $request->validate([
            'nome'     => 'required',
            'peso'     => 'required',
            'altura'   => 'required',
            'data'     => 'required',
            'genero'   => 'required'
        ]);
 
        // Cria a conta no banco
        Idoso::create([
            'nome'       => $request->nome,
            'peso'       => $request->peso,
            'altura'     => $request->altura,
            'data'       => $request->data,
            'genero'     => $request->genero,
        ]);
 
        // Redireciona para a listagem
        return redirect('/produtos');
    }
}