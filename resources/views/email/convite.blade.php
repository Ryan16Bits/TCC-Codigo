@extends("login/index")
@section("conteudo")
<main>
    <div class="container">
        <div class="header">
            <h1>🎉 Você foi convidado!</h1>
        </div>
        
        <div class="content">
            <h2>Olá!</h2>
            
            <p>Você recebeu um convite para criar uma conta em <strong>Safe Watch</strong>.</p>
            
            <div class="invite-info">
                <p><strong>📧 Email:</strong> {{ $convite->email }}</p>
                @if($convite->expiraEm)
                    <p><strong>⏰ Expira em:</strong> {{ $convite->expiraEm->format('d/m/Y H:i') }}</p>
                @endif
            </div>
            
            <div class="btn-container">
                <a href="{{ route('registrarConvite', $convite->token) }}" class="btn">
                    Criar minha conta
                </a>
            </div>
            
            <div class="details">
                <div class="details-item">
                    <div class="number">✓</div>
                    <div>Gratuito</div>
                </div>
                <div class="details-item">
                    <div class="number">⚡</div>
                    <div>Rápido</div>
                </div>
                <div class="details-item">
                    <div class="number">🔒</div>
                    <div>Seguro</div>
                </div>
            </div>
            
            <div class="warning">
                ⚠️ Este link de convite é pessoal e intransferível. 
                Não compartilhe este email com outras pessoas.
            </div>
            
            <p style="text-align: center; margin-top: 20px;">
                <a href="{{ route('home') }}" class="btn-secondary">
                    Conhecer a plataforma
                </a>
            </p>
        </div>
        
        <div class="footer">
            <p>
                Se você não esperava por este convite, pode ignorar este email.<br>
                Este convite expirará em {{ $convite->expiraEm ? $convite->expiraEm->diffForHumans() : '7 dias' }}.
            </p>
            <p>
                <small>
                    Safe Watch - 
                    <a href="{{ route('home') }}"></a>
                </small>
            </p>
        </div>
    </div>
</main>
@endsection
