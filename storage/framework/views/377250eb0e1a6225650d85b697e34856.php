

<?php $__env->startSection("conteudo"); ?>
<div class="container mt-4">

    <!-- TOPO -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="txt-main mb-1">
                Olá, Cuidador 👋
            </h4>

            <span class="txt-small">
                Monitoramento ativo
            </span>
        </div>

    </div>

    <!-- ACESSOS -->
    <div class="row">

        <!-- PERFIL -->
        <div class="col-6 mb-3">

            <a href="/perfil" class="text-decoration-none">

                <div class="card shadow-sm border-0 rounded-4 p-4 text-center h-100">

                    <i class="fa-solid fa-user fa-2x mb-3"></i>

                    <span class="txt-main">
                        Perfil
                    </span>

                </div>

            </a>

        </div>

        <!-- CONFIGURAÇÕES -->
        <div class="col-6 mb-3">

            <a href="/configuracoes" class="text-decoration-none">

                <div class="card shadow-sm border-0 rounded-4 p-4 text-center h-100">

                    <i class="fa-solid fa-gear fa-2x mb-3"></i>

                    <span class="txt-main">
                        Configurações
                    </span>

                </div>

            </a>

        </div>

        <!-- SUPORTE -->
        <div class="col-6 mb-3">

            <a href="/configuracoes/suporte" class="text-decoration-none">

                <div class="card shadow-sm border-0 rounded-4 p-4 text-center h-100">

                    <i class="fa-solid fa-headset fa-2x mb-3"></i>

                    <span class="txt-main">
                        Suporte
                    </span>

                </div>

            </a>

        </div>

        <!-- DÚVIDAS -->
        <div class="col-6 mb-3">

            <a href="/duvidas" class="text-decoration-none">

                <div class="card shadow-sm border-0 rounded-4 p-4 text-center h-100">

                    <i class="fa-solid fa-circle-question fa-2x mb-3"></i>

                    <span class="txt-main">
                        Dúvidas
                    </span>

                </div>

            </a>

        </div>

    </div>

    <!-- CARD INFERIOR -->
    <div class="card shadow-sm border-0 rounded-4 p-4 mt-2 text-center">

        <span class="txt-small">
            O monitoramento da pulseira está ativo e funcionando normalmente.
        </span>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/homeCuidador.blade.php ENDPATH**/ ?>