
@extends("index")
@section("conteudo")


 

    <!-- CONTEÚDO -->
    <div class="container py-5">
        <div class="row">

    <!-- MENU DE ÂNCORAS -->
    <div class="ajuda-nav-wrap">
        <p class="ajuda-nav-titulo">Perguntas frequentes</p>
        <div class="ajuda-nav-scroll">
            <a href="#como-usar" class="ajuda-nav-link ativo">Como usar</a>
            <a href="#como-funciona" class="ajuda-nav-link">Como funciona</a>
            <a href="#privacidade" class="ajuda-nav-link">Privacidade</a>
            <a href="#novidades" class="ajuda-nav-link">Novidades</a>
            <a href="#contato" class="ajuda-nav-link">Contate-nos</a>
        </div>
    </div>

            <!-- SEÇÕES -->
            <div class="col-lg-9">

                <section id="como-usar" class="ajuda-secao">
                    <div class="ajuda-secao-header">
                        <h2 class="ajuda-secao-titulo txt-main">Como usar</h2>
                    </div>
                    <p class="txt-small">Siga os passos abaixo para começar a usar a plataforma:</p>
                    <ol class="txt-small ajuda-lista">
                        <li>Crie sua conta gratuitamente pelo aplicativo </li>
                        <li>Complete seu perfil com as informações necessárias.</li>
                        <li>Cadastre a pulseira utilizando o código que vem na embalagem.</li>
                        <li>Adicione os cuidadores que receberão os alertas de emergência.</li>
                        <li>Em caso de dúvida, consulte as seções abaixo ou entre em contato.</li>
                    </ol>
                </section>

                <hr class="ajuda-divisor">

                <section id="como-funciona" class="ajuda-secao">
                    <div class="ajuda-secao-header">
                        <h2 class="ajuda-secao-titulo txt-main">Como funciona</h2>
                    </div>
                    <p class="txt-small">Nossa pulseira monitora o bem-estar do idoso em tempo real e aciona os cuidadores automaticamente quando necessário:</p>
                    <ol class="txt-small ajuda-lista">
                        <li>A pulseira detecta quedas e envia um alerta imediato.</li>
                        <li>Todos os cuidadores cadastrados são notificados ao mesmo tempo.</li>
                        <li>O administrador da pulseira gerencia quem recebe os alertas.</li>
                        <li>O histórico de alertas fica salvo para acompanhamento.</li>
                    </ol>
                </section>

                <hr class="ajuda-divisor">

                <section id="privacidade" class="ajuda-secao">
                    <div class="ajuda-secao-header">
                        <h2 class="ajuda-secao-titulo txt-main">Privacidade</h2>
                    </div>
                    <p class="txt-small">A segurança dos dados do seu familiar é nossa prioridade:</p>
                    <ul class="txt-small ajuda-lista">
                        <li>Todos os dados são criptografados de ponta a ponta.</li>
                        <li>Nenhuma informação é compartilhada ou vendida a terceiros.</li>
                        <li>Você pode remover a pulseira e excluir os dados a qualquer momento.</li>
                        <li>Estamos em conformidade com a Lei Geral de Proteção de Dados (LGPD).</li>
                        <li>Em caso de roubo de dados, culpe o cesar<li>
                    </ul>
                </section>

                <hr class="ajuda-divisor">

                <section id="novidades" class="ajuda-secao">
                    <div class="ajuda-secao-header">
                        <h2 class="ajuda-secao-titulo txt-main">Novidades</h2>
                        
                    </div>
                    <p class="txt-small">Confira as últimas Atualizações:</p>
                    <ul class="txt-small ajuda-lista">
                        <li><strong>Exemplo</strong> — agora é possível derrubar seu idoso</li>
                        <li><strong>Exemplo 2</strong> — o administrador pode dar uma de ditador.</li>
                        <li><strong>Sla o que colocar aqui</strong> — FDS</li>
                        <li><strong>Nova interface</strong> — Tem tela nova.</li>
                    </ul>
                </section>

                <hr class="ajuda-divisor">

                <section id="contato" class="ajuda-secao">
                    <div class="ajuda-secao-header">
                        <h2 class="ajuda-secao-titulo txt-main">Contate-nos</h2>
                    </div>
                    <p class="txt-small">Estamos aqui para ajudar. Fale com a gente pelos canais abaixo:</p>
                    <div class="ajuda-contato-grid">
                        <div class="ajuda-contato-item">
                            <span class="ajuda-contato-label txt-main">E-mail</span>
                            <span class="txt-small">suporte@suaempresa.com.br</span>
                        </div>
                        <div class="ajuda-contato-item">
                            <span class="ajuda-contato-label txt-main">WhatsApp</span>
                            <span class="txt-small">(73) 666-666</span>
                        </div>
                        <div class="ajuda-contato-item">
                            <span class="ajuda-contato-label txt-main">Horário</span>
                            <span class="txt-small">Segunda a sexta, das 17:30h às 18h</span>
                        </div>
                        <div class="ajuda-contato-item">
                            <span class="ajuda-contato-label txt-main">Resposta</span>
                            <span class="txt-small">NUNCA</span>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

@endsection