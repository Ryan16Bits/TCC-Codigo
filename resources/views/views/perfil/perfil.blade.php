@extends("index")

@section("conteudo")
<div class="container mt-4 text-center">

    <!-- FOTO -->
    <div class="mb-3">
        <img src="https://via.placeholder.com/120" 
             class="rounded-circle shadow" width="120" height="120">
    </div>

    <button class="btn btn-sm btn-outline-secondary mb-3">
        Alterar foto
    </button>

    <!-- TIPO -->
    <h6 class="txt-main">Tipo: Administrador</h6>

    <!-- ADICIONAR PERFIL -->
    <div class="mt-3 mb-4">
        <button class="btn btn-custom btn-sm">+ Adicionar perfil</button>
    </div>

    <!-- OPÇÕES -->

    <a href="dados" class="text-decoration-none">
        <div class="card p-3 mb-2 shadow-sm d-flex justify-content-between flex-row">
            <span class="txt-main">Dados pessoais</span>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="gerenciar" class="text-decoration-none">
        <div class="card p-3 mb-2 shadow-sm d-flex justify-content-between flex-row">
            <span class="txt-main">Gerenciar contas</span>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="trocar" class="text-decoration-none">
        <div class="card p-3 mb-2 shadow-sm d-flex justify-content-between flex-row">
            <span class="txt-main">Trocar conta</span>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="senha" class="text-decoration-none">
        <div class="card p-3 mb-2 shadow-sm d-flex justify-content-between flex-row">
            <span class="txt-main">Configurar senha</span>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

</div>
@endsection 
