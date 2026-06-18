
<?php $__env->startSection("conteudo"); ?>
<main class="container mt-5">

    <h2 class="txt-main mb-4">Conectar Pulseira</h2>


    <div class="card shadow bg-custom-card mb-4 text-center">
        <div class="card-body">

            <h5 class="mb-3">Conectar via QR Code</h5>

            <!-- QR CODE -->
            <div class="card card:hover p-3 d-inline-flex align-items-center justify-content-center border rounded mb-3" style="width: 115px; height: 100px;">
                <i class="fa-regular fa-camera fa-2x"></i>
            </div>

            <p class="txt-small">Escaneie com a câmera do celular</p>

        </div>
    </div>

    <div class="card shadow bg-custom-card mb-4">
        <div class="card-body">

            <h5 class="mb-3">Conectar via Código</h5>

            <div class="d-flex gap-2">
                <input type="text" class="form-control" placeholder="Digite o código da pulseira">
                <button class="btn btn-custom">Conectar</button>
            </div>

        </div>
    </div>

    <div class="card shadow bg-custom-card">
        <div class="card-body">

            <h5 class="mb-3">Status da Conexão</h5>

            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-danger">Desconectado</span>
                <span class="txt-small">Nenhuma pulseira vinculada</span>
            </div>

        </div>
    </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/pulseira/conectar.blade.php ENDPATH**/ ?>