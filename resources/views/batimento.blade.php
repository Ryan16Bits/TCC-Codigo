@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TOPO -->
    <div class="text-center mb-4">

        <h4 class="txt-main">
            Batimentos Cardíacos
        </h4>

        <span class="txt-small">
            Monitoramento da pulseira
        </span>

    </div>

    <!-- CARD BPM -->
    <div class="card shadow-sm border-0 rounded-4 p-5 text-center">

        <div class="mb-3">

            <i class="fa-solid fa-heart-pulse fa-4x text-danger"></i>

        </div>

        <h1 class="txt-main mb-2">
            78 BPM
        </h1>

        <span class="txt-small">
            Batimentos detectados pela pulseira
        </span>

    </div>

    <!-- AVISO -->
    <div class="card shadow-sm border-0 rounded-4 p-4 mt-4">

        <div class="d-flex align-items-start gap-3">

            <i class="fa-solid fa-circle-info fa-lg mt-1"></i>

            <div>

                <strong class="txt-main">
                    Aviso de conexão
                </strong>

                <p class="txt-small mb-0 mt-1">
                    Caso os batimentos não estejam aparecendo,
                    verifique se a pulseira está conectada corretamente.
                </p>

            </div>

        </div>

    </div>

</div>
@endsection