@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main text-center mb-4">Suporte</h5>

    <!-- CARD PARA ENVIAR PERGUNTA -->
    <div class="card shadow p-4 mb-4">

        <h6 class="txt-main mb-3">Enviar Pergunta</h6>

        <form>
            <div class="mb-3">
                <label class="form-label">Assunto</label>
                <input type="text" class="form-control" placeholder="Digite o assunto da pergunta">
            </div>

            <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea class="form-control" rows="4" placeholder="Digite sua pergunta aqui"></textarea>
            </div>

            <button class="btn btn-custom w-100">Enviar</button>
        </form>

    </div>

    <!-- CARD COM CONTATOS -->
    <div class="card shadow p-4 mb-4">

        <h6 class="txt-main mb-3">Contato</h6>

        <p class="txt-small mb-2">
            Email: <a href="mailto:suporte@safewatch.com">suporte@safewatch.com</a>
        </p>

        <p class="txt-small mb-2">
            WhatsApp: <a href="https://wa.me/5531999999999" target="_blank">(31) 99999-9999</a>
        </p>

        <p class="txt-small">
            Telefone: <a href="tel:+5531999999999">(31) 99999-9999</a>
        </p>

    </div>

    <!-- BOTÃO VOLTAR -->
    <div class="text-end">
        <a href="/configuracoes" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>
@endsection