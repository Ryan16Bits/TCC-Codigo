@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main text-center mb-4">Acessibilidade</h5>

    <!-- LOGO / NOME -->
    <div class="text-center mb-4">
        <h3 class="txt-main">SAFE</h3>
        <h3 class="txt-main">WATCH</h3>
    </div>

    <!-- CARD -->
    <div class="card shadow p-4">

        <!-- TAMANHO DA FONTE -->
        <div class="mb-4">
            <label class="form-label txt-main">Tamanho da fonte</label>

            <select class="form-select">
                <option>Pequeno</option>
                <option selected>Médio</option>
                <option>Grande</option>
            </select>
        </div>

        <!-- MODO ESCURO -->
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <span class="txt-main">Modo escuro</span>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="darkModeToggle">
            </div>
        </div>

    </div>

    <!-- BOTÃO VOLTAR -->
    <div class="text-end mt-3">
        <a href="/configuracoes" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>

<!-- SCRIPT MODO ESCURO -->
<script>
const toggle = document.getElementById('darkModeToggle');

toggle.addEventListener('change', function() {
    if(this.checked) {
        document.body.style.backgroundColor = "#121212";
        document.body.style.color = "white";
    } else {
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
    }
});
</script>

@endsection