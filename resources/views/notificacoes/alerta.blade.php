<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeGuard — Alerta de Queda</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- No projeto real: <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        /* Apenas as variáveis — já estarão no styles.css no projeto real */
        :root {
            --cor-navbar: #062B5B;
            --botoes-secundarios: #0A5D9B;
            --botoes-secundarios-hover: #063b64;
            --detalhes: #00B7E8;
            --botoes-emergencia: #C53030;
            --fundo-principal: #ffffff;
            --card-formularios: #F7F9FC;
            --bordas-inputs: #DCE3EA;
            --textos-principais: #1F2937;
            --textos-menores: #6B7280;
        }

        /* Cole aqui o bloco "TELA DE ALERTA DE QUEDA" do styles.css */
        .alerta-card { border: none; border-left: 6px solid var(--botoes-emergencia); border-radius: 14px; box-shadow: 0 4px 18px rgba(0,0,0,.06); transition: border-color 0.3s ease; }
        .alerta-card.alerta-resolvido { border-left-color: #1FC77B; }
        .alerta-icone { width: 56px; height: 56px; border-radius: 50%; background-color: var(--botoes-emergencia); display: flex; align-items: center; justify-content: center; flex-shrink: 0; animation: alerta-pulsar 1.4s ease-in-out infinite; }
        .alerta-icone.alerta-resolvido { background-color: #1FC77B; animation: none; }
        @keyframes alerta-pulsar { 0%,100%{ box-shadow:0 0 0 0 rgba(197,48,48,.35); } 50%{ box-shadow:0 0 0 10px rgba(197,48,48,0); } }
        .alerta-badge { background-color: rgba(197,48,48,.10); color: var(--botoes-emergencia); font-family:'Inter',sans-serif; font-weight:600; font-size:.8rem; padding:.4rem .75rem; border-radius:50px; display:inline-flex; align-items:center; gap:6px; }
        .alerta-badge.alerta-resolvido { background-color: rgba(31,199,123,.12); color: #1FC77B; }
        .alerta-badge-ponto { width:7px; height:7px; border-radius:50%; background-color: var(--botoes-emergencia); animation: alerta-piscar 1s infinite; }
        .alerta-badge.alerta-resolvido .alerta-badge-ponto { background-color:#1FC77B; animation:none; }
        @keyframes alerta-piscar { 0%,100%{opacity:1;} 50%{opacity:.25;} }
        .alerta-vital { border:none; border-radius:12px; background-color: var(--fundo-principal); box-shadow:0 2px 10px rgba(0,0,0,.05); text-align:center; padding:1rem .5rem; }
        .alerta-vital-valor { font-family:'Poppins',sans-serif; font-weight:700; font-size:1.25rem; color: var(--cor-navbar); }
        .alerta-vital-rotulo { font-family:'Inter',sans-serif; font-size:.78rem; color: var(--textos-menores); margin-top:2px; }
        .alerta-countdown { border:1px dashed var(--botoes-emergencia); border-radius:14px; background-color:#FFF4F3; }
        .alerta-countdown.alerta-escondido { display:none; }
        .btn-emergencia { background-color: var(--botoes-emergencia); border-color: var(--botoes-emergencia); color:white; font-family:'Poppins',sans-serif; font-weight:500; }
        .btn-emergencia:hover { background-color:#a02626; border-color:#a02626; color:white; }
        .bg-custom-nav { background-color: var(--cor-navbar); }
        .btn-custom { background-color: var(--botoes-secundarios); border-color: var(--botoes-secundarios); color:white; font-family:'Poppins',sans-serif; font-weight:500; }
        .btn-custom:hover { background-color: var(--botoes-secundarios-hover); border-color: var(--botoes-secundarios-hover); color:white; }
        .txt-main { color: var(--textos-principais); font-family:'Inter',sans-serif; font-weight:400; }
        .txt-small { color: var(--textos-menores); font-family:'Inter',sans-serif; font-weight:300; }
        body { background-color: var(--card-formularios); font-family:'Inter',sans-serif; }
    </style>
</head>
<body>

    <!-- NAVBAR — mesmo padrão do restante do projeto -->
    <nav class="navbar navbar-expand-lg bg-custom-nav py-3">
        <div class="container">
            <a class="navbar-brand text-white fw-semibold" style="font-family:'Poppins',sans-serif;" href="#">SafeGuard</a>
        </div>
    </nav>

    <div class="container py-4" style="max-width:960px;">

        <!-- BANNER PRINCIPAL DO ALERTA -->
        <div class="card alerta-card mb-4" id="card-alerta">
            <div class="card-body d-flex align-items-center gap-3 flex-wrap p-4">

                <div class="alerta-icone" id="alerta-icone">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                        <path d="M12 3.5 L22 20.5 H2 Z" stroke="#fff" stroke-width="2" stroke-linejoin="round" fill="none"/>
                        <path d="M12 9.5V14" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="12" cy="17" r="1.1" fill="#fff"/>
                    </svg>
                </div>

                <div>
                    <h2 class="mb-1 txt-main fw-semibold" style="font-family:'Poppins',sans-serif;" id="titulo-alerta">Queda detectada!</h2>
                    <p class="mb-0 txt-small" id="subtitulo-alerta">
                        Sem resposta da pulseira há <strong id="tempo-decorrido">00:47</strong>
                    </p>
                </div>

                <div class="ms-auto">
                    <span class="alerta-badge" id="alerta-badge">
                        <span class="alerta-badge-ponto"></span>SEM RESPOSTA
                    </span>
                </div>

            </div>
        </div>

        <div class="row g-4">

            <!-- COLUNA ESQUERDA -->
            <div class="col-lg-8">

                <!-- Paciente -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-semibold"
                             style="width:50px;height:50px;background-color:var(--botoes-secundarios);font-family:'Poppins',sans-serif;">MS</div>
                        <div>
                            <div class="txt-main fw-semibold">Maria Silva</div>
                            <div class="txt-small">82 anos · Quarto 1</div>
                        </div>
                    </div>
                </div>

                <!-- Sinais vitais -->
                <div class="row g-3 mb-4">
                    <div class="col-4">
                        <div class="alerta-vital">
                            <div class="alerta-vital-valor">112</div>
                            <div class="alerta-vital-rotulo">BPM</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="alerta-vital">
                            <div class="alerta-vital-valor">78%</div>
                            <div class="alerta-vital-rotulo">Bateria</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="alerta-vital">
                            <div class="alerta-vital-valor">Forte</div>
                            <div class="alerta-vital-rotulo">Sinal LoRa</div>
                        </div>
                    </div>
                </div>

                <!-- Localização -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center gap-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s7-7.2 7-12a7 7 0 1 0-14 0c0 4.8 7 12 7 12Z" stroke="var(--detalhes)" stroke-width="2"/>
                            <circle cx="12" cy="9" r="2.4" stroke="var(--detalhes)" stroke-width="2"/>
                        </svg>
                        <div>
                            <div class="txt-small">Última localização</div>
                            <div class="txt-main fw-semibold">Rua das Acácias, 123 — Bairro Centro</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- COLUNA DIREITA -->
            <div class="col-lg-4">

                <!-- Contagem regressiva -->
                <div class="alerta-countdown p-3 mb-3" id="alerta-countdown">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="txt-small">Ligando para emergência em</span>
                        <span class="fw-semibold" style="color:var(--botoes-emergencia);font-family:'Poppins',sans-serif;" id="num-segundos">15s</span>
                    </div>
                    <div class="progress mb-3" style="height:6px;">
                        <div class="progress-bar" id="barra-progresso" role="progressbar"
                             style="width:100%; background-color:var(--botoes-emergencia);"></div>
                    </div>
                    <button class="btn btn-outline-secondary btn-sm w-100" id="btn-cancelar-countdown">Cancelar</button>
                </div>

                <!-- Ações -->
                <button class="btn btn-emergencia w-100 mb-2 py-2">Ligar para emergência agora</button>
                <button class="btn btn-custom w-100 mb-2">Notificar família</button>
                <button class="btn btn-outline-secondary w-100" id="btn-falso-alarme">Marcar falso alarme</button>

            </div>
        </div>
    </div>

    <script>
        // Tempo decorrido desde a queda — no Laravel, parta do timestamp real da quedas_detectadas
        let segundos = 47;
        setInterval(() => {
            segundos++;
            const m = String(Math.floor(segundos / 60)).padStart(2, '0');
            const s = String(segundos % 60).padStart(2, '0');
            document.getElementById('tempo-decorrido').textContent = `${m}:${s}`;
        }, 1000);

        // Contagem regressiva para ligação automática
        const TOTAL = 15;
        let restante = TOTAL;
        const numSegundos  = document.getElementById('num-segundos');
        const barra        = document.getElementById('barra-progresso');

        let intervalo = setInterval(() => {
            restante--;
            numSegundos.textContent = restante + 's';
            barra.style.width = (restante / TOTAL * 100) + '%';
            if (restante <= 0) {
                clearInterval(intervalo);
                document.getElementById('subtitulo-alerta').innerHTML =
                    'Ligando para o <strong>serviço de emergência</strong>…';
            }
        }, 1000);

        // Cancelar alerta — no Laravel, chame a rota que atualiza quedas_detectadas
        function cancelarAlerta() {
            clearInterval(intervalo);

            document.getElementById('card-alerta').classList.add('alerta-resolvido');
            document.getElementById('alerta-icone').classList.add('alerta-resolvido');
            document.getElementById('alerta-countdown').classList.add('alerta-escondido');
            document.getElementById('titulo-alerta').textContent = 'Alerta cancelado';

            const agora = new Date();
            const hh = String(agora.getHours()).padStart(2, '0');
            const mm = String(agora.getMinutes()).padStart(2, '0');
            document.getElementById('subtitulo-alerta').innerHTML =
                `Marcado como seguro às <strong>${hh}:${mm}</strong>`;

            const badge = document.getElementById('alerta-badge');
            badge.classList.add('alerta-resolvido');
            badge.innerHTML = '<span class="alerta-badge-ponto"></span>TUDO BEM';
        }

        document.getElementById('btn-cancelar-countdown').addEventListener('click', cancelarAlerta);
        document.getElementById('btn-falso-alarme').addEventListener('click', cancelarAlerta);
    </script>

</body>
</html>