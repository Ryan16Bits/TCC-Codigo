@extends("login/index")
@section("conteudo")
<main style="text-align: center";>
    <div class="container">
        <div class="header">
            <h1>🎉 Você foi convidado!</h1>
        </div>
        
        <br>

        <div class="content">
            <h2>Olá!</h2>
            
            <br>

            <p>Você recebeu um convite para criar uma conta em <strong>Safe Watch</strong>.</p>
            
            <div class="invite-info">
                <p><strong>📧 Email:</strong> {{ $convite->email }}</p>
                @if($convite->expiraEm)
                    <p><strong>⏰ Expira em:</strong> {{ $convite->expiraEm->format('d/m/Y H:i') }}</p>
                @endif
            </div>

            <div class="btn-container">
                <a href="{{ route('cadastroCuidador', $convite->token) }}" class="btn">
                    Criar minha conta
                </a>
            </div>
            
            <br>

            <div class="details">
                <div class="details-item">
                    <div class="number">✓ Gratuito</div>
                </div>
                <br>
                <div class="details-item">
                    <div class="number">⚡ Rápido</div>
                </div>
                <br>
                <div class="details-item">
                    <div class="number">🔒 Seguro</div>
                </div>
            </div>
            
            <br>

            <div class="warning">
                ⚠️ Este link de convite é pessoal e intransferível. 
                Não compartilhe este email com outras pessoas.
            </div>
            
        </div>

        <br>
        
        <div class="footer">
            <p>
                Se você não esperava por este convite, pode ignorar este email.<br>
                Este convite expirará em {{ $convite->expiraEm ? $convite->expiraEm->diffForHumans() : '7 dias' }}.
            </p>
            <p>
                <small>
                    Safe Watch
                </small>
            </p>
        </div>
    </div>
</main>
@endsection
