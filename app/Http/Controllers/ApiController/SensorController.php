<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\UsuarioController\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    // ============================================================
    // POST /api/leituras
    // Recebe os dados do ESP32 e salva no banco
    // ============================================================
    public function salvarLeitura(Request $request)
    {
        $dados = $request->validate([
            'idDispositivo' => 'required|integer|exists:dispositivos,idDispositivo',
            'acelX'         => 'required|numeric',
            'acelY'         => 'required|numeric',
            'acelZ'         => 'required|numeric',
            'giroX'         => 'required|numeric',
            'giroY'         => 'required|numeric',
            'giroZ'         => 'required|numeric',
            'magnitudeAcel' => 'required|numeric',
            'temperatura'   => 'nullable|numeric',
        ]);

        $idLeitura = DB::table('leitura_sensores')->insertGetId([
            'idDispositivo' => $dados['idDispositivo'],
            'acelX'         => $dados['acelX'],
            'acelY'         => $dados['acelY'],
            'acelZ'         => $dados['acelZ'],
            'giroX'         => $dados['giroX'],
            'giroY'         => $dados['giroY'],
            'giroZ'         => $dados['giroZ'], 
            'magnitudeAcel' => $dados['magnitudeAcel'],
            'temperatura'   => $dados['temperatura'] ?? null,
        ]);

        return response()->json([
            'sucesso'   => true,
            'mensagem'  => 'Leitura salva com sucesso.',
            'idLeitura' => $idLeitura,
        ], 201);
    }

    // ============================================================
    // POST /api/quedas
    // Chamado pelo Python quando detecta uma queda
    // ============================================================
    public function registrarQueda(Request $request)
    {
        $dados = $request->validate([
            'idDispositivo' => 'required|integer|exists:dispositivos,idDispositivo',
            'idLeitura'     => 'required|integer|exists:leitura_sensores,idLeitura',
            'magnitudeAcel' => 'required|numeric',
            'observacao'    => 'nullable|string|max:255',
        ]);

        $idQueda = DB::table('quedas_detectadas')->insertGetId([
            'idDispositivo' => $dados['idDispositivo'],
            'idLeitura'     => $dados['idLeitura'],
            'magnitudeAcel' => $dados['magnitudeAcel'],
            'status'        => 'pendente',
            'observacao'    => $dados['observacao'] ?? null,
            'detectadoEm'   => now(),
        ]);

        return response()->json([
            'sucesso'  => true,
            'mensagem' => 'Queda registrada com sucesso.',
            'idQueda'  => $idQueda,
        ], 201);
    }

    // ============================================================
    // GET /api/quedas
    // Lista quedas detectadas (para o app/dashboard)
    // ============================================================
    public function listarQuedas(Request $request)
    {
        $idDispositivo = $request->query('idDispositivo');

        $query = DB::table('quedas_detectadas as q')
            ->join('leitura_sensores as l', 'q.idLeitura',     '=', 'l.idLeitura')
            ->join('dispositivos as d',     'q.idDispositivo', '=', 'd.idDispositivo')
            ->select(
                'q.idQueda',
                'q.magnitudeAcel',
                'q.status',
                'q.observacao',
                'q.detectadoEm',
                'd.nome as dispositivo',
                'l.acelX', 'l.acelY', 'l.acelZ'
            )
            ->orderBy('q.detectadoEm', 'desc');

        if ($idDispositivo) {
            $query->where('q.idDispositivo', $idDispositivo);
        }

        return response()->json([
            'sucesso' => true,
            'dados'   => $query->get(),
        ]);
    }

    // ============================================================
    // PATCH /api/quedas/{id}
    // Atualiza status da queda (confirmada ou falso positivo)
    // ============================================================
    public function atualizarStatus(Request $request, $id)
    {
        $dados = $request->validate([
            'status'     => 'required|in:confirmada,falso_positivo',
            'observacao' => 'nullable|string|max:255',
        ]);

        $atualizado = DB::table('quedas_detectadas')
            ->where('idQueda', $id)
            ->update([
                'status'     => $dados['status'],
                'observacao' => $dados['observacao'] ?? null,
            ]);

        if (!$atualizado) {
            return response()->json([
                'sucesso'  => false,
                'mensagem' => 'Queda não encontrada.',
            ], 404);
        }

        return response()->json([
            'sucesso'  => true,
            'mensagem' => "Status atualizado para: {$dados['status']}",
        ]);
    }

    // ============================================================
    // GET /api/dispositivos/{id}/status
    // Verifica se o dispositivo está ativo
    // ============================================================
    public function statusPulseira($idDispositivo)
    {
        $ultima = DB::table('leitura_sensores')
            ->where('idDispositivo', $idDispositivo)
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$ultima) {
            return response()->json([
                'sucesso'   => false,
                'mensagem'  => 'Nenhuma leitura encontrada para este dispositivo.',
                'conectada' => false,
            ]);
        }

        $segundos = now()->diffInSeconds($ultima->created_at);
        $conectada = $segundos <= 30;

        return response()->json([
            'sucesso'   => true,
            'conectada' => $conectada,
            'mensagem'  => $conectada
                ? 'Pulseira conectada.'
                : 'Pulseira sem sinal — verifique a conexão.',
        ]);
    }
}