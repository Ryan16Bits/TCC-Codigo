
<?php $__env->startSection("conteudo"); ?>
<div class="container mt-4">
    <!-- TÍTULO -->
    <h5 class="txt-main mb-3">Relatórios</h5>
 
    <!-- FILTROS -->
    <div class="d-flex gap-2 mb-3">
        <a href="<?php echo e(route('relatorio', ['periodo' => 7])); ?>"
           class="btn btn-sm <?php echo e($periodo == 7 ? 'btn-custom' : 'btn-outline-secondary'); ?>">
            7 dias
        </a>
        <a href="<?php echo e(route('relatorio', ['periodo' => 30])); ?>"
           class="btn btn-sm <?php echo e($periodo == 30 ? 'btn-custom' : 'btn-outline-secondary'); ?>">
            Mês
        </a>
        <a href="<?php echo e(route('relatorio', ['periodo' => 365])); ?>"
           class="btn btn-sm <?php echo e($periodo == 365 ? 'btn-custom' : 'btn-outline-secondary'); ?>">
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
 
    <?php $__empty_1 = true; $__currentLoopData = $historico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card shadow-sm p-3 mb-3 d-flex flex-row justify-content-between align-items-center">
            <div>
                <div class="txt-main">
                    <?php echo e(\Carbon\Carbon::parse($item->detectadoEm)->format('d/m/Y - H:i')); ?>

                </div>
                <div class="txt-small">
                    Queda detectada
                    <?php if($item->status === 'confirmada'): ?>
                        <span class="text-danger">(confirmada)</span>
                    <?php elseif($item->status === 'falso_positivo'): ?>
                        <span class="text-muted">(falso positivo)</span>
                    <?php else: ?>
                        <span class="text-warning">(pendente)</span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="txt-small text-end">
                <?php echo e(number_format($item->magnitudeAcel, 1)); ?> m/s²
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-muted">Nenhuma queda registrada no período.</p>
    <?php endif; ?>
</div>
 
<div class="container mt-4 text-center">
    <h5 class="mb-3 txt-main">Sensor de Queda</h5>
    <div class="card shadow p-4">
        <p class="txt-small">Última leitura</p>
 
        <?php if($ultima): ?>
            <h4>X: <?php echo e(number_format($ultima->acelX, 2)); ?></h4>
            <h4>Y: <?php echo e(number_format($ultima->acelY, 2)); ?></h4>
            <h4>Z: <?php echo e(number_format($ultima->acelZ, 2)); ?></h4>
            <p class="txt-small mt-2">
                <?php echo e(\Carbon\Carbon::parse($ultima->created_at)->format('d/m/Y H:i:s')); ?>

            </p>
 
            <?php if($movimentoBrusco): ?>
                <p class="text-danger mt-3">Movimento brusco detectado</p>
            <?php else: ?>
                <p class="text-success mt-3">Normal</p>
            <?php endif; ?>
        <?php else: ?>
            <p class="text-muted mt-3">Nenhuma leitura recebida ainda.</p>
        <?php endif; ?>
    </div>
</div>
 
<!-- CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const labels = <?php echo json_encode($labels, 15, 512) ?>;
const dados  = <?php echo json_encode($dados, 15, 512) ?>;
 
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/relatorio/relatorios.blade.php ENDPATH**/ ?>