
<?php $__env->startSection("conteudo"); ?>
<main class="container mt-5">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h1 class="txt-main fw-bold">
            Cadastro de Idoso
        </h1>

        <p class="txt-small">
            Preencha as informações abaixo para cadastrar um novo usuário no sistema.
        </p>
    </div>

    <!-- CARD PRINCIPAL -->
    <div class="card shadow border-0 bg-custom-card">

        <div class="card-body p-4">

            <form class="list" method="post" action="<?php echo e(route('idoso.post')); ?>">

                <!-- FOTO -->
                <div class="text-center mb-5">

                    <div class="rounded-circle mx-auto d-flex justify-content-center align-items-center shadow-sm"
                        style="
                            width:140px;
                            height:140px;
                            background:#EEF4FF;
                            border:3px solid #D9E8FF;
                        ">

                        <i class="fa-solid fa-user fa-4x"
                            style="color:#7B9ACC;"></i>

                    </div>

                    <div class="mt-3">

                        <label class="btn btn-outline-primary">

                            <i class="fa-solid fa-camera me-2"></i>
                            Adicionar Foto

                            <input type="file" hidden>

                        </label>

                    </div>

                    <p class="txt-small mt-2 mb-0">
                        Formatos permitidos: JPG, PNG ou JPEG.
                    </p>

                </div>

                <!-- NOME -->
                <div class="mb-4">

                    <label class="form-label txt-main fw-semibold">
                        Nome Completo
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-user"></i>
                        </span>

                        <input type="text"
                            class="form-control"
                            placeholder="Digite o nome do idoso"
                            name="nome" />

                    </div>

                </div>

                <!-- PESO E ALTURA -->
                <div class="row">

                    <!-- PESO -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Peso
                        </label>

                        <div class="input-group">

                            <input type="number"
                                class="form-control"
                                placeholder="Ex: 70"
                                name="peso">

                            <span class="input-group-text bg-white">
                                kg
                            </span>

                        </div>

                    </div>

                    <!-- ALTURA -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Altura
                        </label>

                        <div class="input-group">

                            <input type="number"
                                class="form-control"
                                placeholder="Ex: 1.70"
                                step="0.01"
                                name="altura">

                            <span class="input-group-text bg-white">
                                m
                            </span>

                        </div>

                    </div>

                    <!-- DATA -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Data de Nascimento
                        </label>

                        <div class="input-group">

                            <input type="date" class="form-control" step="0.01" name="dataNascimento">

                        </div>

                    </div>

                    <!-- GENERO -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Gênero
                        </label>

                        <div class="input-group">

                        <select id="gender" name="genero" class="form-control" step="0.01">
                            <option value="">Selecione:</option>
                            <option value="1">Homem</option>
                            <option value="2">Mulher</option>
                        </select>

                        </div>

                    </div>
                
                </div>

                <!-- OBS -->
                <div class="alert"
                    style="background:#EEF4FF; border:1px solid #CFE0FF;">

                    <div class="d-flex align-items-start">

                        <i class="fa-solid fa-circle-info me-3 mt-1"
                            style="color:#2563EB;"></i>

                        <div>

                            <strong class="txt-main">
                                Informações importantes
                            </strong>

                            <p class="txt-small mb-0">
                                Os dados cadastrados serão utilizados para monitoramento,
                                identificação e acompanhamento do usuário no sistema.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- BOTÃO -->
                <div class="d-flex justify-content-end mt-4">

                    <button class="btn btn-custom px-5 py-2">

                        <i class="fa-solid fa-floppy-disk me-2"></i>
                        Cadastrar

                    </button>

                </div>

            </form>

        </div>

    </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/cadastrar/idoso.blade.php ENDPATH**/ ?>