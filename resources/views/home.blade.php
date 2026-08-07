@extends("index")
@section("conteudo")
<main class="py-4">
  <div class="container">
    <!-- Cabeçalho de boas-vindas -->
    <div class="text-center mb-5">
      <div class="d-inline-block bg-gradient-primary text-white rounded-4 p-4 px-5 shadow">
        <h1 class="display-5 fw-bold mb-0">
          Bem Vindo, {{ $usuario->nome }}!
        </h1>
      </div>
    </div>

    <!-- Seção Gerenciamento -->
    <div class="mb-5">
      <h4 class="txt-main fw-semibold mb-3 d-flex align-items-center gap-2 border-bottom pb-2">
        <i class="fa-solid fa-sliders-h txt-main"></i> Gerenciamento
      </h4>
      <div class="row g-4">
        <div class="col-md-6 col-lg-5">
          <a href="idoso" class="text-decoration-none">
            <div class="card card-hover border-0 shadow-lg rounded-4 p-4 h-100 transition-all">
              <div class="d-flex align-items-center gap-3">
                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                  <i class="fa-solid fa-person-cane fa-2x txt-main"></i>
                </div>
                <div>
                  <h5 class="txt-main fw-semibold mb-0">Idosos</h5>
                  <small class="text-muted">Gerencie os idosos cadastrados</small>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-5">
          <a href="cuidador" class="text-decoration-none">
            <div class="card card-hover border-0 shadow-lg rounded-4 p-4 h-100 transition-all">
              <div class="d-flex align-items-center gap-3">
                <div class="bg-success bg-opacity-10 rounded-3 p-3">
                  <i class="fa-solid fa-user-doctor fa-2x txt-main"></i>
                </div>
                <div>
                  <h5 class="txt-main fw-semibold mb-0">Cuidadores</h5>
                  <small class="text-muted">Gerencie os cuidadores cadastrados</small>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Seção Pulseiras -->
    <div class="mb-5">
      <h4 class="txt-main fw-semibold mb-3 d-flex align-items-center gap-2 border-bottom pb-2">
        <i class="fa-solid fa-link txt-main"></i> Pulseiras
      </h4>
      
      <div class="row">
        <div class="col-lg-8">
          <a href="pulseiras" class="text-decoration-none">
            <div class="card card-hover border-0 shadow-lg rounded-4 p-3 transition-all">
              <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-3">
                  <div class="bg-info bg-opacity-10 rounded-3 p-2">
                    <i class="fa-solid fa-bookmark fa-2x txt-main"></i>
                  </div>
                  <div>
                    <h5 class="txt-main fw-semibold mb-0">{{ $pulseira }}</h5>
                    <small class="text-muted">Pulseira conectada</small>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <span class="badge bg-success rounded-pill px-3 py-2">
                    <i class="fa-solid fa-circle me-1 fa-2xs"></i> Conectada
                  </span>
                  <div class="bg-danger bg-opacity-10 rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <i class="fa-solid fa-heart-pulse text-danger"></i>
                    <span class="fw-bold txt-main">78 BPM</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Botão adicionar pulseira -->
      <div class="mt-3">
        <a href="conectarPulseira" class="text-decoration-none">
          <div class="d-inline-flex align-items-center gap-2 text-white rounded-pill px-4 py-2 shadow-sm transition-all" 
               style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);">
            <i class="fa-solid fa-plus"></i>
            <span>Conectar nova pulseira</span>
          </div>
        </a>
      </div>
    </div>

    <!-- Seção Relatórios -->
    <div class="mb-4">
      <h4 class="txt-main fw-semibold mb-3 d-flex align-items-center gap-2 border-bottom pb-2">
        <i class="fa-regular fa-file-lines txt-main"></i> Relatórios
      </h4>
      <div class="row">
        <div class="col-md-6 col-lg-5">
          <a href="relatorios" class="text-decoration-none">
            <div class="card card-hover border-0 shadow-lg rounded-4 p-4 transition-all">
              <div class="d-flex align-items-center gap-3">
                <div class="bg-warning bg-opacity-10 rounded-3 p-3">
                  <i class="fa-regular fa-file-lines fa-2x txt-main"></i>
                </div>
                <div>
                  <h5 class="txt-main fw-semibold mb-0">Relatórios</h5>
                  <small class="text-muted">Visualize relatórios gerados</small>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>
</main>

<style>
  .txt-main {
    color: #2c3e50;
  }
  .bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  }
  .card-hover {
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: pointer;
  }
  .card-hover:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15) !important;
  }
  .transition-all {
    transition: all 0.3s ease;
  }
  .transition-all:hover {
    transform: scale(1.02);
  }
</style>
@endsection
