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
        <a href="idoso" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
		      <br>
          <i class="fa-solid fa-person-cane fa-2x"></i>
		      <span class="txt-main">Cadastrar Idoso</span>
        </div></a>
      </div>
      <div class="col">
        <a href="cuidador" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
          <br>
          <i class="fa-solid fa-user-doctor fa-2x"></i>
          <span class="txt-main">Cadastar Cuidador</span>
        </div></a>
      </div>
    </div>
    <br>
    <div class="text-start">
      <h4 class="txt-main">Pulseiras:</h4>
    </div>
    <div class="row">
        <a href="pulseiras" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 82px; width: 560px;">
        <div class="d-flex justify-content-between align-items-center txt-main">
          <div>
            <i class="fa-solid fa-bookmark fa-5x"></i>
          </div>
          <h5>Pulseira 1</h5>
          <span>Conectada</span>
        <div>
          <i class="fa-solid fa-heart-pulse text-danger"></i>
        <span class="txt-main">
            78 BPM
        </span>
        </div>
          </div>
        </div></a>
    </div>
    <br>
    <div class="row">
    <a href="conectar" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start rounded-circle" style="height: 36px; width: 42px;">
          <i class="fa-solid fa-plus fa-2x"></i>
        </div></a>
    </div>
    <br>

    <div class="text-start">
      <h4 class="txt-main">Relatórios:</h4>
    </div>
    <div class="row">
      <div class="col">
        <a href="relatorios" class="text-body"><div class="card shadow bor card:hover d-inline-block text-start" style="height: 90px; width: 200px;">
		      <br>
          <i class="fa-regular fa-file-lines fa-2x"></i>
		      <span class="txt-main">Relatórios</span>
        </div></a>
      </div>
    </div>
  </div>
</main>
@endsection