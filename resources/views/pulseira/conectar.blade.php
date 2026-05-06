@extends("index")
@section("conteudo")
<main class="container mt-5">

    <h2 class="txt-main mb-4">Conectar Pulseira</h2>


    <div class="card shadow bg-custom-card mb-4 text-center">
        <div class="card-body">

            <h5 class="mb-3">Conectar via QR Code</h5>

            <!-- QR CODE FAKE -->
            <div class="bg-white p-3 d-inline-block border rounded mb-3">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=fallguard123" alt="QR Code">
            </div>

            <p class="txt-small">Escaneie com o aplicativo da pulseira</p>

        </div>
    </div>

    <div class="card shadow bg-custom-card mb-4">
        <div class="card-body">

            <h5 class="mb-3">Conectar via Código</h5>

            <div class="d-flex gap-2">
                <input type="text" class="form-control" placeholder="Digite o código da pulseira">
                <button class="btn btn-custom">Conectar</button>
            </div>

        </div>
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