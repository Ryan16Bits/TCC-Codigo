@extends("login/index")
@section("conteudo")
<main>
  <br>
  <br>
  <br>
  <br>
  <h2 class="txt-main text-center ">Escolha o seu tipo de conta:</h2>
  <br>
  <br>
  <br>
  <br>
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <div class="card shadow bor card:hover">
          <br>
          <br>
          <i class="fa-brands fa-black-tie fa-10x mx-auto"></i>
          <br>
          <br>
          <a href="#" class="txt-main">ADMINISTRADOR</a>
          <hr>
          <i class="fa-solid fa-question fa-3x mx-auto"></i>
          <br>
          <a href="#" class="txt-main">AJUDA</a>
        </div>
      </div>
      <div class="col">
        <div class="card shadow bor card:hover">
          <br>
          <br>
          <i class="fa-solid fa-person fa-10x mx-auto"></i>
          <br>
          <br>
          <a href="#" class="txt-main">CUIDADOR</a>
          <hr>
          <i class="fa-solid fa-question fa-3x mx-auto"></i>
          <br>
          <a href="#" class="txt-main">AJUDA</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection