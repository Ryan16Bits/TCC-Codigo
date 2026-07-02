@extends("index")
@section("conteudo")
<main class="container mt-5">

    <h2 class="txt-main mb-4">Conectar Pulseira</h2>


    <div class="card shadow bg-custom-card mb-4 text-center">
        <div class="card-body">

            <h5 class="mb-3">Conectar via QR Code</h5>

            <!-- QR CODE -->
            <div class="card card:hover p-3 d-inline-flex align-items-center justify-content-center border rounded mb-3" style="width: 115px; height: 100px;">
                <i class="fa-regular fa-camera fa-2x"></i>
            </div>

            <p class="txt-small">Escaneie com a câmera do celular</p>

        </div>
    </div>

    <div class="card shadow bg-custom-card mb-4">

        <form class="list" method="post" action="{{ route('pulseira.post') }}">

        <div class="row">

            <div class="col-md-6 mb-4">

                <br>
                            
                <label class="form-label txt-main fw-semibold">
                Conectar via Código
                </label>

                <input type="text" class="form-control" placeholder="Digite o código da pulseira" name="codigo" required>

            </div>

            <div class="col-md-6 mb-4">

                <br>

                <label class="form-label txt-main fw-semibold">
                Nome
                </label>

                <input type="text" class="form-control" placeholder="Digite o nome da pulseira" name="nomePulseira" required>

            </div>

        </div>

            <div class="alert" style="background:#EEF4FF; border:1px solid #CFE0FF;">

                <div class="d-flex align-items-start">

                    <i class="fa-solid fa-circle-info me-3 mt-1"style="color:#2563EB;"></i>

                        <div>

                            <strong class="txt-main">
                                Informações importantes
                            </strong>

                            <p class="txt-small mb-0">
                                Insira o código de 10 caracteres que vem junto da pulseira.
                            </p>

                        </div>

                    </div>

                </div>


            @if (session('error1'))
                <div class="alert alert-danger">
                    {{ session('error1') }}
                </div>
            @endif

                <!-- BOTÃO -->
            <div class="d-flex justify-content-end mt-4">

                <button class="btn btn-custom px-5 py-2" type="submit">

                    <i class="fa-solid fa-floppy-disk me-2"></i>
                    Conectar

                </button>

            </div>

            <br>

        </div>

    <div class="card shadow bg-custom-card">
        <div class="card-body">

            <h5 class="mb-3">Status da Conexão</h5>

            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-danger">Desconectado</span>
                <span class="txt-small">Nenhuma pulseira vinculada</span>
            </div>

        </div>
    </div>

</main>
@endsection