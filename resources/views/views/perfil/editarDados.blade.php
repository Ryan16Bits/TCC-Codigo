@extends("index")
@section("conteudo")
<main class="container mt-5">

    <!-- TÍTULO -->
    <div class="mb-4">
        <h1 class="txt-main fw-bold">
            Editar Dados
        </h1>

    <!-- CARD PRINCIPAL -->
    <div class="card shadow border-0 bg-custom-card">

        <div class="card-body p-4">

            <form>

                <!-- FOTO -->
                <div class="text-center mb-5">

                    <div class="rounded-circle mx-auto d-flex justify-content-center align-items-center shadow-sm"
                        style="
                            width:140px;
                            height:140px;
                            background:#EEF4FF;
                            border:3px solid #D9E8FF;
                        ">

                        <i class="fa-solid fa-user fa-4x"
                            style="color:#7B9ACC;"></i>

                    </div>

                    <div class="mt-3">

                        <label class="btn btn-outline-primary">

                            <i class="fa-solid fa-camera me-2"></i>
                            Adicionar Foto

                            <input type="file" hidden>

                        </label>

                    </div>

                    <p class="txt-small mt-2 mb-0">
                        Formatos permitidos: JPG, PNG ou JPEG.
                    </p>

                </div>

                <div class="row">

                    <!-- NOME -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Nome Completo
                        </label>

                        <div class="input-group">

                            <span class="input-group-text bg-white">
                                <i class="fa-solid fa-user"></i>
                            </span>

                            <input type="text"
                                class="form-control"
                                placeholder="Digite seu nome">

                        </div>

                    </div>

                    <!-- EMAIL -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Email
                        </label>

                        <div class="input-group">

                            <span class="input-group-text bg-white">
                                <i class="fa-solid fa-at"></i>
                            </span>

                            <input type="email"
                                class="form-control"
                                placeholder="Digite seu email">

                        </div>

                    </div>

                    <!-- ALTURA -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Telefone
                        </label>

                        <div class="input-group">

                            <span class="input-group-text bg-white">
                                <i class="fa-solid fa-phone"></i>
                            </span>

                            <input type="tel"
                                class="form-control"
                                placeholder="Digite seu telefone">

                        </div>

                    </div>

                    <!-- DATA -->
                    <div class="col-md-6 mb-4">

                        <label class="form-label txt-main fw-semibold">
                            Data de Nascimento
                        </label>

                        <div class="input-group">

                            <input type="date" class="form-control" step="0.01">

                        </div>

                    </div>
                
                </div>

                <!-- BOTÃO -->
                <div class="d-flex justify-content-end mt-4">

                    <button class="btn btn-custom px-5 py-2">

                        <i class="fa-solid fa-floppy-disk me-2"></i>
                        Salvar

                    </button>

                </div>

            </form>

        </div>

    </div>

</main>
@endsection