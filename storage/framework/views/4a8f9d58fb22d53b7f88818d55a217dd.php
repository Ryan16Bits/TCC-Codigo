<?php $__env->startSection("conteudo"); ?>
<main class="bg-custom d-flex align-items-center">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-5 col-lg-4">

                <div class="top text-center">
                 <img src="assets/img/logo.png" alt="Logo" class="img-login">
                </div>

                <div class="card shadow border-0">

                    <div class="card-header bg-secundary text-center">
                     <h4 class="mb-0 txt-main">Cadastrar</h4>
                    </div>

                    <div class="card-body p-4 bg-custom-card">

                        <form class="list" method="post" action="<?php echo e(route('cadastro.post')); ?>">

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label txt-small">Email</label>
                                <input type="email" class="form-control form-control-lg txt-small" placeholder="Insira seu email..." name="email" value="<?php echo e(isset($cadastro) ? $cadastro->email : ''); ?>" required/>
                            </div>
                            
                            <!-- Senha -->
                            <div class="mb-3">
                                <label class="form-label txt-small">Senha</label>
                                <input type="password" class="form-control form-control-lg txt-small" placeholder="Insira sua senha..." name="senha" value="<?php echo e(isset($cadastro) ? $cadastro->senha : ''); ?>" required/>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label txt-small">Repetir Senha</label>
                                <input type="password" class="form-control form-control-lg txt-small" placeholder="Insira sua senha novamente..." name="senha" value="<?php echo e(isset($cadastro) ? $cadastro->senha : ''); ?>" required/>
                            </div>

                            <!-- Botão -->
                            <div class="d-grid mb-3">
                                <button class="btn btn-custom btn-custom:hover btn-lg" type="submit">Cadastrar</button>
                            </div>
                            
                            <div class="d-grid mb-3 text-center">
                                <hr>
                                <p class="txt-small">Já possui conta?</p>
                                <a class="btn btn-custom btn-custom:hover btn-lg" href="/" role="button">Login</a>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("login/index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/login/cadastro.blade.php ENDPATH**/ ?>