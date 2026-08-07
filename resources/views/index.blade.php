<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Watch</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css"/>
	
	<script src="https://kit.fontawesome.com/5e6e4af9c8.js" crossorigin="anonymous"></script>
	
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
<script src="/assets/js/ajuda.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-custom-nav" style="min-height: 68px;">
  <div class="container-fluid">
  
	<!--MENU-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa-solid fa-bars fa-xl" style="color: rgb(255, 255, 255);"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn text-light bg-custom-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa-solid fa-bars fa-xl" style="color: rgb(255, 255, 255);"></i>
          </button>
          <ul class="dropdown-menu bg-custom-nav">
            <li><a class="dropdown-item txt-small-nav" href="home">Home</a></li>
            <li><a class="dropdown-item txt-small-nav" href="idoso">Idoso</a></li>
            <li><a class="dropdown-item txt-small-nav" href="cuidador">Cuidador</a></li>
            <li><a class="dropdown-item txt-small-nav" href="pulseiras">Pulseira</a></li>
            <li><a class="dropdown-item txt-small-nav" href="relatorios">Relatórios</a></li>
            <li><a class="dropdown-item txt-small-nav" href="configuracoes">Configurações</a></li>
          </ul>
        </li>
      </ul>
    </div>
	
	<!--LOGO-->
	<div class="position-absolute top-50 start-50 translate-middle p-3 d-flex">
		<img src="assets/img/logo-nova.png" alt="Logo" width="180" height="70">
	</div>
	
	<!--CONTA-->
	<div>
    <a href="notificacoesLista"><i class="fa-solid fa-bell fa-2x icon icon:hover" style="color: rgb(255, 255, 255);"></i></a>
		<a href="perfil"><i class="fa-regular fa-circle-user fa-2x icon icon:hover" style="color: rgb(255, 255, 255);"></i></a>
	</div>
</nav>

<!-- Container dos Pop-ups -->
    <div id="popupContainer" class="popup-container"></div>

    <!-- Indicador de Status -->
    <div class="monitor-status" id="monitorStatus">
        <span class="dot" id="statusDot"></span>
        <span id="statusTexto">Monitorando quedas...</span>
    </div>

    <script>
        class MonitorQuedas {
            constructor() {
                this.ultimoId = 0;
                this.popupContainer = document.getElementById('popupContainer');
                this.isPolling = false;
                
                // Elementos de status
                this.statusDot = document.getElementById('statusDot');
                this.statusTexto = document.getElementById('statusTexto');
                
                // Data atual
                this.hoje = new Date().toDateString();
                this.totalQuedasHoje = 0;
            }

            // 🚀 Inicializa o monitor
            async iniciar() {
                await this.obterUltimoId();
                this.verificarNovidades();
                this.verificarVisibilidade();
                
                // Atualiza status a cada 30s
                setInterval(() => this.atualizarStatus(true), 30000);
            }

            // 📌 Busca o último ID
            async obterUltimoId() {
                try {
                    const resposta = await fetch('/api/quedas/ultimo-id');
                    const dados = await resposta.json();
                    
                    if (dados.ultimo_id !== undefined) {
                        this.ultimoId = dados.ultimo_id;
                        console.log('✅ Monitor iniciado - Último ID:', this.ultimoId);
                    }
                } catch (erro) {
                    console.error('❌ Erro ao buscar ID:', erro);
                    this.atualizarStatus(false);
                }
            }

            // 🔍 Loop de verificação (Long Polling)
            async verificarNovidades() {
                if (this.isPolling) return;
                this.isPolling = true;

                try {
                    const controller = new AbortController();
                    const timeoutId = setTimeout(() => controller.abort(), 35000);

                    const resposta = await fetch(
                        `/api/quedas/verificar?ultimo_id=${this.ultimoId}`,
                        { signal: controller.signal }
                    );
                    clearTimeout(timeoutId);

                    const dados = await resposta.json();
                    this.atualizarStatus(true);

                    if (dados.novas && dados.novas.length > 0) {
                        // Processa cada nova queda
                        dados.novas.forEach(queda => {
                            this.exibirPopup(queda);
                        });

                        // Atualiza o último ID
                        this.ultimoId = dados.ultimo_id || this.ultimoId;
                        console.log(`📨 ${dados.novas.length} nova(s) queda(s) detectada(s)!`);
                    }

                } catch (erro) {
                    if (erro.name === 'AbortError') {
                        console.log('⏱️ Timeout - continuando...');
                    } else {
                        console.error('❌ Erro no monitor:', erro);
                        this.atualizarStatus(false);
                    }
                } finally {
                    this.isPolling = false;
                    // Continua o loop após 1 segundo
                    setTimeout(() => this.verificarNovidades(), 1000);
                }
            }

            // 🎯 Exibe o pop-up (SIMPLIFICADO)
            exibirPopup(queda) {
                const popup = document.createElement('div');
                popup.className = 'popup-notificacao';
                
                // Formata a data
                const dataHora = queda.detectadoEm || new Date().toLocaleString();
                
                popup.innerHTML = `
                    <div class="titulo">
                        <span class="icone">🚨</span>
                        NOVA QUEDA DETECTADA!
                    </div>
                    <span class="tempo">⏰ ${dataHora}</span>
                    <span class="tempo">Clique aqui para saber mais</span>
                `;

                // Adiciona ao container
                this.popupContainer.appendChild(popup);

                // Remove após 10 segundos com animação
                const timeout = setTimeout(() => {
                    this.removerPopup(popup);
                }, 10000);

                // Limita a 5 pop-ups na tela
                while (this.popupContainer.children.length > 5) {
                    this.removerPopup(this.popupContainer.firstChild);
                }

                // 🔔 Toca um som de alerta (opcional)
                this.tocarAlerta();

                // 🔔 Notificação do navegador
                this.enviarNotificacaoNavegador(queda);

                // Quando clicar na notificação
                popup.onclick = function() {
                    window.focus(); // Traz a janela para frente
                    window.open("/notificacoes/alerta"); // Redireciona
                };
            }

            // 🗑️ Remove pop-up com animação
            removerPopup(popup) {
                if (!popup || !popup.parentNode) return;
                popup.classList.add('saindo');
                setTimeout(() => {
                    if (popup.parentNode) popup.remove();
                }, 300);
            }

            // 🔔 Som de alerta
            tocarAlerta() {
                try {
                    const ctx = new (window.AudioContext || window.webkitAudioContext)();
                    const oscillator = ctx.createOscillator();
                    const gainNode = ctx.createGain();
                    
                    oscillator.connect(gainNode);
                    gainNode.connect(ctx.destination);
                    
                    oscillator.frequency.value = 800;
                    oscillator.type = 'square';
                    
                    gainNode.gain.setValueAtTime(0.3, ctx.currentTime);
                    gainNode.gain.exponentialRampToValueAtTime(0.01, ctx.currentTime + 0.3);
                    
                    oscillator.start(ctx.currentTime);
                    oscillator.stop(ctx.currentTime + 0.3);
                } catch (e) {
                    console.log('🔔 Alerta sonoro (fallback)');
                }
            }

            // 🔔 Notificação do navegador (fora da página)
            enviarNotificacaoNavegador(queda) {
                // Verifica se o navegador suporta notificações
                if (!("Notification" in window)) return;

                // Pede permissão se ainda não tiver
                if (Notification.permission === "default") {
                    Notification.requestPermission();
                }

                // Envia a notificação
                if (Notification.permission === "granted") {
                    new Notification("🚨 Nova Queda Detectada!", {
                        body: `Queda #${queda.idQueda} registrada em ${queda.detectadoEm || 'agora'}`
                    });
                }
            }

            // 📡 Atualiza o status visual
            atualizarStatus(conectado) {
                if (conectado) {
                    this.statusDot.className = 'dot';
                    this.statusDot.style.background = '#2ecc71';
                    this.statusTexto.textContent = 'Monitorando quedas...';
                } else {
                    this.statusDot.className = 'dot offline';
                    this.statusDot.style.background = '#e74c3c';
                    this.statusTexto.textContent = '⚠️ Falha na conexão';
                }
            }

            // 👀 Verifica visibilidade da página
            verificarVisibilidade() {
                document.addEventListener('visibilitychange', () => {
                    if (!document.hidden) {
                        console.log('👀 Página visível - verificando novidades...');
                        this.verificarNovidades();
                    }
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const monitor = new MonitorQuedas();
            monitor.iniciar();

            // Expõe para debug no console
            window.monitorQuedas = monitor;
        });

</script>

    @yield("conteudo")

</body>
</html>