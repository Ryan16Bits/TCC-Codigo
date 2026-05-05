@extends("index")
@section("conteudo")
<main>
  <div class="container text-center">
    <br>
    <br>
    <h2 class="txt-main">Bem Vindo, Gordon Freeman!</h2>
    <br>
    <div class="text-start">
        <h4 class="txt-main">Gerenciamento:</h4>
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
          <i class="fa-solid fa-user-doctor fa-2x"></i>
          <span class="txt-main">CADASTRAR CUIDADOR</span>
        </div></a>
      </div>
    </div>
    <br>
    <div class="text-start">
      <h4 class="txt-main">Pulseiras:</h4>
    </div>
    <div class="row">
      <div class="col">
        <a href="#" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
		      <br>
          <i class="fa-solid fa-plug-circle-check fa-2x"></i>
		      <span class="txt-main">PULSEIRAS CADASTRADAS</span>
        </div></a>
      </div>
      <div class="col">
        <a href="#" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
          <br>
          <i class="fa-solid fa-rss fa-2x"></i>
          <span class="txt-main">CADASTRAR PULSEIRA</span>
        </div></a>
      </div>
    </div>
    <br>
    <div class="text-start">
      <h4 class="txt-main">Relatórios:</h4>
    </div>
    <div class="row">
      <div class="col">
        <a href="#" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
		      <br>
          <i class="fa-regular fa-file-lines fa-2x"></i>
		      <span class="txt-main">RELATÓRIOS</span>
        </div></a>
      </div>
      <div class="col">
        <a href="#" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
          <br>
          <i class="fa-solid fa-book fa-2x"></i>
          <span class="txt-main">HISTÓRICO</span>
        </div></a>
      </div>
    </div>
  </div>
</main>
@endsection