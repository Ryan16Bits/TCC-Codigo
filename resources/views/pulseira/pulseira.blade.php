@extends("index")

@section("conteudo")
<div class="container mt-3">

    <!-- TOPO AZUL -->
    <div class="p-4 rounded" style="background-color: var(--cor-navbar); color: white;">

        <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="txt-main-nav">Minhas pulseiras</span>
            <span style="font-size: 14px;">
                <span style="color: #00B7E8;">●</span> Conectada
            </span>
        </div>

        <h5>Gerenciar pulseira</h5>
        <p class="txt-small-nav">Você é o administrador</p>

    </div>

    <!-- IDENTIFICAÇÃO -->
    <div class="mt-3">
        <p class="txt-small">IDENTIFICAÇÃO</p>

        <div class="card p-3 shadow-sm d-flex flex-row justify-content-between align-items-center">

            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle bg-secondary" style="width:50px; height:50px;"></div>

                <div>
                    <strong>Pulseira da Vovó</strong><br>
                    <span class="txt-small">ID: #PUL-00421</span>
                </div>
            </div>

            <button class="btn btn-outline-secondary btn-sm">Editar</button>

        </div>
    </div>

    <!-- CUIDADORES -->
    <div class="mt-4">
        <p class="txt-small">CUIDADORES (3)</p>

        <!-- ADM -->
        <div class="card p-3 mb-2 shadow-sm d-flex flex-row align-items-center gap-3">

            <div class="rounded-circle bg-secondary text-center" style="width:45px; height:45px; line-height:45px;">
                RM
            </div>

            <div>
                <strong>Ryan Marques</strong><br>
                <span class="txt-small">Administrador • Você</span>
            </div>

        </div>

        <!-- CUIDADOR 1 -->
        <div class="card p-3 mb-2 shadow-sm d-flex justify-content-between align-items-center flex-row">

            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle bg-light text-center" style="width:45px; height:45px; line-height:45px;">
                    AS
                </div>

                <div>
                    <strong>Ana Silva</strong><br>
                    <span class="txt-small">Cuidador</span>
                </div>
            </div>

            <button class="btn btn-outline-secondary btn-sm">Admin</button>

        </div>

        <!-- CUIDADOR 2 -->
        <div class="card p-3 mb-2 shadow-sm d-flex justify-content-between align-items-center flex-row">

            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle bg-light text-center" style="width:45px; height:45px; line-height:45px;">
                    JP
                </div>

                <div>
                    <strong>João Pedro</strong><br>
                    <span class="txt-small">Cuidador</span>
                </div>
            </div>

            <button class="btn btn-outline-secondary btn-sm">Admin</button>

        </div>

        <!-- ADICIONAR -->
        <button class="btn btn-outline-secondary w-100 mt-2">
            + Adicionar cuidador
        </button>

    </div>

    <!-- REMOVER -->
    <div class="mt-4">
        <button class="btn btn-outline-danger w-100">
            Remover pulseira do cadastro
        </button>
    </div>

</div>
@endsection