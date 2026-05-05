@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main text-center mb-4">Idioma</h5>

    <!-- CARD DE OPÇÕES DE IDIOMA -->
    <div class="card shadow p-4 mb-4">

        <h6 class="txt-main mb-3">Selecione o idioma do app</h6>

        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="idioma" id="portugues" checked>
            <label class="form-check-label" for="portugues">Português</label>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="idioma" id="ingles">
            <label class="form-check-label" for="ingles">Inglês</label>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="idioma" id="espanhol">
            <label class="form-check-label" for="espanhol">Espanhol</label>
        </div>

        <button class="btn btn-custom w-100 mt-2">Salvar</button>

    </div>

    <!-- BOTÃO VOLTAR -->
    <div class="text-end">
        <a href="/configuracoes" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>
@endsection