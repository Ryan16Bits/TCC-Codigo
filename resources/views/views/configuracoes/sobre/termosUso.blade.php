@extends("index")

@section("conteudo")
<div class="container mt-4">

    <!-- TÍTULO -->
    <h5 class="txt-main text-center mb-4">Termos de Uso</h5>

    <div class="card shadow p-4">

        <p class="txt-small">
            Ao utilizar o aplicativo Safe Watch, você concorda com os termos descritos abaixo.
        </p>

        <hr>

        <h6 class="txt-main">Uso do Aplicativo</h6>
        <p class="txt-small">
            O Safe Watch é destinado ao monitoramento de quedas e suporte ao cuidado de idosos.
            O usuário se compromete a utilizar o aplicativo de forma responsável.
        </p>

        <h6 class="txt-main">Responsabilidade</h6>
        <p class="txt-small">
            O aplicativo não substitui acompanhamento médico ou profissional de saúde.
            Em caso de emergência, procure atendimento especializado imediatamente.
        </p>

        <h6 class="txt-main">Dados e Privacidade</h6>
        <p class="txt-small">
            As informações coletadas são utilizadas para melhorar a experiência e garantir a segurança do usuário.
        </p>

        <h6 class="txt-main">Limitações do Sistema</h6>
        <p class="txt-small">
            O sistema pode apresentar falhas técnicas ou imprecisões na detecção de eventos.
            Não garantimos funcionamento contínuo sem interrupções.
        </p>

        <h6 class="txt-main">Alterações</h6>
        <p class="txt-small">
            Os termos podem ser atualizados a qualquer momento para melhorias no serviço.
        </p>

    </div>

    <!-- VOLTAR -->
    <div class="text-end mt-3">
        <a href="sobre" class="btn btn-outline-secondary btn-sm">Voltar</a>
    </div>

</div>
@endsection