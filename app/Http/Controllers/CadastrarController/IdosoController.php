<?php
 
namespace App\Http\Controllers;
 
use App\Models\Idoso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
 
class IdosoController extends Controller
{

    public function cadastrar(Request $request)
    {
        // Validação básica dos campos
        $validator = Validator::make($request->all(), [
            'nome'     => 'nullable|string|max:255',
            'peso'     => 'required|string',
            'altura'   => 'nullable|string',
            'dataNascimento'  => 'nullable|datetime',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
            }
 
        $cl = new Idoso();
        $cl->nome = $request->input('nome');
        $cl->peso = $request->input('peso');
        $cl->altua = $request->input('altura');
        $cl->dataNascimento = $request->input('dataNascimento');

        $cl->save();

        return redirect()->route('home');
    }
}
