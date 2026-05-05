@extends("index")

@section("conteudo")
<div class="container mt-4">

    <h5 class="txt-main mb-4">Configurações</h5>

    <!-- ITEM -->
    <a href="suporte" class="text-decoration-none">
        <div class="card shadow-sm p-3 mb-3 d-flex justify-content-between align-items-center flex-row">
            <div class="d-flex align-items-center gap-3">
                <i class="fa-solid fa-headset"></i>
                <span class="txt-main">Suporte</span>
            </div>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="acessibilidade" class="text-decoration-none">
        <div class="card shadow-sm p-3 mb-3 d-flex justify-content-between align-items-center flex-row">
            <div class="d-flex align-items-center gap-3">
                <i class="fa-solid fa-universal-access"></i>
                <span class="txt-main">Acessibilidade</span>
            </div>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="idiomas" class="text-decoration-none">
        <div class="card shadow-sm p-3 mb-3 d-flex justify-content-between align-items-center flex-row">
            <div class="d-flex align-items-center gap-3">
                <i class="fa-solid fa-language"></i>
                <span class="txt-main">Idioma</span>
            </div>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="notificacoes" class="text-decoration-none">
        <div class="card shadow-sm p-3 mb-3 d-flex justify-content-between align-items-center flex-row">
            <div class="d-flex align-items-center gap-3">
                <i class="fa-solid fa-bell"></i>
                <span class="txt-main">Notificações</span>
            </div>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

</div>
@endsection