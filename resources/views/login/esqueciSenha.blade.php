@extends("login/index")
@section("conteudo")
<main class="container d-flex justify-content-center align-items-center"
    style="min-height: 85vh;">

    <!-- CARD -->
    <div class="card shadow border-0 bg-custom-card"
        style="max-width: 650px; width:100%; border-radius:20px;">

        <div class="card-body p-5">

            <!-- ÍCONE -->
            <div class="text-center mb-4">

                <div class="rounded-circle d-flex justify-content-center align-items-center mx-auto shadow-sm"
                    style="
                        width:110px;
                        height:110px;
                        background:#EEF4FF;
                    ">

                    <i class="fa-solid fa-lock fa-3x"
                        style="color:#2563EB;"></i>

                </div>

            </div>

            <!-- TÍTULO -->
            <div class="text-center mb-4">

                <h1 class="txt-main fw-bold">
                    Esqueci Minha Senha
                </h1>

                <p class="txt-small mt-2">
                    Informe o código enviado para seu e-mail e defina uma nova senha de acesso.
                </p>

            </div>

            <!-- FORM -->
            <form>

                <!-- CÓDIGO -->
                <div class="mb-4">

                    <label class="form-label txt-main fw-semibold">
                        Código de Verificação
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-shield-halved"></i>
                        </span>

                        <input type="text"
                            class="form-control"
                            placeholder="Digite o código enviado por e-mail">

                    </div>

                    <p class="txt-small mt-2 mb-0">
                        O código foi enviado para o e-mail cadastrado no sistema.
                    </p>

                </div>

                <!-- NOVA SENHA -->
                <div class="mb-4">

                    <label class="form-label txt-main fw-semibold">
                        Nova Senha
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-key"></i>
                        </span>

                        <input type="password"
                            class="form-control"
                            placeholder="Digite sua nova senha">

                    </div>

                </div>

                <!-- CONFIRMAR -->
                <div class="mb-4">

                    <label class="form-label txt-main fw-semibold">
                        Confirmar Nova Senha
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-lock"></i>
                        </span>

                        <input type="password"
                            class="form-control"
                            placeholder="Confirme sua nova senha">

                    </div>

                </div>

                <!-- ALERTA -->
                <div class="alert d-flex align-items-start"
                    style="
                        background:#EEF4FF;
                        border:1px solid #CFE0FF;
                    ">

                    <i class="fa-solid fa-circle-info me-3 mt-1"
                        style="color:#2563EB;"></i>

                    <div>

                        <strong class="txt-main">
                            Segurança da Conta
                        </strong>

                        <p class="txt-small mb-0">
                            Utilize uma senha forte contendo letras, números e caracteres especiais.
                        </p>

                    </div>

                </div>

                <!-- BOTÕES -->
                <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-3">

                    <a href="#"
                        class="txt-small text-decoration-none">
                        Voltar para login
                    </a>

                    <button class="btn btn-custom px-5 py-2">

                        <i class="fa-solid fa-rotate-right me-2"></i>
                        Redefinir Senha

                    </button>

                </div>

            </form>

        </div>

    </div>

</main>
@endsection