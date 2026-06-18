@extends("index")
@section("conteudo")
<div class="container mt-4">
    <!-- TÍTULO -->
    <h5 class="txt-main mb-3">Relatórios</h5>
 
    <!-- FILTROS -->
    <div class="d-flex gap-2 mb-3">
        <a href="{{ route('relatorio', ['periodo' => 7]) }}"
           class="btn btn-sm {{ $periodo == 7 ? 'btn-custom' : 'btn-outline-secondary' }}">
            7 dias
        </a>
        <a href="{{ route('relatorio', ['periodo' => 30]) }}"
           class="btn btn-sm {{ $periodo == 30 ? 'btn-custom' : 'btn-outline-secondary' }}">
            Mês
        </a>
        <a href="{{ route('relatorio', ['periodo' => 365]) }}"
           class="btn btn-sm {{ $periodo == 365 ? 'btn-custom' : 'btn-outline-secondary' }}">
            Ano
        </a>
    </div>
 
    <!-- GRÁFICO -->
    <div class="card shadow p-3 mb-4">
        <h6 class="mb-3">Quedas no período</h6>
        <canvas id="graficoQuedas" height="120"></canvas>
    </div>
 
    <!-- HISTÓRICO -->
    <h6 class="mb-3 txt-main">Histórico</h6>
 
    @forelse($historico as $item)
        <div class="card shadow-sm p-3 mb-3 d-flex flex-row justify-content-between align-items-center">
            <div>
                <div class="txt-main">
                    {{ \Carbon\Carbon::parse($item->detectadoEm)->format('d/m/Y - H:i') }}
                </div>
                <div class="txt-small">
                    Queda detectada
                    @if($item->status === 'confirmada')
                        <span class="text-danger">(confirmada)</span>
                    @elseif($item->status === 'falso_positivo')
                        <span class="text-muted">(falso positivo)</span>
                    @else
                        <span class="text-warning">(pendente)</span>
                    @endif
                </div>
            </div>
            <div class="txt-small text-end">
                {{ number_format($item->magnitudeAcel, 1) }} m/s²
            </div>
        </div>
    @empty
        <p class="text-muted">Nenhuma queda registrada no período.</p>
    @endforelse
</div>
 
<div class="container mt-4 text-center">
    <h5 class="mb-3 txt-main">Sensor de Queda</h5>
    <div class="card shadow p-4">
        <p class="txt-small">Última leitura</p>
 
        @if($ultima)
            <h4>X: {{ number_format($ultima->acelX, 2) }}</h4>
            <h4>Y: {{ number_format($ultima->acelY, 2) }}</h4>
            <h4>Z: {{ number_format($ultima->acelZ, 2) }}</h4>
            <p class="txt-small mt-2">
                {{ \Carbon\Carbon::parse($ultima->created_at)->format('d/m/Y H:i:s') }}
            </p>
 
            @if($movimentoBrusco)
                <p class="text-danger mt-3">Movimento brusco detectado</p>
            @else
                <p class="text-success mt-3">Normal</p>
            @endif
        @else
            <p class="text-muted mt-3">Nenhuma leitura recebida ainda.</p>
        @endif
    </div>
</div>
 
<!-- CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const labels = @json($labels);
const dados  = @json($dados);
 
const ctx = document.getElementById('graficoQuedas');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Quedas',
            data: dados,
            borderWidth: 2,
            tension: 0.4
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        }
    }
});
</script>
@endsection