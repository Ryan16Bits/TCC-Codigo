@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main text-center mb-4">Política de Privacidade</h5>

    <!-- ACCORDION -->
    <div class="accordion" id="politicaAccordion">

        <!-- 1 - DADOS FORNECIDOS -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item1">
                    Dados fornecidos pelo usuário
                </button>
            </h2>
            <div id="item1" class="accordion-collapse collapse" data-bs-parent="#politicaAccordion">
                <div class="accordion-body txt-small">
                    Coletamos informações fornecidas diretamente por você, como nome, contato e dados necessários para o funcionamento do sistema de monitoramento.
                </div>
            </div>
        </div>

        <!-- 2 - DADOS COLETADOS -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item2">
                    Dados coletados automaticamente
                </button>
            </h2>
            <div id="item2" class="accordion-collapse collapse" data-bs-parent="#politicaAccordion">
                <div class="accordion-body txt-small">
                    Podemos coletar dados como localização, eventos de queda e informações do dispositivo para garantir a segurança do usuário.
                </div>
            </div>
        </div>

        <!-- 3 - USO DOS DADOS -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item3">
                    Como usamos suas informações
                </button>
            </h2>
            <div id="item3" class="accordion-collapse collapse" data-bs-parent="#politicaAccordion">
                <div class="accordion-body txt-small">
                    Utilizamos os dados para monitoramento de quedas, envio de alertas e melhoria contínua do sistema.
                </div>
            </div>
        </div>

        <!-- 4 - EXCLUSÃO DE CONTA -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#item4">
                    Excluir conta e dados
                </button>
            </h2>
            <div id="item4" class="accordion-collapse collapse" data-bs-parent="#politicaAccordion">
                <div class="accordion-body">

                    <p class="txt-small mb-3">
                        Você pode solicitar a exclusão completa da sua conta e de todos os dados armazenados no sistema.
                    </p>

                    <button class="btn btn-danger w-100">
                        Excluir minha conta
                    </button>

                </div>
            </div>
        </div>

    </div>

    <!-- VOLTAR -->
    <div class="text-end mt-3">
        <a href="sobre" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>
@endsection