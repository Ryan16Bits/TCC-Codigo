@extends("index")
@section("conteudo")
<main class="container mt-5">

    <h2 class="txt-main mb-4">Dúvidas Frequentes</h2>

    <div class="card shadow bg-custom-card">
        <div class="card-body">

            <div class="accordion accordion-flush" id="faq">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed txt-main" type="button" data-bs-toggle="collapse" data-bs-target="#duvida1">
                            Como a pulseira detecta quedas?
                        </button>
                    </h2>
                    <div id="duvida1" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body txt-small">
                            A pulseira utiliza sensores de movimento (acelerômetro) que identificam padrões bruscos de queda.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed txt-main" type="button" data-bs-toggle="collapse" data-bs-target="#duvida2">
                            Precisa de internet para funcionar?
                        </button>
                    </h2>
                    <div id="duvida2" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body txt-small">
                            Não. A comunicação é feita via tecnologia LoRa, que permite envio de dados a longa distância com baixo consumo.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed txt-main" type="button" data-bs-toggle="collapse" data-bs-target="#duvida3">
                            O que acontece após uma queda?
                        </button>
                    </h2>
                    <div id="duvida3" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body txt-small">
                            Um alerta automático é enviado para os contatos cadastrados, permitindo resposta rápida.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed txt-main" type="button" data-bs-toggle="collapse" data-bs-target="#duvida4">
                            A pulseira possui botão de emergência?
                        </button>
                    </h2>
                    <div id="duvida4" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body txt-small">
                            Sim. O usuário pode acionar manualmente para enviar um alerta imediato.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</main>
@endsection