@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main text-center mb-4">Notificações</h5>

    <!-- CARD -->
    <div class="card shadow p-4">

        <!-- RESTAURAR -->
        <div class="mb-4">
            <button class="btn btn-outline-secondary w-100">
                Restaurar configurações padrão
            </button>
        </div>

        <!-- NOTIFICAÇÕES -->

        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="txt-main">Pulseira desligada</span>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" checked>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="txt-main">Bateria da pulseira</span>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" checked>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="txt-main">Notícias e atualizações</span>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox">
            </div>
        </div>

    </div>

    <!-- VOLTAR -->
    <div class="text-end mt-3">
        <a href="/configuracoes" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>

<!-- SCRIPT RESTAURAR -->
<script>
document.querySelector(".btn-outline-secondary").addEventListener("click", function() {
    document.querySelectorAll(".form-check-input").forEach(el => el.checked = true);
});
</script>

@endsection