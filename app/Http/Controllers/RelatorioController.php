<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
 
class RelatorioController extends Controller
{
    // ============================================================
    // GET /relatorio
    // Tela de relatório — gráfico de quedas + histórico + última leitura
    // Reaproveita as tabelas leitura_sensores e quedas_detectadas
    // que já são alimentadas pela API (rotas/api.php)
    // ============================================================
    public function index(Request $request)
    {
        // Filtro de período vindo dos botões (7 dias / mês / ano)
        $periodo = (int) $request->query('periodo', 7);
 
        // ID do dispositivo — ajuste se vocês tiverem mais de uma pulseira
        $idDispositivo = $request->query('idDispositivo', 1);
 
        // ----------------------------------------------------------
        // Quedas agrupadas por dia para o gráfico (Chart.js)
        // ----------------------------------------------------------
        $quedasPorDia = DB::table('quedas_detectadas')
            ->where('idDispositivo', $idDispositivo)
            ->where('detectadoEm', '>=', now()->subDays($periodo))
            ->selectRaw('DATE(detectadoEm) as dia, COUNT(*) as total')
            ->groupBy('dia')
            ->orderBy('dia')
            ->get();
 
        $labels = $quedasPorDia->pluck('dia')->map(function ($dia) {
            return Carbon::parse($dia)->format('d/m');
        });
        $dados = $quedasPorDia->pluck('total');
 
        // ----------------------------------------------------------
        // Histórico de quedas — junta com a leitura para mostrar
        // os dados do acelerômetro daquele momento
        // ----------------------------------------------------------
        $historico = DB::table('quedas_detectadas as q')
            ->join('leitura_sensores as l', 'q.idLeitura', '=', 'l.idLeitura')
            ->where('q.idDispositivo', $idDispositivo)
            ->select(
                'q.idQueda',
                'q.magnitudeAcel',
                'q.status',
                'q.detectadoEm',
                'l.acelX', 'l.acelY', 'l.acelZ'
            )
            ->orderBy('q.detectadoEm', 'desc')
            ->take(20)
            ->get();
 
        // ----------------------------------------------------------
        // Última leitura do sensor (para o card de X, Y, Z)
        // ----------------------------------------------------------
        $ultima = DB::table('leitura_sensores')
            ->where('idDispositivo', $idDispositivo)
            ->orderBy('created_at', 'desc')
            ->first();
 
        // Indica se a última leitura corresponde a uma queda detectada
        $movimentoBrusco = false;
        if ($ultima) {
            $movimentoBrusco = DB::table('quedas_detectadas')
                ->where('idLeitura', $ultima->idLeitura)
                ->exists();
        }
 
        return view('relatorio', compact(
            'labels',
            'dados',
            'historico',
            'ultima',
            'movimentoBrusco',
            'periodo'
        ));
    }
}
 