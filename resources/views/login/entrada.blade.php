@extends("login/index")
@section("conteudo")
<main class="bg-custom d-flex align-items-center">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-5 col-lg-4">

                <div class="top text-center">
                 <img src="assets/img/logo.png" alt="Logo" class="img-login">
                </div>

                <div class="card shadow border-0">

                    <div class="card-header bg-secundary text-center">
                     <h4 class="mb-0 txt-main">Login</h4>
                    </div>

                    <div class="card-body p-4 bg-custom-card">

                        <form>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label txt-small">Email</label>
                                <input type="email" class="form-control form-control-lg txt-small" placeholder="Insira seu email..." name="email" />
                            </div>

                            <!-- Senha -->
                            <div class="mb-3">
                                <label class="form-label txt-small">Senha</label>
                                <input type="password" class="form-control form-control-lg txt-small" placeholder="Insira sua senha..." name="senha" />
                            </div>
                            
                            <!-- Lembrar -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label txt-small">Lembrar de mim</label>
                            </div>

                            <!-- Botão -->
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-custom btn-lg">Entrar</button>
                            </div>

                            <!-- Links -->
                            <div class="text-center">
                                <a href="#" class="text-secondary small text-decoration-none txt-small">Esqueceu a senha?</a>
                            </div>
                            
                            <div class="d-grid mb-3 text-center">
                                <hr>
                                <p class="txt-small">Não possui conta?</p>
                                <form href="cadastro.html">
                                    <button type="submit" class="btn btn-custom btn-custom:hover btn-lg">Cadastrar</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection