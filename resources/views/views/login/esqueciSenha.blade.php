@extends("login/index2")
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
                    Informe o seu e-mail.
                </p>

            </div>

            <!-- FORM -->
            <form>

                <!-- CÓDIGO -->
                <div class="mb-4">

                    <label class="form-label txt-main fw-semibold">
                        Email
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-shield-halved"></i>
                        </span>

                        <input type="text"
                            class="form-control"
                            placeholder="Digite o seu e-mail">

                    </div>

                </div>

                <!-- BOTÕES -->
                <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-3">

                    <a href="login"
                        class="txt-small text-decoration-none">
                        Voltar para login
                    </a>

                    <button class="btn btn-custom px-5 py-2">

                        <i class="fa-solid fa-arrow-right me-2"></i>
                        Avançar

                    </button>

                </div>

            </form>

        </div>

    </div>

</main>
@endsection