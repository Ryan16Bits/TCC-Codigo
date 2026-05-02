@extends("views/index")

@section("conteudo")
<div class="container mt-4">

    <h5 class="mb-3 txt-main">Histórico de Quedas</h5>

    <!-- CARD DE QUEDA -->
    <div class="card shadow-sm p-3 mb-3 d-flex flex-row justify-content-between align-items-center">
        <div>
            <div class="txt-main">25/04/2026 - 14:32</div>
            <div class="txt-small">Queda detectada</div>
        </div>

        <a href="/observacao" class="text-decoration-none">
            <i class="fa-solid fa-pen fa-lg"></i>
        </a>
    </div>

    <div class="card shadow-sm p-3 mb-3 d-flex flex-row justify-content-between align-items-center">
        <div>
            <div class="txt-main">20/04/2026 - 09:10</div>
            <div class="txt-small">Queda detectada</div>
        </div>

        <a href="/observacao" class="text-decoration-none">
            <i class="fa-solid fa-pen fa-lg"></i>
        </a>
    </div>

</div>
@endsection 