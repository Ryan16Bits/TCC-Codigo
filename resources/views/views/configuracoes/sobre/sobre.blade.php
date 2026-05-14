@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main text-center mb-4">Sobre</h5>

    <!-- OPÇÕES -->

    <a href="politica" class="text-decoration-none">
        <div class="card shadow-sm p-3 mb-3 d-flex justify-content-between align-items-center flex-row">
            <span class="txt-main">Política de Privacidade</span>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="sobreConta" class="text-decoration-none">
        <div class="card shadow-sm p-3 mb-3 d-flex justify-content-between align-items-center flex-row">
            <span class="txt-main">Sobre sua Conta</span>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="termos" class="text-decoration-none">
        <div class="card shadow-sm p-3 mb-3 d-flex justify-content-between align-items-center flex-row">
            <span class="txt-main">Termos de Uso</span>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <!-- VOLTAR -->
    <div class="text-end mt-3">
        <a href="configuracoes" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>
@endsection