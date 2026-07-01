

<?php $__env->startSection("conteudo"); ?>
<div class="container mt-4">

<h5 class="txt-main mb-3">Dados pessoais</h5>

<div class="card p-4 shadow">
    <p><strong>Email:</strong> usuario@email.com</p>
    <p><strong>Telefone:</strong> (31) 99999-9999</p>
    <p><strong>Data de Nascimento:</strong></p>
</div>

<div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-3">

    <a href="/perfil" class="btn btn-outline-secondary btn-sm mt-3">Voltar</a>

    <a class="btn btn-custom btn-custom:hover btn-lg px-5 py-2" href="editarDados" role="button">Editar Dados</a>

    </button>

</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/perfil/dados.blade.php ENDPATH**/ ?>