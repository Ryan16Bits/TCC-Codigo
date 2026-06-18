
<?php $__env->startSection("conteudo"); ?>
<main>
  <br>
  <br>
  <br>
  <h2 class="txt-main text-center ">Escolha o seu tipo de conta:</h2>
  <br>
  <br>
  <br>
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <a href="home" class="txt-body"><div class="card shadow bor card:hover d-inline-block text-center" style="height: 280px; width: 200px;">
          <span class="txt-main">ADMINISTRADOR</span>
          <br>
          <br>
          <br>
          <i class="fa-brands fa-black-tie fa-10x mx-auto"></i>
        </div></a>
      </div>
      <div class="col">
        <a href="homeCuidador" class="txt-body"><div class="card shadow bor card:hover d-inline-block text-center" style="height: 280px; width: 200px;">
          <span class="txt-main">CUIDADOR</span>
          <br>
          <br>
          <br>
          <i class="fa-solid fa-person fa-10x mx-auto"></i>
        </div></a>
      </div>
    </div>
  </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("login/index2", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\TCC\resources\views/login/tipoConta.blade.php ENDPATH**/ ?>