@extends("index")

@section("conteudo")
<div class="container mt-4 text-center">

    <!-- TÍTULO -->
    <h5 class="txt-main mb-4">Sobre sua Conta</h5>

    <!-- FOTO -->
    <div class="mb-3">
        <img src="https://via.placeholder.com/120" 
             class="rounded-circle shadow" 
             width="120" height="120">
    </div>

    <!-- NOME -->
    <h6 class="txt-main">Usuário</h6>

    <!-- DATA -->
    <p class="txt-small mb-4">Conta criada em: 15/03/2026</p>

    <!-- CARD EXTRA -->
    <div class="card shadow p-3">
        <p class="txt-small mb-0">
            Esta conta está vinculada ao sistema de monitoramento Safe Watch.
        </p>
    </div>

    <!-- VOLTAR -->
    <div class="text-end mt-3">
        <a href="sobre" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>
@endsection