@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main mb-3">Relatórios</h5>

    <!-- FILTROS -->
    <div class="d-flex gap-2 mb-3">
        <button class="btn btn-custom btn-sm">7 dias</button>
        <button class="btn btn-outline-secondary btn-sm">Mês</button>
        <button class="btn btn-outline-secondary btn-sm">Ano</button>
    </div>

    <!-- GRÁFICO -->
    <div class="card shadow p-3 mb-4">
        <h6 class="mb-3">Quedas no período</h6>
        <canvas id="graficoQuedas" height="120"></canvas>
    </div>

    <!-- HISTÓRICO -->
    <h6 class="mb-3 txt-main">Histórico</h6>

    <!-- ITEM -->
    <div class="card shadow-sm p-3 mb-3 d-flex flex-row justify-content-between align-items-center">
        <div>
            <div class="txt-main">25/04/2026 - 14:32</div>
            <div class="txt-small">Queda detectada</div>
        </div>

        <a href="/observacao">
            <i class="fa-solid fa-pen"></i>
        </a>
    </div>

    <div class="card shadow-sm p-3 mb-3 d-flex flex-row justify-content-between align-items-center">
        <div>
            <div class="txt-main">20/04/2026 - 09:10</div>
            <div class="txt-small">Queda detectada</div>
        </div>

        <a href="/observacao">
            <i class="fa-solid fa-pen"></i>
        </a>
    </div>

    <div class="card shadow-sm p-3 mb-3 d-flex flex-row justify-content-between align-items-center">
        <div>
            <div class="txt-main">18/04/2026 - 08:20</div>
            <div class="txt-small">Queda detectada</div>
        </div>

        <a href="/observacao">
            <i class="fa-solid fa-pen"></i>
        </a>
    </div>

</div>

<!-- CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('graficoQuedas');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
        datasets: [{
            label: 'Quedas',
            data: [0, 1, 1, 2, 1, 3, 2],
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