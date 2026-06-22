@extends("login/index")
@section("conteudo")
<main>
    <div class="container">
        <div class="header">
            <h1>🎉 Você foi convidado!</h1>
        </div>
        
        <div class="content">
            <h2>Olá!</h2>
            
            <p>Você recebeu um convite para criar uma conta em <strong>{{ config('app.name') }}</strong>.</p>
            
            <div class="invite-info">
                <p><strong>📧 Email:</strong> {{ $invite->email }}</p>
                <p><strong>👤 Papel:</strong> {{ ucfirst($invite->role) }}</p>
                @if($invite->expires_at)
                    <p><strong>⏰ Expira em:</strong> {{ $invite->expires_at->format('d/m/Y H:i') }}</p>
                @endif
            </div>
            
            <div class="btn-container">
                <a href="{{ route('invite.accept', $invite->token) }}" class="btn">
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
                Este convite expirará em {{ $invite->expires_at ? $invite->expires_at->diffForHumans() : '7 dias' }}.
            </p>
            <p>
                <small>
                    {{ config('app.name') }} - 
                    <a href="{{ route('home') }}">{{ config('app.url') }}</a>
                </small>
            </p>
        </div>
    </div>
</main>
@endsection
