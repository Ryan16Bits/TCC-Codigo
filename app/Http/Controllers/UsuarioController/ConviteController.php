<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModels\Convite;
use App\Models\UsuarioModels\Usuario;
use App\Models\UsuarioModels\Cuidador;
use App\Mail\ConviteEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ConviteController extends Controller
{
    public function enviarConvite(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:convite,email|unique:usuario,email',
            'expiraEmDias' => 'nullable|integer|min:1|max:30',
        ]);

        if (User::where('email', $validated['email'])->exists()) {
            return response()->json([
                'message' => 'Este email já está cadastrado no sistema.'
            ], 422);
        }
    

        $convite = Convite::create([
            'email' => $validated['email'],
            'token' => Convite::generateToken(),
            'expiraEm' => now()->addDays($validated['expiraEmDias'] ?? 7),
            'convidadorPor' => auth()->id(),
        ]);

        try {
            Mail::to($convite->email)->send(new ConviteEmail($convite));

            return response()->json([
                'message' => 'Convite enviado com sucesso!',
                'invite' => $convite
        
            ], 201);
        } catch (\Exception $e) {
            $convite->delete();
            return response()->json([
                'message' => 'Erro ao enviar email: ' . $e->getMessage()
            ], 500);
        }
    }

    public function mostrarFormularioAceitacao($token)
    {
        $convite = Convite::where('token', $token)->firstOrFail();

        if (!$convite->isValid()) {
            abort(410, 'Este convite expirou ou já foi utilizado.');
        }

        return view('convite');
    }

    public function aceitarConvite(Request $request, $token)
    {
        $convite = Convite::where('token', $token)->firstOrFail();

        if (!$convite->isValid()) {
            return response()->json([
                'message' => 'Este convite expirou ou já foi utlizado.'
            ], 410);
        }

        if ($request->email !== $convite->email) {
            return response()->json([
                'message' => 'O email informado não corresponde ao convite.'
            ], 422);
        }

        $validator = Validator::make($request->all(), [
            'nome'      => 'required|string|max:255',
            'email'     => 'required|email|unique',
            'telefone'  => 'required|string|max:30',
            'senha'     => 'required|min:6'
        ]);

        $c = new Cuidador();
        $c->nome = $request->input('nome');
        $c->email = $request->input('email', explode('@', $request->input('email'))[0]);
        $c->telefone = $request->input('telefone');
        $c->senha = Hash::make($request->input('senha'));

        $c->save();

        $convite->markAsAccepted();

        Auth::login($c);

        return redirect()->route('home')
            ->with('success', 'Conta criada com sucesso! Bem-vindo(a)!');
    }
}