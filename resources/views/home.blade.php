@extends("index")
@section("conteudo")
<main>
  <div class="container text-center">
    <br>
    <br>
    <h2 class="txt-main">Bem Vindo, Gordon Freeman!</h2>
    <br>
    <div class="text-start">
        <h4 class="txt-main">Gerenciamento:
    </div>
    <div class="row">
      <div class="col">
        <a href="#" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
		  <br>
          <i class="fa-solid fa-person-cane fa-2x"></i>
		  <span class="txt-main">CADASTRAR IDOSO</span>
        </div></a>
      </div>
      <div class="col">
        <a href="#" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
          <br>
          <i class="fa-solid fa-user-doctor fa-2x mx-auto"></i>
          <span class="txt-main">CADASTRAR CUIDADOR</span>
        </div></a>
      </div>
    </div>
    <br>
    <div class="row align-items-center">
      <div class="col">
        <div class="card shadow bor card:hover">
          <br>
          <br>
          <i class="fa-regular fa-file-lines fa-10x mx-auto"></i>
          <br>
          <br>
          <a href="#" class="txt-main">RELATÓRIO</a>
        </div>
      </div>
      <div class="col">
        <div class="card shadow bor card:hover">
          <br>
          <br>
          <i class="fa-solid fa-rss fa-10x mx-auto"></i>
          <br>
          <br>
          <a href="#" class="txt-main">CONECTAR PULSEIRA</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
