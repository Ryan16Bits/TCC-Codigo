<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use App\Models\User;
use App\Mail\InviteEmail;
use Illuminate\Http\Request;
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
    }

    $convite = Convite::create([
        'email' => $validated['email'],
        'token' => Convite::generateToken(),
        'expiraEm' => now()->addDays($validated['expiraEmDias'] ?? 7)
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

        //COLOCAR A CONEXÃO COM O CUIDADOR AQUI

        $convite->markAsAccepted();

        auth()->login//USUARIO

        return redirect()->route//PAGINA DE LOGIN
    }
}