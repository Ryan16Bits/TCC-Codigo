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
        <a href="idoso" class="text-body text-decoration-none">
          <div class="d-inline-block text-start card shadow-lg border-0 rounded-4 p-3 card:hover" style="height: auto; width: 200px">
            <i class="fa-solid fa-person-cane fa-2x txt-main"></i>
            <span class="txt-main">Idoso</span>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="cuidador" class="text-body text-decoration-none">
          <div class="d-inline-block text-start card shadow-lg border-0 rounded-4 p-3 card:hover" style="height: auto; width: 200px">
            <i class="fa-solid fa-user-doctor fa-2x txt-main"></i>
            <span class="txt-main">Cuidador</span>
          </div>
        </a>
      </div>
    </div>
    <br>
    
    <div class="text-start">
      <h4 class="txt-main">Pulseiras:</h4>
    </div>
    
    <div class="row">
      <div class="d-flex justify-content-center">
      <a href="pulseiras" class="text-decoration-none">
        <div class="card shadow-lg border-0 rounded-4 p-3 card:hover" style="width: 100%; max-width: 560px;">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
              <i class="fa-solid fa-bookmark fa-2x txt-main"></i>
              <h5 class="mb-0 txt-main">Pulseira 1</h5>
            </div>
            <div class="d-flex align-items-center gap-3">
              <br>
              <span class="badge bg-success rounded-pill px-1 py-2">Conectada</span>
              <div class="d-flex align-items-center gap-1 bg-danger bg-opacity-10 rounded-pill px-1 py-2">
                <i class="fa-solid fa-heart-pulse text-danger fa-lg"></i>
                <span class="fw-bold txt-main">78 BPM</span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

    <br>
    
    <div class="row">
        <a href="conectar" class="text-decoration-none">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle shadow-sm card:hover" 
               style="width: 36px; height: 36px; background-color: var(--cor-navbar); transition: all 0.2s ease;">
            <i class="fa-solid fa-plus fa-1x text-white"></i>
          </div>
        </a>
    </div>

    <br>

    <div class="text-start">
      <h4 class="txt-main">Relatórios:</h4>
    </div>
    <div class="row">
      <div class="col">
        <a href="relatorios" class="text-body text-decoration-none">
          <div class="d-inline-block text-start card shadow-lg border-0 rounded-4 p-3 card:hover" style="height: auto; width: 200px;">
            <i class="fa-regular fa-file-lines fa-2x txt-main"></i>
            <span class="mt-2 txt-main">Relatórios</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection