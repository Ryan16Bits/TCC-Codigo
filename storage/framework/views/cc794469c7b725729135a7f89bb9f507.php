

<?php $__env->startSection("conteudo"); ?>
<div class="container mt-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="txt-main">Notificações</h5>

        <span class="badge bg-danger">
            3 novas
        </span>
    </div>

    <!-- ALERTA -->
    <div class="card shadow-sm border-0 rounded-4 p-3 mb-3">

        <div class="d-flex align-items-start gap-3">

            <div>
                <i class="fa-solid fa-bell fa-xl text-warning"></i>
            </div>

            <div class="flex-grow-1">

                <div class="d-flex justify-content-between">
                    <strong class="txt-main">
                        Nova notificação
                    </strong>

                    <small class="txt-small">
                        Agora
                    </small>
                </div>

                <p class="txt-small mb-0">
                    A pulseira enviou uma nova atualização.
                </p>

            </div>

        </div>

    </div>

    <!-- BATERIA -->
    <div class="card shadow-sm border-0 rounded-4 p-3 mb-3">

        <div class="d-flex align-items-start gap-3">

            <div>
                <i class="fa-solid fa-battery-quarter fa-xl text-warning"></i>
            </div>

            <div class="flex-grow-1">

                <div class="d-flex justify-content-between">
                    <strong class="txt-main">
                        Bateria baixa
                    </strong>

                    <small class="txt-small">
                        10 min
                    </small>
                </div>

                <p class="txt-small mb-0">
                    A pulseira está com pouca bateria.
                </p>

            </div>

        </div>

    </div>

    <!-- CONEXÃO -->
    <div class="card shadow-sm border-0 rounded-4 p-3 mb-3">

        <div class="d-flex align-items-start gap-3">

            <div>
                <i class="fa-solid fa-wifi fa-xl text-success"></i>
            </div>

            <div class="flex-grow-1">

                <div class="d-flex justify-content-between">
                    <strong class="txt-main">
                        Pulseira conectada
                    </strong>

                    <small class="txt-small">
                        30 min
                    </small>
                </div>

                <p class="txt-small mb-0">
                    A conexão da pulseira foi estabelecida.
                </p>

            </div>

        </div>

    </div>

    <!-- SISTEMA -->
    <div class="card shadow-sm border-0 rounded-4 p-3 mb-3">

        <div class="d-flex align-items-start gap-3">

            <div>
                <i class="fa-solid fa-gear fa-xl text-primary"></i>
            </div>

            <div class="flex-grow-1">

                <div class="d-flex justify-content-between">
                    <strong class="txt-main">
                        Atualização do sistema
                    </strong>

                    <small class="txt-small">
                        Ontem
                    </small>
                </div>

                <p class="txt-small mb-0">
                    Novas melhorias foram adicionadas ao aplicativo.
                </p>

            </div>

        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/notificacoes.blade.php ENDPATH**/ ?>