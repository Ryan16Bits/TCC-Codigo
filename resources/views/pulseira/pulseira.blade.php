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
                    <strong>Pulseira 1</strong><br>
                    <span class="txt-small">{{ $p->codigo }}</span>
                </div>
            </div>

        </div>
    </div>

    <!-- CUIDADORES -->
    <div class="mt-4">
        <p class="txt-small">CUIDADORES {{ $c }}</p>

        <!-- ADM -->
        <div class="card p-3 mb-2 shadow-sm d-flex flex-row align-items-center gap-3">

            <div class="rounded-circle bg-secondary text-center" style="width:45px; height:45px; line-height:45px;">
                ADM
            </div>

            <div>
                <strong>{{ $u->nome }}</strong><br>
                <span class="txt-small">Administrador • Você</span>
            </div>

        </div>

        <!-- CUIDADOR 1 -->
        <div class="card p-3 mb-2 shadow-sm d-flex justify-content-between align-items-center flex-row">

            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle bg-light text-center" style="width:45px; height:45px; line-height:45px;">
                    C
                </div>

                <div>
                    <strong>{{ $c1->nome }}</strong><br>
                    <span class="txt-small">Cuidador</span>
                </div>
            </div>

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