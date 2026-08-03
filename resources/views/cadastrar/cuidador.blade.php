@extends("index")
@section("conteudo")

<main class="container mt-5">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h1 class="txt-main fw-bold">
            Conectar Cuidador
        </h1>

        <p class="txt-small">
            Escolha uma das opções abaixo para que se solicite a víncular alguém como cuidador.
        </p>
    </div>

    <!-- CARD PRINCIPAL -->
    <div class="card shadow border-0 bg-custom-card">

        <div class="card-body p-4">

            <!-- TÍTULO INTERNO -->
            <div class="d-flex align-items-center mb-4">

                <div class="rounded-circle d-flex justify-content-center align-items-center"
                    style="width:55px; height:55px; background:#E8F1FF;">
                    <i class="fa-solid fa-link fa-xl" style="color:#0A5D9B;"></i>
                </div>

                <h3 class="txt-main ms-3 mb-0">
                    Formas de Conexão
                </h3>

            </div>
            
            <!-- VIA EMAIL -->
            <div class="card border-1 shadow-sm">

                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">

                    <div class="d-flex">

                        <div class="rounded-circle d-flex justify-content-center align-items-center"
                            style="width:70px; height:70px; background:#F1F6FF;">
                            <i class="fa-regular fa-envelope fa-2x" style="color:#2563EB;"></i>
                        </div>

                        <div class="ms-4">

                            <h4 class="txt-main fw-semibold">
                                Via E-mail
                            </h4>

                            <p class="txt-main mb-1">
                                Envie o convite por e-mail.
                            </p>

                            <p class="txt-small mb-0">
                                O cuidador receberá o acesso diretamente por e-mail.
                            </p>

                        </div>

                    </div>

                    <div class="d-flex gap-2 mt-3 mt-md-0">

                        <form class="list" method="post" action="{{ route('convite.enviar') }}">

                        <input type="email"
                            class="form-control"
                            placeholder="Digite seu e-mail">

                        <button class="btn btn-custom px-4" type="submit">
                            <i class="fa-regular fa-paper-plane"></i>
                            Enviar
                        </button>

                    </div>

                </div>

            </div>

        </div>
    </div>

</main>
@endsection